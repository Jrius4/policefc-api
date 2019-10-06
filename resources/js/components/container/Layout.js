import React, { Component } from 'react';
import {HashRouter as Router,Link,Route,Switch} from 'react-router-dom'
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
import Gallery from '../../demos/Gallery';
import TickerDemo from '../../demos/Ticker';
import PlayerDom from '../../demos/container/PlayerDom';
import PlayerPositions from '../player-postions/PlayerPositions';
import MatchList from '../matches/MatchList';
import Landing from '../main/landing/Landing';



class Layout extends Component {
    

    render() {
        return (
            <>
                <Router>
                   
                        <Navbar/>
                        <Route exact path="/" component={Landing}/>
                        <Route exact path="/posts" component={PostList}/>
                        <Route exact path="/demo-1" component={Gallery}/>
                        <Route exact path="/demo-2" component={TickerDemo}/>
                        <Route exact path="/matches" component={MatchList}/>
                        <Route exact path="/player-pos" component={PlayerPositions}/>
                        <Route exact path="/more-players" component={PlayerDom}/>
                        <Route exact path="/list-posts" component={ListPostsAll}/>
                        <Route exact path="/list-posts/:postId" component={SingleArticle} />
                        <Route exact path="/players" component={PlayerList}/>
                        <Route exact path="/executives" component={ExecutiveList}/>
                        <Route exact path="/technicals" component={TechnicalList}/>
                
                </Router>

                <Footer/>
                           
            </>
        )
    }
}
export default Layout;
