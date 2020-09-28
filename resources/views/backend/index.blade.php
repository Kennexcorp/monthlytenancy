@extends(('layouts/compact_menu'))
{{-- Page title --}}
@section('title')
    Dashboard
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/pages/index.css')}}">
@stop
@section('content')

    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-home"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">


            <!--top section widgets-->
            <div class="row widget_countup">
                <div class="col-12 col-sm-6 col-xl-3">

                    <div id="top_widget1">
                        <div class="front">
                            <div class="bg-primary p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="user_font">Houses</div>
                                <div id="widget_countup1">3,250</div>
                                <div class="tag-white">
                                    <span id="percent_count1">85</span>%
                                </div>
                                <div class="previous_font">Yearly Users stats</div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="bg-white b_r_5 section_border">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5">
                                        <i class="fa fa-users text-primary"></i>
                                    </div>
                                    <div id="widget_countup12">3,250</div>
                                    <div>Houses</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="visitsspark-chart" class="spark_line"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3 media_max_573">
                    <div id="top_widget2">
                        <div class="front">
                            <div class="bg-success p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="user_font">Tenants</div>
                                <div id="widget_countup2">1,140</div>
                                <div class="tag-white">
                                    <span id="percent_count2">60</span>%
                                </div>
                                <div class="previous_font">Sales per month</div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="bg-white b_r_5 section_border">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5 text-success">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div id="widget_countup22">1,140</div>
                                    <div>Tenants</div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="salesspark-chart" class="spark_line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                    <div id="top_widget3">
                        <div class="front">
                            <div class="bg-warning p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                                <div class="user_font">Comments</div>
                                <div id="widget_countup3">85</div>
                                <div class="tag-white ">
                                    <span id="percent_count3">30</span>%
                                </div>
                                <div class="previous_font">Monthly comments</div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="bg-white b_r_5 section_border">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5 text-warning">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                    <div id="widget_countup32">85</div>
                                    <div>Comments</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="mousespeed" class="spark_line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                    <div id="top_widget4">
                        <div class="front">
                            <div class="bg-danger p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="user_font">Rating</div>
                                <div id="widget_countup4">8</div>
                                <div class="tag-white">
                                    <span id="percent_count4">80</span>%
                                </div>
                                <div class="previous_font">This month ratings </div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="bg-white section_border b_r_5">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5 text-danger">
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <div id="widget_countup42">8</div>
                                    <div>Rating</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="rating" class="spark_line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
    <script type="text/javascript" src="{{asset('vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flip/js/jquery.flip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pluginjs/jquery.sparkline.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/chartist/js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pluginjs/chartist-tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/circliful/js/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.js')}}" ></script>
    <script type="text/javascript" src="{{asset('vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
    <!--end of plugin scripts-->

    <script type="text/javascript" src="{{asset('js/pages/index.js')}}"></script>
@stop
