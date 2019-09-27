import React from 'react'

const NavbarSmall = () => {
  return (
<div style={{alignContent:'right'}}id="offcanvas" className="uk-offcanvas">
            <div className="uk-offcanvas-bar">
                <ul className="uk-nav uk-nav-offcanvas">
                    <li className="uk-parent uk-active"><a href="index-2.html">Home</a>
                        <ul className="uk-nav-sub">
                            <li><a className="yellow-scheme" href="index-2.html">Yellow Color Scheme</a>
                            </li>
                            <li><a className="blue-scheme" href="../blue/index.html">Blue Color Scheme</a>
                            </li>
                            <li><a className="red-scheme" href="../red/index.html">Red Color Scheme</a>
                            </li>
                            <li><a href="offline.html">Offline Page</a>
                            </li>
                            <li><a href="404.html">Error Page</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li className="uk-parent"><a href="#">Pages</a>
                        <ul className="uk-nav-sub">
                            <li><a href="players.html">Players</a>
                            </li>
                            <li><a href="gallery.html">Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li className="uk-parent"><a href="match-list.html">Match</a>
                        <ul className="uk-nav-sub">
                            <li><a href="results.html">Results</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="news.html">News</a>
                    </li>
                    <li><a href="category.html">Shop</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
  )
}

export default NavbarSmall
