import React from 'react';
import Moment from 'react-moment';
import {connect} from 'react-redux';
import PropTypes from "prop-types";
import footerLogo from '../images/footer-logo-img.png';
import team1 from '../images/teams/team-ava1.png';
import team2 from '../images/teams/team-ava2.png';
import team3 from '../images/teams/team-ava3.png';
import team4 from '../images/teams/team-ava4.png';

import {getPost} from '../../../actions/postActions';
import {getMatches} from '../../../actions/matchActions';

class Footer extends React.Component{
    constructor(){
        super();
        this.state = {
            matches:[],
            loading:false
        }
    }
    componentDidMount(){
        this.props.getMatches
    }
  render(){
      const {matches} = this.props.match

    return (

        <div className="bottom-wrapper">
        <div className="tm-bottom-f-box  ">
            <div className="uk-container uk-container-center">
                <section id="tm-bottom-f" className="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
    
                    <div className="uk-width-1-1">
                        <div className="uk-panel">
                            <div className="footer-logo">
                                <a href="../index.html"><img src={footerLogo} alt=""/><span>Police</span>.f.c</a>
                            </div>
                            <div className="footer-socials">
                                <div className="social-top">
                                    <a href="#"><span className="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                    <a href="#"><span className="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                    <a href="#"><span className="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                    <a href="#"><span className="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                    <a href="#"><span className="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                    <a href="#"><span className="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                    <a href="#"><span className="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
                                </div>
                            </div>
                            <div className="clear"></div>
    
                            <p className="footer-about-text">
                                Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    
        <div className="tm-bottom-g-box  ">
            <div className="uk-container uk-container-center">
                <section id="tm-bottom-g" className="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
    
                    <div className="uk-width-1-1 uk-width-large-1-2">
                        <div className="uk-panel">
                            <div className="match-list-wrap foot">
                                <div id="carusel-7" className="uk-slidenav-position" data-uk-slideshow="{ height : 37, autoplay:true, animation:'scroll' }">
                                    <div className="last-match-top">
                                        <div className="last-match-title">Last match</div>
                                        <div className="footer-slider-btn">
                                            <a href="../index.html" className="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                            <a href="../index.html" className="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                        </div>
                                        <div className="clear"></div>
                                    </div>
                                    <ul className="uk-slideshow">

                                        {
                                            matches.map((item,index)=>{
                                                return (
                                                    <li key={index} className="" aria-hidden="true">
                                            <div className="match-list-item alt foot">
                                                <div className="wrapper">
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team1} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/>
                                                        </a>
                                                    </div>
                                                    <div className="team-name">
                                                        Arua F.C {item.id}</div>
                                                    <div className="versus">VS</div>
    
                                                    <div className="team-name">
                                                        Police F.C </div>
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team2} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/>
                                                        </a>
                                                    </div>
                                                    <a className="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                                )
                                            })
                                        }
                                        <li className="" aria-hidden="true">
                                            <div className="match-list-item alt foot">
                                                <div className="wrapper">
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team1} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/>
                                                        </a>
                                                    </div>
                                                    <div className="team-name">
                                                        England </div>
                                                    <div className="versus">VS</div>
    
