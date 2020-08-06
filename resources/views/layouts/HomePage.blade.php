<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/collection.css') }}">


    <link rel="icon" type="image/png" href="{{ asset('images/Ecko_Unltd-logo-5A7FE2931C-seeklogo.com.png') }}"/>
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="{{ asset('OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
    <title>Ecko Unltd</title>
    <style>
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }
    </style>
</head>
    <body>
    <div class="header">
        <div class="container-fluid" id="top-menu">
            <div class="row">
                <div class="col">
                    <a href="#" style="text-decoration: none; color: #8c8c8c;">VIETNAM</a> /
                    <a href="#" style="text-decoration: none; color: #8c8c8c;">ENGLISH</a>
                </div>
                <div class="col" style="text-align: right;">
                    <a href="#" style="text-decoration: none; color: #8c8c8c;">
                        <span style="margin-right: 10px;">FIND A STORE</span>
                    </a>
                    <a href="#" style="text-decoration: none; color: #8c8c8c;">
                        <span>NEWSLETTER</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="menu">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ asset('images/logo.png') }}" alt="" style="height: 74.99px;">
                        </div>
                        <div class="col-10">
                            <nav id="primary_nav_wrap">
                                <ul>


                                    <li class="current-menu-item"><a href="{{ route('index') }}" class="hover-underline-animation">Home</a></li>
                                    @foreach($categories as $category)
                                    <li><a href="{{ route('category',['id'=>$category->CategoryID]) }}" class="hover-underline-animation">{{ $category->CategoryName }}</a>
                                    </li>
                                    @endforeach
                                    <li><a href="#" class="hover-underline-animation" >Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">

                            <div class="col-10">
                                <form action="">
                                    <div class="row">
                                        <div class="col-10">
                                            <input type="text" class="form-control" style="margin-top: 20px" placeholder="S e a r c h i n g . . .">
                                        </div>
                                        <div class="col-2">
                                           <button type="submit" style="border: none; background: inherit"><img src="https://img.icons8.com/ios-glyphs/30/000000/search.png" style="margin-top: 24px; margin-left: 10px;"/></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-2">
                                <a href="#"><img src="https://img.icons8.com/ios/30/000000/shopping-cart-loaded.png" style="margin-top: 24px; margin-left: 10px;"/></a>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="footer">
        <div class="footer-content">
            <div class="footer-content-emailadd">
                <strong><h3 style="font-weight: 800;text-align: center; font-size: 18px ; color: #ffffff; ">Get Product Updates, Exclusive Offers & 10% Off Your First Order</h3></strong>
                <div class="email-address">
                    <div class="email-address-input">
                        <form action="#">
                            <input type="text" placeholder="Email Address" class="form-control" style="height: 45px;margin-top: 30px ;width: 450px; display: inline;">
                            <button type="button" class="btn btn-outline-danger" style="height: 45px; width: 88px;">Send</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="footer-content-down">
                <div class="container-fluid" style="width: 100%;">
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-3">
                            <a href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                            <div style="margin-left: 33px; margin-top: -25px;">
                                <p>
                                    <a href="#"><img src="https://img.icons8.com/fluent/24/000000/twitter.png"/></a>
                                    <a href="#"><img src="https://img.icons8.com/fluent/24/000000/facebook-new.png"/></a>
                                    <a href="#"><img src="https://img.icons8.com/fluent/24/000000/instagram-new.png"/></a>
                                    <a href="#"><img src="https://img.icons8.com/color/24/000000/youtube-play.png"/></a>
                                    <a href="#"><img src="https://img.icons8.com/fluent/24/000000/telegram-app.png"/></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-3" style="text-decoration: none;">
                                    <h5 style="font-weight: 700; color: #ffffff;">About Us</h5>
                                    <br>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">About</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Legal</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Support</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Press Release</a></p>
                                </div>
                                <div class="col-3">
                                    <h5 style="font-weight: 700; color: #ffffff;">Shop</h5>
                                    <br>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">About</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Legal</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Support</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Press Release</a></p>
                                </div>
                                <div class="col-3">
                                    <h5 style="font-weight: 700; color: #ffffff;">Support</h5>
                                    <br>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">About</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Legal</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Support</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Press Release</a></p>
                                </div>
                                <div class="col-3">
                                    <h5 style="font-weight: 700; color: #ffffff;">Legal</h5>
                                    <br>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">About</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Legal</a></p>
                                    <p><a href="" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Support</a></p>
                                    <p><a href="#" class="hover-underline-animation" style="text-decoration: none; color: #ffffff;">Press Release</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright" style="padding-top: 125px; color: #ffffff; font-size: 13px;">
                <p>© 2020 ecko unltd. All Rights Reserved. Site Credits</p>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
