@extends(('layouts/compact_menu'))
{{-- Page title --}}
@section('title')
Property
@parent
@stop

@section('header_styles')
<!--Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('vendors/inputlimiter/css/jquery.inputlimiter.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/chosen/css/chosen.css')}}" />
<link type="text/css" rel="stylesheet"
    href="{{asset('vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/jquery-tagsinput/css/jquery.tagsinput.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/daterangepicker/css/daterangepicker.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/datepicker/css/bootstrap-datepicker.min.css')}}" />
<link type="text/css" rel="stylesheet"
    href="{{asset('vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/multiselect/css/multi-select.css')}}" />
<!--End of plugin styles-->
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/form_elements.css')}}" />
<!-- end of page level styles -->
@stop

{{-- Page content --}}
@section('content')
<!-- Content Header (Page header) -->
<header class="head">
    <div class="main-bar">
        <div class="row no-gutters">
            <div class="col-lg-6">
                {{-- <h4 class="nav_top_align skin_txt">
                        <i class="fa fa-file-o"></i>
                        Property
                    </h4> --}}
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index1">
                            <i class="fa ti-file" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Property</a>
                    </li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner forms bg-container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-white">
                        Property Information
                    </div>
                    <form method="POST" action="{{ route('admin.property.update', $value->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input value="property" name="request_type" type="hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>House Type</h5>

                                    {{-- <input type="text" class="form-control" name="default"  /> --}}
                                    <select class="form-control" name="house_type" required>
                                        <option disabled selected hidden>Select Type</option>
                                        @foreach($houseTypes as $type)
                                        <option @if($value->type == $type->value)
                                            selected
                                            @endif>{{ $type->value }}</option>
                                        @endforeach
                                    </select>

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>No of units</h5>

                                    <input type="number" class="form-control" name="units" required value="{{ $value->units }}"/>

                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>Price per unit (Monthly)</h5>

                                    <input type="number" class="form-control" name="price" required value="{{ $value->unit_price }}" />

                                </div>
                                <div class="col-lg input_field_sections">
                                    <h5>No of Toilets</h5>

                                    <input type="number" class="form-control" name="toilets" required value="{{ $value->toilets }}"/>

                                </div>

                                <div class="col-lg input_field_sections">
                                    <h5>No of bathrooms</h5>

                                    <input type="number" class="form-control" name="bathrooms" required value="{{ $value->bathrooms }}" />

                                </div>

                                <div class="col-lg input_field_sections">
                                    <h5>No of rooms</h5>

                                    <input type="number" class="form-control" name="rooms" required value="{{ $value->rooms }}"/>

                                </div>



                            </div>

                            <div class="row">

                                <div class="col-lg input_field_sections">
                                    <h5>Other Features/ Description</h5>

                                    <textarea rows="5" class="form-control" name="description">{{ $value->other_description }}</textarea>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5 for="images">Attach Images</h5>
                                    <div class="input-group hdtuto control-group lst increment main">
                                        <input type="file" name="images[]" class="myfrm form-control" id="images">
                                    </div>
                                    <div class="clone d-none">
                                        <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                            <input type="file" name="images[]" class="myfrm form-control" id="images">
                                        </div>
                                    </div>
                                    <div class="input-group-btn col-12 p-2">
                                        <button class="btn btn-success  float-right" type="button"><i
                                                class="fldemo fa fa-plus"></i>Add File</button>
                                    </div>
                                </div>
                            </div>
                            <div class="input_field_sections text-right">
                                <button class="btn btn-primary" type="submit">Update Property</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.inner -->
</div>
<!-- /.outer -->
<!-- /.content -->
@stop

@section('footer_scripts')
<script>
    $(document).ready(function() {
      $(".btn-success").click(function(){
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".hdtuto control-group lst").remove();
      });
    });
</script>
<!-- plugin level scripts -->
<script type="text/javascript" src="{{asset('vendors/jquery.uniform/js/jquery.uniform.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/chosen/js/chosen.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('vendors/jquery-tagsinput/js/jquery.tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pluginjs/jquery.validVal.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/daterangepicker/js/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/autosize/js/jquery.autosize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/inputmask/js/inputmask.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/inputmask/js/jquery.inputmask.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/inputmask/js/inputmask.date.extensions.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/inputmask/js/inputmask.extensions.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/multiselect/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.min.js"></script>
<!--end of plugin scripts-->
<script type="text/javascript" src="{{asset('js/form.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pages/form_elements.js')}}"></script>
@stop
