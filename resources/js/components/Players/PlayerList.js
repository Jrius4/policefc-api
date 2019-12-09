import React, { Component } from 'react'
import PlayerItem from './PlayerItem';
import {getPlayers} from '../../actions/playerActions'
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import Spinner from '../../common/Spinner';
import SearchBoxInput from '../../demos/SeachBox/SearchBoxInput';


class PlayerList extends Component {
    constructor(props){
        super(props);
        this.state={
            player:[],
            players:[],
            itemsCountPerPage:null,
            totalItemsCount:null,
            activePage:1,
            loading:null,
            msg:"Players",
            searchfield:'',
            msg:null,
    
        };
    this.onSearchChange = this.onSearchChange.bind(this);

    }

    componentDidMount(){
      
        this.props.getPlayers();
    }
    
    onSearchChange(event){
        this.setState({
          searchfield:event.target.value,
          msg:null
        });
      }
  render() {
    const {players,loading} = this.props.player;
    let playerContent,filterPlayers,myObj;
    myObj= {'a':1,'b':2,'c':4};

    filterPlayers = players.filter(obj=>obj.first_name.toLowerCase().includes(this.state.searchfield.toLowerCase()))
    if (players === null || loading) {
        playerContent = <Spinner />;
        }
    else{
        playerContent = players.map(
            (data,index)=>(
            <PlayerItem 
            key={index} 
            image={data.profile_pic}
            id={data.id}
            position={data.player_position.title}
            bio={data.bio}
            age={data.age}
            firstname={data.first_name} 
            lastname={data.last_name}
            socialmedia={data.player_social_media_links}/>)
        )
    }
        return (
            <div className="container layout mt-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div className="row justify-content-center">
                    <div className="">
                        <div className="card shadow-sm">
                            <div className="card-header text-light bg-dark">Players</div>

                            <div  style={{marginTop:'300px'}}  className="card-body">
                                <div>
                                    {Object.keys(players).filter(key=>players[key].first_name.toLowerCase().includes(this.state.searchfield.toLowerCase())).map((key,index)=>{
                                        return (
                                            <div key={key}>
                                                <h3>{players[key].first_name}</h3>
                                                <h3>{players[key].player_position.title}</h3>
                                            </div>
                                        )
                                    })}
                                </div> 
                                <div className="d-flex justify-content-center">
                                    <SearchBoxInput  searchChange={this.onSearchChange}/>
                                </div>
                                <h2 className="display-2 text-info">{this.state.msg}</h2>
                                <div className="row justify-content-between">
                                    {
                                        playerContent
                                    }
                                   
                                </div>  
                                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    )
  }
}
PlayerList.propTypes = {
    getPlayers:PropTypes.func.isRequired,
    player:PropTypes.object.isRequired
}

const mapStateToProps = state => ({
    player: state.player
  });
export default connect(mapStateToProps,{getPlayers})(PlayerList)
