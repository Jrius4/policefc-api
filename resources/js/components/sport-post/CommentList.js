import React, { Component } from 'react'
import PropTypes from 'prop-types'
import CommentItem from './CommentItem';

class CommentList extends Component {
   
    render() {
        const { comments } = this.props;
    return comments.map((data,index)=>(
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
    )); 
    }
}

CommentList.propTypes = {
    comments: PropTypes.array.isRequired
  };
export default CommentList;