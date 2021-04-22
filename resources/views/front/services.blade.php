@extends('front.layouts.app')
@section('content')
    <section style="margin-top: 68px;">
      <div class="card">
        <div class="card-body text-light bg-dark">
        @foreach($cmsservices as $service)
            <div class="row align-items-center">
              <div class="col-md-3 text-center">
                <div class="image">
                  <img class="card-common" src="{{ asset('assets/images/cmsservices/'.$service->image) }}" style="width: 100%;height:auto;">
                </div>
              </div>
              <div class="col-md-9 px-4">
                <div class="card-title text-uppercase mb-4">{{ $service->title }}
                  <hr class="short-hr">
                  
                </div>
                {!! $service->description !!}}
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </section>
    @endsection