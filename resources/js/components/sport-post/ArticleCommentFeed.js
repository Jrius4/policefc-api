import React, { Component } from 'react';
import { connect } from 'react-redux';
import PropTypes from 'prop-types';
import CommentItem from './CommentItem';
import Pagination from 'react-js-pagination';
import Spinner from '../../common/Spinner';
import { getPostComments,handleCommentsPageChange } from '../../actions/postActions';
import CommentList from './CommentList';


class ArticleCommentFeed extends Component {
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
    const { post,loading,comments,itemsCountPerPage,totalItemsCount,activePage } = this.props.post;
    let commentContent;

    if(post === null || comments === null || loading || Object.keys(post).length === 0)
    {
      commentContent = <Spinner />;
    }
    else{
      commentContent = (
          <div>
            <h2>{totalItemsCount} Comment(s)</h2>
            {/* <CommentList comments={comments} postId={postId}/> */}
            {comments.map((data,index)=>(
               <div key={index} className="card card-body col-md-8 mb-3">
               <div className="row">
                 <div className="col-md-2">
                   <a href="profile.html">
                     <span>
                       {data.author_name}
                     </span>
                       
                   </a>
                   <br />
                   <p className="text-center">{data.author_name}</p>
                 </div>
                 <div className="col-md-10">
                   <p className="lead">{data.body}</p>
                   
                 </div>
               </div>
             </div>
            ))}

              <div className="d-flex justify-content-center">
                    <h3>Comments' Page {activePage}</h3>
                    <hr/>
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
          </div>
      );
    }

    return (
      <div>
        {commentContent}
      </div>
    );
    
  }
}

ArticleCommentFeed.propTypes = {
  getPostComments: PropTypes.func.isRequired,
  handleCommentsPageChange: PropTypes.func.isRequired,
  post: PropTypes.object.isRequired,
  comments: PropTypes.array.isRequired,
};

const mapStateToProps = state => ({
  post: state.post,
  comments: state.post.comments
});

export default connect(mapStateToProps, { getPostComments,handleCommentsPageChange })(ArticleCommentFeed);

