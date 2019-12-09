import React from 'react';
import isEmpty from '../../validation/is-empty';
import {Link} from 'react-router-dom';

const PostItem = (props) => {
  return (
    <div className="card shadow-sm col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 m-1">
        {
          isEmpty(props.image) ? null: (
             <div>
              <img className="img-responsive img-fluid" src={`img/${props.image}`} alt=""/>
            </div>
          )
        }
       <Link className="text-decoration-none" to={`/list-posts/${props.id}`}>
         <div className="card-header">
            {props.title}
        </div>
       </Link>
        
        {
          isEmpty(props.author) ? null: (
             <div>
              <small>written by {props.author}</small>
            </div>
          )
        }
        
        <div>
            {props.description}
        </div>
    </div>
  )
}

export default PostItem
