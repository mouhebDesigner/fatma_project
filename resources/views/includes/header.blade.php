<header id="header" class="default">
    
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
                      <a class="nav-link" href="{{ url('/') }}">Acceuil </a>
                    </li>
                    <li class="nav-item">
                      @guest 

                        <a class="nav-link" href="{{ url('fournisseur/demandes/create') }}">Demande livraison</a>
                      @else 
                        @if(Auth::user()->isFournisseur())
                          <a class="nav-link" href="{{ url('fournisseur/demandes/create') }}">Demande livraison</a>                          
                        @endif

                      @endif
                    </li>
                  </ul>
                </div>
              </nav>
              <div class="icons-set">
                <ul class="list-inline">
                  @guest
                  <li class="partner-btn">
                    <a href="{{ url('login') }}" class="b-btn btn-link">Se connecter</a>
                  </li>
                  <li class="partner-btn">
                      <a href="{{ route('fournisseur_register') }}" class="partner-btn1 btn-link">Inscrire</a>
                  </li>
                  @else 
                  <li class="nav-item dropdown">
                    <a class="dropdown-toggle-no-caret" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user-circle"></i>{{ Auth::user()->nom }}{{ Auth::user()->prenom }} <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
                      <a class="dropdown-item" href="{{ url('profile') }}"> Profile</a>
                       <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Déconnecter') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
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