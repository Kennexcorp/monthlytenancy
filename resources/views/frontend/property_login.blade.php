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



      <header class="site-navbar site-navbar-target  bg-dark" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                  <a href="dashboard.html">ATP Properties</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                    <li><a href="dashboard.html" class="nav-link">Home</a></li>
                    <li><a href="profile.html" class="nav-link">Profile</a></li>
                    <li  class="active"><a href="property_login.html" class="nav-link">Property</a></li>
                    <li><a href="login.html" class="nav-link">logout</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <!-- <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-2">Our Properties</h1>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta cupiditate ipsum porro, deserunt iure vel aliquam, eos quaerat.</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    
    <div class="site-section bg-light">
        <div class="container">

        </div>
      </div>
    <form action="">
      <div class="realestate-filter">
        <div class="container">
          <div class="realestate-filter-wrap nav">
            <a href="#for-rent" class="active" data-toggle="tab" id="rent-tab" aria-controls="rent" aria-selected="true">For Rent</a>
            <a href="#for-sale" class="" data-toggle="tab" id="sale-tab" aria-controls="sale" aria-selected="false">For Sale</a>
          </div>
        </div>
      </div>
      
      <div class="realestate-tabpane pb-5">
        <div class="container tab-content">
           <div class="tab-pane active" id="for-rent" role="tabpanel" aria-labelledby="rent-tab">

             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">All Types</option>
                   <option value="">Townhouses</option>
                   <option value="">Duplexes</option>
                   <option value="">Quadplexes</option>
                   <option value="">Condominiums</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <input type="text" class="form-control" placeholder="Title">
               </div>
               <div class="col-md-4 form-group">
                 <input type="text" class="form-control" placeholder="Address">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Any Bedrooms</option>
                   <option value="">0</option>
                   <option value="">1</option>
                   <option value="">2</option>
                   <option value="">3+</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Any Bathrooms</option>
                   <option value="">0</option>
                   <option value="">1</option>
                   <option value="">2</option>
                   <option value="">3+</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <div class="row">
                   <div class="col-md-6 form-group">
                     <select name="" id="" class="form-control w-100">
                       <option value="">Min Price</option>
                       <option value="">&#8358;100</option>
                       <option value="">&#8358;200</option>
                       <option value="">&#8358;300</option>
                       <option value="">&#8358;400</option>
                     </select>
                   </div>
                   <div class="col-md-6">
                     <select name="" id="" class="form-control w-100">
                       <option value="">Max Price</option>
                       <option value="">&#8358;25,000</option>
                       <option value="">&#8358;50,000</option>
                       <option value="">&#8358;75,000</option>
                       <option value="">&#8358;100,000</option>
                       <option value="">&#8358;100,000,000</option>
                     </select>
                   </div>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-4">
                 <input type="submit" class="btn btn-black py-3 btn-block" value="Submit">
               </div>
             </div>

           </div>
           <div class="tab-pane" id="for-sale" role="tabpanel" aria-labelledby="sale-tab">
             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">All Types</option>
                   <option value="">Townhouses</option>
                   <option value="">Duplexes</option>
                   <option value="">Quadplexes</option>
                   <option value="">Condominiums</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <input type="text" class="form-control" placeholder="Title">
               </div>
               <div class="col-md-4 form-group">
                 <input type="text" class="form-control" placeholder="Address">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Any Bedrooms</option>
                   <option value="">0</option>
                   <option value="">1</option>
                   <option value="">2</option>
                   <option value="">3+</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Any Bathrooms</option>
                   <option value="">0</option>
                   <option value="">1</option>
                   <option value="">2</option>
                   <option value="">3+</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <div class="row">
                   <div class="col-md-6 form-group">
                     <select name="" id="" class="form-control w-100">
                       <option value="">Min Price</option>
                       <option value="">&#8358;100</option>
                       <option value="">&#8358;200</option>
                       <option value="">&#8358;300</option>
                       <option value="">&#8358;400</option>
                     </select>
                   </div>
                   <div class="col-md-6">
                     <select name="" id="" class="form-control w-100">
                       <option value="">Max Price</option>
                       <option value="">&#8358;25,000</option>
                       <option value="">&#8358;50,000</option>
                       <option value="">&#8358;75,000</option>
                       <option value="">&#8358;100,000</option>
                       <option value="">&#8358;100,000,000</option>
                     </select>
                   </div>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-4">
                 <input type="submit" class="btn btn-black py-3 btn-block" value="Submit">
               </div>
             </div>

           </div>
        </div>
      </div>
    </form>
    

    
    <div class="site-section bg-black">
      <div class="container">
        
        <div class="row">

          <div class="col-md-4 mb-5">
            <div class="media-38289">
              <a href="property-single_login.html" class="d-block"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="text">
                <div class="d-flex justify-content-between mb-3">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span> <span>2911 Sq Ft.</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
                </div>
                <h3 class="mb-3"><a href="#">&#8358;570,000</a></h3>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
                <div class="row">
                    <div class="col-12 btn btn-primary">Rent Now</div>&nbsp;
                    <div class="col-12 btn btn-secondary">Request Inspection</div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="media-38289">
            <a href="property-single_login.html" class="d-block"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">&#8358;1,570,000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
              <div class="row">
                  <div class="col-12 btn btn-primary">Rent Now</div>&nbsp;
                  <div class="col-12 btn btn-secondary">Request Inspection</div>
                </div>
            </div>
          </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="media-38289">
              <a href="property-single_login.html" class="d-block"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="text">
                <div class="d-flex justify-content-between mb-3">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span> <span>2911 Sq Ft.</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
                </div>
                <h3 class="mb-3"><a href="#">&#8358;980,000</a></h3>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
                <div class="row">
                    <div class="col-12 btn btn-primary">Rent Now</div>&nbsp;
                    <div class="col-12 btn btn-secondary">Request Inspection</div>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-5">
            <div class="media-38289">
              <a href="property-single_login.html" class="d-block"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="text">
                <div class="d-flex justify-content-between mb-3">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span> <span>2911 Sq Ft.</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
                </div>
                <h3 class="mb-3"><a href="#">&#8358;570,000</a></h3>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
                <div class="row">
                    <div class="col-12 btn btn-primary">Rent Now</div>&nbsp;
                    <div class="col-12 btn btn-secondary">Request Inspection</div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="media-38289">
            <a href="property-single_login.html" class="d-block"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">&#8358;1,570,000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
              <div class="row">
                  <div class="col-12 btn btn-primary">Rent Now</div>&nbsp;
                  <div class="col-12 btn btn-secondary">Request Inspection</div>
                </div>
            </div>
          </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="media-38289">
              <a href="property-single_login.html" class="d-block"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="text">
                <div class="d-flex justify-content-between mb-3">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span> <span>2911 Sq Ft.</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
                </div>
                <h3 class="mb-3"><a href="#">&#8358;980,000</a></h3>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
                <div class="row">
                    <div class="col-12 btn btn-primary">Rent Now</div>&nbsp;
                    <div class="col-12 btn btn-secondary">Request Inspection</div>
                  </div>
              </div>
            </div>
          </div>


          <div class="col-12 mt-5 text-center pagination-39291">
            <span class="active">1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
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

