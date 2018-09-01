@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Room detail
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">room</a></li>
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
                        <h3 class="box-title">About Room</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <strong><i class="fa fa-sort-numeric-asc margin-r-5"></i> Room name</strong>

                        <p class="text-muted">
                            {{ $room->name }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-building margin-r-5"></i> Room Type</strong>

                        <p class="text-muted">
                            {{ $roomType->type }}
                        </p>

                        <hr>
                        <strong><i class="fa fa-dollar margin-r-5"></i> Room price</strong>

                        <p class="text-muted">
                            {{ $room->price }} MMKs
                        </p>

                        <hr>
                        <strong><i class="fa fa-user margin-r-5"></i> Capacity (maximum Person)</strong>

                        <p class="text-muted">
                            {{ $room->maxPerson }} Persons
                        </p>

                        <hr>

                        <strong><i class="fa fa-television margin-r-5"></i> Has TV ?</strong>

                        <p class="text-muted">
                            {{ $room->hasTV ? 'Yes':'NO' }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-shower margin-r-5"></i> Has Warm shower ?</strong>

                        <p class="text-muted">
                            {{ $room->hasWarmshower ? 'Yes': 'No' }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-table margin-r-5"></i> Has Breakfast ?</strong>

                        <p class="text-muted">
                            {{ $room->hasBreakfast ? 'Yes': 'No' }}
                        </p>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-primary btn-flat" href="#">Edit</a>
                        <a class="btn btn-primary btn-flat" href="{{ route('rooms.index') }}">Ok</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection