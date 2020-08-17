@extends('layouts.HomePage')

@section('content')
    <div class="container">
        <div class="row" style="height: 100px"></div>
        <div class="row" style="height: 200px; width: 100%; background-color: #1ccacd">
            <div class="col">
                <h1>Thank you for your order!</h1>
                <h5 style="font-style: italic"> Hello! Thank you for puchasing from our store.</h5>
                <h5 style="font-style: italic">If you have any problem, please contact us.</h5>
                <p>Hotline: 0249 8711 325</p>
            </div>
        </div>
        <br>
        <div class="row" style="height: 50px;margin-left: 345px; ">
            <a href="{{ route('index') }}"><button class="btn btn-primary" style="width: 400px">Continue Shopping</button></a>
        </div>
        <br>
    </div>
@endsection
