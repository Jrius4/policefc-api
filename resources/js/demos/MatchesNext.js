import React, { Component } from 'react'
import PropTypes from 'prop-types'
import {getMatches} from '../actions/matchActions'
import {connect} from 'react-redux';
import Counter from './Counter';
import Moment from 'react-moment';

class MatchesNext extends Component {
  constructor(props){
    super(props);
    this.state = {
      posts:[],
      info:[],
      matches:[],
      onChange:null,
      loading:false,
      number:0,
      index: 0,
      counter: null
    }
    this.goToNext = this.goToNext.bind(this);    
    this.goToPrevious = this.goToPrevious.bind(this);
}


componentDidUpdate(){
  console.log(this.state.index)
}
  componentDidMount(){
    this.props.getMatches();
    this.setState({
        matches:this.props.match.matches
    })
    this.interval = setInterval(() => {
      
        this.setState({index: (this.state.index + 1) % this.props.match.matches.length});
      
    }, 10000);

  }
  
goToNext() {
  this.setState({ index: (this.state.index + 1) % this.props.match.matches.length });
  
};
goToPrevious() {
  this.setState({ index: this.state.index>0?(this.state.index - 1) % this.props.match.matches.length :this.props.match.matches.length-1});
};

  render() {
    
    const {matches} = this.props.match;
    const matchArray = this.props.match.matches;
    let matchInfo,unPlayedMatches,newUnplayedMatches,playedMatches,newPlayedMatches;
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

    if(matchArray.length>0)
    {
      matchInfo=matchArray[this.state.index]
    }
    else{
      matchInfo=null
    }
    
    
        
    let content,filteredContent,counterInfo;
    content = (
      <div>
        {matches.map((item,index)=>{
          return (
            <div key={index}>
              <ul>
                <li>{item.id}|{index}</li>
              </ul>
            </div>
          )
        })}
      </div>
    )
    filteredContent=(
      <div>
        {Object.keys(matches).filter(key=>matches[key].coming_up===1).map((key,index)=>{
          
          if(true){
            <div key={key}>
              {matches[key].id}
            </div>
          }
        })}
      </div>
    )
     
          if (this.state.counter) {
            counterInfo= <Counter 
                     counter={this.state.counter}
                     onExit={() => this.setState({counter:null})}
                     />
          } else {
            counterInfo= (
              <div>
                <h2>Pick a Counter</h2>
                <button onClick={() => this.setState({counter:'simplest'})}  >Simplest</button><br/>
                <button onClick={() => this.setState({counter:'double'})}>Double</button><br/>
              </div>
            )
          }
        
      
    

    return (
      <div style={{marginTop:'300px',minHeight:'40vh'}}>
        
            {matchArray.length>0?(<div><Moment format="llll" date={matchArray[matchArray.length-1].date}></Moment></div>):null}
            {console.log(matchInfo)}
            {console.log('Not Played Games')}
            {matchArray.length>0?newPlayedMatches.length>0?console.log(newUnplayedMatches[0]):`All Games Played`:null}
            {console.log('Played Games')}
            {matchArray.length>0?newPlayedMatches.length>0?console.log(newPlayedMatches[0]):`No Game Played Yet`:null}
            <div style={{marginTop:"300px",padding:'150px'}}>
            {
              matchInfo!==null? (<div><Moment format="llll" date={matchInfo.date}></Moment></div>):null
            
            }
            <button onClick={this.goToPrevious}>previous</button>
            <button onClick={this.goToNext}>next</button>
            
            </div>

            {counterInfo}

      </div>
    )
  }
}

MatchesNext.propTypes = {
  getMatches:PropTypes.func.isRequired,
  match:PropTypes.object.isRequired
}
const mapStateToProps = state =>({
  match:state.match
})
export default connect(mapStateToProps,{getMatches})(MatchesNext);