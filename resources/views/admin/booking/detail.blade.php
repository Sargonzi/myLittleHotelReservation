@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Booking Detail
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">booking</a></li>
            <li>detail</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-6">

                <!-- Profile Image -->
                <div class="box box-primary">

                    <div class="box-header with-border">
                        <h3 class="box-title">About Booking</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <strong><i class="fa fa-sort-numeric-asc margin-r-5"></i> Booking id</strong>

                        <p class="text-muted">
                            {{ $booking->booking_code }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-user margin-r-5"></i> Booked User name</strong>

                        <p class="text-muted">
                            {{ $userName->name }}
                            <span class="pull-right"><a class="btn btn-flat btn-primary btn-sm" href="{{ route('users.show', $userName->id) }}">detail</a> </span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-building margin-r-5"></i> Booked Room</strong>

                        <p class="text-muted">
                            {{ $roomName->name }}

                            <b class="pull-right"> {{ $roomName->price }} MMKs per day</b>
                        </p>


                        <hr>

                        <strong><i class="fa fa-calendar margin-r-5"></i> CheckIn Date</strong>

                        <p class="text-muted">
                            {{ $booking->check_in }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-calendar margin-r-5"></i> CheckOut Date</strong>

                        <p class="text-muted">
                            {{ $booking->check_out }}
                        </p>

                    </div>
                    <div class="box-footer">
                        <a class="btn btn-primary btn-flat" href="#">Edit</a>
                        <a class="btn btn-primary btn-flat" href="{{ route('bookings.index') }}">Ok</a>
                        <a class="btn btn-primary btn-flat" href="{{ route('bookings.download', $booking->id) }}"><i class="fa fa-print fa-fw"></i></a>
                        <a class="btn btn-primary btn-flat" href="{{ route('bookings.email', $booking->id) }}"><i class="fa fa-mail-forward fa-fw"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