                                                    <div className="team-name">
                                                        Amsterdam </div>
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team2} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/>
                                                        </a>
                                                    </div>
                                                    <a className="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
    
                                        <li className="" aria-hidden="true">
                                            <div className="match-list-item alt foot">
                                                <div className="wrapper">
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team1} className="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/>
                                                        </a>
                                                    </div>
                                                    <div className="team-name">
                                                        Cambridgehire </div>
                                                    <div className="versus">VS</div>
    
                                                    <div className="team-name">
                                                        china </div>
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team3} className="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/>
                                                        </a>
                                                    </div>
                                                    <a className="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li className="" aria-hidden="true">
                                            <div className="match-list-item alt foot">
                                                <div className="wrapper">
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team4} className="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)"/>
                                                        </a>
                                                    </div>
                                                    <div className="team-name">
                                                        Cambridgehire </div>
                                                    <div className="versus">VS</div>
    
                                                    <div className="team-name">
                                                        china </div>
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team4} className="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)"/>
                                                        </a>
                                                    </div>
                                                    <a className="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li className="" aria-hidden="true">
                                            <div className="match-list-item alt foot">
                                                <div className="wrapper">
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team1} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/>
                                                        </a>
                                                    </div>
                                                    <div className="team-name">
                                                        England </div>
                                                    <div className="versus">VS</div>
    
                                                    <div className="team-name">
                                                        Amsterdam </div>
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team3} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/>
                                                        </a>
                                                    </div>
                                                    <a className="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="false">
                                            <div className="match-list-item alt foot">
                                                <div className="wrapper">
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team4} className="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/>
                                                        </a>
                                                    </div>
                                                    <div className="team-name">
                                                        Cambridgehire </div>
                                                    <div className="versus">VS</div>
    
                                                    <div className="team-name">
                                                        china </div>
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team2} className="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/>
                                                        </a>
                                                    </div>
                                                    <a className="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li className="" aria-hidden="true">
                                            <div className="match-list-item alt foot">
                                                <div className="wrapper">
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team1} className="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)"/>
                                                        </a>
                                                    </div>
                                                    <div className="team-name">
                                                        King </div>
                                                    <div className="versus">VS</div>
    
                                                    <div className="team-name">
                                                        china </div>
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team4} className="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)"/>
                                                        </a>
                                                    </div>
                                                    <a className="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li className="" aria-hidden="true">
                                            <div className="match-list-item alt foot">
                                                <div className="wrapper">
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team2} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/>
                                                        </a>
                                                    </div>
                                                    <div className="team-name">
                                                        England </div>
                                                    <div className="versus">VS</div>
    
                                                    <div className="team-name">
                                                        Amsterdam </div>
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team3} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/>
                                                        </a>
                                                    </div>
                                                    <a className="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li className="" aria-hidden="true">
                                            <div className="match-list-item alt foot">
                                                <div className="wrapper">
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team4} className="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/>
                                                        </a>
                                                    </div>
                                                    <div className="team-name">
                                                        Cambridgehire </div>
                                                    <div className="versus">VS</div>
    
                                                    <div className="team-name">
                                                        china </div>
                                                    <div className="logo">
                                                        <a href="match-single.html">
                                                            <img src={team2} className="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/>
                                                        </a>
                                                    </div>
                                                    <a className="read-more" href="match-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
    
    
    
    
                            </div>
                        </div>
                    </div>
    
                    <div className="uk-width-1-1 uk-width-large-1-2">
                        <div  className="uk-panel">
                            <div className="acymailing_module" id="acymailing_module_formAcymailing54111">
                                <div className="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                                    <form id="formAcymailing54111" method="post" name="formAcymailing54111">
                                        <div className="acymailing_module_form">
                                            <div className="mail-title">Newsletters</div>
                                            <div className="acymailing_introtext">Suspendisse sodales, magna at dignissim cursus, velit ex porttitor eros.</div>
                                            <div className="clear"></div>
                                            <div className="space"></div>
                                            <table className="acymailing_form">
                                                <tbody>
                                                    <tr>
                                                        <td className="acyfield_email acy_requiredField">
                                                            <span className="mail-wrap">
                                                                <input id="user_email_formAcymailing54111" onfocus="if(this.value == 'Enter your email') this.value = '';" onblur="if(this.value=='') this.value='Enter your email';" className="inputbox" name="user[email]" style={{width:'80%'}} value="Enter your email" title="Enter your email" type="text"/>
                                                        </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
    
                                                        <td className="acysubbuttons">
                                                            <span className="submit-wrap">
                                                                <span className="submit-wrapper">
                                                                    <input className="button subbutton btn btn-primary" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('The form could not be submitted '+err);return false;}" type="submit"/>
                                                                </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    
        <footer id="tm-footer" className="tm-footer">
    
    
            <div className="uk-panel">
                <div className="uk-container uk-container-center">
                    <div className="uk-grid">
                        <div className="uk-width-1-1">
                            <div className="footer-wrap">
                                <div className="foot-menu-wrap">
                                    <ul className="nav menu">
                                        <li className="item-165"><a href="about.html">About</a>
                                        </li>
                                        <li className="item-166"><a href="players.html">Players</a>
                                        </li>
                                        <li className="item-167"><a href="match-list.html">Match</a>
                                        </li>
                                        <li className="item-168"><a href="results.html">Results</a>
                                        </li>
                                        <li className="item-169"><a href="news.html">News</a>
                                        </li>
                                    </ul>
                                </div>
                                <div className="copyrights">Copyright © <Moment format="YYYY">{Date.now()}</Moment> <a href="../index.html">leero sports Team</a>. All Rights Reserved.</div>
                                <div className="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
    </div>
      )
  }
}

Footer.propTypes = {
    getMatches:PropTypes.func.isRequired,
    match:PropTypes.object.isRequired,
    getPost:PropTypes.func.isRequired
  }
  const mapStateToProps = state =>({
    match:state.match,
    post:state.post,
  })  

export default connect(mapStateToProps,{getMatches,getPost})(Footer)
