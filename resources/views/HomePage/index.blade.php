@extends('layouts.HomePage')

@section('content')
    <div class="main">
        <div class="main-banner" style="width: 100%;">
        <span class="mainBanner__link__content">
              <h1 style="font-size: 70px; color: #ffffff;"><a href="{{ route('products.all') }}" style="text-decoration: none; font-family: auto;color: #ffffff;">Your day, Sorted</a></h1>
              <br>
              <button type="button" class="btn btn-light" style="letter-spacing: 4px; font-size: 12px;">
                  <a href="{{ route('products.all') }}" style="text-decoration: none;color: inherit;">
                  SHOP THE RANGE
                  </a>
              </button>
        </span>
        </div>

        <div class="slider">
            <div class="slider-tittle">
                <p>DISCOVER OUR BESTSELLERS</p>
            </div>

            <div class="slider-product">
                <div class="container slider-items">
                    <div class="owl-carousel">
                        <div class="div-items">
                            <div class="img-item" style="position: relative;">
                                <img src="{{ asset('images/0.jpeg') }}" alt="" style="width: 100%; height: max-height;">
                                <div class="overlay">
                                    <div class="text">
                                    </div>
                                </div>
                            </div>
                            <b><p style="text-align: center;">
                                    Phone case - 3 Card <br>
                                    89$
                                </p></b>
                        </div>
                        <div class="div-items">
                            <div class="img-item">
                                <a href="#"><img src="{{ asset('images/1.jpeg') }}" alt="" style="width: 100%; height: max-height"></a>
                            </div>
                            <b><p style="text-align: center;">
                                    <a href="#">Phone case - 3 Card</a> <br>
                                    <a href="#">89$</a>
                                </p></b>
                        </div>
                        <div class="div-items">
                            <div class="img-item">
                                <a href="#"><img src="{{ asset('images/2.jpeg') }}" alt="" style="width: 100%; height: max-height"></a>
                            </div>
                            <b><p style="text-align: center;">
                                    <a href="#">Phone case - 3 Card</a> <br>
                                    <a href="#">89$</a>
                                </p></b>
                        </div>
                        <div class="div-items">
                            <div class="img-item">
                                <a><img src="{{ asset('images/3.jpeg') }}" alt="" style="width: 100%; height: max-height"></a>
                            </div>
                            <b><p style="text-align: center;">
                                    <a>Phone case - 3 Card</a> <br>
                                    <a>90$</a>
                                </p></b>
                        </div>

                        <!-- <div class="col-4 div-items">
                          <div class="img-item">
                            <img src="image/1.jpeg" alt="" style="width: 100%; height: max-height%;">
                          </div>
                          <b><p style="text-align: center;">
                            Phone case - 3 Card <br>
                            89$
                          </p></b>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner-product">
            <div class="landingPageBanner">
                <a href="#"><img src="{{ asset('images/desk-to-dinner-table-without-a-hitch.jpg') }}" alt="" style="margin:auto; width: 100%; height: 100%;">
                    <div class="top-left">
                        <h2 class="banner-h3">Desk to denner table without a hitch</h2>
                        <span class="banner-h3">
                <a href="#">SHOP WORK ACCESSORIES ></a>
              </span>
                    </div>
                </a>
            </div>
            <div class="landingPageBanner">
                <a href="#"></a><img src="{{ asset('images/suitainable.jpg') }}" alt="" style="margin:auto; width: 100%;height: 100%;"></a>
                <div class="top-left">
                    <h2 class="banner-h3">Sustainable and strong like the sea</h2>
                    <span class="banner-h3">
                <a href="#">SHOP MARINE BLUE > </a>
              </span>
                </div>
            </div>
            <div class="landingPageBanner">
                <a href="#"><img src="{{ asset('images/good on you.jpg') }}" alt="" style="margin:auto; width: 100%; height: 100%;"></a>
                <div class="top-left">
                    <h2 class="banner-h3">10 years of slimming wallets</h2>
                    <span class="banner-h3">
                <a href="#">SLIM YOURS > ></a>
              </span>
                </div>
            </div>
            <div class="landingPageBanner">
                <a href="#"><img src="{{ asset('images/rewart-you-team-with-great-design.jpg') }}" alt="" style="margin:auto; width: 100%; height: 100%;"></a>
                <div class="top-left">
                    <h2 class="banner-h3">Limited pieces, rare prices</h2>
                    <span class="banner-h3">
                <a href="#">SHOP LAST CHANGE TO BUY > ></a>
              </span>
                </div>
            </div>
        </div>
        <div class="video-post">
            <h4 style="padding-top: 100px;">LASTEST RELEASE</h4><br>
            <div class="video-embed">
                <iframe width="950" height="630" src="https://www.youtube.com/embed/YGaOz4Lq2DQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel();
        });
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:3,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    </script>

@endsection
