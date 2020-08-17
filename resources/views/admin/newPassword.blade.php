@extends('layouts.app1')

@section('content')
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">New Password</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page">
        <div class="full-page lock-page" data-color="green" data-image="{{ asset('images/background-5.png') }}">
            <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <form action="{{ route('admin.profile.changePasswordProcess',[$user->id]) }}" method="POST" >
                    @csrf
                    <div class="card card-lock">
                        <h4>New password</h4>
                        <input type="password" class="form-control" name="password" placeholder="Enter New Password">
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            <footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
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
