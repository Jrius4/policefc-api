import React from 'react'
import isEmpty from "../../validation/is-empty";
import {Link} from 'react-router-dom';
import Parser from 'html-react-parser';


const ContentItem = (props) => {
  return (
    <div className="card text-center shadow-sm col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 m-1">
      <div className="card-header">
      {
          isEmpty(props.image) ? null: (
             <div>
              <img className="img-responsive img-fluid" src={`img/${props.image}`} alt=""/>
            </div>
          )
        }
       
        <div className="text-left">
            <h3>{props.title}</h3>
        </div>
      </div>
        
      
        
        {
          isEmpty(props.author) ? null: (
             <div className="text-right">
              <small>written by {props.author.name}</small>
            </div>
          )
        }
        
        <div className="text-left p-2">
            { Parser(props.body) }
        </div>
    </div>
  )
}

export default ContentItem
