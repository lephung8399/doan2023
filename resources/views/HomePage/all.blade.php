@extends('layouts.HomePage')

@section('content')

    <div class="main-banner-collection" style="width: 100%;">
        <img src="{{ asset('images/bestseller-header-image-desktop1.jpg') }} " alt="" class="cate_img" style="width: 100%; background-repeat: no-repeat">
        <span class="mainBanner__link__content">
              <!-- <h1 style="font-size: 70px; color: #ffffff;"><a href="#" style="text-decoration: none; font-family: auto;color: #ffffff;">Your day, Sorted</a></h1> -->
              <br>
            <!-- <button type="button" class="btn btn-light" style="letter-spacing: 4px; font-size: 12px;">SHOP THE RANGE</button> -->
        </span>
    </div>
    <div class="container">
        <div class="row wrapper">
            <div class="col-6"><b><a href="{{ route('index') }}">Home</a> / <a href="#">All</a></b></div>
            <div class="col-6"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($products as $product)
                <div class="col-3 items-collection">
                    <a href="{{ route('products',['ProductID'=>$product->ProductID]) }}" style="text-decoration: none; color: #1a1a1a" >
                        <div class="collection-item-img">
                            <img src="{{ asset('images/' . $product->ProductImage ) }}" style="width: 100%; height:100%" alt="">
                        </div>
                        <div class="collection-color-item"></div>
                        <div class="collection-product-price">
                            <span class="price">{{$product->ProductName}}</span><br>
                            <span class="price">{{number_format($product->ProductPrice)}} VNĐ</span><br>
                            <span class="price">4 - 11+ card, flat bills, coins</span><br>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@endsection
