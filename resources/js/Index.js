import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Layout from './components/container/Layout';

export default class Index extends Component {
    
    render() {
       
        return (
            <React.Fragment>
                <Layout/>
            </React.Fragment>
        );
    }
}

if (document.getElementById('root')) {
    ReactDOM.render(<Index />, document.getElementById('root'));
}
