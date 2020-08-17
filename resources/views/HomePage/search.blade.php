@extends('layouts.HomePage')

@section('content')
    <div class="container-fluid">
{{--        {{ dd($searchs) }}--}}
        @if(isset($searchs))
            @if ($searchs-> isEmpty())
                <h4 style="color: orangered">Sorry, no results found for the term <b>"{{ $term }}"</b>.</h4>
            @else
                <h4 style="color: green">There are {{ $searchs->count() }} results for the term <b>"{{ $term }}"</b></h4>
                <hr />
                <div class="row">
                    @foreach($searchs as $search)
                        <div class="col-3 items-collection">
                            <a href="{{ route('products',['ProductID'=>$search->ProductID]) }}" style="text-decoration: none; color: #1a1a1a">
                                <div class="collection-item-img">
                                    <img src="{{ asset('images/' . $search->ProductImage ) }}" style="width: 100%; height:100%" alt="">
                                </div>
                                <div class="collection-color-item"></div>
                                <div class="collection-product-price">
                                    <span class="price">{{$search->ProductName}}</span><br>
                                    <span class="price">{{number_format($search->ProductPrice)}} VNĐ</span><br>
                                    <span class="price">4 - 11+ card, flat bills, coins</span><br>
                                </div>
                            </a>
                        </div>
                    @endforeach
        </div>
            @endif
            @endif
@endsection
