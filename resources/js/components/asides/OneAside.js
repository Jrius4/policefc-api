import React from 'react';
import Moment from 'react-moment'
import {Route, Link,withRouter} from 'react-router-dom'
import Spinner from '../policefc/common/Spinner';

const OneAside = (props) => {

    let asideContent;

    if(props.posts!==null && props.categories!==null){
        return (
       
            <aside className="tm-sidebar-a uk-width-medium-1-4 uk-pull-3-4 uk-row-first">
                            
            <div className="uk-panel categories-sidebar">
                    <h3 className="uk-panel-title">Categories</h3>
                    <div>
                        <ul className="nav menu">
                            {props.categories.map((cat,index)=>(
                                <li key={index} className={`item-${index}`}>             
                                <a href="news.html">
                                {cat.title} <span className="label">(
                                    {cat.posts.length}
                                )</span>
                                </a>            
                            </li>
                            ))}
        
                        </ul>
                    </div>
                    <div className="clearfix"> </div>
                </div>
                <div className="uk-panel newsletter-sidebar">
                    <h3 className="uk-panel-title">Newsletter</h3>
                    <div className="acymailing_modulenewsletter-sidebar" id="acymailing_module_formAcymailing40192">
                        <div className="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing40192">
                            <form id="formAcymailing40192" action="http://h-sportak.torbara.com/index.php/match" onSubmit={`return submitacymailingform('optin','formAcymailing40192')`} method="post" name="formAcymailing40192">
                                <div className="acymailing_module_form">
                                    <div className="mail-title">Newsletters</div>
                                    <div className="acymailing_introtext">Donec at ex aliquet, porttitor lacus eget</div>
                                    <div className="clear"></div>
                                    <div className="space"></div>
                                    <table className="acymailing_form">
                                        <tbody>
                                            <tr>
                                                <td className="acyfield_email acy_requiredField">
                                                    <span className="mail-wrap">
                                                    <input id="user_email_formAcymailing40192" onfocus="if(this.value == 'Email') this.value = '';" onblur="if(this.value=='') this.value='Email';" className="inputbox" name="user[email]" style={{width:'80%'}} value="Email" title="Email" type="text"/>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td className="acysubbuttons">
                                                    <span className="submit-wrap">
                                                    <span className="submit-wrapper">
                                                    <input className="button subbutton" value=" " name="Submit" onClick={`try{ return submitacymailingform('optin','formAcymailing40192'); }catch(err){alert('The form could not be submitted '+err);return false;}`} type="submit"/>
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
                <div className="uk-panel news-sidebar">
                    <h3 className="uk-panel-title">Latest News</h3>
                    int(3)
                    {props.posts.slice(0,3).map((post,index)=>(
                        <article className="has-context " key={index}>
                        <div className="latest-news-wrap">
                            {post.image!==null?(
                                <div className="img-wrap">
                                    <Link to={`/post/${post.id}`}>
                                    <img src={`img/${post.image}`} className="img-polaroid" alt=""/>
                                    </Link>        
                                </div>
                            ):null}
                            <div className="info">
                                <div className="date">
                                    <Moment format='llll' date={post.published_at}></Moment>            
                                </div>
                                <div className="name">
                                    <h4>
                                        <Link to={`/post/${post.id}`}>
                                            {post.title}
                                        </Link>        
                                    </h4>
                                </div>
                            </div>
                        </div>
                        
                    </article>
                    ))}
                    
                </div>
            </aside>
        
          )
    }
    else{
        return <Spinner/>;
    }

  
}

export default OneAside
