import React, { Component } from 'react'
import axios from 'axios'
import PropTypes from 'prop-types'
class PlayerPositions extends Component {
    constructor(props){
        super(props);
        this.state={
            positions:[],
            players:[],
            newId:null
        };
        this.clickEvent = this.clickEvent.bind(this);
    }

    componentDidMount(){

        axios
        .get('/api/player-positions')
        .then(
            res=>
            this.setState({
                positions:res.data
            })
        )
        .catch(err=>console.log(err));

        

    }
    componentDidUpdate(){
        console.log(this.state.newId) 
        if(this.state.newId!=null)
        {
            axios
            .get(`/api/player-position/${this.state.newId}/players`)
            .then(
                res=>
                this.setState({
                    players:res.data.data.data
                })
                )
                .catch(err=>console.log(err));  
        }
    }

    clickEvent(posId){
        this.setState({
            newId:posId
        })
    }
  render() {
      let positionArray,playerArray;

      positionArray = (
      <div>
          <div className="btn-group">
              <div  onClick={()=>this.clickEvent(null)}  className="btn btn-dark btn-sm m-2">
                All
              </div>
          {
            this.state.positions.map((data,index)=>(
                 
                      <div onClick={()=>this.clickEvent(data.id)} key={index} className="btn btn-dark btn-sm m-2">
                          <div className="row d-flex justify-content-start p-2">
                              <div className="mr-2">{data.id}</div>
                              <div className="mr-2">{data.title}</div>
                              <div className="mr-2">{data.abbrev}</div>
                          </div>
                      </div>
                 
              ))
          }
              
          </div>
      </div>)

    // if(this.state.newId===null)
    // {
    //     axios
    //     .get('/api/players')
    //     .then(
    //         res=>
    //         this.setState({
    //             players:res.data.data.data
    //         })
    //         )
    //         .catch(err=>console.log(err));

    //     playerArray = (
    //         <div>
    //             {
    //                 this.state.players.map((player,index)=>(
    //                     <div key={index}>
    //                         <h2>{player.firstname}</h2>
    //                     </div>
    //                 ))
    //             }
    //         </div>
    //     )
    // }

    // if(this.state.newId!=null)
    // {
    //     axios
    //     .get(`/api/player-position/${this.state.newId}/players`)
    //     .then(
    //         res=>
    //         this.setState({
    //             players:res.data.data.data
    //         })
    //         )
    //         .catch(err=>console.log(err));  
    // }

    playerArray = (
        <div>
            {
                this.state.players.map((player,index)=>(
                    <div key={index}>
                        <h2>{player.firstname}</h2>
                    </div>
                ))
            }
        </div>
    )
    return (
      <div style={{marginTop:"400px"}} className="row d-flex justify-content-center">
        {positionArray}
        <div>
       { playerArray}
        </div>
      </div>

    )
  }
}

export default PlayerPositions