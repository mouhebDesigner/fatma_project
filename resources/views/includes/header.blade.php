<header id="header" class="default">
    @if(Auth::check())
      @include('includes.topBar')
    @endif
    <div class="menu">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="menu-left text-center text-md-left">
              <div class="logo-box">
                <a href="index.html">
                  <img src="{{ asset('front/images/logo.svg')}}" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="menu-items">
              <nav class="navbar navbar-expand-lg navbar-light bg-light menu-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto nav-text">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Acceuil </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="how_to_orders.html">Service</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="recipes.html">Fournisseurs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="partners.html">A propos</a>
                    </li>
                  
                    <li class="nav-item">
                      <a class="nav-link" href="browse_places.html">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
              <div class="icons-set">
                <ul class="list-inline">
                  <li class="icon-items nav-item dropdown ">
                    <a class="nav-link dropdown-toggle-no-caret" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-search"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">
                      <div class="notification-item">
                        <div class="search-details">
                          <form class="form-inline">
                            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                            <button class="s-btn btn-link " type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="icon-items nav-item dropdown">
                    <a class="nav-link dropdown-toggle-no-caret" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown2">
                      <div class="notification-item">
                        <div class="property">
                          <ul>
                            <li>
                              <div class="setting">
                                <a href="#">Setting</a>
                              </div>
                            </li>
                            <li>
                              <div class="clear">
                                <a href="#">Clear</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="notification-details">
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img src="images/notification-img-2.png" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Jassica William</h4>
                              <p>comment on your Video.</p>
                              <div class="comment-date">10 min ago</div>
                            </div>
                          </div>
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img src="images/notification-img-3.png" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Congratulations!</h4>
                              <p>Your Order is Accepted.</p>
                              <div class="comment-date"> 15 min ago </div>
                            </div>
                          </div>
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img src="images/notification-img-4.png" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Order Delivered!</h4>
                              <p>Your Order is Delivered.</p>
                              <div class="comment-date">20 min ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  @guest
                  <li class="partner-btn">
                    <a href="{{ url('login') }}" class="b-btn btn-link">Se connecter</a>
                  </li>
                  @else 
                  <li class="nav-item dropdown">
                    <a class="dropdown-toggle-no-caret" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user-circle"></i>John Doe <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
                      <a class="dropdown-item" href="my_profile_dashbord.html"> My Profile</a>
                      <a class="dropdown-item" href="#"> Bookmarks</a>
                      <a class="dropdown-item" href="#"> Booking Tables</a>
                      <a class="dropdown-item" href="#"> Find Friends</a>
                      <a class="dropdown-item" href="setting.html"> Setting</a>
                      <a class="dropdown-item" href="signin.html"> Logout</a>
                    </div>
                  </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>