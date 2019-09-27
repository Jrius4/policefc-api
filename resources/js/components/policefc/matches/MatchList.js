import React from 'react';
import {Link} from 'react-router-dom';
import pageHead from '../images/page-headers/head-bg.jpg';
import team from '../images/teams/team-ava.png';
import team2 from '../images/teams/team-ava1.png';
import team3 from '../images/teams/team-ava2.png';
import team4 from '../images/teams/team-ava3.png';
import news from '../images/news/news.jpg';
import news1 from '../images/news/news1.jpg';
import matchWatch from '../images/match-list-img-bottom.jpg';

const MatchList = () => {
  return (
    <div>
        
        <div className="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div className="uk-container uk-container-center">
                <section id="tm-top-a" className="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div className="uk-width-1-1 uk-row-first">
                        <div className="uk-panel">
                            <div className="uk-cover-background uk-position-relative head-match-wrap" style={{height: '590px', backgroundImage: `url(${pageHead})`}}>
                                <img className="uk-invisible" src={pageHead} alt=""/>
                                <div className="uk-position-cover uk-flex-center head-news-title">
                                    <h1>
                                        Match List
                                    </h1>
                                    <div className="clear"></div>
                                    <div className="uk-container uk-container-center">
                                        <div className="uk-grid no-marg">
                                            <div className="uk-width-6-10 va-single-next-match match-view-wrap">
                                                <div className="va-main-next-wrap">
                                                    <div className="match-list-single">
                                                        <div className="match-list-item">
                                                            <div className="count">
                                                                <div id="countdown4">
                                                                    <div className="counter_container"></div>
                                                                </div>
                                                                <div className="clearfix"></div>
                                                                
                                                            </div>
                                                            <div className="clear"></div>
                                                            <div className="half right">
                                                                <div className="va-wrap">
                                                                    <div className="logo">
                                                                        <Link to="/match-report">
                                                                        <img src={team} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                             
                                                                    </div>
                                                                    <div className="team-name">
                                                                        England                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div className="versus">VS</div>
                                                            <div className="half left">
                                                                <div className="va-wrap">
                                                                    <div className="team-name">
                                                                        Amsterdam                    
                                                                    </div>
                                                                    <div className="logo">
                                                                        <Link to="/match-report">
                                                                        <img src={team2} className="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div className="clear"></div>
                                                            <div className="date">
                                                                <i className="uk-icon-calendar"></i>
                                                                November 14, 2015 | 12:00 am            
                                                            </div>
                                                            <div className="clear"></div>
                                                            <div className="location">
                                                                <i className="uk-icon-map-marker"></i>
                                                                <address>
                                                                    Cambridgeshire UK               <br/><br/>
                                                                </address>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div className="uk-containe alt">
            <ul className="uk-breadcrumb">
                <li><a href="../index-2.html">Home</a></li>
                <li className="uk-active"><span>Match list</span></li>
            </ul>
        </div>



        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
                    <main id="tm-content" class="tm-content">
                        <div class="match-list-wrap">
                            <div class="match-list-item">
                                <div class="date">
                                    <span>14</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team2} class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    England                
                                </div>
                                <div class="team-score">
                                    2                    
                                </div>
                                <div class="score-separator">:</div>
                                <div class="team-score">
                                    0                    
                                </div>
                                <div class="team-name">
                                    Amsterdam                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>29</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team3} class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    Cambridgehire                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    china                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team4} class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>20</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    Cambridgehire                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    china                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>14</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team2} class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    England                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    Amsterdam                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>29</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team3} class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    Cambridgehire                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    china                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team4} class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>20</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    King                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    china                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>14</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team2} class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    England                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    Amsterdam                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>29</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team3} class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    Cambridgehire                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    china                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team4} class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>20</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    King                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    china                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>14</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team2} class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    England                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    Amsterdam                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team3} class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>29</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team4} class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    Cambridgehire                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    china                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>20</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="King VS china (2015-11-20) - Copy" title="King VS china (2015-11-20) - Copy"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    King                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    china                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team2} class="img-polaroid" alt="King VS china (2015-11-20) - Copy" title="King VS china (2015-11-20) - Copy"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>12</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="Italy VS Chalenger (2015-11-12)" title="Italy VS Chalenger (2015-11-12)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    Italy                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    Chalenger                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team3} class="img-polaroid" alt="Italy VS Chalenger (2015-11-12)" title="Italy VS Chalenger (2015-11-12)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>12</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team4} class="img-polaroid" alt="Croatia VS Roman (2015-11-12)" title="Croatia VS Roman (2015-11-12)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    Croatia                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    Roman                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="Croatia VS Roman (2015-11-12)" title="Croatia VS Roman (2015-11-12)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                            <div class="match-list-item">
                                <div class="date">
                                    <span>12</span>
                                    Nov                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team} class="img-polaroid" alt="Uventus VS Chalenger (2015-11-12)" title="Uventus VS Chalenger (2015-11-12)"/></Link>                                     
                                </div>
                                <div class="team-name">
                                    Uventus                
                                </div>
                                <div class="versus">VS</div>
                                <div class="team-name">
                                    Chalenger                
                                </div>
                                <div class="logo">
                                    <Link to="/match-report">
                                    <img src={team2} class="img-polaroid" alt="Uventus VS Chalenger (2015-11-12)" title="Uventus VS Chalenger (2015-11-12)"/></Link>                                    
                                </div>
                                <div class="location">
                                    <address>
                                        Cambridgeshire UK               <br/><br/>
                                    </address>
                                </div>
                                <div class="va-view-wrap">
                                    <Link class="view-article" to="/match-report">view</Link>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <aside class="tm-sidebar-a uk-width-medium-1-4 uk-pull-3-4 uk-row-first">
                    <div class="uk-panel categories-sidebar">
                        <h3 class="uk-panel-title">Categories</h3>
                        <div>
                            <ul class="nav menu">
                                <li class="item-3">             
                                    <a href="news.html">
                                    Overall <span class="label">(3)</span>
                                    </a>            
                                </li>
                                <li class="item-4">             
                                    <a href="news.html">
                                    Players <span class="label">(2)</span>
                                    </a>            
                                </li>
                                <li class="item-2">             
                                    <a href="news.html">
                                    Life <span class="label">(4)</span>
                                    </a>            
                                </li>
                                <li class="item-5 parent">
                                    <a href="news.html">
                                    Entertainment <span class="label">(1)</span>
                                    </a>            
                                    <ul class="">
                                        <li class="item-7">
                                            <a href="news.html">
                                            Art Style <span class="label">(3)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item-6">             
                                    <a href="news.html">
                                    Uncategorized <span class="label">(3)</span>
                                    </a>            
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="uk-panel newsletter-sidebar">
                        <h3 class="uk-panel-title">Newsletter</h3>
                        <div class="acymailing_modulenewsletter-sidebar" id="acymailing_module_formAcymailing40192">
                            <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing40192">
                                <form id="formAcymailing40192" action="http://h-sportak.torbara.com/index.php/match" onsubmit="return submitacymailingform('optin','formAcymailing40192')" method="post" name="formAcymailing40192">
                                    <div class="acymailing_module_form">
                                        <div class="mail-title">Newsletters</div>
                                        <div class="acymailing_introtext">Donec at ex aliquet, porttitor lacus eget</div>
                                        <div class="clear"></div>
                                        <div class="space"></div>
                                        <table class="acymailing_form">
                                            <tbody>
                                                <tr>
                                                    <td class="acyfield_email acy_requiredField">
                                                        <span class="mail-wrap">
                                                        <input id="user_email_formAcymailing40192" onfocus="if(this.value == 'Email') this.value = '';" onblur="if(this.value=='') this.value='Email';" class="inputbox" name="user[email]" style={{width:'80%'}} value="Email" title="Email" type="text"/>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="acysubbuttons">
                                                        <span class="submit-wrap">
                                                        <span class="submit-wrapper">
                                                        <input class="button subbutton btn btn-primary" value=" " name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing40192'); }catch(err){alert('The form could not be submitted '+err);return false;}" type="submit"/>
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
                    <div class="uk-panel news-sidebar">
                        <h3 class="uk-panel-title">Latest News</h3>
                        int(3)
                        <article class="has-context ">
                            <div class="latest-news-wrap">
                                <div class="img-wrap">
                                    <a href="news-single.html">
                                    <img src={news} class="img-polaroid" alt=""/>
                                    </a>        
                                </div>
                                <div class="info">
                                    <div class="date">
                                        November 25, 2015            
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="news-single.html">
                                            Suspendisse purus enim, dictum sed lorem ac, sodales maximus est                    </a>        
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="has-context ">
                            <div class="latest-news-wrap">
                                <div class="img-wrap">
                                    <a href="news-single.html">
                                    <img src={news1} class="img-polaroid" alt=""/>
                                    </a>        
                                </div>
                                <div class="info">
                                    <div class="date">
                                        November 20, 2015            
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="news-single.html">
                                            Suspendisse purus enim, dictum sed lorem ac, sodales maximus est                    </a>        
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="has-context ">
                            <div class="latest-news-wrap">
                                <div class="img-wrap">
                                    <a href="news-single.html">
                                    <img src={news} class="img-polaroid" alt=""/>
                                    </a>        
                                </div>
                                <div class="info">
                                    <div class="date">
                                        November 20, 2015            
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="news-single.html">
                                            Cum sociis natoque penatibus et magnis dis parturient                    </a>       
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </aside>
            </div>
        </div>

        <div class="tm-bottom-e-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-e" class="tm-bottom-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <img src={matchWatch} alt=""/>
                        </div>
                    </div>
                </section>
            </div>
        </div>
      
    </div>
  )
}

export default MatchList
