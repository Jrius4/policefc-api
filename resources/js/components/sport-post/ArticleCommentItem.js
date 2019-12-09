import React, { Component } from 'react';

class ArticleCommentItem extends Component {
  

  render() {
    const { id ,comment} = this.props;

    return (
      <div className="card card-body col-md-8 mb-3">
        <div className="row">
          <div className="col-md-2">
            <a href="profile.html">
              <span>
                {comment.author_name}
              </span>
                
            </a>
            <br />
            <p className="text-center">{comment.author_name}</p>
          </div>
          <div className="col-md-10">
            <p className="lead">{comment.body}</p>
            
          </div>
        </div>
      </div>
    );
  }
}


export default ArticleCommentItem;
