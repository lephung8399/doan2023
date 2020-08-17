@extends('layouts.app1')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Account</h4>
                        <p class="category">Here is a subtitle for this table</p>
                    </div>
                    <a href="{{ route('admin.newAccount') }}">
                        <button type="button" class="btn btn-wd btn-success" style="margin-left: 10px">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            New Account
                        </button>
                    </a>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Avatar</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th class="text-center">Role</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td class="text-center"> {{ $admin->id }} </td>
                                    <td style="width: 200px"><img src="{{ asset('images/' .$admin->avatar) }}" alt="" style="width=50px; height:100px"> </td>
                                    <td> {{$admin->UserFirstName}} {{$admin->UserLastName}}</td>
                                    <td> {{ $admin->email }} </td>
                                    <td> {{ $admin->phone }}</td>
                                    <td>
                                      @if ($admin->role == 1)
                                            SuperAdmin
                                        @elseif($admin->role == 2)
                                            Admin
                                        @else
                                            Order Processor
                                        @endif
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                            <i class="ti-user"></i>
                                        </a>
                                        <a href="{{ route('admin.admintrator.form', [$admin->id]) }}" rel="tooltip" title="Edit Category" class="btn btn-success btn-simple btn-xs">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="{{ route('admin.admintrator.delete', [$admin->id]) }}" onclick="return confirm('Do you want to delete?')" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                            <i class="ti-close"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
