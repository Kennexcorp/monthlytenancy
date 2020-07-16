@extends('frontend.layout')

@section('header_styles')
@stop

@section('content')

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url({{ asset('img/frontend/images/hero_1.jpg') }})">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <!-- <span class="h4 text-primary mb-4 d-block">&#8358;1,570,000</span> -->
                    <h1 class="mb-2">Beautiful Houses In Nigeria</h1>
                    <p class="text-center mb-5"><span
                            class="small address d-flex align-items-center justify-content-center"> <span
                                class="icon-room mr-3 text-primary"></span> <span>Abuja,
                                Nigeria</span></span></p>

                    <div class="d-flex media-38289 justify-content-around mb-5">
                        <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen"></span>
                            <span>2911 Sq Ft.</span></div>
                        <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                            <span>2</span>
                        </div>
                        <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                            <span>2</span>
                        </div>
                    </div>
                    <p><a href="about.html" class="btn btn-primary text-white px-4 py-3">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>



<form action="">
    <div class="realestate-filter">
        <div class="container">
            <div class="realestate-filter-wrap nav">
                <a href="#for-rent" class="active" data-toggle="tab" id="rent-tab" aria-controls="rent"
                    aria-selected="true">For Rent</a>
                <a href="#for-sale" class="" data-toggle="tab" id="sale-tab" aria-controls="sale"
                    aria-selected="false">For Sale</a>
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

<div class="site-section">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-6">
                <div class="h-100 p-5 bg-black">
                    <div class="row">
                        <div class="col-md-6 text-center mb-4">
                            <div class="service-38201">
                                <span class="flaticon-house-2"></span>
                                <h3>Estate Insurance</h3>
                                <p>Estate Management</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center mb-4">
                            <div class="service-38201">
                                <span class="flaticon-bathtub"></span>
                                <h3>Elegant Bathtub</h3>
                                <p>Estate Management</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center mb-4">
                            <div class="service-38201">
                                <span class="flaticon-house-1"></span>
                                <h3>Fresh Air</h3>
                                <p>Estate Management</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center mb-4">
                            <div class="service-38201">
                                <span class="flaticon-calculator"></span>
                                <h3>Estate Calculator</h3>
                                <p>Estate Management</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ml-auto">
                <h3 class="heading-29201">About Us</h3>

                <p class="mb-5"> The Alternative Tenancy Project hosted by First Alternative Realtors is a
                    monthly housing
                    scheme.</p>

                <div class="service-39290 d-flex align-items-start mb-5">
                    <div class="media-icon mr-4">
                        <span class="flaticon-house-1"></span>
                    </div>
                    <div class="text">
                        <h3>Mission</h3>
                        <p>It is our aim at First Alternative Realtors to provide decent accommodation for
                            tenants also protect tenants right and provide services to minimize the loss of
                            lives and
                            properties due to the inadequate rapid response of SOS services in cases of
                            fire, health or
                            security emergencies.</p>
                    </div>
                </div>

                <div class="service-39290 d-flex align-items-start mb-5">
                    <div class="media-icon  mr-4">
                        <span class="flaticon-calculator"></span>
                    </div>
                    <div class="text">
                        <h3>Vision</h3>
                        <p>To provide maximum affordability, flexibility, and comfort for Nigerians in areas
                            where accommodation is really costly and also with the option of pairing
                            included the affordability of houses would be easier.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-black block-14">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="heading-29201 text-center text-white">Latest Properties</h3>

                <p class="mb-5 text-white">Perspiciatis quidem, harum provident, repellat sint officia quos
                    fugit tempora
                    id deleniti.</p>
            </div>
        </div>


        <div class="owl-carousel nonloop-block-14">
            <div class="media-38289">
                <a href="property-single.html" class="d-block"><img src="{{ asset('img/frontend/images/img_1.jpg') }}" alt="Image"
                        class="img-fluid"></a>
                <div class="text">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                        <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                            <span>2.</span>
                        </div>
                        <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                            <span>2</span>
                        </div>
                    </div>
                    <h3 class="mb-3"><a href="#">&#8358;570,000</a></h3>
                    <span class="d-block small address d-flex align-items-center"> <span
                            class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street,
                            Harrison, ACT
                            2914</span></span>
                </div>
            </div>

            <div class="media-38289">
                <a href="property-single.html" class="d-block"><img src="{{ asset('img/frontend/images/img_2.jpg') }}" alt="Image"
                        class="img-fluid"></a>
                <div class="text">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                        <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                            <span>2.</span>
                        </div>
                        <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                            <span>2</span>
                        </div>
                    </div>
                    <h3 class="mb-3"><a href="#">&#8358;1,570,000</a></h3>
                    <span class="d-block small address d-flex align-items-center"> <span
                            class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street,
                            Harrison, ACT
                            2914</span></span>
                </div>
            </div>

            <div class="media-38289">
                <a href="property-single.html" class="d-block"><img src="{{ asset('img/frontend/images/img_1.jpg') }}" alt="Image"
                        class="img-fluid"></a>
                <div class="text">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                        <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                            <span>2.</span>
                        </div>
                        <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                            <span>2</span>
                        </div>
                    </div>
                    <h3 class="mb-3"><a href="#">&#8358;980,000</a></h3>
                    <span class="d-block small address d-flex align-items-center"> <span
                            class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street,
                            Harrison, ACT
                            2914</span></span>
                </div>
            </div>


            <div class="media-38289">
                <a href="property-single.html" class="d-block"><img src="{{ asset('img/frontend/images/img_1.jpg') }}" alt="Image"
                        class="img-fluid"></a>
                <div class="text">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                        <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                            <span>2.</span>
                        </div>
                        <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                            <span>2</span>
                        </div>
                    </div>
                    <h3 class="mb-3"><a href="#">&#8358;570,000</a></h3>
                    <span class="d-block small address d-flex align-items-center"> <span
                            class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street,
                            Harrison, ACT
                            2914</span></span>
                </div>
            </div>

            <div class="media-38289">
                <a href="property-single.html" class="d-block"><img src="{{ asset('img/frontend/images/img_1.jpg') }}" alt="Image"
                        class="img-fluid"></a>
                <div class="text">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                        <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                            <span>2.</span>
                        </div>
                        <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                            <span>2</span>
                        </div>
                    </div>
                    <h3 class="mb-3"><a href="#">&#8358;1,570,000</a></h3>
                    <span class="d-block small address d-flex align-items-center"> <span
                            class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street,
                            Harrison, ACT
                            2914</span></span>
                </div>
            </div>

            <div class="media-38289">
                <a href="property-single.html" class="d-block"><img src="{{ asset('img/frontend/images/img_1.jpg') }}" alt="Image"
                        class="img-fluid"></a>
                <div class="text">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                        <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span>
                            <span>2.</span>
                        </div>
                        <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span>
                            <span>2</span>
                        </div>
                    </div>
                    <h3 class="mb-3"><a href="#">&#8358;980,000</a></h3>
                    <span class="d-block small address d-flex align-items-center"> <span
                            class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street,
                            Harrison, ACT
                            2914</span></span>
                </div>
            </div>

        </div>


    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center">
                <h3 class="heading-29201 text-center">Our Agents</h3>

                <p class="mb-5"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="person-29381">
                    <div class="media-39912">
                        <img src="{{ asset('img/frontend/images/person_1.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <h3><a href="#">Josh Long</a></h3>
                    <span class="meta d-block mb-4">4 Properties</span>
                    <div class="social-32913">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="person-29381">
                    <div class="media-39912">
                        <img src="{{ asset('img/frontend/images/person_1.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <h3><a href="#">Melinda David</a></h3>
                    <span class="meta d-block mb-4">10 Properties</span>
                    <div class="social-32913">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="person-29381">
                    <div class="media-39912">
                        <img src="{{ asset('img/frontend/images/person_1.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <h3><a href="#">Jessica Soft</a></h3>
                    <span class="meta d-block mb-4">18 Properties</span>
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


