<!doctype html>
<html lang="en">

    <head>
        <title>Monthly Tenancy Program</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">


        <link type="text/css" rel="stylesheet" href="{{ asset('fonts/frontend/fonts/icomoon/style.css') }}">

        <link type="text/css" rel="stylesheet" href="{{ asset('css/frontend/css/bootstrap.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/frontend/css/bootstrap-datepicker.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/frontend/css/jquery.fancybox.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/frontend/css/owl.carousel.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/frontend/css/owl.theme.default.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('fonts/frontend/fonts/flaticon/font/flaticon.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/frontend/css/aos.css') }}">

        <!-- MAIN CSS -->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/frontend/css/style.css') }}">
        @yield('header_styles')

    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


        <div class="site-wrap" id="home-section">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>



            <header class="site-navbar site-navbar-target" role="banner">

                <div class="container">
                    <div class="row align-items-center position-relative">

                        <div class="col-3 ">
                            <div class="site-logo">
                                <a href="{{ route('member.home') }}">MTP</a>
                            </div>
                        </div>

                        <div class="col-9  text-right">


                            <span class="d-inline-block d-lg-none"><a href="#"
                                    class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                                        class="icon-menu h3 text-white"></span></a></span>



                            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                    <li @if(Route::is('member.home')) class="active" @endif><a href="{{ route('member.home') }}" class="nav-link">Home</a>
                                    </li>
                                    @auth
                                    <li @if(Route::is('property.properties')) class="active" @endif><a href="{{ route('property.properties') }}" class="nav-link">Properties</a></li>
                                    <li @if(Route::is('rents.index'))class="active" @endif><a href="{{ route('rents.index') }}" class="nav-link">My Rents</a></li>
                                    <li @if(Route::is('profile.edit'))class="active" @endif ><a href="{{ route('profile.edit', \Auth::user()->id) }}" class="nav-link">My Profile</a></li>
                                    <li><a href="{{ route('logout') }}" class="nav-link">Logout</a></li>
                                    @else
                                    <li @if(Route::is('about'))class="active" @endif><a href="{{ route('about') }}" class="nav-link">About</a></li>
                                    <li @if(Route::is('contact'))class="active" @endif><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                                    <li @if(Route::is('auth.login'))class="active" @endif><a href="{{ route('auth.login') }}" class="nav-link">Login</a></li>
                                    <li @if(Route::is('property.properties'))class="active" @endif><a href="{{ route('property.properties') }}" class="nav-link">Properties</a></li>
                                    <li @if(Route::is('auth.signup'))class="active" @endif><a href="{{ route('auth.signup') }}" class="nav-link">Register</a></li>
                                    @endauth

                                </ul>
                            </nav>
                        </div>


                    </div>
                </div>

            </header>

            @yield('content')



            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="text-white h5 mb-3">Subscribe</h3>
                            <form action="" class="">
                                <input type="text" class="form-control mr-3 col" placeholder="Enter your email">
                                <input type="submit" class="btn btn-primary text-white col mt-4" value="Send Now">
                            </form>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <ul class="list-unstyled menu-arrow">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                {{-- <li><a href="#">Testimonials</a></li> --}}
                                <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                                {{-- <li><a href="#">Privacy</a></li> --}}
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-white h5 mb-3">About</h3>
                            <p>First alternative realtors, is a property tech company, aimed at bridging the tenancy gap in Nigeria by providing alternative to yearly Tenancy. The monthly tenancy plan by first alternative Realtors is designed to improve
                                rental in Nigeria, eliminate debt, increase occupancy rate and provide affordability and flexibility for tenants.</p>
                        </div>
                    </div>
                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-5">
                                <p>
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> Monthlytenancy.com All rights reserved
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>

        </div>

        <script type="text/javascript" src="{{asset('js/frontend/js/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/jquery-migrate-3.0.0.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/jquery.sticky.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/jquery.waypoints.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/jquery.animateNumber.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/jquery.fancybox.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/jquery.stellar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/jquery.easing.1.3.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/bootstrap-datepicker.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/frontend/js/aos.js')}}"></script>

        <script type="text/javascript" src="{{asset('js/frontend/js/main.js')}}"></script>
        <script type="text/javascript">
            //<![CDATA[
          var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
          document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
        //]]>
        </script>
        <script language="JavaScript" type="text/javascript">
            TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_sm_124x32.png", "POSDV", "none");
        </script>
        @yield('footer_styles')

    </body>

</html>
