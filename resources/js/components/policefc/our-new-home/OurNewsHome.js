import React from 'react';
import news from '../images/news/news.jpg';
import news1 from '../images/news/news1.jpg';

const OurNewsHome = () => {
  return (

    <div class="tm-top-f-box tm-full-width  va-main-our-news">
    <div class="uk-container uk-container-center">
        <section id="tm-top-f" class="tm-top-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1">
                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid uk-grid-collapse" data-uk-grid-match="">
                            <div class="uk-width-1-1">
                                <div class="our-news-title">
                                    <h3>Our <span>News</span></h3>
                                </div>
                                <div class="our-news-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet,
                                    <br/> consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div>
                            </div>

                            <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                <div class="img-wrap uk-cover-background uk-position-relative" style={{backgroundImage: `url(${news})`, minHeight: '280px'}}>


                                    <a href="news-single.html"></a>
                                    <img class="uk-invisible" src={news} alt=""/>

                                </div>
                                <div style={{minHeight: '280px'}} class="info">
                                    <div class="date">
                                        Nov 20, 2015 </div>
                                    <div class="name">
                                        <h4>
                                            <a href="news-single.html">Nullam enim ante, volutpat non viverra eget </a>	
                                        </h4>
                                    </div>
                                    <div class="text">
                                        <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                        <div class="read-more"><a href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            </article>


                            <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                <div class="img-wrap uk-cover-background uk-position-relative" style={{backgroundImage: `url(${news1})`, minHeight: '280px'}}>


                                    <a href="news-single.html"></a>
                                    <img class="uk-invisible" src={news1} alt=""/>

                                </div>
                                <div style={{minHeight: '280px'}} class="info">
                                    <div class="date">
                                        Nov 20, 2015 </div>
                                    <div class="name">
                                        <h4>
                                            <a href="news-single.html">Cum sociis natoque penatibus et magnis dis parturient</a>		
                                        </h4>
                                    </div>
                                    <div class="text">
                                        <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                        <div class="read-more"><a href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            </article>

                        </div>
                    </div>
                    <div class="all-news-btn"><a href="news.html"><span>All News</span></a>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
  )
}

export default OurNewsHome
