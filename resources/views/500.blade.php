<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>500 Error | Admire </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{asset('img/logo1.ico')}}"/>
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <!-- end of globallevel js-->
    <!-- page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/404.css')}}" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of page level styles-->
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

<div class="img_center text-center">
    <div class="text-white number">
        Go back to
        <a href="index1" class="text-primary">HOME</a>
    </div>
    <div>
        <img src="{{asset('img/500.png')}}" class="img-fluid" alt="Error" />
    </div>
</div>

<!-- global js -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<!--Bootstrap -->
<script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pages/404.js')}}"></script>
<!-- end of global js -->
</body>

</html>
