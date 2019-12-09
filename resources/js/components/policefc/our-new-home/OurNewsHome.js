import React from 'react';
import news from '../images/news/news.jpg';
import news1 from '../images/news/news1.jpg';
import axios from "axios";
import Moment from 'react-moment'
import {Link} from 'react-router-dom';


class OurNewsHome extends React.Component {
    constructor(props){
        super(props);
        this.state ={
            news:[]
        }
    }

    render(){
       
         return (

    <div className="tm-top-f-box tm-full-width  va-main-our-news">
    <div className="uk-container uk-container-center">
        <section id="tm-top-f" className="tm-top-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div className="uk-width-1-1">
                <div className="uk-panel">
                    <div className="uk-container uk-container-center">
                        <div className="uk-grid uk-grid-collapse" data-uk-grid-match="">
                            <div className="uk-width-1-1">
                                <div className="our-news-title">
                                    <h3>Our <span>News</span></h3>
                                </div>
                                <div className="our-news-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet,
                                    <br/> consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. 
            
              </div>
                            </div>
                            {this.props.ourposts.map((item,index)=>{
                                return (
                            <article key={index} style={{minHeight:'280px'}} className="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                <div className="img-wrap uk-cover-background uk-position-relative" style={{backgroundImage: item.image !==null?`url('/img/${item.image}')`:`linear-gradient(90deg, rgba(2,0,36,1) 10%, rgba(9,9,121,1) 63%, rgba(1,18,22,1) 100%)`, minHeight: '280px'}}>


                                    <a href="news-single.html"></a>
                                    <img className="uk-invisible" src={`img/${item.image}`} alt=""/>

                                </div>
                                <div style={{minHeight: '280px'}} className="info">
                                    <div className="date">
                                    <Moment format="llll" date={item.created_at}></Moment>
                                        </div>
                                    <div className="name">
                                        <h4>
                                            <a>{item.title} </a>	
                                        </h4>
                                    </div>
                                    <div className="text">
                                        <p>{item.excerpt}</p>
                                        <div className="read-more"><a>Read More</a>
                                        </div>
                                    </div>
                                </div>

                            </article>
                                );
                            })}

                        </div>
                    </div>
                    <div className="all-news-btn"><Link to={`list-posts`} style={{textDecoration:`none`}}><span>All News</span></Link>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
  )
    }
 
}

export default OurNewsHome
