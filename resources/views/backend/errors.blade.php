@extends(('layouts/compact_menu'))
{{-- Page title --}}
@section('title')
    Permission Error
    @parent
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->

    <div class="outer">
        <div class="inner bg-light lter bg-container">
            <div class="row text-center bg-danger p-5 h3">
                {{ $responseMessage }}
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
    <!-- /.content -->
@stop

