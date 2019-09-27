import React from 'react';
import {Link} from 'react-router-dom';
import pageHead from '../images/page-headers/head-bg.jpg';
import striker from '../images/players/striker.jpg';
import striker1 from '../images/players/striker1.jpg';
import defender from '../images/players/defender.jpg';
import defender1 from '../images/players/defender1.jpg';
import goalkeeper from '../images/players/goalkeeper.jpg';
import rightPlayer from '../images/players/left-player-bg.png';
import leftPlayer from '../images/players/right-player-bg.png';


const PlayerList = () => {
  return (
<div className="tm-isblog tt-players-page">
<div className="tm-top-a-box tm-full-width tm-box-bg-1">
            <div className="uk-container uk-container-center">
                <section id="tm-top-a" className="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div className="uk-width-1-1 uk-row-first">
                        <div className="uk-panel">
                            <div className="uk-cover-background uk-position-relative head-wrap" style={{height: '290px',backgroundImage: `url(${pageHead})`}}>
                                <img className="uk-invisible" src={pageHead} alt="" height="290" width="1920"/>
                                <div className="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>Players</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div className="uk-container uk-container-center alt">
            <ul className="uk-breadcrumb">
                <li><a href="index-2.html">Home</a>
                </li>
                <li className="uk-active"><span>Players</span>
                </li>
            </ul>
        </div>
        

        <div>
            <div id="tm-middle" className="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div className="tm-main uk-width-medium-1-1 uk-row-first">
                    <main id="tm-content" className="tm-content">

                        <div className="uk-container uk-container-center tt-gallery-top">
                            <div className="uk-grid" data-uk-grid-match="">
                                <div className="uk-width-medium-3-10 uk-width-small-1-1 title">Morbi velit vel nisl blandit</div>
                                <div className="uk-width-medium-7-10 uk-width-small-1-1 text">Aenean aliquam, dolor eu lacinia pellentesque, dui arcu condimentum nisl, quis sollicitudin mi lorem quis leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis sapien a ante rutrum pulvinar quis ac tellus. Proin facilisis dui at mollis tincidunt. Sed dignissim orci non arcu luctus pretium. Donec at ex aliquet, porttitor lacus eget, ullamcorper quam. Integer pellentesque egestas arcu, nec molestie leo sollicitudin et</div>
                            </div>
                        </div>

                        <div className="list-players-wrapper">
                            <div className="uk-sticky-placeholder">
                                <div className="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                                    <div className="uk-container uk-container-center">
                                        <div className="label-menu">OUR team</div>
                                        <button className="active" data-filter="*">all
                                        </button>
                                        <button data-filter=".tt_2a195f12da9f3f36da06e6097be7e451">DEFENDER
                                        </button>
                                        <button data-filter=".tt_22c19cd174143e3b4c7ef40ae23c5d1a">STRIKER
                                        </button>
                                        <button data-filter=".tt_81747b4426a9882884c1f83eda78844f">goalkeeper
                                        </button>
                                        <button data-filter=".tt_4d957768dcc72908ab3b9e28dc867052">MIDFIELDER
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div className="list-players-wrap" id="boundary">
                                <div className="left-player">
                                    <img src={leftPlayer} alt=""/>
                                </div>
                                <div className="right-player">
                                    <img src={rightPlayer} alt=""/>
                                </div>
                                <div className="uk-container uk-container-center alt">



                                    <div className="uk-grid grid1 players-list">


                                        <div className="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                            <div className="player-article">
                                                <div className="wrapper">
                                                    <div className="img-wrap">
                                                        <div className="player-number">
                                                            <span>
                                                            21                
                                                            </span>
                                                        </div>
                                                        <div className="bio">
                                                            <span>
                                                            <Link to="/player">bio
                                                            </Link>
                                                            </span>
                                                        </div>
                                                        <a href="player.html">
                                                        <img src={defender} className="img-polaroid" alt="Steven Webb" title="Steven Webb"/>
                                                        </a>
                                                        <ul className="socials">
                                                            <li className="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="pinterest">
                                                                <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="linkedin">
                                                                <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div className="info">
                                                        <div className="name">
                                                            <h3>
                                                                <a href="player.html">
                                                                Steven Webb                    
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div className="position">
                                                            DEFENDER 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                            <div className="player-article">
                                                <div className="wrapper">
                                                    <div className="img-wrap">
                                                        <div className="player-number">
                                                            <span>
                                                            19                
                                                            </span>
                                                        </div>
                                                        <div className="bio">
                                                            <span>
                                                            <Link to="/player">bio
                                                            </Link>
                                                            </span>
                                                        </div>
                                                        <a href="player.html">
                                                        <img src={striker} className="img-polaroid" alt="John Montgomery" title="John Montgomery"/>
                                                        </a>
                                                        <ul className="socials">
                                                            <li className="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="pinterest">
                                                                <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="linkedin">
                                                                <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div className="info">
                                                        <div className="name">
                                                            <h3>
                                                                <a href="player.html">
                                                                John Montgomery                    
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div className="position">
                                                            STRIKER 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_81747b4426a9882884c1f83eda78844f">
                                            <div className="player-article">
                                                <div className="wrapper">
                                                    <div className="img-wrap">
                                                        <div className="player-number">
                                                            <span>
                                                            35                
                                                            </span>
                                                        </div>
                                                        <div className="bio">
                                                            <span>
                                                            <Link to="/player">bio
                                                            </Link>
                                                            </span>
                                                        </div>
                                                        <a href="player.html">
                                                        <img src={striker} className="img-polaroid" alt="Johnny Thompson" title="Johnny Thompson"/>
                                                        </a>
                                                        <ul className="socials">
                                                            <li className="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="pinterest">
                                                                <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="linkedin">
                                                                <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div className="info">
                                                        <div className="name">
                                                            <h3>
                                                                <a href="player.html">
                                                                Johnny Thompson                    
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div className="position">
                                                            goalkeeper 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                            <div className="player-article">
                                                <div className="wrapper">
                                                    <div className="img-wrap">
                                                        <div className="player-number">
                                                            <span>
                                                            07                
                                                            </span>
                                                        </div>
                                                        <div className="bio">
                                                            <span>
                                                            <Link to="/player">bio
                                                            </Link>
                                                            </span>
                                                        </div>
                                                        <a href="player.html">
                                                        <img src={defender1} className="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza"/>
                                                        </a>
                                                        <ul className="socials">
                                                            <li className="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="pinterest">
                                                                <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="linkedin">
                                                                <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div className="info">
                                                        <div className="name">
                                                            <h3>
                                                                <a href="player.html">
                                                                Benjamin Mendoza                    
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div className="position">
                                                            DEFENDER 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                            <div className="player-article">
                                                <div className="wrapper">
                                                    <div className="img-wrap">
                                                        <div className="player-number">
                                                            <span>
                                                            47                
                                                            </span>
                                                        </div>
                                                        <div className="bio">
                                                            <span>
                                                            <Link to="/player">bio
                                                            </Link>
                                                            </span>
                                                        </div>
                                                        <a href="player.html">
                                                        <img src={striker1} className="img-polaroid" alt="Joe Perez" title="Joe Perez"/>
                                                        </a>
                                                        <ul className="socials">
                                                            <li className="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="pinterest">
                                                                <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="linkedin">
                                                                <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div className="info">
                                                        <div className="name">
                                                            <h3>
                                                                <a href="player.html">
                                                                Joe Perez                    
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div className="position">
                                                            STRIKER 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_4d957768dcc72908ab3b9e28dc867052">
                                            <div className="player-article">
                                                <div className="wrapper">
                                                    <div className="img-wrap">
                                                        <div className="player-number">
                                                            <span>
                                                            23                
                                                            </span>
                                                        </div>
                                                        <div className="bio">
                                                            <span>
                                                            <Link to="/player">bio
                                                            </Link>
                                                            </span>
                                                        </div>
                                                        <a href="player.html">
                                                        <img src={striker} className="img-polaroid" alt="Bobby Guerrero" title="Bobby Guerrero"/>
                                                        </a>
                                                        <ul className="socials">
                                                            <li className="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="pinterest">
                                                                <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="linkedin">
                                                                <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div className="info">
                                                        <div className="name">
                                                            <h3>
                                                                <a href="player.html">
                                                                Bobby Guerrero                    
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div className="position">
                                                            MIDFIELDER 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                            <div className="player-article">
                                                <div className="wrapper">
                                                    <div className="img-wrap">
                                                        <div className="player-number">
                                                            <span>
                                                            14                
                                                            </span>
                                                        </div>
                                                        <div className="bio">
                                                            <span>
                                                            <Link to="/player">bio
                                                            </Link>
                                                            </span>
                                                        </div>
                                                        <a href="player.html">
                                                        <img src={goalkeeper} className="img-polaroid" alt="Douglas Pain" title="Douglas Pain"/>
                                                        </a>
                                                        <ul className="socials">
                                                            <li className="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div className="info">
                                                        <div className="name">
                                                            <h3>
                                                                <a href="player.html">
                                                                Douglas Pain                    
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div className="position">
                                                            DEFENDER 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                            <div className="player-article">
                                                <div className="wrapper">
                                                    <div className="img-wrap">
                                                        <div className="player-number">
                                                            <span>
                                                            36                
                                                            </span>
                                                        </div>
                                                        <div className="bio">
                                                            <span>
                                                            <Link to="/player">bio
                                                            </Link>
                                                            </span>
                                                        </div>
                                                        <a href="player.html">
                                                        <img src={goalkeeper} className="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera"/>
                                                        </a>
                                                        <ul className="socials">
                                                            <li className="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="pinterest">
                                                                <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li className="linkedin">
                                                                <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div className="info">
                                                        <div className="name">
                                                            <h3>
                                                                <a href="player.html">
                                                                Christopher Herrera                    
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div className="position">
                                                            STRIKER 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>


                                    
                                </div>
                            </div>
                        </div>

           
                    </main>
                </div>
            </div>
        </div>



</div>
  )
}

export default PlayerList
