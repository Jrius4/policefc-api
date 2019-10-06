import React, { Component } from 'react'
import PropTypes from 'prop-types'
import ListPlayers from '../ListPlayers'

class PlayerDom extends Component {
    
    render() {
        return (
            <div>
                <h2 className="f2 tc"></h2>
                <ListPlayers greetings={'Kazibwe Julius Junior'}/>
            </div>
        )
    }
}

PlayerDom.propTypes = {

}

export default PlayerDom