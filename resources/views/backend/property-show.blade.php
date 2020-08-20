@extends(('layouts/compact_menu'))
{{-- Page title --}}
@section('title')
Property
@parent
@stop

@section('header_styles')
<!--Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('vendors/select2/css/select2.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/dataTables.bootstrap.css')}}" />
<!--End of plugin styles-->
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/tables.css')}}" />
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
                    <div class="card-header bg-success">
                        Owner's Information
                    </div>
                    <form method="POST" action="{{ route('admin.property.update', $value->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="request_type" value="landlord">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>Estate/Owner's name</h5>

                                    <input type="text" class="form-control" name="name" value="{{ $value->name }}"
                                        required>

                                </div>

                                <div class="col-lg input_field_sections">
                                    <h5>Contact</h5>

                                    <input type="tel" class="form-control" name="contact" value="{{ $value->contact }}"
                                        required />

                                </div>

                                <div class="col-lg input_field_sections">
                                    <h5>Property type</h5>

                                    {{-- <input type="text" class="form-control" name="default"  /> --}}
                                    <select class="form-control" name="property_type" required>
                                        <option>Select Type</option>
                                        <option @if($value->type == 'Estate')
                                            selected
                                            @endif>Estate</option>
                                        <option @if($value->type == 'Single')
                                            selected
                                            @endif>Single</option>
                                    </select>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg input_field_sections">
                                    <h5>State</h5>

                                    {{-- <input type="text" class="form-control" name="default"  /> --}}
                                    <select class="form-control" name="state" required>
                                        <option>Select State</option>
                                        @foreach($states as $state)
                                        <option @if($value->state == $state['state'])
                                            selected
                                            @endif>{{ $state['state'] }}</option>
                                        @endforeach

                                    </select>

                                </div>

                                <div class="col-lg input_field_sections">
                                    <h5>LGA</h5>

                                    {{-- <input type="tel" class="form-control" name="default"  /> --}}
                                    <select class="form-control" name="lga" required>
                                        <option>Select LGA</option>
                                    </select>

                                </div>

                                <div class="col-lg input_field_sections">
                                    <h5>Address</h5>

                                    <input type="text" class="form-control" name="address" value="{{ $value->address }}"
                                        required />

                                </div>



                            </div>
                            <div class="input_field_sections text-right">
                                <button class="btn btn-success">Update Info</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card mt-5">
                    <div class="card-header bg-success">
                        Property Details
                    </div>
                    <div class="card-body m-t-35" id="user_body">
                        <div class="table-toolbar">
                            <div class="btn-group">

                                <button class="btn btn-raised btn-success adv_cust_mod_btn" data-toggle="modal"
                                    data-target="#modal-4">Add Property
                                </button>
                            </div>
                            <div class="btn-group float-right users_grid_tools">
                                <div class="tools"></div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                    id="editable_table" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Type</th>
                                            <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Units</th>
                                            <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Toilets</th>
                                            <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Bathrooms
                                            </th>
                                            <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Rooms</th>
                                            <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Description
                                            </th>
                                            <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Images</th>
                                            <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($value->properties as $property)
                                        <tr role="row" class="even">
                                            <td>{{ $property->type  }}</td>
                                            <td>{{ $property->units  }}</td>
                                            <td>{{ $property->toilets  }}</td>
                                            <td class="center">{{ $property->bathrooms }}</td>
                                            <td class="center">{{ $property->rooms }}</td>
                                            <td class="center">{{ $property->other_description }}</td>
                                            <td class="center">{{ $property->images }}</td>
                                            <td>
                                                <form method="POST"
                                                    action="{{ route('admin.property.destroy', $property->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="">
                                                        <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                            href="{{ route('admin.property.edit', $property->id) }}"
                                                            class="btn btn-success btn-sm col">Update</a>&nbsp;
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-sm btn-danger col"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Delete">Delete
                                                        </button>
                                                    </div>

                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade pullDown" id="modal-4" role="dialog" aria-labelledby="modalLabelnews">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title text-white" id="modalLabelnews">Add Property</h4>
                </div>
                <form method="POST" action="{{ route('admin.property.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $value->id }}" name="landlord_property">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg input_field_sections">
                                <h5>House Type</h5>

                                {{-- <input type="text" class="form-control" name="default"  /> --}}
                                <select class="form-control" name="house_type" required>
                                    <option>Select Type</option>
                                </select>

                            </div>


                        </div>

                        <div class="row">
                            <div class="col-lg input_field_sections">
                                <h5>No of units</h5>

                                <input type="number" class="form-control" name="units" required />

                            </div>
                            <div class="col-lg input_field_sections">
                                <h5>No of Toilets</h5>

                                <input type="number" class="form-control" name="toilets" required />

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg input_field_sections">
                                <h5>No of bathrooms</h5>

                                <input type="number" class="form-control" name="bathrooms" required />

                            </div>

                            <div class="col-lg input_field_sections">
                                <h5>No of rooms</h5>

                                <input type="number" class="form-control" name="rooms" required />

                            </div>



                        </div>

                        <div class="row">

                            <div class="col-lg input_field_sections">
                                <h5>Other Features/ Description</h5>

                                <textarea rows="5" class="form-control" name="description"></textarea>

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
                                    <button class="btn btn-primary  float-right" type="button"><i
                                            class="fldemo fa fa-plus"></i>Add
                                        File</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        {{-- <div class="input_field_sections text-right"> --}}
                        <button class="btn  btn-danger" data-dismiss="modal">Close me!</button>
                        <button class="btn btn-success" type="submit">Add Property</button>
                        {{-- </div> --}}
                    </div>
                </form>

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
      $(".btn-primary").click(function(){
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".hdtuto control-group lst").remove();
      });
    });
</script>
<!-- plugin level scripts -->
<script type="text/javascript" src="{{asset('vendors/select2/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.responsive.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.colVis.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.print.min.js')}}"></script>
<!--End of plugin scripts-->
<!--Page level scripts-->
<script type="text/javascript" src="{{asset('js/pages/modals.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pages/users.js')}}"></script>
@stop
