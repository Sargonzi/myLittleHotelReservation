@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add New User
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>add_new</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="box box-primary">
                    <div class="box-header">
                    </div>
                    <form role="form" method="POST" action="{{ route('bookings.store') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">
                                <label for="user">User</label>
                                <select type="text" class="form-control select2" style="width: 100%;" id="user" name="user"
                                       required>
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="room">Room</label>
                                <select type="text" class="form-control select2" style="width: 100%;" id="room" name="room"
                                        required>
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
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

                            <div class="form-group">
                                <label for="status">Set status</label>
                                < type="checkbox" class="form-control" id="status" name="status"
                                      >
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

        $('.select2').select2();


    });
</script>
@endpush