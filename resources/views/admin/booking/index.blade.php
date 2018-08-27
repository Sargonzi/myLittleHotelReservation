@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Booking
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>bookings</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Bookings</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tbBooking" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Booking Code</th>
                                <th>User Id</th>
                                <th>Room Id</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>BK-001</td>
                                <td>1</td>
                                <td>1</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a class="btn btn-flat btn-info"><i class="fa fa-cog fa-fw"></i></a>
                                    <a class="btn btn-flat btn-primary"><i class="fa fa-edit fa-fw"></i> </a>
                                    <a class="btn btn-flat btn-danger"><i class="fa fa-trash-o fa-fw"></i> </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
            $('#tbBooking').DataTable({});
        });
    </script>
@endpush