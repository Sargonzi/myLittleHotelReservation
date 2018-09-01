@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Room
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>rooms</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Rooms</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tbRoom" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Room Code</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <td>{{ $room->id  }}</td>
                                <td>{{ $room->name }}</td>
                                <td>{{ $room->price }} MMKS</td>
                                <td><span class="badge badge-success" style="background: {{ $room->status == 1 ? "#00a65a": "#d2d6de" }}">{{ $room->status == 1 ? "Active" : "Disable" }}</span></td>
                                <td>
                                    <a class="btn btn-flat btn-info" href="{{ route('rooms.show', $room->id ) }}"><i class="fa fa-cog fa-fw"></i></a>
                                    <a class="btn btn-flat btn-primary"><i class="fa fa-edit fa-fw"></i> </a>
                                    <a class="btn btn-flat btn-danger"><i class="fa fa-trash-o fa-fw"></i> </a>
                                </td>
                            </tr>
                                @endforeach
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
            $('#tbRoom').DataTable({});
        });
    </script>
@endpush