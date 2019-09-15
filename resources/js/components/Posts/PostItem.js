import React from 'react'

const PostItem = (props) => {
  return (
    <div className="card shadow-sm col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 m-1">
        <div className="card-header">
            {props.title}
        </div>
        <div>
            {props.excerpt}
        </div>
    </div>
  )
}

export default PostItem
