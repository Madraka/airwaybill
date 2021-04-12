<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
  <!-- Fontawasome CDN -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- External CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- Google fonts CDN -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
  <header id="header w-100" class="fixed-top">
    <nav class="navbar navbar-expand-sm bg-light">
      <div class="container-fluid">
        <a class="navbar-brand p-0" href="#">
          <img src="{{asset('/images/demo-logo.png')}}" height="42px" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fas fa-bars navbutton"></i></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto text-uppercase">
            <li class="mx-2 px-2 nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="mx-2 px-2 nav-item">
              <a class="nav-link" href="/atlas/services">Services</a>
            </li>
            <li class="mx-2 px-2 nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="mx-2 px-2 nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin/dashboard') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                        <div class="dropdown-divider"></div>
                        @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('/images/bg1.jpg')}}" alt="First slide" style="height: 754px">
            <div class="carousel-caption">
              <p class="display-3 text-uppercase slider-head">This is First Slide</p>
              <p class="lead slider-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/images/bg2.jpg')}}" alt="Second slide" style="height: 754px">
            <div class="carousel-caption">
              <p class="display-3 text-uppercase slider-head">This is Second Slide</p>
              <p class="lead slider-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/images/bg3.jpeg')}}" alt="Third slide" style="height: 754px">
            <div class="carousel-caption">
              <p class="display-3 text-uppercase slider-head">This is Third Slide</p>
              <p class="lead slider-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section>
      <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
          <h2 class="jumbotron-head text-center text-uppercase">Welcome to this section</h2>

          <div class="row">
            <div class="col-md-6 px-4">
              <p class="jumbotron-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a.
              </p>
            </div>
            <div class="col-md-6 px-4">
              <div class="mb-4 pb-1">
                <h4 class="jumbotron-subhead text-uppercase">Increased Speed</h4>
                <p class="jumbotron-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a.
                </p>
              </div>
              <div class="mb-4 pb-1">
                <h4 class="jumbotron-subhead text-uppercase">Decreased Cost</h4>
                <p class="jumbotron-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae voluptati natus architecto asperiores a.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section></section>
  </main>

  <footer class="foot" style="background-image: url({{asset('/images/footer-bg.jpg')}}">
    <div class="text-light pt-5 pb-3">
      <div class="container pt-2">
        <div class="row mx-4">
          <div class="col-md-6 px-3">
            <h3 class="foot-head">Company Name Ltd.</h3>
            <div>
              <p class="foot-text">Street 04, Address, City</p>
              <p class="foot-text">Zone, Country</p>
              <div class="mt-3" style="color: rgb(170, 170, 170);">
                <a class="foot-link" href="">Terms & Conditions</a> | 
                <a class="foot-link" href="">Cookie Policy</a>
              </div>
            </div>
            <div class="mt-4">
              <img src="{{asset('/images/demo-logo.png')}}" width="250" class="d-inline-block align-top" alt="">
            </div>
          </div>
          <div class="col-md-6 px-4">
            <form class="form" action="">
              <div class="row mb-4">
                <div class="col-md-6">
                  <input class="custom-input form-control" type="text" name="" id="" placeholder="Name">
                </div>
                <div class="col-md-6">
                  <input class="custom-input form-control" type="email" name="" id="" placeholder="Email Address">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <textarea class="custom-input form-control" name="" id="" rows="6" placeholder="Message" style="width: 100%;"></textarea>
                </div>
              </div>
              <div class="">
                <button class="btn btn-sm btn-outline-light custom-footer-btn">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mx-5 mt-3 text-center" style="font-size: 14px;">
          <div class="col-md-12 px-4">
            <div class="mt-3">
              <i class="fal fa-copyright"></i> 2021 All Rights Reserved | 
              <a class="footer-link" href="cosmioinfotech.com">CosmioInfotech</a> Web Design | 
              <a class="footer-link" href="#">Privacy Policy</a>
            </div>
          </div>
          <!-- <p>© 2021 All Rights Reserved | CosmioInfotech Web Design | Privacy Policy</p> -->
        </div>
      </div>

    </div>
  </footer>

  <!-- jquery js -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <!-- popper js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
  crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
</body>
</html>
