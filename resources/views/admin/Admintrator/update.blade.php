@extends('layouts.app1')

@section('content')
    <div class="card">
        <form  class="form-horizontal" action="{{ route('admin.admintrator.update',[$admins->id]) }}" method="POST" novalidate="">
            @csrf
            <div class="card-content">
                <h4 class="card-title">Type Validation</h4>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Full name
                            </label>
                            <div class="col-sm-4">
                                <input class="form-control"
                                       type="text"
                                       name="UserFirstName"
                                       placeholder="Enter First Name" value="{{ $admins->UserFirstName }}"
                                />
{{--                                <input type="text"  >--}}
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control"
                                       type="text"
                                       name="UserLastName"
                                      placeholder="Enter Last Name" value="{{ $admins->UserLastName }}"
                                />
                            </div>
    {{--                        <div class="col-sm-4"><code>required</code></div>--}}
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Phone
                            </label>
                            <div class="col-sm-6">
                                <input class="form-control"
                                       type="text"
                                       name="phone" value="{{ $admins->phone }}"
                                    placeholder="Enter Phone Number"
                                />
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Role
                            </label>
                            <div class="col-sm-6">
                                <select name="role"  class="form-control">
                                    <option value="1" @if($admins->role == 1) selected @endif>SuperAdmin</option>
                                    <option value="2" @if($admins->role == 2) selected @endif>Admin</option>
                                    <option value="3" @if($admins->role == 3) selected @endif>Processor Orders</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-info btn-fill">Submit</button>
            </div>
        </form>
    </div>

@endsection
