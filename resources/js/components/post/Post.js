import React, { Component } from 'react'
import PropTypes from 'prop-types';
import { connect } from 'react-redux'
import Spinner from '../common/Spinner';
import {getPost} from '../../actions/postActions'
import PostItem from '../posts/PostItem'
import {Link} from 'react-router-dom';
import CommentFeed from './CommentFeed';

class Post extends Component {
  
  constructor(){
    super();
    this.state={
        post:[]
    }
}
  
  componentDidMount(){
    axios.get(`api/posts/${id}`)
    .then(response=>
        this.setState({post:response.data})
        )
    .catch(err=>console.log(err));
}
  render() {
      const {post} =this.props.post;
      let postContent;

      
        postContent =(
          <div>
            <PostItem post={post} showActions={false}/>           
          </div>
        );
      

    return (
      <div className="post">
        <div className="container">
          <div className="row">
            <div className="col-md-12">
            {postContent}
            </div>
          </div>
        </div>
      </div>
    )
  }
}
Post.propTypes ={
    getPost:PropTypes.func.isRequired,
    post:PropTypes.object.isRequired
}
const mapStateToProps = state =>({
    post:state.post
})

export default connect(mapStateToProps,{getPost})(Post);