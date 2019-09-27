import React from 'react';
import pageHeader from '../images/page-headers/head-bg-match.jpg';
import news from '../images/news/news.jpg';
import news1 from '../images/news/news1.jpg';
import news3 from '../images/news/news1.jpg';
import news2 from '../images/news/news1.jpg';

const NewsList = () => {
  return (
    <div>

        
<div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style={{height: '290px',backgroundImage: `url(${pageHeader})`}}>
                                <img class="uk-invisible" src={pageHeader} alt="" height="290" width="1920"/>
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>
                                        News
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


      
      <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li class="uk-active"><span>News</span></li>
            </ul>
        </div>

        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
                   
                    <div class="contentpaneopen">
                       <main id="tm-content" class="tm-content">
                            <div class="uk-grid" data-uk-grid-match="">
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src={news1} class="img-polaroid" alt=""/>
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 25, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">
                                                    Suspendisse purus enim, dictum sed lorem ac, sodales maximus est                    </a>        
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i><span>3</span></div>
                                        <div class="read-more"><a href="news-single.html">Read More</a></div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src={news2} class="img-polaroid" alt=""/>
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 20, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">
                                                    Suspendisse purus enim, dictum sed lorem ac, sodales maximus est                    </a>        
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i><span>3</span></div>
                                        <div class="read-more"><a href="news-single.html">Read More</a></div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src={news3} class="img-polaroid" alt=""/>
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 20, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">
                                                    Cum sociis natoque penatibus et magnis dis parturient                    </a>       
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i><span>2</span></div>
                                        <div class="read-more"><a href="news-single.html">Read More</a></div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src={news1} class="img-polaroid" alt=""/>
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 20, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">
                                                    Vestibulum ante ipsum primis in                    </a>     
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i><span>3</span></div>
                                        <div class="read-more"><a href="news-single.html">Read More</a></div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src={news} class="img-polaroid" alt=""/>
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 20, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">
                                                    Nullam enim ante, volutpat non viverra eget                    </a>     
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i><span>3</span></div>
                                        <div class="read-more"><a href="news-single.html">Read More</a></div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src={news1} class="img-polaroid" alt=""/>
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 20, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus                    </a>        
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i><span>2</span></div>
                                        <div class="read-more"><a href="news-single.html">Read More</a></div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src={news1} class="img-polaroid" alt=""/>
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 20, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">
                                                    Nunc tincidunt dictum nisi                    </a>      
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i><span>1</span></div>
                                        <div class="read-more"><a href="news-single.html">Read More</a></div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src={news} class="img-polaroid" alt=""/>
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 19, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">
                                                    Nunc in interdum neque. Mauris tincidunt molestie felis                    </a>     
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i><span>2</span></div>
                                        <div class="read-more"><a href="news-single.html">Read More</a></div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single.html">
                                            <img src={news1} class="img-polaroid" alt=""/>
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                November 19, 2015            
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">
                                                    Vivamus in risus nulla. Fusce volutpat varius odio                    </a>      
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-comments"></i><span>3</span></div>
                                        <div class="read-more"><a href="news-single.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                            <form method="post">
                                <div class="pagination">
                                    <ul class="pagination-list">
                                        <li class="pagination-start"><span class="pagenav">Start</span></li>
                                        <li class="pagination-prev"><span class="pagenav">Prev</span></li>
                                        <li><span class="pagenav">1</span></li>
                                        <li><a href="#" class="pagenav">2</a></li>
                                        <li class="pagination-next"><a data-original-title="Next" title="" href="#" class="hasTooltip pagenav">Next</a></li>
                                        <li class="pagination-end"><a data-original-title="End" title="" href="#" class="hasTooltip pagenav">End</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </main>
                    </div>
   

                </div>
                <aside class="tm-sidebar-a uk-width-medium-1-4 uk-pull-3-4 uk-row-first">
                    <div class="uk-panel categories-sidebar">
                        <h3 class="uk-panel-title">Categories</h3>
                        <div>
                            <ul class="nav menu">
                                <li class="item-3">             
                                    <a href="#">
                                    Overall <span class="label">(3)</span>
                                    </a>            
                                </li>
                                <li class="item-4">             
                                    <a href="#">
                                    Players <span class="label">(2)</span>
                                    </a>            
                                </li>
                                <li class="item-2">             
                                    <a href="#">
                                    Life <span class="label">(4)</span>
                                    </a>            
                                </li>
                                <li class="item-5 parent">
                                    <a href="#">
                                    Entertainment <span class="label">(1)</span>
                                    </a>            
                                    <ul class="">
                                        <li class="item-7">
                                            <a href="#">
                                            Art Style <span class="label">(3)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item-6">             
                                    <a href="#">
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
                                <form id="formAcymailing40192" onsubmit="return submitacymailingform('optin','formAcymailing40192')" method="post" name="formAcymailing40192">
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
                        <article class="has-context ">
                            <div class="latest-news-wrap">
                                <div class="img-wrap">
                                    <a href="#">
                                    <img src={news2} class="img-polaroid" alt=""/>
                                    </a>        
                                </div>
                                <div class="info">
                                    <div class="date">
                                        November 25, 2015            
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="#">
                                            Suspendisse purus enim, dictum sed lorem ac, sodales maximus est                    </a>        
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="has-context ">
                            <div class="latest-news-wrap">
                                <div class="img-wrap">
                                    <a href="#">
                                    <img src={news1} class="img-polaroid" alt=""/>
                                    </a>        
                                </div>
                                <div class="info">
                                    <div class="date">
                                        November 20, 2015            
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="#">
                                            Suspendisse purus enim, dictum sed lorem ac, sodales maximus est                    </a>        
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="has-context ">
                            <div class="latest-news-wrap">
                                <div class="img-wrap">
                                    <a href="#">
                                    <img src={news} class="img-polaroid" alt=""/>
                                    </a>        
                                </div>
                                <div class="info">
                                    <div class="date">
                                        November 20, 2015            
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="#">
                                            Cum sociis natoque penatibus et magnis dis parturient                    </a>       
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="uk-panel tags-sidebar">
                        <h3 class="uk-panel-title">Tags</h3>
                        <div class="contentpaneopen">
                            <ul id="tag-list-mod-tagcloud" class="tag_list">
                                <li class="tag_element" id="tag-0"><a href="#" rel="nofollow"><span class="tag">Soccer</span></a></li>
                                <li class="tag_element" id="tag-1"><a href="#" rel="nofollow"><span class="tag">Kick</span></a></li>
                                <li class="tag_element" id="tag-2"><a href="#" rel="nofollow"><span class="tag">Player</span></a></li>
                                <li class="tag_element" id="tag-3"><a href="#" rel="nofollow"><span class="tag">Action</span></a></li>
                                <li class="tag_element" id="tag-4"><a href="#" rel="nofollow"><span class="tag">Stadium</span></a></li>
                                <li class="tag_element" id="tag-5"><a href="#" rel="nofollow"><span class="tag">Ball</span></a></li>
                                <li class="tag_element" id="tag-6"><a href="#" rel="nofollow"><span class="tag">Goal</span></a></li>
                                <li class="tag_element" id="tag-7"><a href="#" rel="nofollow"><span class="tag">Boots</span></a></li>
                                <li class="tag_element" id="tag-8"><a href="#" rel="nofollow"><span class="tag">Kids</span></a></li>
                                <li class="tag_element" id="tag-9"><a href="#" rel="nofollow"><span class="tag">Life</span></a></li>
                            </ul>
                        </div>
                        <div style={{clear: 'both'}}></div>
                    </div>
                </aside>
            </div>
        </div>

  
    </div>
  )
}

export default NewsList
