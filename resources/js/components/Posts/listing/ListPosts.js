import React, { Component } from 'react';
import axios from 'axios';
import Pagination from 'react-js-pagination';
import PostItem from '../PostItem';

class ListPosts extends Component {
    constructor()
    {
        super();
        this.state={
                posts:[],
                msg:"Posts with pagination",
                activePage:1,
                itemsCountPerPage:null,
                totalItemsCount:null,
                pageRangeDisplayed:3,
                onChange:null,
        }
        this.handlePageChange = this.handlePageChange.bind(this)
    }

    componentDidMount()
    {
        axios.get('/api/sport-posts')
        .then(
            response=>{
            this.setState({
                posts:response.data.data,
                itemsCountPerPage:response.data.per_page,
                totalItemsCount:response.data.total,
                activePage:response.data.current_page,
            })
        })
        .catch(err=>console.log(err));
    }

    handlePageChange(pageNumber) {
        console.log(`active page is ${pageNumber}`);
        // this.setState({activePage: pageNumber});
        axios.get(`/api/sport-posts?page=${pageNumber}`)
        .then(
            response=>{
            this.setState({
                posts:response.data.data,
                itemsCountPerPage:response.data.per_page,
                totalItemsCount:response.data.total,
                activePage:response.data.current_page,
            })
        })
        .catch(err=>console.log(err));
      }

    render() {
        const {msg,posts,activePage,itemsCountPerPage,totalItemsCount,pageRangeDisplayed} = this.state;
        return (
            <div className="container layout mt-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div className="row justify-content-center">
                    <div className="">
                        <div className="card shadow-sm">
                            <div className="card-header text-light bg-dark">Index Component</div>

                            <div className="card-body">
                                <h2 className="display-2 text-info">{msg}<br/>|| {totalItemsCount}{' '}Posts</h2>
                                <div className="row justify-content-between">
                                    {
                                        posts.map(
                                            (data,index)=><PostItem key={index} author={data.author.name} image={data.image} id={data.id} description={data.excerpt} title={data.title}/>
                                        )
                                    }
                                </div>                                
                            </div>

                            <div className="d-flex justify-content-center">
                                <Pagination
                                activePage={this.state.activePage}
                                itemsCountPerPage={itemsCountPerPage}
                                totalItemsCount={totalItemsCount}
                                pageRangeDisplayed={pageRangeDisplayed}
                                onChange={this.handlePageChange}
                                itemClass='page-item'
                                linkClass='page-link'
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default ListPosts
