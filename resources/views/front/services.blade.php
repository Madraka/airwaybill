@extends('front.layouts.app')
@section('content')
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
    @endsection