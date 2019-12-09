import React from 'react'
import Moment from 'react-moment'
import Parser from 'html-react-parser'

const ArticleSingle = (props) => {
  return (
    <article>
                                <div className="clearfix"></div>
                                {props.image!==null?(<div className="article-slider">
                                    <div id="carusel-11-30" className="uk-slidenav-position" data-uk-slideshow="{ height : 510 }">
                                        <ul className="uk-slideshow">
                                            <li>
                                                <div style={{backgroundImage: `url(img/${props.image})`}} className="uk-cover-background uk-position-cover"></div>
                                                <img style={{width: '100%', height: 'auto',opacity: 0}} src={`img/${props.image}`} alt=""/>
                                            </li>
                                        </ul>
                                        <div className="article-slider-btn">
                                            <a href="../index.html" className="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                            <a href="../index.html" className="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                        </div>
                                    </div>
                                </div>):null}
                                <div className="article-param">
                                    <div className="date">
                                        <i className="uk-icon-calendar"></i>
                                        <Moment format={`LLLL`} date={props.date}></Moment>           
                                    </div>
                                    <div className="author">
                                        <i className="uk-icon-user"></i>
                                        <a className="filter-link" data-original-title="Show only articles of <b>Guest</b>" href="#" rel="nofollow">{props.author.name}</a>            
                                    </div>
                                    <div className="categories">
                                        <i className="uk-icon-list-ul"></i>
                                        <a href="#">{props.category.title}</a>            
                                    </div>
                                </div>
                                <div className="article-single-text">
                                   {Parser(props.body)}
                                </div>
                                {false?(<div className="share-wrap">
                                    <div className="share-title">share</div>
                                    <script type="text/javascript" src="http://yastatic.net/share/share.js" charSet="utf-8"></script>
                                    <div className="yashare-auto-init" data-yasharel10n="en" data-yasharetype="none" data-yasharequickservices="facebook,twitter,gplus"><span className="b-share"><a rel="nofollow" target="_blank" title="Facebook" className="b-share__handle b-share__link b-share-btn__facebook" href="https://share.yandex.net/go.xml?service=facebook&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="facebook"><span className="b-share-icon b-share-icon_facebook"></span></a><a rel="nofollow" target="_blank" title="Twitter" className="b-share__handle b-share__link b-share-btn__twitter" href="https://share.yandex.net/go.xml?service=twitter&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="twitter"><span className="b-share-icon b-share-icon_twitter"></span></a><a rel="nofollow" target="_blank" title="Google Plus" className="b-share__handle b-share__link b-share-btn__gplus" href="https://share.yandex.net/go.xml?service=gplus&amp;url=http%3A%2F%2Fsport.statiolh.bget.ru%2Findex.php%2Fnews%2Fitem%2F2-life%2F30-bla-bla-bla&amp;title=Your%20Joomla!%20Site%20-%20Suspendisse%20purus%20enim%2C%20dictum%20sed%20lorem%20ac%2C%20sodales%20maximus%20est%20-%20Life%20-%20News" data-service="gplus"><span className="b-share-icon b-share-icon_gplus"></span></a></span></div>
                                </div>):null}
                            </article>
  )
}

export default ArticleSingle;
