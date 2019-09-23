{{-- <div class="container-fluid main-menubar">

        <nav class="navbar container-fluid navbar-expand-lg navbar-dark bg-transparent">
            <a class="logo mr-2 ml-2" href="/">
              <img width="150px" height="50px" src="/img/Ndebi Tech Logo.png" alt="logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> <i class="fa fa-bars" aria-hidden="true"></i> </span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-none" href="/services">Services</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                  </a>
                  <div class="dropdown-menu row" aria-labelledby="navbarDropdown">
                      <h5 class="text-center">All Services</h5>
                    <div class="row">
                      <div class="col m-2 w-100">
                          <h5 class="text-center">Section One</h5>
                        <ul class="navbar-nav mr-auto">
                            <li  class="nav-item">
                                <a class="dropdown-item" href="/services">Something else here</a>
                            </li>
                            <li  class="nav-item">
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                            <li  class="nav-item">
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                      </div>
                      <div class="col m-2 w-100">
                        <h5 class="text-center">Section Two</h5>
                          <ul class="navbar-nav mr-auto">
                              <li  class="nav-item">
                                  <a class="dropdown-item" href="#">Something else here</a>
                              </li>
                              <li  class="nav-item">
                                  <a class="dropdown-item" href="#">Something else here</a>
                              </li>
                              <li  class="nav-item">
                                  <a class="dropdown-item" href="#">Something else here</a>
                              </li>
                          </ul>
                      </div>
                    </div>
                  </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('create-value')}}" tabindex="-1" aria-disabled="true">How create Value</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/how-we-work" tabindex="-1" aria-disabled="true">How we Work</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about" tabindex="-1" aria-disabled="true">About</a>
                      </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact-us" tabindex="-1" aria-disabled="true">Contact Us</a>
                  </li>
              </ul>
              <form class="form-inline my-1 my-lg-0"  action="{{ route('blog') }}">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="{{ request('term') }}" name="term">
                <button class="btn btn-outline-info my-1 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>

        </div> --}}

        <nav className="navbar container-fluid navbar-expand-lg navbar-dark bg-transparent">
          <div className="container">
            <a className="logo mr-2 ml-2" href="/">
              Police FC
            </a>
            <button
              className="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#mobile-nav"
            >
              <span className="navbar-toggler-icon"></span>
            </button>
  
            <div className="collapse navbar-collapse" id="mobile-nav">
              <ul className="navbar-nav mr-auto">
              <li className="nav-item">
                  <a className="nav-link" href="/">
                   
                    Home
                  </a>
                </li>
                
              </ul>
              <ul className="navbar-nav ml-auto">
                 
                  <li className="nav-item">
                      <a className="nav-link" href="/platform" target="_blanck">
                          Platform
                      </a>
                  </li>
                  
              </ul>   
            </div>
          </div>
        </nav>

      {{-- navigation bar --}}
        
