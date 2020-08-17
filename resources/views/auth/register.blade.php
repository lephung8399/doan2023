@extends('layouts.app1')

@section('content')
    <div class="wrapper wrapper-full-page">
        <div class="register-page">
            <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-text">
                                <h2>Create Account Form</h2>
{{--                                <h4>Register for free and experience the dashboard today.</h4>--}}
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <form action="{{ route('admin.registerProcess') }}"  method="POST">
                                @csrf
                                <div class="card card-plain">
                                    <div class="content">
                                        <div class="form-group">
                                            <input type="text" name="UserFirstName" placeholder=" First Name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="UserLastName" placeholder=" Last Name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Enter email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" placeholder="Password Confirmation" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <select name="role" id="" class="form-control">
                                                <option value="1">SuperAdmin</option>
                                                <option value="2">Admin</option>
                                                <option value="3">Processor Orders</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-fill btn-danger btn-wd">Create Account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright text-center">
{{--                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>--}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script type="text/javascript">
        $().ready(function(){
            demo.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endsection
