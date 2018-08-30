@extends ('client.layouts.master')


@section('content')

    <div class="container">
        <div class="row">
            <div class="slider">
                <div class="img-responsive">
                    <ul class="bxslider">
                        <li><img src="{{ asset('img/01.jpg')}}" alt=""/></li>
                        <li><img src="{{ asset('img/01.jpg')}}" alt=""/></li>
                        <li><img src="{{ asset('img/01.jpg')}}" alt=""/></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <table id="tabRoom" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Room Name</th>
                        <th>Room Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->id }}</td>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->roomtype_id }}</td>
                            <td><span class="badge-success">Available</span></td>
                            <th><a href="{{ route('clients.room.detail', $room->id) }}"
                                   class="btn btn-flat btn-warning"><i class="fa fa-info-circle fa-fx">View
                                        Details</i></a></th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection