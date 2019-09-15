import React, { Component } from 'react';
import axios from 'axios';
import PostItem from './PostItem';
class PostList extends Component {
    constructor(){
        super();
        this.state={
            posts:[],
            msg:"Project Customers"
        }
    }

    componentDidMount(){
        axios.get('api/posts')
        .then(response=>
            this.setState({posts:response.data})
            )
        .catch(err=>console.log(err));
    }

    render() {
        const {msg,posts} = this.state;
        return (
            <div className="container layout mt-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div className="row justify-content-center">
                    <div className="">
                        <div className="card shadow-sm">
                            <div className="card-header text-light bg-dark">Index Component</div>

                            <div className="card-body">
                                <h2 className="display-2 text-info">{msg}</h2>
                                <div className="row justify-content-between">
                                    {
                                        posts.map(
                                            (data,index)=><PostItem key={index} image id={data.id} excerpt={data.excerpt} title={data.title}/>
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

export default PostList;
