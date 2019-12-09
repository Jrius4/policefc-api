import React from 'react'
import Moment from 'react-moment'

const ComingMatch = (props) => {
    const {matches} = props;
    const matchArray = matches;
    let unPlayedMatches,newUnplayedMatches,playedMatches,newPlayedMatches;
    function arrayRemove(arr, value) {

      return arr.filter(function(ele){
          return ele != value;
      });
   
   }
    if(matchArray.length>0)
    {
      unPlayedMatches= matchArray.map((data)=>data.away_team_score===null&&data.away_team_score===null?data:'')
      newUnplayedMatches=arrayRemove(unPlayedMatches,"")
      playedMatches= matchArray.map((data)=>data.away_team_score!==null&&data.away_team_score!==null?data:'')
      newPlayedMatches=arrayRemove(playedMatches,"")
      
    }

    
      
  return (
    <div style={{paddingTop:'150px'}}>
        <div>
        {matchArray.length>0?newUnplayedMatches.length>0?(
            <div>
                              
        <div className="tm-top-b-box tm-full-width  ">
            <div className="uk-container uk-container-center">
                <section id="tm-top-b" className="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div className="uk-width-1-1">
                        <div className="uk-panel">

                            <div className="va-latest-wrap">
                                <div className="uk-container uk-container-center">
                                    <div className="va-latest-top">
                                        <h3>Coming <span>Up Match</span></h3>
                                        <div className="tournament">
                                            <address>{newUnplayedMatches[0].venue}<br/><br/></address> </div>
                                        <div className="date">
                                        <Moment format="llll" date={newUnplayedMatches[0].date}></Moment></div>
                                    </div>
                                </div>
                                <div className="va-latest-middle uk-flex uk-flex-middle">
                                    <div className="uk-container uk-container-center">
                                        <div className="uk-grid uk-flex uk-flex-middle">
                                            <div className="uk-width-2-12 center">
                                                <a>
                                                {' '}<img  className="img-polaroid"  src={`/img/teams/${newUnplayedMatches[0].teams.map((team,index)=>{
                                                    if(team.id === newUnplayedMatches[0].home_team_id){
                                                        return team.logo;
                                                    }
                                                    })}`.replace(',','')} alt={`${newUnplayedMatches[0].teams.map((team)=>{
                                                    if(team.id === newUnplayedMatches[0].home_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} title=""/>
                                                </a>
                                            </div>
                                            <div className="uk-width-3-12 name uk-vertical-align">
                                                <div className="wrap uk-vertical-align-middle">
                                                {`${newUnplayedMatches[0].teams.map((team)=>{
                                                    if(team.id === newUnplayedMatches[0].home_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} </div>
                                            </div>
                                            <div className="uk-width-2-12 score">
                                                <div className="table">
                                                    <div className="left"></div>
                                                    <div className="right"></div>
                                                    <div className="uk-clearfix"></div>
                                                </div>
                                            </div>
                                            <div className="uk-width-3-12 name alt uk-vertical-align">
                                                <div className="wrap uk-vertical-align-middle">
                                                {`${newUnplayedMatches[0].teams.map((team)=>{
                                                    if(team.id === newUnplayedMatches[0].away_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')}</div>
                                            </div>
                                            <div className="uk-width-2-12 center">
                                                <a href="results.html">
                                                {' '}<img  className="img-polaroid"  src={`/img/teams/${newUnplayedMatches[0].teams.map((team,index)=>{
                                                    if(team.id === newUnplayedMatches[0].away_team_id){
                                                        return team.logo;
                                                    }
                                                    })}`.replace(',','')} alt={`${newUnplayedMatches[0].teams.map((team)=>{
                                                    if(team.id === newUnplayedMatches[0].away_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} title=""/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="uk-container uk-container-center">
                                    <div className="va-latest-bottom">
                                        <div className="uk-grid">
                                            <div className="uk-width-8-12 uk-container-center text">
                                                <p>{newUnplayedMatches[0].short_description}</p>
                                            </div>
                                        </div>

                                        <div className="uk-grid">
                                            <div className="uk-width-1-1">
                                                <div className="btn-wrap uk-container-center">
                                                    <a className="read-more" href="results.html">More Info</a>
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
            </div>
        ):(
            <div>
                 <div>
                    {matchArray.length>0?newPlayedMatches.length>0?(
                        <div>
                            <div className="tm-top-b-box tm-full-width  ">
            <div className="uk-container uk-container-center">
                <section id="tm-top-b" className="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div className="uk-width-1-1">
                        <div className="uk-panel">

                            <div className="va-latest-wrap">
                                <div className="uk-container uk-container-center">
                                    <div className="va-latest-top">
                                        <h3>Last <span>Game Played</span></h3>
                                        <div className="tournament">
                                            <address>{newPlayedMatches[newPlayedMatches.length-1].venue}<br/><br/></address> </div>
                                        <div className="date">
                                        <Moment format="llll" date={newPlayedMatches[newPlayedMatches.length-1].date}></Moment></div>
                                    </div>
                                </div>
                                <div className="va-latest-middle uk-flex uk-flex-middle">
                                    <div className="uk-container uk-container-center">
                                        <div className="uk-grid uk-flex uk-flex-middle">
                                            <div className="uk-width-2-12 center">
                                                <a>
                                                {' '}<img  className="img-polaroid"  src={`/img/teams/${newPlayedMatches[newPlayedMatches.length-1].teams.map((team,index)=>{
                                                    if(team.id === newPlayedMatches[newPlayedMatches.length-1].home_team_id){
                                                        return team.logo;
                                                    }
                                                    })}`.replace(',','')} alt={`${newPlayedMatches[newPlayedMatches.length-1].teams.map((team)=>{
                                                    if(team.id === newPlayedMatches[newPlayedMatches.length-1].home_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} title=""/>
                                                </a>
                                            </div>
                                            <div className="uk-width-3-12 name uk-vertical-align">
                                                <div className="wrap uk-vertical-align-middle">
                                                {`${newPlayedMatches[newPlayedMatches.length-1].teams.map((team)=>{
                                                    if(team.id === newPlayedMatches[newPlayedMatches.length-1].home_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} </div>
                                            </div>
                                            <div className="uk-width-2-12 score">
                                            <div className="title">score</div>
                                                <div className="table">
                                                    <div className="left">{newPlayedMatches[newPlayedMatches.length-1].home_team_score}</div>
                                                    <div className="right">{newPlayedMatches[newPlayedMatches.length-1].away_team_score}</div>
                                                    <div className="uk-clearfix"></div>
                                                </div>
                                            </div>
                                            <div className="uk-width-3-12 name alt uk-vertical-align">
                                                <div className="wrap uk-vertical-align-middle">
                                                {`${newPlayedMatches[newPlayedMatches.length-1].teams.map((team)=>{
                                                    if(team.id === newPlayedMatches[newPlayedMatches.length-1].away_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')}</div>
                                            </div>
                                            <div className="uk-width-2-12 center">
                                                <a href="results.html">
                                                {' '}<img  className="img-polaroid"  src={`/img/teams/${newPlayedMatches[newPlayedMatches.length-1].teams.map((team,index)=>{
                                                    if(team.id === newPlayedMatches[newPlayedMatches.length-1].away_team_id){
                                                        return team.logo;
                                                    }
                                                    })}`.replace(',','')} alt={`${newPlayedMatches[newPlayedMatches.length-1].teams.map((team)=>{
                                                    if(team.id === newPlayedMatches[newPlayedMatches.length-1].away_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} title=""/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="uk-container uk-container-center">
                                    <div className="va-latest-bottom">
                                        <div className="uk-grid">
                                            <div className="uk-width-8-12 uk-container-center text">
                                                <p>{newPlayedMatches[newPlayedMatches.length-1].short_description}</p>
                                            </div>
                                        </div>

                                        <div className="uk-grid">
                                            <div className="uk-width-1-1">
                                                <div className="btn-wrap uk-container-center">
                                                    <a className="read-more" href="results.html">More Info</a>
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
                        </div>
                    ):null:null} 
                 </div>
            </div>
         ):null}
            
        </div> 
    </div>
  )
}

export default ComingMatch
