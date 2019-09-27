import React from 'react';
import slider from '../images/main-slider-img.jpg';
import slider1 from '../images/main-slider-img1.jpg';
import slider2 from '../images/main-slider-img2.jpg';

const Highlights = () => {
  return (
<div className="tm-top-a-box tm-full-width  ">
    <div className="uk-container uk-container-center">
        <section id="tm-top-a" className="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div className="uk-width-1-1">
                <div className="uk-panel">
                    <div className="akslider-module ">
                        <div className="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: true, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                            <ul className="uk-slideshow uk-overlay-active">
                                <li aria-hidden="false" className="uk-height-viewport uk-active">
                                    <div style={{backgroundImage: `url(${slider})`}} className="uk-cover-background uk-position-cover"></div><img style={{width: '100%', height: 'auto', opacity: 0}} className="uk-invisible" src="images/main-slider-img.jpg" alt=""/>
                                    <div className="uk-position-cover uk-flex-middle">
                                        <div className="uk-container uk-container-center uk-position-cover">
                                            <div className="va-promo-text uk-width-6-10 uk-push-4-10">
                                                <h3>Play to <span>serve</span></h3>
                                                <div className="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                <a href="#" className="read-more">Read More<i className="uk-icon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li aria-hidden="true" className="uk-height-viewport">
                                    <div style={{backgroundImage: `url(${slider2})`}} className="uk-cover-background uk-position-cover"></div><img style={{width: '100%', height: 'auto', opacity: 0}} className="uk-invisible" src={slider1} alt=""/>
                                    <div className="uk-position-cover uk-flex-middle">
                                        <div className="uk-container uk-container-center uk-position-cover">
                                            <div className="va-promo-text uk-width-6-10 uk-push-4-10">
                                                <h3>Play to <span>serve</span></h3>
                                                <div className="promo-sub">Play to <span>serve</span> Enjoy the game</div>
                                                <a href="#" className="read-more">Read More<i className="uk-icon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li aria-hidden="true" className="uk-height-viewport">
                                    <div style={{backgroundImage: `url(${slider1})`}} className="uk-cover-background uk-position-cover"></div><img style={{width: '100%', height: 'auto', opacity: 0}} className="uk-invisible" src={slider1} alt=""/>
                                    <div className="uk-position-cover uk-flex-middle">
                                        <div className="uk-container uk-container-center uk-position-cover">
                                            <div className="va-promo-text uk-width-6-10 uk-push-4-10">
                                                <h3>Play to <span>serve</span></h3>
                                                <div className="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                <a href="#" className="read-more">Read More<i className="uk-icon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="../index.html" className="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                            <a href="../index.html" className="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                            <ul className="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                <li className="uk-active" data-uk-slideshow-item="0"><a href="../index.html">0</a>
                                </li>
                                <li data-uk-slideshow-item="1"><a href="../index.html">1</a>
                                </li>
                                <li data-uk-slideshow-item="2"><a href="../index.html">2</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
  )
}

export default Highlights