<div class="site-section bg-primary">
    <div class="container block-13">
        <div class="nonloop-block-13 owl-carousel">
            <div class="testimonial-38920 d-flex align-items-start">
                <div class="pic mr-4"><img src="{{ asset('img/frontend/images/img_1.jpg') }}" alt=""></div>
                <div>
                    <span class="meta">Business Man</span>
                    <h3 class="mb-4">Josh Long</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur
                        id, hic quos
                        nihil nulla veritatis!</p>
                    <div class="mt-4">
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                    </div>
                </div>
            </div>

            <div class="testimonial-38920 d-flex align-items-start">
                <div class="pic mr-4"><img src="{{ asset('img/frontend/images/person_1.jpg') }}" alt=""></div>
                <div>
                    <span class="meta">Business Woman</span>
                    <h3 class="mb-4">Jean Doe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur
                        id, hic quos
                        nihil nulla veritatis!</p>
                    <div class="mt-4">
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                    </div>
                </div>
            </div>

            <div class="testimonial-38920 d-flex align-items-start">
                <div class="pic mr-4"><img src="{{ asset('img/frontend/images/person_1.jpg') }}" alt=""></div>
                <div>
                    <span class="meta">Business Woman</span>
                    <h3 class="mb-4">Jean Doe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur
                        id, hic quos
                        nihil nulla veritatis!</p>
                    <div class="mt-4">
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                        <span class="icon-star text-white"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('footer_styles')
@stop

