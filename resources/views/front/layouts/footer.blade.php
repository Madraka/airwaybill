
  <footer class="foot" id="contact" style="background-color:#6C0C0D">
    <div class="text-light pt-5 pb-3">
      <div class="container pt-2">
        <div class="row">
          <div class="col-md-3 px-3">
            <h3 class="foot-head">{{ $sitesetting->company_name }}</h3>
            <div>
              <p class="foot-text">{{ $sitesetting->company_address }}</p>
              <p class="foot-text">{{ $sitesetting->company_phone }}</p>
              <p class="foot-text">{{ $sitesetting->company_mobile }}</p>
              <p class="foot-text">{{ $sitesetting->company_email }}</p>
              <div class="mt-3" style="color: rgb(170, 170, 170);">
                <a class="foot-link" href="{{ route('page',['slug'=>'terms-and-conditions']) }}">Terms & Conditions</a> | 
                <a class="foot-link" href="{{ route('page',['slug'=>'privacy-policy']) }}">Privacy Policy</a>
              </div>
            </div>
            <div class="mt-4">
              <img src="{{ asset('/assets/images/settings/'. $sitesetting->company_logo) }}" width="250" class="d-inline-block align-top" alt="">
            </div>
          </div>
           <div class="col-md-3 px-3">
            <h3 class="foot-head">Our services</h3>
            <div>
            <ul>
            @foreach($cmsservices as $service)
            	<li><a href="{{ route('front.ourservices',['slug' => $service->slug]) }}">{{ $service->title }}</a></li>
            @endforeach
            </ul>
            </div>
          </div>
          <div class="col-md-6 px-4">
            <form class="form" action="{{ route('sendemail') }}" method="post">
              <div class="row mb-4">
                <div class="col-md-6">
                  <input class="custom-input form-control" type="text" name="name" id="name" placeholder="Name">
                </div>
                <div class="col-md-6">
                  <input class="custom-input form-control" type="email" name="email" id="email" placeholder="Email Address">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <textarea class="custom-input form-control" name="message" id="message" rows="6" placeholder="Message" style="width: 100%;"></textarea>
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
              <i class="fal fa-copyright"></i> {{ $sitesetting->copyright }} | Developed by
              <a class="footer-link" href="cosmioinfotech.com">CosmioInfotech</a>
            </div>
          </div>
          <!-- <p>© 2021 All Rights Reserved | CosmioInfotech Web Design | Privacy Policy</p> -->
        </div>
      </div>

    </div>
  </footer>