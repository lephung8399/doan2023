@extends('layouts.HomePage')

@section('content')

<div class="frame">
    <div class="container breadcrum">
        <div class="row breadcrum-detail">
            <a href="{{ route('index') }}" class="a-breadcrum-detail">Home</a> / <a href="#" class="a-breadcrum-detail">@foreach($product as $product_name) {{ $product_name->ProductName }} @endforeach</a>
        </div>
    </div>
    <div class="info-product">
        <div class="container">
            <div class="row">
                <div class="col-8 product-gallery">
                    <div class="product-gallery-top">
                        @foreach($product as $product_image)
                        <div class="mySlides">
                            <img src="{{ asset('images/' . $product_image->ProductImage ) }}" class="image-top" id="myimage">
                        </div>
                        @endforeach
                    </div>

                    <div class="product-gallery-space"></div>

                    <div class="product-gallery-bottom">
                        <div class="container">
                            <div class="row">
                                @foreach($product as $product_image)
                                <div class="col-2 mini-img-frame">
                                    <img class="demo cursor image-bottom" src="{{ asset('images/' . $product_image->ProductImage ) }}"  class="image-bottom" onclick="currentSlide(1)" alt="The Woods" id="myimage">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 product-selector">
                    @foreach($product as $product_detail)
                    <h1 style="line-height: 27px; color: grey; font-size: 24px">
                        {{ $product_detail->ProductName }}
                    </h1>
                        <strong>{{ number_format($product_detail->ProductPrice) }} </strong> VNĐ
                    <hr >
                        <button type="button" class="btn btn-outline-info" style="width:100%; display: inline">
                            <strong>
                                <img src="https://img.icons8.com/fluent/24/000000/add-shopping-cart.png" style="margin-bottom: 6px" />
                                ADD TO CART
                            </strong>
                        </button>
                      <br>
                        {{ $product_detail->ProductDescription }}

                    @endforeach

{{--                    collapse--}}
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slider">
    <div class="slider-tittle">
        <p>YOU MIGHT ALSO LIKE:</p>
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

<!-- lightbox gallery -->
<script type="text/javascript">
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>

<!-- slide product -->
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
