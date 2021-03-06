<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8">
        <title>
            @section('title')
            | MTP
            @show
        </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}" />
        <!-- global styles-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
        <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
        <!-- end of global styles-->
        @yield('header_styles')
    </head>

    <body class="sidebar-left-hidden">
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
        <div id="wrap">
            <div id="top">
                <!-- .navbar -->
                <nav class="navbar navbar-static-top">
                    <div class="container-fluid m-0">
                        <a class="navbar-brand" href="index">
                            <h4><img src="{{asset('img/logo1.ico')}}" class="admin_img" alt="logo"> MTP ADMIN</h4>
                        </a>
                        <div class="menu mr-sm-auto">
                            <span class="toggle-left" id="menu-toggle">
                                <i class="fa fa-bars"></i>
                            </span>
                        </div>
                        <div class="topnav dropdown-menu-right">

                            <div class="btn-group">
                                <div class="user-settings no-bg">
                                    <button type="button" class="btn btn-default no-bg micheal_btn"
                                        data-toggle="dropdown">
                                        <img src="https://cdn.pixabay.com/photo/2013/07/13/10/07/man-156584_960_720.png"
                                            class="admin_img2 img-thumbnail rounded-circle avatar-img" alt="avatar">
                                        <strong>{{ auth()->user()->name }}</strong>
                                        <span class="fa fa-sort-down white_bg"></span>
                                    </button>
                                    <div class="dropdown-menu admire_admin">
                                        <a class="dropdown-item title" href="#">
                                            MTP Admin</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>
                                            Log Out</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                <!-- /.navbar -->
                <!-- /.head -->
            </div>
            <!-- /#top -->
            <div class="wrapper">
                <div id="left">
                    <div class="menu_scroll">
                        <div class="left_media">
                            <div class="media user-media">
                                <div class="user-media-toggleHover">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="user-wrapper">
                                    <a class="user-link" href="#">
                                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3"
                                            alt="User Picture" src="https://cdn.pixabay.com/photo/2013/07/13/10/07/man-156584_960_720.png">
                                        <p class="user-info menu_hide">Welcome {{ auth()->user()->name }}</p>
                                    </a>
                                </div>
                            </div>
                            <hr />
                        </div>
                        <ul id="menu">

                            @include('layouts.menu')

                        </ul>
                        <!-- /#menu -->
                    </div>
                </div>
                <!-- /#left -->

                <div id="content" class="bg-container">
                    <!-- Content -->
                    @yield('content')
                    <!-- Content end -->
                </div>
                <div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <form>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="float-right" aria-hidden="true">&times;</span>
                                </button>
                                <div class="input-group search_bar_small">
                                    <input type="text" class="form-control" placeholder="Search..." name="search">
                                    <span class="input-group-append">
                                        <button class="btn btn-secondary" type="submit"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /#content -->
            @include('layouts/right_sidebar/default')

        </div>
        <!-- /#wrap -->
        <!-- global scripts-->
        <script type="text/javascript" src="{{asset('js/components.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
        <!-- end of global scripts-->
        <!-- page level js -->
        <script type="text/javascript">
            //<![CDATA[
          var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
          document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
        //]]>
        </script>
        <script language="JavaScript" type="text/javascript">
            TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_sm_124x32.png", "POSDV", "none");
        </script>
        @yield('footer_scripts')
        <!-- end page level js -->
    </body>

</html>
