import React from 'react'
import Moment from 'react-moment'


const MatchOutline = (props) => {

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
     
    <div>
      

      <div className="tm-top-e-box tm-full-width  va-main-next-match">
            <div className="uk-container uk-container-center">
                <section id="tm-top-e" className="tm-top-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div className="uk-width-1-1">
                        <div className="uk-panel">
                            <div className="uk-container uk-container-center">
                                <div className="uk-grid uk-grid-collapse">
                                    <div className="uk-width-medium-1-2 uk-width-small-1-1 va-single-next-match">
                                        <div className="va-main-next-wrap">
                                            
                                            {matchArray.length>0?newUnplayedMatches.length>0?(
                                                
                                                <div>
                                                    <div className="main-next-match-title"><em>Next <span>Match</span></em></div>
                                                   <div className="match-list-single">
                                                <div className="match-list-item">
                                                    <div className="count">
                                
                                                        <div id="countdown4">
                                                            <div className="counter_container" style={{fontSize:"1.3em"}}>
                                                            <Moment format="llll" date={newUnplayedMatches[0].date}></Moment>
                                                            </div>
                                                        </div>

                                                        <div className="clearfix"></div>

                                                    </div>
                                                    <div className="clear"></div>
                                                    <div className="logo">
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
                                                    <div className="team-name">{`${newUnplayedMatches[0].teams.map((team)=>{
                                                    if(team.id === newUnplayedMatches[0].home_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} </div>
                                                    <div className="versus">VS</div>

                                                    <div className="team-name">{`${newUnplayedMatches[0].teams.map((team)=>{
                                                    if(team.id === newUnplayedMatches[0].away_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} </div>
                                                    <div className="logo">
                                                    <a>
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
                                                    <div className="clear"></div>
                                                    <div className="date"><Moment format="llll" date={newUnplayedMatches[0].date}></Moment></div>
                                                    <div className="clear"></div>
                                                    <div className="location"><address>{newUnplayedMatches[0].venue}<br/><br/></address> </div>
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
                                                                            <address>{newPlayedMatches[newPlayedMatches.length-1].venue}<br/><br/></address>
                                                                        </div>
                                                                        <div className="date">
                                                                            <Moment format="llll" date={newPlayedMatches[newPlayedMatches.length-1].date}></Moment>
                                                                       </div>
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
                                                                           <div className="uk-width-3-12 uk-vertical-align">
                                                                               <div className="wrap uk-vertical-align-middle">
                                                                               {`${newPlayedMatches[newPlayedMatches.length-1].teams.map((team)=>{
                                                                                   if(team.id === newPlayedMatches[newPlayedMatches.length-1].home_team_id){
                                                                                       return team.name
                                                                                   }
                                                                                   })}`.replace(',','')} </div>
                                                                           </div>
                                                                           <div className="uk-width-2-12 score">
                                                                           <div className="title">score</div>
                                                                               <div className="d-flex" style={{fontWeight:"bold"}}>
                                                                                   <div className="left">{newPlayedMatches[newPlayedMatches.length-1].home_team_score}</div>
                                                                                   <span>:</span>
                                                                                   <div className="right">{newPlayedMatches[newPlayedMatches.length-1].away_team_score}</div>
                                                                                   <div className="uk-clearfix"></div>
                                                                               </div>
                                                                           </div>
                                                                           <div className="uk-width-3-12 alt uk-vertical-align">
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

                                    <div className="uk-width-medium-1-2 uk-width-small-1-1 va-list-next-match">
                                        <div className="match-list-wrap">
                                            {props.matches.map((item,index)=>{
                                                if(item.home_team_score===null || item.away_team_score===null){
                                                return (
                                                <div className="match-list-item alt" key={index}>
                                                        <div className="date"><Moment format="llll" date={item.date}></Moment></div>
                                                        <div className="wrapper">
                                                            <div className="logo">
                                                                <a href="match-single.html">
                                                                <img  className="img-polaroid"  src={`/img/teams/${item.teams.map((team,index)=>{
                                                    if(team.id === item.home_team_id){
                                                        return team.logo;
                                                    }
                                                    })}`.replace(',','')} alt={`${item.teams.map((team)=>{
                                                    if(team.id === item.home_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} title=""/>
                                                                </a>
                                                            </div>
                                                            <div className="team-name">{`${item.teams.map((team)=>{
                                                    if(team.id === item.home_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} </div>
                                                            <div className="versus">VS</div>

                                                            <div className="team-name">{`${item.teams.map((team)=>{
                                                    if(team.id === item.away_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} </div>
                                                            <div className="logo">
                                                                <a href="match-single.html">
                                                                <img  className="img-polaroid"  src={`/img/teams/${item.teams.map((team,index)=>{
                                                    if(team.id === item.away_team_id){
                                                        return team.logo;
                                                    }
                                                    })}`.replace(',','')} alt={`${item.teams.map((team)=>{
                                                    if(team.id === item.away_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} title=""/>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                );
                                                }
                                               else{
                                                   return null
                                               }
                                                
                                                    
                                            })}

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
  )
}

export default MatchOutline
