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
            <div class="col-md-3">
                <h4 class="header"> Name: {{ $user->name }}</h4>

                <p><i class="fa fa-envelope-o fa-fw"></i> {{ $user-> email}}</p>
                <p><i class="fa fa-phone fa-fw"></i> {{ $user-> phone}}</p>
                <p><i class="fa fa-user fa-fw"></i> {{ $user-> nrc}}</p>
                <p><i class="fa fa-user fa-fw"></i> {{ $user-> passport}}</p>
                <p><i class="fa fa-location-arrow fa-fw"></i> {{ $user-> address}}</p>
                <p><i class="fa fa-location-arrow fa-fw"></i> {{ $user-> city}}</p>
                <p><i class="fa fa-flag fa-fw"></i> {{ $user-> country}}</p>
            </div>
            <div class="col-md-9">

                <h4 class="header">My booked history</h4>

                <table id="tabRoom" class="table table-bordered table-hover table-striped" width="100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Booking Code</th>
                        <th>price</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->booking_code }}</td>
                            <td>{{ $book->total_price }}</td>
                            <td>{{ $book->check_in }}</td>
                            <td>{{ $book->check_out }}</td>
                            <td><span class="badge"
                                      style="background: {{ $book->status == 1? "#00ff00" : "#cccccc" }};">
                                    {{ $book->status == 1? "Active" : "Disable" }}
                                </span></td>
                            <td>
                                <a class="btn btn-flat btn-primary"
                                   href="{{ route('clients.bookings.download', $book->id) }}"><i
                                            class="fa fa-print fa-fw"></i> </a>
                                <a class="btn btn-flat btn-primary"
                                   href="{{ route('clients.bookings.email', $book->id) }}"><i
                                            class="fa fa-envelope-o fa-fw"></i> </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if (exist) {
            alert(msg);
        }
    </script>
@endpush