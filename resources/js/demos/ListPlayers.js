import React from 'react';
import '../assets/tachyons/css/tachyons.min.css';
import PlayerCard from './PlayerCard';
import demoPhoto from './demoPhoto';
import SearchBoxInput from './SeachBox/SearchBoxInput';
import PlayerArray from './PlayerArray';
import ButtonGroup from './ButtonGroup';

const sortParams = [
  {label : 'oldest', value : 'created-asc'},
  {label : 'newest', value : 'created-desc'},
  {label : 'title asc', value : 'title-asc'},
  {label : 'title desc', value : 'title-desc'}];
  
class ListPlayers extends React.Component{
  constructor(props){
      super(props);
      this.state = {
        demoPhoto: demoPhoto,
        searchfield:'',
        msg:null,
        order:null
    };
    this.onSearchChange = this.onSearchChange.bind(this);
    this.sortStrikers = this.sortStrikers.bind(this);
    this.sortMidFielders = this.sortMidFielders.bind(this);
    this.sortDefenders = this.sortDefenders.bind(this);
    this.sortGoalkeepers = this.sortGoalkeepers.bind(this);
  }

  onSearchChange(event){
    this.setState({
      searchfield:event.target.value,
      msg:null
    });
    
  }
  
  sortDefenders(e){
    e.preventDefault();
    this.setState({
      msg:"Defender",
      searchfield:''
    })
  }
  sortStrikers(e){
    e.preventDefault();
    this.setState({
      msg:"Striker"
    })
  }
  sortGoalkeepers(e){
    e.preventDefault();
    this.setState({
      msg:"Goal Keeper"
    })
  }
  sortMidFielders(e){
    e.preventDefault();
    this.setState({
      msg:"Mid Fielder"
    })
  }
  
  render(){
    const {greetings} = this.props;
    const {demoPhoto,msg} = this.state;
    let filterPlayers;
    if(msg===null){
      filterPlayers = demoPhoto.filter(data =>{
        return data.name.toLowerCase().includes(this.state.searchfield.toLowerCase());
      });
    }else{
      filterPlayers = demoPhoto.filter(data =>{
        return data.position.toLowerCase().includes(this.state.msg.toLowerCase());
      });
    }
    return (
      <div style={{minHeight:'80vh',marginTop:'250px'}} className="tc fc">
        
        <h1 className="f1 tc">Hey, {greetings}</h1>
        <SearchBoxInput searchChange={this.onSearchChange}/>
        <button className="btn btn-lg btn-warning" onClick={this.onSearchChange}>All</button>
        <button className="btn btn-lg btn-success" onClick={this.sortDefenders}>Defenders</button>
        <button className="btn btn-lg btn-light" onClick={this.sortStrikers}>Strikers</button>
        <button className="btn btn-lg btn-info" onClick={this.sortGoalkeepers}>Goal Keepers</button>
        <button className="btn btn-lg btn-primary" onClick={this.sortMidFielders}>Mid Fielders</button>
        <h3>{msg}</h3>
        <PlayerArray demoPhoto={filterPlayers}/>
      </div>
    )
  }
}

export default ListPlayers
