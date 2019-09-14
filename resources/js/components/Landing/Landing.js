import React from 'react'
import darkMind from '../../img/darkest-minds.jpg';


const Landing = () => {
  return (
    <div className="layout">
      <h2 className="display-1">Kazibwe Julius Junior</h2>
      <div className="">
        <img className="bg-transparent img-fluid" width="250" height="250"  src={darkMind} alt=""/>
      </div>
    </div>
  )
}

export default Landing
