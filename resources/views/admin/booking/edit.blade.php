@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Booking
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>booking</li>
            <li>edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="box box-primary">
                    <div class="box-header">
                    </div>
                    <form role="form" method="POST" action="{{ route('bookings.update', $booking->id) }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">
                                <label for="bookingCode">Booking code</label>
                                <input type="text" class="form-control" id="bookingCode" name="bookingCode"
                                       placeholder="Booking code" required autofocus
                                       value="{{ $booking->booking_code }}">
                            </div>
                            <div class="form-group">
                                <label for="user">User</label>
                                <select type="text" class="form-control" style="width: 100%;" id="user"
                                        name="user_id"
                                        required>
                                    <option value="{{ $userOne->id }}" selected>{{ $userOne->name }}</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="room">Room</label>
                                <select type="text" class="form-control" style="width: 100%;" id="room"
                                        name="room_id"
                                        required>
                                    <option value="{{ $roomOne->id }}" selected>{{ $roomOne->name }}</option>
                                    @foreach($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="numPerson">Person</label>
                                <input type="number" class="form-control" id="numPerson" name="numPerson"
                                       value="{{ $booking->num_person }}"
                                       placeholder="Number of person">
                            </div>

                            <div class="form-group">
                                <label for="checkIn">Check in</label>
                                <input type="text" class="form-control" id="checkIn" name="checkIn"
                                       value="{{ $booking->check_in }}"
                                       placeholder="check in ">
                            </div>

                            <div class="form-group">
                                <label for="checkOut">Check out</label>
                                <input type="text" class="form-control" id="checkOut" name="checkOut"
                                       value="{{ $booking->check_out }}"
                                       placeholder="check out">
                            </div>

                            <div class="form-group">
                                Select Status
                                <div class="form-group">
                                    <label>
                                        <input type="radio" name="status" class="minimal-red">
                                        cancel
                                    </label>
                                    <label>
                                        <input type="radio" name="status" class="minimal-red">
                                        pending
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                            <a href="{{ route('bookings.index') }}" class="btn btn-default btn-flat">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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

            $('#user').select2({
                placeholder: 'select user'
            });

            $('#room').select2({
                placeholder: 'select room'
            });

            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            })
        });
    </script>
@endpush