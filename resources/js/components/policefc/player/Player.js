import React from 'react';
import {Link} from 'react-router-dom';
import pageHead from '../images/page-headers/head-bg.jpg';
import striker from '../images/players/striker.jpg';
import striker1 from '../images/players/striker1.jpg';
import defender from '../images/players/defender.jpg';
import defender1 from '../images/players/defender1.jpg';
import goalkeeper from '../images/players/goalkeeper.jpg';


const Player = () => {
  return (
   <div>
        <div className="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div className="uk-container uk-container-center">
                <section id="tm-top-a" className="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div className="uk-width-1-1 uk-row-first">
                        <div className="uk-panel">
                            <div className="uk-cover-background uk-position-relative head-wrap" style={{height: '290px',backgroundImage: `url(${pageHead})`}}>
                                <img className="uk-invisible" src={pageHead} alt="" height="290" width="1920"/>
                                <div className="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>Player</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div className="uk-container uk-container-center alt">
            <ul className="uk-breadcrumb">
                <li><Link to="/">Home</Link>
                </li>
                <li><Link to="/players">Players</Link>
                </li>
                <li className="uk-active"><span>Christopher Herrera </span>
                </li>
            </ul>
        </div>



        <div>
            <div id="tm-middle" className="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div className="tm-main uk-width-medium-1-1 uk-row-first">
                    <main id="tm-content" className="tm-content">
                        <div id="system-message-container"></div>
                        <div className="contentpaneopen">
                            <article className="player-single tt-players-page">
                                <div className="uk-container uk-container-center alt">
                                    <div className="uk-gfid">
                                    </div>
                                </div>
                                <div className="player-top">
                                    <div className="uk-container uk-container-center alt">
                                        <div className="uk-grid">
                                            <div className="uk-width-5-12">
                                                <div className="avatar">
                                                    <img src={striker} className="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera"/>                    
                                                </div>
                                            </div>
                                            <div className="uk-width-1-12">
                                                <div className="number">
                                                    36                    
                                                </div>
                                            </div>
                                            <div className="uk-width-6-12">
                                                <div className="name">
                                                    <h2>
                                                        Christopher Herrera                        
                                                    </h2>
                                                </div>
                                                <div className="wrap">
                                                    <ul className="info">
                                                        <li><span>POSITION</span><span>STRIKER</span></li>
                                                        <li><span>APPEARANCES</span><span>581</span></li>
                                                        <li><span>GOALs</span><span>155</span></li>
                                                        <li><span>YELLOW CARDS</span><span>15</span></li>
                                                        <li><span>RED CARDS</span><span>3</span></li>
                                                        <li><span>D.O.B</span><span>20/08/1985</span></li>
                                                        <li><span>NATIONALITY</span><span>ENGLISH</span></li>
                                                        <li><span>HEIGHT</span><span>2.0M</span></li>
                                                        <li><span>WEIGHT</span><span>81 KG</span></li>
                                                    </ul>
                                                    <ul className="socials">
                                                        <li className="twitter"><a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li className="facebook"><a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li className="google-plus"><a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li className="pinterest"><a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li className="linkedin"><a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="uk-container uk-container-center alt">
                                    <div className="uk-grid">
                                        <div className="uk-width-1-1">
                                            <div className="line"></div>
                                        </div>
                                    </div>
                                </div>
                                <div className="uk-container uk-container-center alt">
                                    <div className="uk-grid">
                                        <div className="uk-width-9-10 uk-push-1-10">
                                            <div className="player-total-info">
                                                <p><strong>Aenean lobortis eu nibh eu euismod. In ullamcorper, velit sed tincidunt tempor, ante elit euismod magna, vel scelerisque odio velit nec arcu. Nulla dolor sapien, vehicula sit amet augue nec, consequat aliquet velit. Donec euismod interdum mauris id dapibus.</strong></p>
                                                <p>Fusce mollis ante dolor, in tincidunt justo vehicula id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam nec tortor sit amet metus vestibulum sagittis. Donec sed dignissim nisi. Pellentesque ac dolor vestibulum, sollicitudin leo ac, pretium nulla. Mauris sit amet mattis turpis, eu molestie lectus. Donec semper sem ac dolor euismod vulputate. Quisque massa elit, viverra et euismod nec, porta eget elit. Aliquam molestie tempus ex, ut iaculis tortor eleifend ac. Aliquam id massa facilisis, iaculis orci et, ornare augue. Fusce eget sollicitudin est. Fusce ultrices enim ut aliquam sollicitudin.</p>
                                                <ul>
                                                    <li>Maecenas a nisl in turpis fermentum imperdiet;</li>
                                                    <li>Nullam at diam et odio consectetur fermentum;</li>
                                                    <li>Maecenas volutpat lacus quis sem congue egestas;</li>
                                                    <li>Quisque sit amet nunc quis quam tincidunt scelerisque;</li>
                                                    <li>Maecenas vestibulum ligula sed augue dictum, quis tincidunt nulla pellentesque;</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div>
                            <div>
                                <div className="other-players-wrap">
                                    <div className="uk-container uk-container-center alt">
                                        <div className="uk-grid">
                                            <div className="uk-width-1-1">
                                                <h3 className="other-post-title">Other <span>Players</span></h3>
                                                <div dir="ltr" className="uk-slidenav-position player-slider" data-uk-slider="">
                                                    <div className="uk-slider-container">
                                                        <div className="player-slider-btn">
                                                            <a draggable="false" href="../index.html" className="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
                                                            <a draggable="false" href="../index.html" className="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
                                                        </div>
                                                        <ul className="uk-slider uk-grid uk-grid-width-1-4">
                                                            <li className="player-item">
                                                                <div className="player-article">
                                                                    <div className="wrapper">
                                                                        <div className="img-wrap">
                                                                            <div className="player-number">
                                                                                <span>47</span>
                                                                            </div>
                                                                            <div className="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                            <img draggable="false" src={striker1} className="img-polaroid" alt="Joe Perez" title="Joe Perez"/></a>                                    
                                                                            <ul className="socials">
                                                                                <li className="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div className="info">
                                                                            <div className="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Joe Perez</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div className="position">STRIKER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li className="player-item">
                                                                <div className="player-article">
                                                                    <div className="wrapper">
                                                                        <div className="img-wrap">
                                                                            <div className="player-number">
                                                                                <span>21</span>
                                                                            </div>
                                                                            <div className="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                            <img draggable="false" src={goalkeeper} className="img-polaroid" alt="Steven Webb" title="Steven Webb"/></a>                                    
                                                                            <ul className="socials">
                                                                                <li className="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div className="info">
                                                                            <div className="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Steven Webb</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div className="position">DEFENDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li className="player-item">
                                                                <div className="player-article">
                                                                    <div className="wrapper">
                                                                        <div className="img-wrap">
                                                                            <div className="player-number">
                                                                                <span>07</span>
                                                                            </div>
                                                                            <div className="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                            <img draggable="false" src={defender1} className="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza"/></a>                                    
                                                                            <ul className="socials">
                                                                                <li className="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div className="info">
                                                                            <div className="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Benjamin Mendoza</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div className="position">DEFENDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li className="player-item">
                                                                <div className="player-article">
                                                                    <div className="wrapper">
                                                                        <div className="img-wrap">
                                                                            <div className="player-number">
                                                                                <span>36</span>
                                                                            </div>
                                                                            <div className="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                            <img draggable="false" src={striker1} className="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera"/></a>                                    
                                                                            <ul className="socials">
                                                                                <li className="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div className="info">
                                                                            <div className="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Christopher Herrera</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div className="position">STRIKER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li className="player-item">
                                                                <div className="player-article">
                                                                    <div className="wrapper">
                                                                        <div className="img-wrap">
                                                                            <div className="player-number">
                                                                                <span>23</span>
                                                                            </div>
                                                                            <div className="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                            <img draggable="false" src={striker} className="img-polaroid" alt="Bobby Guerrero" title="Bobby Guerrero"/></a>                                    
                                                                            <ul className="socials">
                                                                                <li className="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div className="info">
                                                                            <div className="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Bobby Guerrero</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div className="position">MIDFIELDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li className="player-item">
                                                                <div className="player-article">
                                                                    <div className="wrapper">
                                                                        <div className="img-wrap">
                                                                            <div className="player-number">
                                                                                <span>14</span>
                                                                            </div>
                                                                            <div className="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                            <img draggable="false" src={defender1} className="img-polaroid" alt="Douglas Pain" title="Douglas Pain"/></a>                                    
                                                                            <ul className="socials">
                                                                                <li className="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div className="info">
                                                                            <div className="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Douglas Pain</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div className="position">DEFENDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                            <li className="player-item">
                                                                <div className="player-article">
                                                                    <div className="wrapper">
                                                                        <div className="img-wrap">
                                                                            <div className="player-number">
                                                                                <span>35</span>
                                                                            </div>
                                                                            <div className="bio"><span><a draggable="false" href="player.html">bio</a></span></div>
                                                                            <a draggable="false" href="player.html">
                                                                            <img draggable="false" src={goalkeeper} className="img-polaroid" alt="Johnny Thompson" title="Johnny Thompson"/></a>                                    
                                                                            <ul className="socials">
                                                                                <li className="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li className="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div className="info">
                                                                            <div className="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.html">Johnny Thompson</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div className="position">goalkeeper</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
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

export default Player
