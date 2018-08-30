@extends ('client.layouts.master')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h2>Book on the <b>G</b>o</h2>
                    will display the detail of the
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        <p> {{ $room }}</p>
                    </div>

                    <div class="panel-footer">
                        <a href="#" class="btn btn-flat btn-primary">Book</a>
                        <a href="{{ route('clients.room') }}" class="btn btn-flat btn-primary">Cancel</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection