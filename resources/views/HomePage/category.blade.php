@extends('layouts.HomePage')

@section('content')

    <div class="main-banner-collection" style="width: 100%;">
        <span class="mainBanner__link__content">
              <!-- <h1 style="font-size: 70px; color: #ffffff;"><a href="#" style="text-decoration: none; font-family: auto;color: #ffffff;">Your day, Sorted</a></h1> -->
              <br>
            <!-- <button type="button" class="btn btn-light" style="letter-spacing: 4px; font-size: 12px;">SHOP THE RANGE</button> -->
        </span>
    </div>
    <div class="container">
        <div class="row wrapper">
            <div class="col-6"><b><a href="{{ route('index') }}">Home</a> / <a href="#">@foreach($cate as $cateName){{ $cateName->CategoryName }} @endforeach</a></b></div>
            <div class="col-6"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($categories_product as $category_product)
                    <div class="col-3 items-collection">
                        <a href="{{ route('products',['ProductID'=>$category_product->ProductID]) }}" >
                            <div class="collection-item-img">
                                <img src="{{ asset('images/' . $category_product->ProductImage ) }}" style="width: 100%; height:100%" alt="">
                            </div>
                            <div class="collection-color-item"></div>
                            <div class="collection-product-price">
                                <span class="price">{{$category_product->ProductName}}</span><br>
                                <span class="price">{{number_format($category_product->ProductPrice)}} VNĐ</span><br>
                                <span class="price">4 - 11+ card, flat bills, coins</span><br>
                            </div>
                        </a>
                    </div>
            @endforeach
        </div>

{{--        <div class="row">--}}
{{--            <div class="col-3 items-collection">--}}
{{--                <div class="collection-item-img">--}}
{{--                    <img src="{{ asset('images/4.jpeg') }}" style="width: 100%; height:100%" alt="">--}}
{{--                </div>--}}
{{--                <div class="collection-color-item"></div>--}}
{{--                <div class="collection-product-price">--}}
{{--                <span><b>Note Sleeve</b>--}}
{{--                    <br> <b>89$</b>--}}
{{--                    <br> 4 - 11+ card, flat bills, coins--}}
{{--                </span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-3 items-collection">--}}
{{--                <div class="collection-item-img">--}}
{{--                    <img src="{{ asset('images/4.jpeg') }}" style="width: 100%; height:100%" alt="">--}}
{{--                </div>--}}
{{--                <div class="collection-color-item"></div>--}}
{{--                <div class="collection-product-price">--}}
{{--                <span><b>Note Sleeve</b>--}}
{{--                    <br> <b>89$</b>--}}
{{--                    <br> 4 - 11+ card, flat bills, coins--}}
{{--                </span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-3 items-collection">--}}
{{--                <div class="collection-item-img">--}}
{{--                    <img src="{{ asset('images/4.jpeg') }}" style="width: 100%; height:100%" alt="">--}}
{{--                </div>--}}
{{--                <div class="collection-color-item"></div>--}}
{{--                <div class="collection-product-price">--}}
{{--                <span><b>Note Sleeve</b>--}}
{{--                    <br> <b>89$</b>--}}
{{--                    <br> 4 - 11+ card, flat bills, coins--}}
{{--                </span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-3 items-collection">--}}
{{--                <div class="collection-item-img">--}}
{{--                    <img src="{{ asset('images/4.jpeg') }}" style="width: 100%; height:100%" alt="">--}}
{{--                </div>--}}
{{--                <div class="collection-color-item"></div>--}}
{{--                <div class="collection-product-price">--}}
{{--                <span><b>Note Sleeve</b>--}}
{{--                    <br> <b>89$</b>--}}
{{--                    <br> 4 - 11+ card, flat bills, coins--}}
{{--                </span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>


@endsection
