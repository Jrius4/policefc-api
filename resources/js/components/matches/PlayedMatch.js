import React from 'react'

const PlayedMatch = () => {
    const {matches} = props;
    const matchArray = matches;
    let playedMatches,newPlayedMatches;
    function arrayRemove(arr, value) {

      return arr.filter(function(ele){
          return ele != value;
      });
   
   }
    if(matchArray.length>0)
    {
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
                                            
                                            {matchArray.length>0?newPlayedMatches.length>0?(
                                                
                                                <div>
                                                    <div className="main-next-match-title"><em>Next <span>Match</span></em></div>
                                                   <div className="match-list-single">
                                                <div className="match-list-item">
                                                    <div className="count">
                                
                                                        <div id="countdown4">
                                                            <div className="counter_container" style={{fontSize:"1.3em"}}>
                                                            <Moment format="llll" date={newPlayedMatches[newPlayedMatches.length-1].date}></Moment>
                                                            </div>
                                                        </div>

                                                        <div className="clearfix"></div>

                                                    </div>
                                                    <div className="clear"></div>
                                                    <div className="logo">
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
                                                    <div className="team-name">{`${newPlayedMatches[newPlayedMatches.length-1].teams.map((team)=>{
                                                    if(team.id === newPlayedMatches[newPlayedMatches.length-1].home_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} </div>
                                                    <div className="versus">VS</div>

                                                    <div className="team-name">{`${newPlayedMatches[newPlayedMatches.length-1].teams.map((team)=>{
                                                    if(team.id === newPlayedMatches[newPlayedMatches.length-1].away_team_id){
                                                        return team.name
                                                    }
                                                    })}`.replace(',','')} </div>
                                                    <div className="logo">
                                                    <a>
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
                                                    <div className="clear"></div>
                                                    <div className="date"><Moment format="llll" date={newPlayedMatches[newPlayedMatches.length-1].date}></Moment></div>
                                                    <div className="clear"></div>
                                                    <div className="location"><address>{newPlayedMatches[newPlayedMatches.length-1].venue}<br/><br/></address> </div>
                                                </div>
                                            </div> 
                                                </div>
                                            ):(
                                                <div className="main-next-match-title"><em>All <span>Matches Played</span></em></div>
                                            ):null}
                                             
                                        </div>
                                    </div>

                                    <div className="uk-width-medium-1-2 uk-width-small-1-1 va-list-next-match">
                                        <div className="match-list-wrap">
                                            {props.matches.map((item,index)=>{
                                                if(item.home_team_score!==null || item.away_team_score!==null){
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

export default PlayedMatch
