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
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="header"> {{ $room->name }} </h3>
                    <hr>
                    <p>Hello,<b>{{ $user->name }}</b></p>
                </div>
                <form role="form" method="POST" action="{{ route('clients.booking.store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="panel-body">
                        <div class="form-group" hidden>
                            <label for="bookingCode">Booking code</label>
                            <input type="text" class="form-control" id="bookingCode" name="bookingCode" hidden
                                   placeholder="Booking code" autofocus value="booking">
                        </div>

                        <div class="form-group" hidden>
                            <label for="user">User Id</label>
                            <input type="text" class="form-control" id="user" name="userId" hidden
                                   placeholder="Booking code" autofocus value="{{ $user->id }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="room">Room Id</label>
                            <input type="text" class="form-control" id="room" name="roomId" hidden
                                   placeholder="Booking code" autofocus value="{{ $room->id }}">
                        </div>

                        <div class="form-group">
                            <label for="checkIn">Check in</label>
                            <input type="text" class="form-control" id="checkIn" name="checkIn"
                                   placeholder="check in ">
                        </div>

                        <div class="form-group">
                            <label for="checkOut">Check out</label>
                            <input type="text" class="form-control" id="checkOut" name="checkOut"
                                   placeholder="check out">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function () {

            $('#checkIn').datepicker({
                autoclose: true
            });

            $('#checkOut').datepicker({
                autoclose: true
            });

        });
    </script>
@endpush