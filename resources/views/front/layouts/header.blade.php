<header id="header w-100" class="fixed-top">
    <nav class="navbar navbar-expand-sm">
      <div class="container-fluid">
        <a class="navbar-brand p-0" href="{{ route('index') }}">
          <img src="{{ asset('/assets/images/settings/'. $sitesetting->company_logo) }}" height="42px" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fas fa-bars navbutton"></i></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto text-uppercase">
            <li class="mx-2 px-2 nav-item active">
              <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li class="mx-2 px-2 nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="mx-2 px-2 nav-item">
              <a class="nav-link" href="{{ route('index') }}/#ourservices">Services</a>
            </li>
            <li class="mx-2 px-2 nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
            <li class="mx-2 px-2 nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Online Tools
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <div class="top-right links">
                  	<a href="{{ route('login') }}" class="dropdown-item">Shipment Tracking</a>
                  		<div class="dropdown-divider"></div>
                  	<a href="{{ route('login') }}" class="dropdown-item">Client Login</a>
                    	<div class="dropdown-divider"></div>
                     <a href="{{ route('login') }}" class="dropdown-item">Surcharges</a>
                  </div> 
                 <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin/dashboard') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="dropdown-item">Shipment Tracking</a>
                        <div class="dropdown-divider"></div>
                        @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                @endif -->
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
