@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add new room
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>user_add</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="box box-primary">
                    <div class="box-header">
                    </div>
                    <form role="form" method="POST" action="{{ route('rooms.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="roomName">Name</label>
                                <input type="text" class="form-control" id="roomName" name="roomName"
                                       placeholder="room name" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="roomPrice">Price</label>
                                <input type="text" class="form-control" id="roomPrice" name="roomName"
                                       placeholder="room price" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="maxPerson">Maximum person</label>
                                <input type="number" class="form-control" id="maxPerson" name="roomName"
                                       placeholder="maximum person" required autofocus>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                            <a href="{{ route('rooms.index') }}" class="btn btn-default btn-flat">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection