@extends('front.layouts.app')
@section('content')
    <section>
      <div class="card">
        <div class="card-body ">
     
            <div class="row align-items-center">
              <div class="col-md-3 text-center">
                @if($ourservice->image)
                <div class="image">
                  <img class="card-common" src="{{ asset('assets/images/cmsservices/'.$ourservice->image) }}" style="width: 100%;height:auto;">
                </div>
                @else
                <i class="{{ $ourservice->icon }} mb-4"></i>
                @endif
              </div>
              <div class="col-md-9 px-4">
                <div class="card-title text-uppercase mb-4">{{ $ourservice->title }}
                  <hr class="short-hr">
                  
                </div>
                {!! $ourservice->description !!}
              </div>
            </div>
           
          </div>
      </div>
    </section>
    @endsection