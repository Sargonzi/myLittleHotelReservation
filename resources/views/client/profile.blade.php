@extends ('client.layouts.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="slider">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <h4 class="header">{{ $user->name }}</h4>

                <table id="tabRoom" class="table table-bordered table-hover table-striped" width="100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Booking Code</th>
                        <th>Room name</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Status</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->booking_code }}</td>
                            <td>{{ $book->room_roomid }}</td>
                            <td>{{ $book->check_id }}</td>
                            <td>{{ $book->check_out }}</td>
                            <td><span class="badge"
                                      style="background: {{ $book->status == 1? "#00ff00" : "#cccccc" }};">
                                    {{ $book->status == 1? "Active" : "Disable" }}
                                </span></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection