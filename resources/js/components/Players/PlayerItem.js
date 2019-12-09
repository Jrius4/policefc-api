import React from 'react';
import Position from './Postion';
import Parser from 'html-react-parser'

const PlayerItem = (props) => {
  return (
    <div className="card shadow-sm col-xl-2 col-lg-4 col-md-3 col-sm-12 col-xs-12 m-1">
        <div className="card-header">
            {props.firstname} {props.lastname.toUpperCase()}
        </div>
        <img src={`img/players/${props.image}`} alt=""/>
        <div>
            {props.position.toUpperCase()}
        </div>
        <div>
          {props.age}
        </div>
        <div>
          <p>
          {Parser(props.bio)}
          </p>
        </div>
        <div>
          {props.socialmedia.map((data,index)=>(
            <div key={index}>
              {data.url}
            </div>
          ))}
        </div>
    </div>
  )
}

export default PlayerItem
