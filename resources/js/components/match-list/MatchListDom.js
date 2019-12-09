import React, { Component } from 'react'
import PropTypes from 'prop-types'
import {getMatches} from '../../actions/matchActions'
import {getPosts,getCategories} from '../../actions/postActions'
import {connect} from 'react-redux';
import Spinner from '../policefc/common/Spinner';
import Moment from 'react-moment'
import ArticlesAside from '../asides/ArticlesAside';


class MatchListDom extends Component {
  constructor(props){
      super(props);
      this.set ={
        matches:[],
        posts:[],
        match:[],
        post:[],
        categories:[],
        loading:false
    };
  }

  componentDidMount(){
    this.props.getMatches();
    this.props.getPosts();
    this.props.getCategories();
  }

  render() {

    const {matches,loading} = this.props.match;
      let matchContent;
      if(this.props.match.matches === null || this.props.match.loading||this.props.post.posts===null||this.props.post.loading===null)
      {
        matchContent =<Spinner/>;
      }
      else{
        matchContent = (
        <div>
           
                
        {  matches.map((match,index)=>(
            <div key={index} className="match-list-item">
            <div className="date">
                <span><Moment format="DD" date={match.date}></Moment></span>
                <Moment format="MMM" date={match.date}></Moment>               
            </div>
            <div className="logo">
                <a href="match-single.html">
                {/* {   
                    console.log((match.teams.map((team,index)=>{
                    if(team.id===match.home_team_id){
                        return team.logo;
                    }
                })).filter(ele=>{
                    return ele!=null
                })[0]!==undefined?`${(match.teams.map((team,index)=>{
                    if(team.id===match.home_team_id){
                        return team.logo;
                    }
                })).filter(ele=>{
                    return ele!=null
                })[0]}`:null)} */}

                {   
                    (match.teams.map((team,index)=>{
                    if(team.id===match.home_team_id){
                        return team.logo;
                    }
                })).filter(ele=>{
                    return ele!=null
                })[0]!==undefined?(
                    <img src={`/img/teams/${(match.teams.map((team,index)=>{
                    if(team.id===match.home_team_id){
                        return team.logo;
                    }
                })).filter(ele=>{
                    return ele!=null
                })[0]}`} alt={`${(match.teams.map((team,index)=>{
                    if(team.id===match.home_team_id){
                        return team.name;
                    }
                })).filter(ele=>{
                    return ele!=null
                })[0]}`}
                />):null}
                {/* 
                <img className="img-polaroid" src={`/img/teams/${match.teams.map((team,index)=>{
                  if(team.id === match.home_team_id){
                    console.log(team)
                    return team.logo;
                  }
                })}`.replace(',','')} alt={`${match.teams.map((team)=>{
                  if(team.id === match.home_team_id){
                    return team.name
                  }
                })}`.replace(',','')}
                title={`${match.teams.map((team,index)=>{
                    if(team.id===match.home_team_id){
                        return team.name
                    }
                })}`}/> 
                */}
                
                </a>                                     
            </div>
            <div className="team-name">
                {match.teams.map((team,index)=>{
                    if(team.id===match.home_team_id){
                        return team.name
                    }
                })}                
            </div>
            {match.away_team_score===null && match.home_team_score===null?(
                <div className="versus">VS</div>
            ):(<>
                <div className="team-score">
                {match.home_team_score}                    
            </div>
            <div className="score-separator">:</div>
            <div className="team-score">
            {match.away_team_score}                   
            </div>
            </> 
            )}
            
            <div className="team-name">
            {match.teams.map((team,index)=>{
                    if(team.id===match.away_team_id){
                        return team.name
                    }
                })}               
            </div>
            <div className="logo">
                <a href="match-single.html">
                {/* <img className="img-polaroid"  src={`/img/teams/${match.teams.map((team,index)=>{
                  if(team.id === match.away_team_id){
                    return team.logo;
                  }
                })}`.replace(',','')} alt={`${match.teams.map((team)=>{
                  if(team.id === match.away_team_id){
                    return team.name
                  }
                })}`.replace(',','')} title={`${match.teams.map((team,index)=>{
                    if(team.id===match.away_team_id){
                        return team.name
                    }
                })}`}/> */}
                {   
                    (match.teams.map((team,index)=>{
                    if(team.id===match.away_team_id){
                        return team.logo;
                    }
                })).filter(ele=>{
                    return ele!=null
                })[0]!==undefined?(
                    <img src={`/img/teams/${(match.teams.map((team,index)=>{
                    if(team.id===match.away_team_id){
                        return team.logo;
                    }
                })).filter(ele=>{
                    return ele!=null
                })[0]}`} alt={`${(match.teams.map((team,index)=>{
                    if(team.id===match.away_team_id){
                        return team.name;
                    }
                })).filter(ele=>{
                    return ele!=null
                })[0]}`}
                />):null}
                </a>                                    
            </div>
            <div className="location">
                <address>
                    {match.venue}              <br/><br/>
                </address>
            </div>
            <div className="va-view-wrap">
                <a className="view-article" href="match-single.html">view</a>
            </div>
        </div>
        ))}
              
        </div>
        )
        
      }

    return (
      <div>
        
        

        <div className="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div className="uk-container uk-container-center">
                <section id="tm-top-a" className="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div className="uk-width-1-1 uk-row-first">
                        <div className="uk-panel">
                            <div className="uk-cover-background uk-position-relative head-match-wrap" style={{height:'590px',backgroundImage: `url(${`assets/images/head-bg-match.jpg`})`}}>
                                <img className="uk-invisible" src="assets/images/head-bg-match.jpg" alt=""/>
                                <div className="uk-position-cover uk-flex-center head-news-title">
                                    <h1>
                                        Match List
                                    </h1>
                                    <div className="clear"></div>
                                    <div className="uk-container uk-container-center">
                                        <div className="uk-grid no-marg">
                                            <div className="uk-width-6-10 va-single-next-match match-view-wrap">
                                                <div className="va-main-next-wrap">
                                                    <div className="match-list-single">
                                                        <div className="match-list-item">
                                                            <div className="count">
                                                                <div id="countdown4">
                                                                    <div className="counter_container"></div>
                                                                </div>
                                                                <div className="clearfix"></div>
                                                                
                                                            </div>
                                                            <div className="clear"></div>
                                                            <div className="half right">
                                                                <div className="va-wrap">
                                                                    <div className="logo">
                                                                        <a href="match-single.html">
                                                                        <img src="assets/images/team-ava.png" className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></a>                                             
                                                                    </div>
                                                                    <div className="team-name">
                                                                        England                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div className="versus">VS</div>
                                                            <div className="half left">
                                                                <div className="va-wrap">
                                                                    <div className="team-name">
                                                                        Amsterdam                    
                                                                    </div>
                                                                    <div className="logo">
                                                                        <a href="match-single.html">
                                                                        <img src="assets/images/team-ava1.png" className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></a>                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div className="clear"></div>
                                                            <div className="date">
                                                                <i className="uk-icon-calendar"></i>
                                                                November 14, 2015 | 12:00 am            
                                                            </div>
                                                            <div className="clear"></div>
                                                            <div className="location">
                                                                <i className="uk-icon-map-marker"></i>
                                                                <address>
                                                                    Cambridgeshire UK               <br/><br/>
                                                                </address>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div className="uk-container uk-container-center alt">
            <ul className="breadcrumb text-light bg-dark">
                <li className="mr-1"><a style={{textDecoration:'none'}} href="/">Home</a></li>/
                <li className="ml-1 uk-active"><span>Match list</span></li>
            </ul>
        </div>

        {/* match-listing starting */}


        <div className="uk-container uk-container-center">
            <div id="tm-middle" className="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div className="tm-main uk-width-medium-3-4 uk-push-1-4">
                    <main id="tm-content" className="tm-content">
                        <div className="match-list-wrap">
                            {matchContent}
                        </div>
                    </main>
                </div>
            {/* match-listing end */}

            {/* side-staffs start */}

           <ArticlesAside posts={this.props.post.posts} categories={this.props.post.categories}/>
            {/* side-staffs end */}

            </div>
        </div>

        {/* bottom pic start */}
        <div className="tm-bottom-e-box tm-full-width  ">
            <div className="uk-container uk-container-center">
                <section id="tm-bottom-e" className="tm-bottom-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div className="uk-width-1-1 uk-row-first">
                        <div className="uk-panel">
                            <img src="assets/images/match-list-img-bottom.jpg" alt=""/>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        {/* bottom pic end */}

     

        


      </div>
    )
  }
}
MatchListDom.propTypes= {
    getMatches:PropTypes.func.isRequired,
    getPosts:PropTypes.func.isRequired,
    getCategories:PropTypes.func.isRequired,
    match:PropTypes.object.isRequired,  
    post:PropTypes.object.isRequired,  
}

const mapStateToProps = state =>({
    match:state.match,
    post:state.post,
});
export default connect(mapStateToProps,{getMatches,getPosts,getCategories})(MatchListDom)