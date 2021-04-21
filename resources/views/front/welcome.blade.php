@extends('front.layouts.app')
@section('content')
    <section>
        <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ol class="carousel-indicators">
              @foreach($sliders as $slider)
                <li data-target="#mainCarousel" data-slide-to="{{ $loop->iteration-1 }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
              @foreach($sliders as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img class="d-block w-100" src="{{ asset('/assets/images/sliders/'. $slider->image) }}" alt="{{ $slider->title }}">
                    <div class="carousel-caption">
                        <p class="display-3 text-uppercase slider-head">{{ $slider->title }}</p>
                        <p class="lead slider-text">{{ $slider->description }}</p>
                    </div>
                </div>
               @endforeach
            </div>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section>
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              @if($welcomesection)
                <h2 class="jumbotron-head text-center text-uppercase">{{ $welcomesection->title }}</h2>

                <div class="row">
                    <div class="col-12 px-4">
                       {!! $welcomesection->description !!}
                    </div>
                   
                </div>
                @endif
            </div>
        </div>
    </section>
    <section class="do-more py-4">
        <div class="container-fluid">
            <div class="card" style="background-image : url('{{ asset('images/air-cargo-1.jpg') }}');background-size:cover;background-position: bottom;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Do even more with us</h3>
                            <p>
                                Whether you want to track, update or cancel shipments or collaborate with other team
                                members, we’ve got you covered. We build solutions that make your daily operations easier
                                and more efficient.
                            </p>
                            <a class="btn btn-success" href="#">Get Started</a>
                        </div>
                        <div class="col-md-6 ">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-3">
                                    <div class="card single-cardinfo">
                                        <div class="card-body">
                                            <p>Update Bookings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card single-cardinfo">
                                        <div class="card-body">
                                            <p>Cancel Bookings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card single-cardinfo">
                                        <div class="card-body">
                                            <p>Track Bookings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card single-cardinfo">
                                        <div class="card-body">
                                            <p>Bookmark Quotes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Service Section -->
    <section class="services-section" id="ourservices">
      <div class="text-center">
        @if($welcomesection)
        <h3 class="display-4 services-title">{{ $ourservicesection->title }}</h3>
        <div class="container">
          {!! $ourservicesection->description !!}
        </div>
     @endif
      </div>
      
    </section>
    <section class="px-5 pt-5 pb-3 services-main mx-5">
      <div class="text-center">
        <div class="my-0 my-sm-5 py-5 py-sm-5 services-space">

          <div class="row justify-content-around">
           
@if($cmsservices)
@foreach($cmsservices as $ourservice)
<div class="card services-card card-twist">
              <div class="card-body center">
                <div class="text-twist">
                  <div class="services-card-color">
                    <i class="{{ $ourservice->icon }} mb-4"></i>
                   
                    <h6 class="card-subtitle mb-2">{{ $ourservice->title }}</h6>
                  </div>
                  <?php $string = mb_strimwidth($ourservice->description, 0, 100, '...'); //optional characters for end?>
                  <p class="services-text">{{ $string }}</p>
                  <a href="{{ route('front.ourservices',['slug' => $ourservice->slug]) }}" class="services-card-color">
                    <i class="fal fa-2x fa-chevron-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>
              @endforeach
              @endif
           
  
        
  
          </div>
  
          {{-- <div class="row justify-content-around second-section-row">
            <div class="card services-card card-twist">
              <div class="card-body center">
                <div class="text-twist">
                  <div class="services-card-color">
                    <i class="fal fa-2x fa-mail-bulk mb-4"></i>
                    <h6 class="card-subtitle mb-2">Perishable Cargo Management</h6>
                  </div>
                  <p class="services-text">We recognize the demand of quality services by market and consumers in all areas, including...</p>
                  <a href="#" class="services-card-color">
                    <i class="fal fa-2x fa-chevron-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>
  
            <div class="card services-card card-twist">
              <div class="card-body center">
                <div class="text-twist">
                  <div class="services-card-color">
                    <i class="fal fa-2x fa-file-signature mb-4"></i>
                    <h6 class="card-subtitle mb-2">Legal Counseling & Documentation</h6>
                  </div>
                  <p class="services-text">A proper process ensures desired result on time and if that process is legal than...</p>
                  <a href="#" class="services-card-color">
                    <i class="fal fa-2x fa-chevron-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>
  
          </div> --}}

        </div>

      </div>
    </section>
    <!-- End of Our Service Section -->
@endsection
