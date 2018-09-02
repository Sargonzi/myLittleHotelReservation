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
                            @foreach($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id  }}</td>
                                    <td>{{ $booking->booking_code  }}</td>
                                    <td>{{ $booking->user_userid  }}</td>
                                    <td>{{ $booking->room_roomid  }}</td>
                                    <td><span class="badge badge-success"
                                              style="background: {{ $booking->status == 1 ? "#00a65a": "#d2d6de" }}">{{ $booking->status == 1 ? "Active" : "Disable" }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('bookings.show', $booking->id) }}"
                                           class="btn btn-flat btn-info"><i class="fa fa-cog fa-fw"></i></a>
                                        <a href="{{ route('bookings.edit', $booking->id) }}"
                                           class="btn btn-flat btn-primary"><i class="fa fa-edit fa-fw"></i> </a>

                                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST"
                                              style="display: inline;"
                                              id="delete-form">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-flat btn-danger" id="delete-btn">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
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
            $('#tbBooking').DataTable({});
        });
    </script>
@endpush