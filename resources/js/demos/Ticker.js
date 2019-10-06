import React from 'react';
import Ticker from 'react-ticker'

const TickerDemo = () => {
  return (
    <Ticker>
      {({index})=>(
          <>
            <h1>This is the headline</h1>
            <img src="img/Post_Image_4.jpg" alt=""/>
          </>
      )}
    </Ticker>
  )
}

export default TickerDemo
