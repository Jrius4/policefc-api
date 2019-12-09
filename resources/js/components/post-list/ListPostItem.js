import React from 'react';
import Moment from 'react-moment';
import Parser from 'html-react-parser'
import {Link} from 'react-router-dom'

const ListPostItem = (props) => {
  return (
    props.posts.map((post,index)=>(<div key={index} className="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div className="wrapper">
                                        {post.image!==null?(<div className="img-wrap uk-flex-wrap-top">
                                            <Link to={`/post/${post.id}`} href="news-single.html">
                                            <img src={`img/${post.image}`} className="img-polaroid" alt=""/>
                                            </Link>        
                                        </div>):null}
                                        <div className="info uk-flex-wrap-middle">
                                            <div className="date">
                                                <Moment format={'LL'} date={post.published_at}></Moment>            
                                            </div>
                                            <div className="name">
                                                <h4>
                                                    <Link  to={`/post/${post.id}`} style={{textDecoration:`none`}} >
                                                    {post.title}                    </Link>        
                                                </h4>
                                            </div>
                                            <div className="text">
                                                <p>{Parser(post.excerpt)}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="article-actions uk-flex-wrap-bottom">
                                        <div className="count"><i className="uk-icon-comments"></i><span>{post.comments.length}</span></div>
                                        <div className="read-more"><Link  to={`/post/${post.id}`} style={{textDecoration:`none`}} >Read More</Link></div>
                                    </div>
                                </div>))
  )
}

export default ListPostItem
