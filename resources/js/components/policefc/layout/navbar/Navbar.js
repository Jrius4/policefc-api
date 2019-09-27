import React from 'react';
import { Link } from 'react-router-dom';
import navLog from '../../images/logo-img.png'

const Navbar = () => {
  return (

            <div className="tm-menu-box">

<div style={{height: '70px' }}className="uk-sticky-placeholder">
    <nav style={{margin: '0px'}} className="tm-navbar uk-navbar" data-uk-sticky="">
        <div className="uk-container uk-container-center">
            <Link className="tm-logo uk-float-left" to="/">
                <img src={navLog} alt="logo" title="logo"/> <span>Police<em>.f.c</em></span>
            </Link>

            <ul className="uk-navbar-nav uk-hidden-small">
                <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><Link to="/">Home</Link></li>
                <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="about.html">About</a></li>
                <li className="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#">Team</a>
                    <div className="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                        <div className="uk-grid uk-dropdown-grid">
                            <div className="uk-width-1-1">
                                <ul className="uk-nav uk-nav-navbar">
                                    <li><Link to="/players">Players</Link>
                                    </li>
                                    <li><a href="/executives">Executives</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li className="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><Link to="/match-list">Matches</Link>
                    <div className="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                        <div className="uk-grid uk-dropdown-grid">
                            <div className="uk-width-1-1">
                                <ul className="uk-nav uk-nav-navbar">
                                    <li><a href="results.html">Results</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li><Link to="/news">News</Link>
                </li>
                <li><a href="category.html">Shop</a>
                </li>
                <li><a href="contact.html">Contact</a>
                </li>
            </ul>
            <a href="#offcanvas" className="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
        </div>
    </nav>
</div>

</div>


  )
}

export default Navbar
