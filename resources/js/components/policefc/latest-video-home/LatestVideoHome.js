import React from 'react';
import partner from '../images/partners/partners-img.png';
import partner1 from '../images/partners/partners-img1.png';
import partner2 from '../images/partners/partners-img2.png';
import partner3 from '../images/partners/partners-img3.png';
import partner4 from '../images/partners/partners-img4.png';


const LatestVideoHome = () => {
  return (

    <div className="tm-bottom-d-box tm-full-width  ">
    <div className="uk-container uk-container-center">
        <section id="tm-bottom-d" className="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div className="uk-width-1-1">
                <div className="uk-panel">
                    <div className="last-video-wrap">
                        <div className="uk-container uk-container-center">
                            <div className="uk-grid">
                                <div className="uk-width-medium-1-1">
                                    <div className="last-video-title">
                                        <h2>Last <span>Video</span></h2>
                                    </div>
                                </div>
                                <div className="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                    <div className="last-video-text">
                                        Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.
                                    </div>
                                </div>
                                <div className="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                    <iframe src="https://www.youtube.com/embed/_u20ZIIxwuc?rel=0&amp;showinfo=0" allowfullscreen="" height="546" width="970"></iframe>
                                </div>
                                <div className="uk-width-medium-1-1 uk-width-small-1-1 partners-slider">
                                    <div data-uk-slideset="{small: 2, medium: 5, large: 5,animation: 'swipe', duration: '500', autoplay: true, autoplayInterval: '7000'}">
                                        <div className="uk-slidenav-position">
                                            <ul className="uk-grid uk-slideset uk-grid-width-1-1 uk-grid-width-large-1-5 uk-grid-width-medium-1-5 uk-grid-width-small-1-2">
                                                <li><img src={partner4} alt=""/>
                                                </li>
                                                <li><img src={partner} alt=""/>
                                                </li>
                                                <li><img src={partner} alt=""/>
                                                </li>
                                                <li><img src={partner2} alt=""/>
                                                </li>
                                                <li><img src={partner3} alt=""/>
                                                </li>
                                                <li><img src={partner4} alt=""/>
                                                </li>
                                                <li><img src={partner} alt=""/>
                                                </li>
                                                <li><img src={partner1} alt=""/>
                                                </li>
                                                <li><img src={partner2} alt=""/>
                                                </li>
                                                <li><img src={partner3} alt=""/>
                                                </li>
                                                <li><img src={partner4} alt=""/>
                                                </li>
                                                <li><img src={partner} alt=""/>
                                                </li>
                                                <li><img src={partner1} alt=""/>
                                                </li>
                                                <li><img src={partner2} alt=""/>
                                                </li>
                                                <li><img src={partner3} alt=""/>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul className="uk-slideset-nav uk-dotnav uk-flex-center">
                                           
                                        </ul>
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
  )
}

export default LatestVideoHome
