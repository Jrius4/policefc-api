import React from 'react'

const PostItem = (props) => {
  return (
    <div>
      <div>
        <img src={`img/{props.image}`} alt=""/>
      </div>
      <div>
        <div>
          <h4>{props.title}</h4>
        </div>
        <p>{props.body}</p>
      </div>
    </div>
  )
}

export default PostItem
