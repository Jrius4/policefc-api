import React from 'react';
import striker from '../images/players/striker.jpg';
import striker1 from '../images/players/striker1.jpg';
import defender from '../images/players/defender.jpg';
import defender1 from '../images/players/defender1.jpg';
import goalkeeper from '../images/players/goalkeeper.jpg';
import goalkeeper1 from '../images/players/goalkeeper1.jpg';
import midfielder from '../images/players/midfielder.jpg';


const TeamHomepage = () => {
  return (

    <div className="tm-bottom-b-box tm-full-width  ">
    <div className="uk-container uk-container-center">
        <section id="tm-bottom-b" className="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div className="uk-width-1-1">
                <div className="uk-panel">
                    <div className="our-team-main-wrap">
                        <div className="uk-container uk-container-center">
                            <div className="uk-grid" data-uk-grid-match="">
                                <div className="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                    <div className="our-team-wrap">
                                        <div className="our-team-title">
                                            <h3>Our <span>Team</span></h3>
                                        </div>
                                        <div className="our-team-text">
                                            <p>Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.</p>
                                        </div>
                                        <div className="our-team-text additional">
                                            <p>Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.</p>
                                        </div>
                                        <div className="team-read-wrap"><a className="team-read-more" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>

                                <div className=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                    <div className="player-article">
                                        <div className="wrapper">
                                            <div className="img-wrap">
                                                <div className="player-number"><span>21</span>
                                                </div>
                                                <div className="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src={striker} className="img-polaroid" alt="Steven Webb" title="Steven Webb"/>
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
                                                        <a href="player.html">Steven Webb </a>
                                                    </h3>
                                                </div>
                                                <div className="position">DEFENDER </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div className=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                    <div className="player-article">
                                        <div className="wrapper">
                                            <div className="img-wrap">
                                                <div className="player-number">
                                                    <span>19</span>
                                                </div>
                                                <div className="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src={striker1} className="img-polaroid" alt="John Montgomery" title="John Montgomery"/>
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
                                                        <a href="player.html">John Montgomery </a>
                                                    </h3>
                                                </div>
                                                <div className="position">STRIKER</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div className=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_81747b4426a9882884c1f83eda78844f">
                                    <div className="player-article">
                                        <div className="wrapper">
                                            <div className="img-wrap">
                                                <div className="player-number">
                                                    <span>35</span>
                                                </div>
                                                <div className="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src={goalkeeper} className="img-polaroid" alt="Johnny Thompson" title="Johnny Thompson"/>
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
                                                    <h3><a href="player.html">Johnny Thompson</a></h3>
                                                </div>
                                                <div className="position">goalkeeper </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div className=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                    <div className="player-article">
                                        <div className="wrapper">
                                            <div className="img-wrap">
                                                <div className="player-number"><span>07</span>
                                                </div>
                                                <div className="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src={goalkeeper1} className="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza"/>
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
                                                        <a href="player.html">Benjamin Mendoza </a>
                                                    </h3>
                                                </div>
                                                <div className="position">DEFENDER </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div className=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                    <div className="player-article">
                                        <div className="wrapper">
                                            <div className="img-wrap">
                                                <div className="player-number"><span>47 </span>
                                                </div>
                                                <div className="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src={defender1} className="img-polaroid" alt="Joe Perez" title="Joe Perez"/>
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
                                                        <a href="player.html">Joe Perez </a>
                                                    </h3>
                                                </div>
                                                <div className="position">STRIKER </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div className=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_4d957768dcc72908ab3b9e28dc867052">
                                    <div className="player-article">
                                        <div className="wrapper">
                                            <div className="img-wrap">
                                                <div className="player-number"><span>23 </span>
                                                </div>
                                                <div className="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src={midfielder} className="img-polaroid" alt="Bobby Guerrero" title="Bobby Guerrero"/>
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
                                                        <a href="player.html">Bobby Guerrero  </a>
                                                    </h3>
                                                </div>
                                                <div className="position">MIDFIELDER </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div className=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                    <div className="player-article">
                                        <div className="wrapper">
                                            <div className="img-wrap">
                                                <div className="player-number"><span>14 </span>
                                                </div>
                                                <div className="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src={defender} className="img-polaroid" alt="Douglas Pain" title="Douglas Pain"/>
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
                                                        <a href="player.html">Douglas Pain </a>
                                                    </h3>
                                                </div>
                                                <div className="position">DEFENDER </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div className=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                    <div className="player-article">
                                        <div className="wrapper">
                                            <div className="img-wrap">
                                                <div className="player-number"><span>36 </span>
                                                </div>
                                                <div className="bio"><span><a href="player.html">bio</a></span>
                                                </div>
                                                <a href="player.html">
                                                    <img src={midfielder} className="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera"/>
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
                                                        <a href="player.html">Christopher Herrera</a>
                                                    </h3>
                                                </div>
                                                <div className="position">STRIKER </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div className="our-team-btn"><a href="players.html"><span>More Info</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>

  )
}

export default TeamHomepage
