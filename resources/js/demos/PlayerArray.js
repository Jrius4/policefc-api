import React from 'react'
import PlayerCard from './PlayerCard'

const PlayerArray = ({demoPhoto}) => {
  return (
    <div>
      {demoPhoto.map((data,index)=>
        <PlayerCard
          key={index}
          id={data.id}
          src={data.memberImage}
          position={data.position}
          name={data.name}/>)
          }
    </div>
  )
}

export default PlayerArray
