import React, { Component } from 'react';
import {HashRouter as Router,Link,Route,Switch} from 'react-router-dom'
import Landing from '../Landing/Landing';
import Navbar from './Navbar';
import Footer from './Footer';
import "../../assets/styles/custom.css";
import PostList from '../Posts/PostList';

class Layout extends Component {
    

    render() {
        return (
            <div>
                <Router>
                    <Navbar/>
                    <div className="mt-4 p-2">
                        
                        <Route exact path="/" component={Landing}/>
                        <Route exact path="/customers" component={PostList}/>
                        <Switch>
                            <Route exact path="/home" component={Landing}/>
                        </Switch>
                        
                    </div>
                </Router>

                <Footer/>
                           
            </div>
        )
    }
}
export default Layout;
