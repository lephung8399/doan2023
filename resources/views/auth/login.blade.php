<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Đăng Nhập</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
</head>
<body class="align">
<div class="grid">
    <h1 style="text-align: center">Login</h1>
    <hr style="border: none">
    <form action="{{ route('login') }}" method="POST" class="form login">
        @csrf
        <div class="form__field">
            <label for="email"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Email</span></label>
            <input id="email" type="text" name="email" class="form__input @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>
            {{--                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

        </div>

        <div class="form__field">
            <label for="password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label>
            <input id="password" type="password" name="password" class="form__input @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
            {{--                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

        </div>
{{--        <p class="text-md-left" style="margin-left: 15px">--}}
{{--            <input type="checkbox" name="remember_me">--}}
{{--            <span>Remember me</span>--}}
{{--        </p>--}}


            @error('email')
            <p class="text--center" style="color: darkred">Email or Password were wrong!</p>
            @enderror
            @error('password')
                <p class="text--center" style="color: darkred">Email or Password were wrong!</p>
            @enderror

        <div class="form__field">
            <input type="submit" value="Sign In">
        </div>

    </form>
{{--    <a href="{{ URL::to('auth/facebook') }}">Facebook Login</a>--}}


    {{--<p class="text--center">
        <a href="{{ route('password.request') }}">Forgot your password?</a>
        <svg class="icon">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use>
        </svg>
    </p>
    <p class="text--center">Not a member?
        <a href="{{ route('register') }}">Sign up now</a>
        <svg class="icon">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use>
        </svg>
    </p>--}}
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>

</body>

</html>
