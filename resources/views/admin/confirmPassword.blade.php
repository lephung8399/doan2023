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
                <a class="navbar-brand" href="#">Confirm Current Password</a>
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
                <form action="{{ route('password.confirm') }}" method="POST" >
                    @csrf
                    <div class="card card-lock">
                        <div class="author">
                            <img class="avatar" src="{{ asset('images/' .$user->avatar) }}" alt="...">
                        </div>
                        <h4>{{ $user->username }}</h4>
                        <div class="form-group">
{{--                            <input type="password" placeholder="Enter Password" class="form-control">--}}
                            <input id="password" placeholder="Enter Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-wd">Confirm</button>
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
