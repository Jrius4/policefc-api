import React from 'react';
import club from '../images/club-logo.png';
import club1 from '../images/club-logo1.png';

const LatestResultslights = () => {
  return (

    <div className="tm-top-b-box tm-full-width  ">
    <div className="uk-container uk-container-center">
        <section id="tm-top-b" className="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

            <div className="uk-width-1-1">
                <div className="uk-panel">

                    <div className="va-latest-wrap">
                        <div className="uk-container uk-container-center">
                            <div className="va-latest-top">
                                <h3>Latest <span>Results</span></h3>
                                <div className="tournament">
                                    <address>Cambridgeshire UK<br/><br/></address></div>
                                <div className="date">
                                    November 29, 2015 | 12:00 am </div>
                            </div>
                        </div>
                        <div className="va-latest-middle uk-flex uk-flex-middle">
                            <div className="uk-container uk-container-center">
                                <div className="uk-grid uk-flex uk-flex-middle">
                                    <div className="uk-width-2-12 center">
                                        <a href="results.html">
                                            <img src={club} className="img-polaroid" alt="" title=""/>
                                        </a>
                                    </div>
                                    <div className="uk-width-3-12 name uk-vertical-align">
                                        <div className="wrap uk-vertical-align-middle">
                                            Cambridgehire
                                        </div>
                                    </div>
                                    <div className="uk-width-2-12 score">
                                        <div className="title">score</div>
                                        <div className="table">
                                            <div className="left"> 3</div>
                                            <div className="right"> 5</div>
                                            <div className="uk-clearfix"></div>
                                        </div>
                                    </div>
                                    <div className="uk-width-3-12 name alt uk-vertical-align">
                                        <div className="wrap uk-vertical-align-middle">
                                            china  
                                        </div>
                                    </div>
                                    <div className="uk-width-2-12 center">
                                        <a href="results.html">
                                           <img src={club1} className="img-polaroid" alt="" title=""/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="uk-container uk-container-center">
                            <div className="va-latest-bottom">
                                <div className="uk-grid">
                                    <div className="uk-width-8-12 uk-container-center text">
                                        <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus. Pellentesque aliquam justo ut rhoncus lobortis. In sed venenatis massa. Sed sodales faucibus odio, eget tempus nibh accumsan ut. Fusce tincidunt semper finibus. Nullam consequat non leo interdum pulvinar.</p>
                                    </div>
                                </div>

                                <div className="uk-grid">
                                    <div className="uk-width-1-1">
                                        <div className="btn-wrap uk-container-center">
                                            <a className="read-more" href="results.html">More Info</a>
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

  )
}

export default LatestResultslights
