<!doctype html>
<html lang="en">

  <head>
    <title>Alternative Tenancy Program</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

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



      <header class="site-navbar site-navbar-target bg-dark" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                  <a href="dashboard.html">ATP Profile</a>
              </div>
            </div>

            <div class="col-9  text-right">


              <span class="d-inline-block d-lg-none"><a href="#"
                  class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                    class="icon-menu h3 text-white"></span></a></span>



              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="dashboard.html" class="nav-link">Home</a></li>
                  <li class="active"><a href="profile.html" class="nav-link">Profile</a></li>
                  <li><a href="property_login.html" class="nav-link">Property</a></li>
                  <li><a href="login.html" class="nav-link">logout</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>

      </header>

      <!-- <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
          style="background-image: url('images/hero_1.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">


            </div>
          </div>
        </div>
      </div> -->



      <div class="site-section bg-light">
        <div class="container">

          <div class="h-100" id="demopurpose">
            <div class="container h-100">
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-sm col-md col-lg">


                  <div class="profile-card py-3 card text-center">
                    <a class="btn-edit" href="">
                      <i class="fa fa-edit"></i>
                    </a>
                    <div class="card-body py-4">
                      <img class="profile-picture rounded-circle"
                        src="https://randomuser.me/api/portraits/women/63.jpg" />
                      <h2 class="text-dark h5 font-weight-bold mt-4 mb-1">
                        Amanda H. Burgess
                      </h2>
                      <p class="text-muted font-weight-bold small">
                        <i class="fa fa-map-marker"></i>
                        15 Eagle Way, AL10 BRD
                      </p>
                      <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Personal Information</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Work Information</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Payment Information</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="d-flex px-1 w-100 align-items-center text-left pt-3">
                            <div class="w-100">
                              <form>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Phone Number</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Age</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Age">
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="d-flex px-1 w-100 align-items-center text-left pt-3">
                            <div class="w-100">
                              <form>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Occupation</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Occupation">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Place of work</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Place">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Department</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter department">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Address</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter address">
                                </div>


                                <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          <div class="d-flex px-1 w-100 align-items-center text-left pt-3">
                            <div class="w-100">
                              <form>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Bank Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Account Number</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Account Number">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">NIN Number</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter NIN Number">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">BVN Number</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter BVN Number">
                                </div>


                                <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>



                    </div>
                  </div>



                </div>
              </div>
            </div>
          </div>

        </div>
      </div>



    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>