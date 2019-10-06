import React, { Component } from 'react';
import axios from 'axios'
import PropTypes from 'prop-types';
import {connect} from 'react-redux'
import {getPlayerPosion} from '../../actions/playerActions'

class Position extends Component {
    constructor(props){
        super(props);
        this.state={
            positionId:null,
            positions:[],
        }
    }

    componentDidMount(){
        axios
      .get(`/api/player-positions/${this.props.positionId}`)
      .then(res =>

        this.setState({
            positions:res.data
        })
      )
      .catch(err =>
        consoler.log(err)
      );

    }

    render() {
        const {positions} = this.state;
        const {title} = positions
        return (
            <div>
               {`${title}`.toUpperCase()}
            </div>
        )
    }
}

export default Position