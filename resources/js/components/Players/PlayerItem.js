import React from 'react';

const PlayerItem = (props) => {
  return (
    <div className="card shadow-sm col-xl-2 col-lg-4 col-md-3 col-sm-12 col-xs-12 m-1">
        <div className="card-header">
            {props.name}
        </div>
        <img src={props.image} alt=""/>
        <div>
            {props.description}
        </div>
    </div>
  )
}

export default PlayerItem
