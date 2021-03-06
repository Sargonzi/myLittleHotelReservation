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
                    <form role="form" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">
                                <label for="username">User name</label>
                                <input type="text" class="form-control" id="username" name="name"
                                       placeholder="user name" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="email address" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <label for="confpassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confpassword" name="confpassword"
                                       placeholder="Confirm Password">
                            </div>

                            <div class="form-group">
                                <label for="phone">Pone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       placeholder="Phone" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="nrc">NRC</label>
                                <input type="text" class="form-control" id="nrc" name="nrc"
                                       placeholder="NRC" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="passport">Passport</label>
                                <input type="text" class="form-control" id="passport" name="passport"
                                       placeholder="Passport" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city"
                                       placeholder="City" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country"
                                       placeholder="Country" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                       placeholder="Address" required autofocus>
                            </div>

                            <div class="form-group">
                                <p class="help-block">User role check if admin, default value is false.</p>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="isAdmin"> is Admin
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <p class="help-block">Check if the user is foreigner</p>
                                    <label>
                                        <input type="checkbox" name="isForeigner"> is Foreigner
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                            <a href="{{ route('users.index') }}" class="btn btn-default btn-flat">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

