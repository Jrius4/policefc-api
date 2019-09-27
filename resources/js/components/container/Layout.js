import React, { Component } from 'react';
import {HashRouter as Router,Link,Route,Switch} from 'react-router-dom'
import Landing from '../Landing/Landing';
import Footer from './Footer';
import "../../assets/styles/custom.css";
import PostList from '../Posts/PostList';
import PlayerList from '../Players/PlayerList';
import ExecutiveList from '../support-members/ExecutiveList';
import TechnicalList from '../support-members/TechnicalList';
import ListPostsAll from '../Posts/listing/ListPostsAll';
import SingleArticle from '../sport-post/SingleArticle';
import Layout2 from '../policefc/layout/container/Layout2';
import Navbar from '../policefc/layout/navbar/Navbar';

class Layout extends Component {
    

    render() {
        return (
            <div>
                <Router>
                    
                    <div className="mt-4 p-2">
                        <Navbar/>
                        <Route exact path="/" component={Layout2}/>
                        <Route exact path="/posts" component={PostList}/>
                        <Route exact path="/list-posts" component={ListPostsAll}/>
                        <Route exact path="/list-posts/:postId" component={SingleArticle} />
                        <Route exact path="/players" component={PlayerList}/>
                        <Route exact path="/executives" component={ExecutiveList}/>
                        <Route exact path="/technicals" component={TechnicalList}/>
                        
                    </div>
                </Router>

                <Footer/>
                           
            </div>
        )
    }
}
export default Layout;
