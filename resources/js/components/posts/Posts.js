import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import PostForm from './PostForm';
import Spinner from '../common/Spinner';
import {getPosts} from '../../actions/postActions';
import PostFeed from './PostFeed';

class Posts extends Component {
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
    const {posts,loading} = this.props.post;
    let postContent;
    if(posts === null || loading){
      postContent = <Spinner/>;
    }
    if{
      postContent= <PostFeed posts={posts}/>
    }
    return (
      <div className="feed layout">
        <div className="container">
            <div className="row">
                <div className="col-md-12">
                    <PostForm/>
                    {postContent}
                </div>
            </div>
        </div>
        
      </div>
    )
  }
}
Posts.propTypes = {
  getPosts: PropTypes.func.isRequired,
  post: PropTypes.object.isRequired
}

const mapStateToProps = (state) => ({
  post:state.post
})



export default connect(mapStateToProps,{getPosts})(Posts)
