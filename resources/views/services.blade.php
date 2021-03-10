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
  <link rel="stylesheet" href="/css/style.css">
  <!-- Google fonts CDN -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
  <header id="header w-100" class="fixed-top">
    <nav class="navbar navbar-expand-md bg-light">
      <div class="container-fluid">
        <a class="navbar-brand p-0" href="#">
          <img src="/images/demo-logo.png" height="42px" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <span><i class="fas fa-bars navbutton"></i></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto text-uppercase">
            <li class="mx-2 px-2 nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="mx-2 px-2 nav-item active">
              <a class="nav-link" href="/services">Services</a>
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

  <main class="main">
    <section>
      <div class="card">
        <div class="card-body text-light bg-dark">
            <div class="row align-items-center">
              <div class="col-md-3 text-center">
                <div class="image">
                  <img class="card-common" src="/images/pexels-1.jpg" width="150" alt="">
                </div>
                <div class="image">
                  <img class="card-common" src="/images/pexels-2.jpg" width="150" alt="">
                </div>
              </div>
              <div class="col-md-9 px-4">
                <div class="card-title text-uppercase mb-4">Title
                  <hr class="short-hr">
                  <div class="card-title2">Express</div>
                </div>
                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
                <div class="pt-5">
                  <h2 class="card-subtitle">STANDARD Express</h2>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.<br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.Lorem ipsum dol consectetur adipisicing elit. Ill dolor sit amet, consectetur adipisicing elit. Illo, quas.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas. ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.
                  </p>
                </div>
                <div class="pt-5">
                  <h2 class="card-subtitle">PREMIUM Express</h2>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.<br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.Lorem ipsum dol consectetur adipisicing elit. Ill dolor sit amet, consectetur adipisicing elit. Illo, quas.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas. ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.
                  </p>
                </div>
                <p class="blur-text">9hrs delivery | 10hrs delivery | 12hrs delivery</p>
                <p>Please refer to us by clicking 
                  <a class="card-link text-uppercase" href="#">This good Link.</a>
                </p>
                <div class="text-center">
                  <button class="btn custom-card-btn">Get Info | Make a Booking</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </main>

  <footer class="foot">
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
              <img src="/images/demo-logo.png" width="250" class="d-inline-block align-top" alt="">
            </div>
          </div>
          <div class="col-md-6 px-4">
            <form action="">
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