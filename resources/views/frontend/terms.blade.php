@extends('frontend.layout')
@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ isset($image_path) ? Storage::url($image_path) : $image_url }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-2">Terms of service</h1>
            <p class="text-white">The Alternative Tenancy Project hosted by First Alternative Realtors is a monthly housing
                scheme which avails interested tenants the opportunity to take up accommodation and pay up
                monthly, at First Alternative Realtors, we intend to also provide more services which would aid
                in easy access to propertied and also features that they minimize the loss of lives and
                properties and most importantly, the Alternative Tenancy Project is designed to drastically
                minimize the rate of debts experienced in housing tenancy today.</p>
          </div>
        </div>
      </div>
    </div>
  </div>




@stop
