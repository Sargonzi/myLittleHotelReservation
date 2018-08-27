@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>users</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h2 class="box-title">Users</h2>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tbUser" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <a class="btn btn-flat btn-info" href="{{ route('users.show', $user->id) }}"><i
                                                    class="fa fa-cog fa-fw"></i></a>
                                        <a class="btn btn-flat btn-primary" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-edit fa-fw"></i> </a>

                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                              style="display: inline;"
                                              id="delete-form">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-flat btn-danger" id="delete-btn">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#tbUser').DataTable({});
        });
    </script>
@endpush