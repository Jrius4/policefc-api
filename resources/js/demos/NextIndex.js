import React, { Component } from 'react'
import PropTypes from 'prop-types'
import {getMatches} from '../actions/matchActions'
import {connect} from 'react-redux';

const info = [{
  title: 'Dashboard',
  content: 'The dashboard is your main homepage. It will display a feed of looks...'
},
{
  title: 'Discover',
  content: 'Discover allows you to find new looks, what is trending and search for looks, brands and users'
},
{
  title: "Upload you look, style guide and more "
}
];

class NextIndex extends Component {
  constructor(props) {
    super();
    this.state = {
      index: 0
    };
    this.goToNext = this.goToNext.bind(this);    
  }
  
  goToNext() {
    this.setState({ index: (this.state.index + 1) % info.length });
  };
  
  render() {
    const item = info[this.state.index];
    return (
    <div style={{marginTop:"300px",padding:'150px'}}>
      <h2>{item.title}</h2>
      <p>{item.content}</p>
      <button onClick={this.goToNext}>next</button>
    </div>);
  }
}


export default NextIndex;