@extends('frontend.layout')
@section('content')

<div class="site-section bg-light">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-12">
          <h1 class="mb-2">Your Services</h1>
          <p class="text-white"></p>
        </div>
        <div class="row">

          <div class="col-lg-4 col-xs-12 text-center">
            <div class="card">
              <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
              <div class="card-header">
                <h3>Request Taxi</h3>
              </div>
              <div class="card-body">
                <span>Request a taxi to take you to the location of your interested house for physical inspection</span>
              </div>
              <div class="card-footer">
                <a href="#">Request</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-xs-12  text-center">
            <div class="card">
              <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
              <div class="card-header">
                <h3>Emergency Service</h3>
              </div>
              <div class="card-body">
                <span>Request For an emergency service. Your location will be made available to emergency service providers</span>
              </div>
              <div class="card-footer">
                <a href="#">Request</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-xs-12 text-center">
            <div class="card">
              <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
              <div class="card-header">
                <h3>Request Special Service</h3>
              </div>
              <div class="card-body">
                <span>Request for additional information concerning the house you've shown interest in</span>
              </div>
              <div class="card-footer">
                <a href="#">Request</a>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
@endsection
