import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Layout from './components/container/Layout';
import { Provider } from 'react-redux';
import store from './store';
import './assets/styles/bootstrap.min.css'
import './assets/styles/custom.css'


export default class Index extends Component {
    
    render() {
       
        return (
            <Provider store={store}>
                <Layout/>
            </Provider>
        );
    }
}

if (document.getElementById('root')) {
    ReactDOM.render(<Index />, document.getElementById('root'));
}
