@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Reports
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>reports</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Report</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection


@push('scripts')
    <script>
        $(document).ready(function () {
            $('#tbRoom').DataTable({});
        });
    </script>
@endpush