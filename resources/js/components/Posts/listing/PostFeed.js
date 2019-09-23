import React, { Component } from 'react';
import PropTypes from 'prop-types';
import PostItem from '../PostItem';


class PostFeed extends Component {
  render() {
    const { posts } = this.props;

    return posts.map((data,index) => <PostItem key={index} author={data.author.name} image={data.image} id={data.id} description={data.excerpt} title={data.title}/>);
  }
}

PostFeed.propTypes = {
  posts: PropTypes.array.isRequired
};

export default PostFeed;
