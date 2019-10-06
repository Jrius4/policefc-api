import React from 'react'

const PlayerCard = (props) => {
    const {name,src,position} = props;
  return (
    <div className="fc bg-light-blue dib br3 pa3 shadow-5 ma3 grow bw2">
      <img className="tc" width="200" height="200" src={src} alt=""/>
      <h3 className="tc">{name}</h3>
      <p>{position}</p>
    </div>
  )
}

export default PlayerCard
