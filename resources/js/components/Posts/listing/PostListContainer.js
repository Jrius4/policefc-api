import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import Pagination from 'react-js-pagination';
import Spinner from '../../../common/Spinner';
import { getPosts,handlePageChange } from '../../../actions/postActions';
import PostFeed from './PostFeed';


class PostListContainer extends Component {

    constructor(props)
    {
        super(props);
        this.state={
                posts:[],
                msg:"Posts with pagination",
                activePage:1,
                itemsCountPerPage:null,
                totalItemsCount:null,
                pageRangeDisplayed:3,
                onChange:null,
        }
        this.onChangePage = this.onChangePage.bind(this);
    }
    
    componentDidMount() {
        this.props.getPosts();
      }
    
      onChangePage(pageNumber){
        this.props.handlePageChange(pageNumber);
      }

    render() {
        
        const { posts,itemsCountPerPage,totalItemsCount,activePage, loading } = this.props.post;
        let postContent;

        if (posts === null || loading) {
        postContent = <Spinner />;
        } else {
        postContent = (
        <div>
            
            <div className="row justify-content-between">
                <PostFeed posts={posts} />
                </div>  
                <div className="d-flex justify-content-center">
                    <h3>Page {activePage}</h3>
                    <br/>
                    <Pagination
                                activePage={activePage}
                                itemsCountPerPage={itemsCountPerPage}
                                totalItemsCount={totalItemsCount}
                                pageRangeDisplayed={this.state.pageRangeDisplayed}
                                onChange={this.onChangePage}
                                itemClass='page-item'
                                linkClass='page-link'
                    />
                </div> 

        </div>);
        }

        return (
            
<div className="container layout mt-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div className="row justify-content-center">
    <div className="">
        <div className="card shadow-sm">
            <div className="card-header text-light bg-dark">Index Component</div>

            <div className="card-body">
                <h2 className="display-2 text-info">Posts</h2>
                
                {postContent}
                
                                              
            </div>

        </div>
    </div>
</div>
</div>
        )
    }
}
PostListContainer.propTypes = {
    getPosts: PropTypes.func.isRequired,
    handlePageChange: PropTypes.func.isRequired,
    post: PropTypes.object.isRequired
  };
  
  const mapStateToProps = state => ({
    post: state.post
  });
  
export default connect(mapStateToProps, { getPosts,handlePageChange })(PostListContainer);

