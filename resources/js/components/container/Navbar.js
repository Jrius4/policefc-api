import React from 'react';
import {Link} from 'react-router-dom';


const Navbar = () => {
  return (
    <nav className="navbar navbar-expand-sm navbar-dark bg-dark mb-4 fixed-top">
        <div className="container">
          <Link className="navbar-brand" to="/">
            Police FC
          </Link>
          <button
            className="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#mobile-nav"
          >
            <span className="navbar-toggler-icon" />
          </button>

          <div className="collapse navbar-collapse" id="mobile-nav">
            <ul className="navbar-nav mr-auto">
            <li className="nav-item">
                <Link className="nav-link" to="">
                  {' '}
                  Home
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/posts">
                  {' '}
                  Posts
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/list-posts">
                  {' '}
                  List Posts
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/players">
                  {' '}
                  Players
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/executives">
                  {' '}
                  Executives
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link" to="/technicals">
                  {' '}
                  Technicals
                </Link>
              </li>
            </ul>
            <ul className="navbar-nav ml-auto">
                <li className="nav-item">
                    <Link className="nav-link" to="/register">
                        Sign Up
                    </Link>
                </li>
                <li className="nav-item">
                    <a className="nav-link" href="/platform/blog" target="_blanck">
                        Platform
                    </a>
                </li>
                <li className="nav-item">
                    <Link className="nav-link" to="/login">
                        Login
                    </Link>
                </li>
            </ul>   
          </div>
        </div>
      </nav>

  )
}

export default Navbar
