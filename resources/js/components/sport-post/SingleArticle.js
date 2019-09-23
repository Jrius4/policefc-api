import React, { Component } from 'react';
import { connect } from 'react-redux';
import PropTypes from 'prop-types';
import isEmpty from "../../validation/is-empty";
import {Link} from 'react-router-dom';
import PostItem from '../Posts/PostItem';
import ContentItem from './ContentItem';
import CommentFeed from './CommentFeed';
import CommentForm from './CommentForm';

import {getPost} from '../../actions/postActions';
import Spinner from '../../common/Spinner';


class SingleArticle extends Component {
    constructor(props){
        super(props);
        this.state={
            post:[]
        }
    }

    componentDidMount() {
        this.props.getPost(this.props.match.params.postId);
      }
      
    //   componentDidMount(){
    //     axios.get(`/api/sport-posts/${this.props.match.params.postId}`)
    //     .then(response=>
    //         this.setState({post:response.data})
    //         )
    //     .catch(err=>console.log(err));
    // }

    render() {
        // const {post} = this.state;
        const { post, loading } = this.props.post;
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
                                comments={data.comments}
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
    post: PropTypes.object.isRequired
  };
  const mapStateToProps = state => ({
    post: state.post
  });
  export default connect(mapStateToProps, { getPost })(SingleArticle);
