import React, { Component } from 'react';
import { connect } from 'react-redux';
import PropTypes from 'prop-types';
import isEmpty from "../../validation/is-empty";
import {Link} from 'react-router-dom';
import PostItem from '../Posts/PostItem';
import ContentItem from './ContentItem';
import CommentForm from './CommentForm';

import {getPost,getPosts,getPostComments,getCategories} from '../../actions/postActions';
import Spinner from '../../common/Spinner';
import CommentFeed from './CommentFeed';


class SingleArticle extends Component {
    constructor(props){
        super(props);
        this.state={
            post:[]
        }
    }

    componentDidMount() {
        this.props.getPost(this.props.match.params.postId);
        this.props.getPostComments(this.props.postId);
      }
    componentWillUnmount(){
      this.setState({
        post:[]
      })
    }
      
  

    render() {
        const { post, loading,posts,categories } = this.props.post;
    let postContent;

    if (post === null || loading || Object.keys(post).length === 0) {
      postContent = <Spinner />;
    } else {
      postContent = (
        <div>
          {
                post.map(
                    (data,index)=>(
                        <div key={index}>
                            <ContentItem
                            image={data.image}
                            id={data.id}
                            author={data.author}
                            body={data.body}
                            title={data.title}/>
                            
                            <CommentFeed
                            postId={data.id}
                            commentz={data.comments}
                            />
                            <CommentForm postId={data.id}/>
                        </div>
                        )
                )
            }
        </div>
      );
    }

        return (
            <div className="container row layout d-flex justify-content-center mt-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <Link to="/list-posts" className="btn btn-md btn-light m-3">
                    Back To News Feed
                </Link>
                <div className="clearfix"></div>
                    {postContent}
            </div>
            
        )
    }
}
SingleArticle.propTypes = {
    getPost: PropTypes.func.isRequired,
    getPostComments: PropTypes.func.isRequired,
    getPosts: PropTypes.func.isRequired,
    getCategories: PropTypes.func.isRequired,
    post: PropTypes.object.isRequired
  };
  const mapStateToProps = state => ({
    post: state.post
  });
  export default connect(mapStateToProps, { getPost,getPostComments,getPosts,getCategories,getPosts })(SingleArticle);
