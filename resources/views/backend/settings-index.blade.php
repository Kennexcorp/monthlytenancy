@extends(('layouts/compact_menu'))
{{-- Page title --}}
@section('title')
Settings
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!--Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('vendors/select2/css/select2.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/dataTables.bootstrap.css')}}" />
<!--End of plugin styles-->
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/tables.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/modal/css/component.css')}}" />
<!-- end of page level styles -->

@stop
{{-- Page content --}}
@section('content')
<!-- Content Header (Page header) -->
<header class="head">
    <div class="main-bar">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <h4 class="nav_top_align skin_txt">
                    <i class="fa fa-file-o"></i>
                    Setup
                </h4>
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
                        <a href="#">Setup</a>
                    </li>
                    <li class="breadcrumb-item active">All</li>
                </ol>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="card">
            <div class="card-header bg-white">
                Property Types
            </div>
            <div class="card-body m-t-35" id="user_body">
                <div class="table-toolbar">
                    <div class="btn-group">

                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#normal">
                            Add <i class="fa fa-plus"></i>
                        </a>
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
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">S/N</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Category</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Value</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($propertyTypes as $value)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{ $value->id }}</td>
                                    <td>{{ $value->category  }}</td>
                                    <td>{{ $value->value }}</td>
                                    <td>
                                        &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                            data-placement="top" title="Delete" href="delete_user"><i
                                                class="fa fa-trash text-danger"></i></a>
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
    <!-- /.inner -->
</div>
<!-- /.outer -->
<div class="modal fade" id="normal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Add Property Type</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.settings.store') }}" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <input type="hidden" name="type" value="propertyTypes">
                <div class="row">
                    <div class="col-lg input_field_sections">
                        <h5>Category</h5>

                        {{-- <input type="text" class="form-control" name="default"  /> --}}
                        <select class="form-control" name="category" required>
                            <option selected disabled hidden>Select Category</option>
                            <option>Property</option>
                            <option>House</option>
                        </select>

                    </div>

                </div>

                <div class="row">
                    <div class="col-lg input_field_sections">
                        <h5>House Type</h5>

                        <input type="text" class="form-control" name="value"  required/>


                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>
                <button type="submit" class="btn  btn-success">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.content -->
@stop

@section('footer_scripts')
<!--Plugin scripts-->
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
<script type="text/javascript" src="{{asset('js/pages/users.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pages/modals.js')}}"></script>
<!-- end page level scripts -->
@stop
