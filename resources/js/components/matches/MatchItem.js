import React from 'react';
import Moment from 'react-moment'

const MatchItem = (props) => {
  let matchRow;
  if(props.homeScore===null||props.awayScore===null){
    matchRow=(
      <tr>
        <td><Moment format="llll" date={props.date}></Moment></td>
        <td>{props.venue}</td>
        <td>{props.teams.map((team,index)=>{
                  if(team.id === props.homeTeamId){
                    return team.name;
                  }
                })}{' '}<img src={`/img/${props.teams.map((team,index)=>{
                  if(team.id === props.homeTeamId){
                    return team.logo;
                  }
                })}`.replace(',','')} alt={`${props.teams.map((team)=>{
                  if(team.id === props.homeTeamId){
                    return team.name
                  }
                })}`.replace(',','')}/>
          {' '}<span>VS</span> {' '}<img src={`/img/${props.teams.map((team,index)=>{
                  if(team.id === props.awayTeamId){
                    return team.logo;
                  }
                })}`.replace(',','')} alt={`${props.teams.map((team)=>{
                  if(team.id === props.awayTeamId){
                    return team.name
                  }
                })}`.replace(',','')}/>{' '}{props.teams.map((team,index)=>{
                  if(team.id === props.awayTeamId){
                    return team.name;
                  }
                })}
        </td>
        <td>{'TO PLAY'}</td>
      </tr>
    )
  }
  else if (props.homeScore!==null && props.awayScore!==null){
    matchRow=(
      <tr>
        <td><Moment format="llll" date={props.date}></Moment></td>
        <td>{props.venue}</td>
        <td>{props.teams.map((team,index)=>{
                  if(team.id === props.homeTeamId){
                    return team.name;
                  }
                })}{' '}<img src={`/img/${props.teams.map((team,index)=>{
                  if(team.id === props.homeTeamId){
                    return team.logo;
                  }
                })}`.replace(',','')} alt={`${props.teams.map((team)=>{
                  if(team.id === props.homeTeamId){
                    return team.name
                  }
                })}`.replace(',','')}/>
          {' '}<span>{props.homeScore}</span>{' '}<span>:</span>{' '}<span>{props.awayScore}</span>{' '}<img src={`/img/${props.teams.map((team,index)=>{
                  if(team.id === props.awayTeamId){
                    return team.logo;
                  }
                })}`.replace(',','')} alt={`${props.teams.map((team)=>{
                  if(team.id === props.awayTeamId){
                    return team.name
                  }
                })}`.replace(',','')}/>{' '}{props.teams.map((team,index)=>{
                  if(team.id === props.awayTeamId){
                    return team.name;
                  }
                })}
        </td>
        <td>{'FINISHED'}</td>
      </tr>
    )
  }
  else{
    matchRow = (
      <tr>
                <td><Moment format="llll" date={props.date}></Moment></td>
                <td>{props.venue}</td>
                <td><img src={`/img/${props.teams.map((team,index)=>{
                  if(team.id === props.homeTeamId){
                    return team.logo;
                  }
                })}`.replace(',','')} alt={`${props.teams.map((team)=>{
                  if(team.id === props.homeTeamId){
                    return team.name
                  }
                })}`.replace(',','')}/></td>
                <td>{props.teams.map((team,index)=>{
                  if(team.id === props.homeTeamId){
                    return team.name;
                  }
                })}</td>
                <td>
                  {props.homeScore}
                </td>
                <td><img src={`/img/${props.teams.map((team,index)=>{
                  if(team.id === props.awayTeamId){
                    return team.logo;
                  }
                })}`.replace(',','')} alt={`${props.teams.map((team)=>{
                  if(team.id === props.awayTeamId){
                    return team.name
                  }
                })}`.replace(',','')}/></td>
                <td>{props.teams.map((team,index)=>{
                  if(team.id === props.awayTeamId){
                    return team.name;
                  }
                })}</td>
                <td>
                  {props.awayScore}
                </td>
              </tr>
    )
  }
  return (
    <>
    {matchRow}
    </>
              
  )
}

export default MatchItem
