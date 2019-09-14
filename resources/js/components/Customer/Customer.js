import React, { Component } from 'react';
import axios from 'axios';
class Customer extends Component {
    constructor(){
        super();
        this.state={
            customers:[],
            msg:"Project Customers"
        }
    }

    componentDidMount(){
        axios.get('api/customers')
        .then(response=>
            this.setState({customers:response.data})
            )
        .catch(err=>console.log());
    }

    render() {
        const {msg,customers} = this.state;
        return (
            <div className="container layout">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card shadow-sm">
                            <div className="card-header text-light bg-dark">Index Component</div>

                            <div className="card-body">
                                <h2 className="display-2 text-info">{msg}</h2>
                                <ul className="list-group text-light col-md-4">
                                    {customers.map(
                                        data =>
                                      
                    
                                        
                                       
                                            <li className="list-group-item bg-dark" key={data.id.toString()}>
                                            {data.name}
                                            </li>
                                      
                                      
                                    )}
                                      </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default Customer;
