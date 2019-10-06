import React, { Component } from 'react';
import PropTypes from 'prop-types';
import {getMatches} from '../../actions/matchActions';
import {connect} from 'react-redux'
import Spinner from '../../common/Spinner';
import MatchItem from './MatchItem';
 class MatchList extends Component {
     constructor(props){
         super(props);
         this.set ={
             matches:[],
             match:[],
             loading:false
         }
     }
 
    componentDidMount(){
        this.props.getMatches()
    }
  render() {
      const {matches,loading} = this.props.match;
      let matchContent;
      if(matches === null || loading)
      {
        matchContent = <Spinner/>;
      }
      else{
        matchContent = (
        <div>
            <table className="table table-dark table-striped">
                <tbody>
                
        {  matches.map((match,index)=>(  <MatchItem
                key={index}
                date={match.date}
                venue={match.venue}
                homeTeamId={match.home_team_id}
                homeScore={match.home_team_score}
                awayTeamId={match.away_team_id}
                awayScore={match.away_team_score}
                teams={match.teams}
                report={match.match_report}
            />))}
                </tbody>
            </table>
        </div>
        )
        
      }
    return (
      <div style={{marginTop:'300px',minHeight:'80vh'}}>
        {matchContent}
      </div>
    )
  }
}

MatchList.propTypes = {
    getMatches:PropTypes.func.isRequired,
    match:PropTypes.object.isRequired,
    
}

const mapStateToProps = state =>({
    match:state.match
});

export default connect(mapStateToProps,{getMatches})(MatchList);