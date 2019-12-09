import React from 'react'
import {Link} from 'react-router-dom'
import ExternalLinks from '../../../common/ExternalLinks'

const MemberItem = (props) => {
  return (
   
      <div className=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                            <div className="player-article">
                                                <div className="wrapper">
                                                    <div className="img-wrap">
                                                        <div className="player-number"><span>{props.shirtNumber}</span>
                                                        </div>
                                                        <div className="bio"><span><a href="player.html">bio</a></span>
                                                        </div>
                                                        <a href="player.html">
                                                            <img src={`img/players/${props.image}`} className="img-polaroid" alt={`${props.firstname}`} title={`${props.firstname}`}/>
                                                        </a>
                                                        <ul className="socials">
                                                        {props.socialmedia.map((data,index)=>(
                                                            <li key={index} className={data.media_name}>
                                                                <ExternalLinks to={data.url} target="_blank"></ExternalLinks>
                                                            </li>
                                                        ))}
                                                        </ul>
                                                    </div>
                                                    <div className="info">
                                                        <div className="name">
                                                            <h3>
                                                                <a href="player.html">{props.firstname.toUpperCase()} {props.lastname.toUpperCase()}</a>
                                                            </h3>
                                                        </div>
                                                        <div className="position">{props.position.toUpperCase()} </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

  )
}

export default MemberItem
