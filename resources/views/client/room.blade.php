@extends ('client.layouts.master')


@section('content')

    <div class="container">
        <div class="row">
            <div class="slider">
                <div class="img-responsive">
                    <ul class="bxslider">
                        <li><img src="{{ asset('img/room001.jpg')}}" alt=""/></li>
                        <li><img src="{{ asset('img/room002.jpg')}}" alt=""/></li>
                        <li><img src="{{ asset('img/room003.jpg')}}" alt=""/></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="header">Available rooms</h3>
                <hr>
                <table id="tabRoom" class="table table-bordered table-hover table-striped" width="100%">
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
                            <td><span class="badge badge-success" style="background: {{ $room->status == 1 ? "#00a65a": "#d2d6de" }}">{{ $room->status == 1 ? "Active" : "Disable" }}</span></td>
                            <th><a href="{{ route('clients.room.detail', $room->id) }}"
                                   class="btn btn-flat btn-primary"><i class="fa fa-info-circle fa-fx"> Details</i></a>
                            </th>
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
        $(document).ready(function () {
            $('#tabRoom').DataTable({});
        });
    </script>
@endpush