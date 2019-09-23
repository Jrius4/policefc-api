import React from 'react'

const Navigation = (props) => {
  return (
    <div className="py-4">
        <button className="btn btn-info btn-sm mr-2" onClick={props.leftPage}>prev page</button>
        <button className="btn btn-info btn-sm" onClick={props.comingPage}>Load More</button>
    </div>
  )
}

export default Navigation
