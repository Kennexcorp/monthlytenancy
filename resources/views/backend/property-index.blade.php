@extends(('layouts/compact_menu'))
{{-- Page title --}}
@section('title')
Property
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
<!-- end of page level styles -->

@stop
@section('content')
<header class="head">
    <div class="main-bar">
        <div class="row no-gutters">
            <div class="col-lg-6 col-sm-4">
                {{-- <h4 class="nav_top_align">
                    <i class="fa fa-user"></i>
                    Property
                </h4> --}}
            </div>
            <div class="col-lg-6 col-sm-8 col-12">
                <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index1">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Properties</a>
                    </li>
                    <li class="active breadcrumb-item">Index</li>
                </ol>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="card">
            {{-- <div class="card-header bg-white">
                <a class="btn btn-primary" href="#">Add Property</a>
            </div> --}}
            <div class="card-body m-t-35" id="user_body">
                <div class="table-toolbar">
                    <div class="btn-group">

                        <a href="{{ route('admin.property.create') }}" id="editable_table_new" class="btn btn-default">
                            Add Property <i class="fa fa-plus"></i>
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
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Name</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Contact</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">State</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">LGA</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Address</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Properties</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($values as $value)
                                <tr role="row" class="even">
                                    <td>{{ $value->name  }}</td>
                                    <td>{{ $value->contact  }}</td>
                                    <td>{{ $value->state  }}</td>
                                    <td class="center">{{ $value->lga }}</td>
                                    <td class="center">{{ $value->address }}</td>
                                    <td class="center">{{ $value->properties->count() }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.property.destroy', $value->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a  data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="{{ route('admin.property.show', $value->id) }}" class="btn btn-primary btn-sm col">View</a>&nbsp;
                                            &nbsp;

                                            <button type="submit" class="btn btn-sm btn-danger col" data-toggle="tooltip"
                                                data-placement="top" title="Delete">Delete
                                            </button>
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
    <!-- /.inner -->
</div>
<!-- /.outer -->
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
<!-- end page level scripts -->
@stop
