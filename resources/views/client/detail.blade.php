@extends ('client.layouts.master')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h2>Book on the <b>G</b>o</h2>
                </div>

                <div class="panel panel-default">

                    <div class="panel-body">
                        <h4 class="header">Basic infomations</h4>
                        <div class="form-group">
                            <label for="roomName">Room: </label>
                            <p id="roomName"> {{ $room->name }}</p>
                        </div>
                        <div class="form-group">
                            <label for="roomPrice">Price: </label>
                            <p id="roomPrice"> {{ $room->price }} MMKS <span class="text-muted">per day.</span></p>
                        </div>

                        <div class="form-group">
                            <label for="roomType">Type of room: </label>
                            <p id="roomType"> {{ $room_type->type }}</p>
                        </div>

                        <div class="form-group">
                            <label for="roomTv">Has Television?</label>
                            <p id="roomTV"> {{ $room->hasTV ? "Yes": "No" }}</p>
                        </div>

                        <div class="form-group">
                            <label for="roomShower">Has Warmshower?</label>
                            <p id="roomTV"> {{ $room->hasWarmshower ? "Yes": "No" }}</p>
                        </div>

                        <div class="form-group">
                            <label for="roomBf">Has Breakfast?</label>
                            <p id="roomBf"> {{ $room->hasBreakfast ? "Yes": "No" }}</p>
                        </div>

                        <div class="form-group">
                            <label for="roomMaxperson">Max person?</label>
                            <p id="roomMaxperson"> {{ $room->maxPerson }} people</p>
                        </div>

                        <div class="form-group">
                            <label for="roomStatus">Available?</label>
                            <p id="roomStatus"> <span class="badge" style="background: {{ $room->status == 1 ? "#00a65a": "#d2d6de" }}">
                                    {{ $room->status == 1? "Active" : "Disable" }}
                                </span> </p>
                        </div>

                    </div>

                    <div class="panel-footer">

                        <a href="{{ route('clients.booking', $room->id) }}" class="btn btn-flat btn-primary" {{ $room->status == 0 ? "disabled" : ""}}>Book</a>

                        <a href="{{ route('clients.room') }}" class="btn btn-flat btn-primary">Cancel</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection