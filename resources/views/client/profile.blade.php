@extends ('client.layouts.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="slider">
                <div class="panel panel-default">

                    {{ $user->name }}
                </div>
            </div>
        </div>
    </div>
@endsection