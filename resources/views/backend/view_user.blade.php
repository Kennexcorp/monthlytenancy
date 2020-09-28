@extends(('layouts/compact_menu'))
{{-- Page title --}}
@section('title')
View User
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!--Plugin css-->
<link type="text/css" rel="stylesheet" href="{{asset('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/dataTables.bootstrap.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/modal/css/component.css')}}" />
<!--end of page level css-->
@stop
@section('content')
<header class="head">
    <div class="main-bar">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <h4 class="nav_top_align skin_txt">
                    <i class="fa fa-user"></i>
                    User Profile
                </h4>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index1">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Users</a>
                    </li>
                    <li class="active breadcrumb-item">User Profile</li>
                </ol>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 m-t-35">
                        <div class="text-center">
                            <div class="form-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumb_zoom zoom admin_img_width">
                                        <img src="{{asset('img/admin.jpg')}}" alt="admin" class="admin_img_width"></div>
                                    <div class="fileinput-preview fileinput-exists thumb_zoom zoom admin_img_width">
                                    </div>
                                    <div class="btn_file_position">
                                        <span class="btn btn-primary btn-file">
                                            <span class="fileinput-new">Change image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="Changefile">
                                        </span>
                                        <a href="#" class="btn btn-warning fileinput-exists"
                                            data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-t-25">
                        <div>
                            <ul class="nav nav-inline view_user_nav_padding" id="content-tab">
                                <li class="nav-item card_nav_hover">
                                    <a class="nav-link active" href="#user" id="home-tab" data-toggle="tab"
                                        aria-expanded="true">Personal Information</a>
                                </li>
                                <li class="nav-item card_nav_hover">
                                    <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Work
                                        Information</a>
                                </li>
                                <li class="nav-item card_nav_hover">
                                    <a class="nav-link" href="#tab3" id="followers" data-toggle="tab">Uploaded
                                        Document</a>
                                </li>
                            </ul>
                            <div id="clothing-nav-content" class="tab-content m-t-10">
                                <div role="tabpanel" class="tab-pane fade show active" id="user">
                                    <table class="table" id="users">
                                        <tr>
                                            <td>Name</td>
                                            <td class="inline_edit">
                                                <span class="" data-title="Edit User Name">{{ $user->name }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail</td>
                                            <td>
                                                <span class="" data-title="Edit E-mail">{{ $user->email }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td>
                                                <span class=""
                                                    data-title="Edit Phone Number">{{ $user->profile->phone_number }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date of birth</td>
                                            <td>
                                                <span class=""
                                                    data-title="Edit Phone Number">{{ $user->profile->date_of_birth }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                <span class="" data-title="Edit Address">Australia</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Registered on</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab2">
                                    <table class="table" id="users">
                                        <tr>
                                            <td>Organization name</td>
                                            <td class="inline_edit">
                                                <span class=""
                                                    data-title="Edit User Name">{{ $user->workInfo->organization_name }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Organization Address</td>
                                            <td class="inline_edit">
                                                <span class=""
                                                    data-title="Edit User Name">{{ $user->workInfo->organization_address }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Occupation</td>
                                            <td class="inline_edit">
                                                <span class=""
                                                    data-title="Edit User Name">{{ $user->workInfo->occupation }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ID type - Number</td>
                                            <td class="inline_edit">
                                                <span class=""
                                                    data-title="Edit User Name">{{ $user->workInfo->id_type .' - '. $user->workInfo->id_number }}</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab3">
                                    <table class="table" id="users">
                                        <tr>
                                            <td>One Year Account Statement</td>
                                            <td class="inline_edit">
                                                <a href="#">
                                                    <span class="" data-title="Edit User Name">download</span>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Call up letter</td>
                                            <td class="inline_edit">
                                                <a href="#">
                                                    <span class="" data-title="Edit User Name">download</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-t-35">
                    <div class="card-header bg-white">
                        <div>
                            <i class="fa fa-calendar"></i>
                            Current and Previous Rents
                        </div>
                    </div>
                    <div class="card-body m-t-35 padding-body view_user_cal">
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                id="editable_table" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Start Date
                                        </th>
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">End Date
                                        </th>
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Property</th>

                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Duration</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Amount</th>

                                        <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Status</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rents as $rent)
                                    <tr role="row" class="even">
                                        <td class="sorting_1">{{ $rent->created_at->englishMonth  }}</td>
                                        <td class="sorting_1">
                                            {{ $rent->created_at->addMonth($rent->duration)->englishMonth  }}</td>
                                        <td></td>
                                        <td class="center">{{ $rent->duration . ' Month(s)' }}</td>
                                        <td>&#8358;{{number_format(floatval($rent->rents->sum('amount'))) }}</td>
                                        <td class="center">{{ $rent->status }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#large{{ $rent->id }}" title="View Rent" class="btn btn-sm btn-primary">
                                                <i class="fa fa-eye text-success"></i> view rents
                                            </a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="large{{ $rent->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="modalLabelLarge">Rent Breakdown</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Month</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Due Date</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach ($rent->rents as $rent)
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>{{ Carbon\Carbon::parse($rent->due_date)->englishMonth  }}
                                                                </td>
                                                                <td>&#8358;{{number_format(floatval($rent->amount)) }}</td>
                                                                <td>{{ Carbon\Carbon::parse($rent->due_date)->toFormattedDateString() }}
                                                                </td>
                                                                <td>{{ $rent->status }}</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.inner -->
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
<script type="text/javascript" src="{{asset('js/pages/modals.js')}}"></script>
<!--End of plugin scripts-->
<!--Page level scripts-->
<script type="text/javascript" src="{{asset('js/pages/users.js')}}"></script>
<!-- end page level scripts -->
@stop
