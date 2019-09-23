import React, { Component } from 'react';
import axios from 'axios';
import PostItem from './PostItem';
import Navigation from './Navigation';
class PostList extends Component {
    constructor(){
        super();
        this.state={
            posts:[],
            url:'/api/sport-posts',
            prev_url:null,
            pagination:[],
            msg:"Project News"

        }
    }

    componentDidMount(){
        this.fetchPosts();
    }

    fetchPosts(){
        axios.get(this.state.url)
        .then(response=>{
            this.setState({
                posts:response.data.data,
                url:response.data.next_page_url,
                prev_url:response.data.prev_page_url,
            });
            $this.makePagination(response.data)

            })
        .catch(err=>console.log(err));
    }

    loadMore(){
        this.setState({
            url:this.state.pagination.next_page_url,
        });

        this.fetchPosts()
    }

    prevPage(){
        this.setState({
            prev_url:this.state.pagination.prev_page_url
        });

        this.fetchPosts()
    }
    makePagination(data){
        let pagination = {
            current_page:data.current_page,
            first_page_url:data.first_page_url,
            from:data.from,
            last_page:data.last_page,
            last_page_url:data.last_page_url,
            next_page_url:data.next_page_url,
            per_page:data.per_page,
            prev_page_url:data.prev_page_url,
            to:data.to,
            total:data.total,
        }

        this.setState({
            pagination:pagination
        })
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
                                            (data,index)=><PostItem key={index} image={data.image} id={data.id} description={data.excerpt} name={data.title}/>
                                        )
                                    }
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>

                <Navigation leftPage={this.prevPage.bind(this)} comingPage={this.loadMore.bind(this)}/>
                
            </div>
        )
    }
}

export default PostList;
