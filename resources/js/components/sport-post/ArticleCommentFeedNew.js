import React, { Component } from 'react';
import PropTypes from 'prop-types';
import CommentItem from './CommentItem';

class ArticleCommentFeedNew extends Component {
  render() {
    const { comments, postId } = this.props;

    return (
      <div>
        <div>
          <h4>Comments {comments.length}</h4>
        </div>
        
        {
          comments.map(comment => <CommentItem key={comment.id} comment={comment} postId={postId} />)
        }
      </div>
    );
    
  }
}

ArticleCommentFeedNew.propTypes = {
  comments: PropTypes.array.isRequired,
  postId: PropTypes.number.isRequired
};

export default ArticleCommentFeedNew;
