@extends('frontend.layout')
@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ isset($image_path) ? Storage::url($image_path) : $image_url }})">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-2">About Us</h1>
            <p class="text-white">The Monthly Tenancy Plan is a property tech company, aimed at bridging the tenancy gap in Nigeria by providing alternative to yearly Tenancy. The monthly tenancy plan is designed to improve
                rental in Nigeria, eliminate debt, increase occupancy rate and provide affordability and flexibility for tenants.</p>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center">
          <h3 class="heading-29201 text-center">Leadership</h3>

          <p class="mb-5">Our Team</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-5">
          <div class="person-29381">
            <div class="media-39912">
              <img src="{{ asset('img/team/kene.jpeg') }}" alt="Image" class="img-fluid">
            </div>
            <h3><a href="#">Ekene Henry Ossai</a></h3>
            <span class="meta d-block mb-4">MD/CEO</span>
            <div class="social-32913">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="person-29381">
            <div class="media-39912">
              <img src="{{ asset('img/team/ayo.jpeg') }}" alt="Image" class="img-fluid">
            </div>
            <h3><a href="#">Steven Owoloku Amama</a></h3>
            <span class="meta d-block mb-4">MD</span>
            <div class="social-32913">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>





      </div>
    </div>
  </div>
@stop
