@extends('layouts.app1')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card card-user">
                    <img src="{{ asset('images/' .$user->avatar) }}" style="position: absolute; filter: blur(8px)" />
                    <div class="image">
{{--                        <img src="{{ asset('images/my-ava.jpg') }}" />--}}
                    </div>
                    <div class="card-content">
                        <form action="{{ route('admin.profile.avatar',$user->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="author image-upload">
                                <label for="file-input">
                                    @if($user->avatar != null)
                                        <img class="avatar border-white"  src="{{ asset('images/' .$user->avatar) }}" alt="">
                                    @else
                                        <img class="avatar border-white" src="{{ asset('images/default_avatar.png') }}" alt="">
                                    @endif
{{--                                    <img class="avatar border-white"  src="{{ asset('images/' .$user->avatar) }}" alt="..."/>--}}
                                </label>
                                <input id="file-input" type="file" name="anh[]" />
                                <h4 class="card-title">
                                    <button type="submit" class="btn btn-outline-danger" style="color: black">Change Avatar</button>
                                    <br> <p></p>
                                    {{$user->UserFirstName}} {{$user->UserLastName}}<br />
                                    <a href="#"><small>{{$user->username}}</small></a>
                                    <br>
                                    @if ($user->role == 1)
                                        <p style="color: white; font-style: italic"> SuperAdmin</p>
                                    @elseif($user->role == 2)
                                        <p style="color: white; font-style: italic">Admin</p>
                                    @else
                                        <p style="color: white; font-style: italic">Order Processor</p>
                                    @endif
                                </h4>
                            </div>
                        </form>
                        <p class="description text-center" style="color: white">
                            "{{$user->aboutMe}} "
                        </p>
                    </div>
                    <hr>
{{--                    <div class="text-center">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-3 col-md-offset-1">--}}
{{--                                <h5>12<br /><small>Files</small></h5>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <h5>2GB<br /><small>Used</small></h5>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-3">--}}
{{--                                <h5>24,6$<br /><small>Spent</small></h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="card-content">
                        <form action="{{ route('admin.profile.update',$user->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control border-input" name="username" placeholder="Username" value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control border-input" name="email" placeholder="example@mail.com" value="{{ $user->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control border-input" name="UserFirstName" placeholder="First Name" value="{{$user->UserFirstName}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control border-input" name="UserLastName" placeholder="Last Name" value="{{$user->UserLastName}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control border-input" name="UserAddress" placeholder="Home Address" value="{{$user->UserAddress}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control border-input" name="UserCity" placeholder="City" value="{{$user->UserCity}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control border-input" name="UserCountry" placeholder="Country" value="{{$user->UserCountry}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control border-input" name="phone" placeholder="Your Phone Number" value="{{$user->phone}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea rows="5" class="form-control border-input" name="aboutMe" placeholder="Here can be your description" value="{{$user->aboutMe}}">
                                            {{$user->aboutMe}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                <button type="button" class="btn btn-warning btn-fill btn-wd">
                                    <a href="{{ route('admin.profile.confirmPassword') }}" style="color: #ffff">Change Password</a>
                                </button>
                            </div>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
