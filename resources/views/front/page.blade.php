@extends('front.layouts.app')
@section('content')
    <section style="margin-top: 68px;">
      <div class="card">
        <div class="card-body text-light bg-dark">
 
            <div class="row align-items-center">
              <div class="col-12 text-center">
              @if(!$page->image == null)
                <div class="image">
                  <img class="card-common" src="{{ asset('assets/images/pages/'.$page->image) }}" style="width: 100%;height:auto;">
                </div>
                @endif
              </div>
              <div class="col-12 px-4">
                <div class="card-title text-center text-uppercase mb-4">{{ $page->title }}
             
                </div>
                {!! $page->description !!}}
              </div>
            </div>
         
          </div>
      </div>
    </section>
    @endsection