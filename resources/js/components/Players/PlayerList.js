import React, { Component } from 'react'
import PlayerItem from './PlayerItem';

class PlayerList extends Component {
    constructor(){
        super();
        this.state={
            players:[],
            msg:"Players"
        }
    }

    componentDidMount(){
        axios.get('api/players')
        .then(response=>
            this.setState({players:response.data.data.data})
            )
        .catch(err=>console.log(err));
    }
  render() {
    const {msg,players} = this.state;
        return (
            <div className="container layout mt-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div className="row justify-content-center">
                    <div className="">
                        <div className="card shadow-sm">
                            <div className="card-header text-light bg-dark">Players</div>

                            <div className="card-body">
                                <h2 className="display-2 text-info">{msg}</h2>
                                <div className="row justify-content-between">
                                    {
                                        players.map(
                                            (data,index)=><PlayerItem key={index} image={data.picture} id={data.indentifier} description={data.bio} name={data.firstname}/>
                                        )
                                        
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
export default PlayerList
