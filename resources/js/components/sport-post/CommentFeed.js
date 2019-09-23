import React, { Component } from 'react';
import { connect } from 'react-redux';
import PropTypes from 'prop-types';
import CommentItem from './CommentItem';
import Pagination from 'react-js-pagination';
import Spinner from '../../common/Spinner';
import { getPostComments,handleCommentsPageChange } from '../../actions/postActions';
import CommentList from './CommentList';


class CommentFeed extends Component {
  constructor(props)
    {
        super(props);
        this.state={
                post:[],
                comments:[],
                msg:"Posts with pagination",
                activePage:1,
                itemsCountPerPage:null,
                totalItemsCount:null,
                pageRangeDisplayed:3,
                onChange:null,
                postId:null
        }
        this.onChangePage = this.onChangePage.bind(this)
    }
    componentDidMount() {
      this.props.getPostComments(this.props.postId);
    }

    onChangePage(pageNumber){
      this.props.handleCommentsPageChange(this.props.postId,pageNumber);
    }
  render() {
    const { postId } = this.props;
    const { post,loading,comments } = this.props.post;
    let commentContent;

    if(comments === null || loading || Object.keys(post).length === 0)
    {
      postContent = <Spinner />;
    }
    else{
      commentContent = (
          <div>
            <h2>Comments Loaded</h2>
            <CommentList comments={comments}/>
          </div>
      );
    }

    return (
      <div>
        {/* <div>
          <h4>Comments {comments.length}</h4>
        </div>
        
        {
          comments.map(comment => <CommentItem key={comment.id} comment={comment} postId={postId} />)
        } */}
        {commentContent}
      </div>
    );
    
  }
}

CommentFeed.propTypes = {
  getPostComments: PropTypes.func.isRequired,
  handleCommentsPageChange: PropTypes.func.isRequired,
  post: PropTypes.object.isRequired,
  postId: PropTypes.number.isRequired,
  comments: PropTypes.array.isRequired,
};

const mapStateToProps = state => ({
  post: state.post
});

export default connect(mapStateToProps, { getPostComments,handleCommentsPageChange })(CommentFeed);

