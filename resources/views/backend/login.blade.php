<!DOCTYPE html>
<html>

    <head>
        <title>Login | MTP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}" />
        <!--Global styles -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
        <!--End of Global styles -->
        <!--Plugin styles-->
        <link type="text/css" rel="stylesheet"
            href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('vendors/wow/css/animate.css')}}" />
        <!--End of Plugin styles-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/pages/login1.css')}}" />
    </head>

    <body>
        <div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
            <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
                <img src="{{asset('img/loader.gif')}}" style=" width: 40px;" alt="loading...">
            </div>
        </div>
        <div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
                    <div class="row">
                        <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                            <div class="login_logo login_border_radius1">
                                <h3 class="text-center">
                                    <img src="{{asset('img/logow2.png')}}" alt="josh logo" class="admire_logo"><span
                                        class="text-white"> Monthly Tenancy Admin &nbsp;<br />
                                        Log In</span>
                                </h3>
                            </div>
                            <div class="bg-white login_content login_border_radius">
                                @if(Session::has('message'))
                                <p class="text-danger text-center">{{ Session::get('message') }}</p>
                                @endif
                                <form action="{{route('admin.auth.login.authenticate')}}" id="login_validator"
                                    method="POST" class="login_validator">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="col-form-label"> E-mail</label>
                                        <div class="input-group input-group-prepend">
                                            <span class="input-group-text  border-right-0  input_email"><i
                                                    class="fa fa-envelope text-primary"></i></span>
                                            <input type="text" class="form-control  form-control-md" id="email"
                                                name="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <!--</h3>-->
                                    <div class="form-group">
                                        <label for="password" class="col-form-label">Password</label>
                                        <div class="input-group  input-group-prepend ">
                                            <span class="input-group-text  border-right-0  addon_password"><i
                                                    class="fa fa-lock text-primary"></i></span>
                                            <input type="password" class="form-control form-control-md" id="password"
                                                name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="submit" value="Log In"
                                                    class="btn btn-primary btn-block login_button">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input form-control">
                                                <span class="custom-control-label"></span>
                                                <a class="custom-control-description">Keep me logged in</a>
                                            </label>
                                        </div>
                                        <div class="col-6 text-right forgot_pwd">
                                            <a href="{{ url('password/reset') }}"
                                                class="custom-control-description forgottxt_clr">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 m-t-10">
                                    <div class="icon-white btn-facebook icon_padding loginpage_border">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <span class="text-white icon_padding text-center question_mark">Log In With Facebook</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 pull-lg-right m-t-10">
                                    <div class="icon-white btn-google icon_padding loginpage_border">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        <span class="text-white icon_padding question_mark">Log In With Google+</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- global js -->
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- end of global js-->
        <!--Plugin js-->
        <script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}">
        </script>
        <script type="text/javascript" src="{{asset('vendors/wow/js/wow.min.js')}}"></script>
        <!--End of plugin js-->
        <script type="text/javascript" src="{{asset('js/pages/login1.js')}}"></script>
        <script type="text/javascript">
            //<![CDATA[
          var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
          document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
        //]]>
        </script>
        <script language="JavaScript" type="text/javascript">
            TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_sm_124x32.png", "POSDV", "none");
        </script>
    </body>

</html>
