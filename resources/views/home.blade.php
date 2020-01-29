<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Premiere Construction</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" href="{{asset('css/images/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/tm-customizer.css')}}">
    <link rel="stylesheet" href="#" data-color-css>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>


<div id="wrapper" class="wrapper">

    <!-- Header Area -->
    <div class="header">

        <!-- Header Top Area -->
        <div class="header-toparea">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-8 col-12">
                        <div class="header-topinfo">
                            <ul>
                                <li><a href="tel://+1-800-915-6270">
                                        <i class="flaticon-phone-call"></i>
                                        +1-800-915-6270
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto://contact@example.com">
                                        <i class="flaticon-envelope"></i>
                                        contact@premier-me.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-4 col-12">
                        <div class="header-topsocial">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Header Top Area -->

        <!-- Header Bottom Area -->
        <div class="header-bottomarea">
            <div class="container">
                <div class="header-bottominner">
                    <div class="header-logo">
                        <a href="/">
                            <img src="{{asset('/images/logo/logo-dark.png')}}" alt="logo">
                        </a>
                    </div>
                    <nav class="tm-navigation">
                        <ul>
                            <li class="tm-navigation-dropdown"><a href="/">Home</a>

                            </li>
                            <li><a href="#aboutUs">About</a></li>




                            <li class="tm-navigation-megamenu"><a href="#Services">Our Services</a></li>

                            <li class="tm-navigation-dropdown"><a href="#Accrediation">Accrediation</a></li>


                            <li class="tm-navigation-dropdown"><a href="#news">News</a></li>

                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                    <!--<div class="header-icons">
                        <ul>
                            <li><a href="#" class="header-searchtrigger"><i class="flaticon-magnifier"></i></a></li>
                            <li><a href="cart.html"><i class="flaticon-cart-of-ecommerce"></i></a></li>
                        </ul>
                    </div>-->
                    <div class="header-searchbox">
                        <div class="header-searchinner">
                            <form action="#" class="header-searchform">
                                <input type="text" placeholder="Enter search keyword..">
                            </form>
                            <button class="search-close"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="header-mobilemenu clearfix">
                    <div class="tm-mobilenav"></div>
                </div>
            </div>
        </div>
        <!--// Header Bottom Area -->

    </div>
    <!--// Header Area -->

    <!-- Heroslider Area -->
    <div class="heroslider-area">
        <!-- Heroslider Slider -->
        <div class="heroslider-slider-2 heroslider-animated-content tm-slider-arrow tm-slider-dots-left">
            @foreach($Sliders as $slider)
            <div class="heroslider-singleslider d-flex align-items-center tm-parallax" data-white-overlay="5"
                 data-bgimage="storage/{{$slider->image}}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="heroslider-content text-center">
                                <h1>{{$slider->title}}</h1>
                                <p>{{$slider->paragraph}}</p>
                                <a href="#aboutUs" class="tm-button">About Us<b></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--// Heroslider Slider -->
    </div>
    <!--// Heroslider Area -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- About Us Area -->
        <div id="aboutUs" class="tm-section about-us-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image2">
                            <img class="wow fadeInLeft" src="storage/uploads/about-image-2.png" alt="about image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2>{{$AboutUs->title1}}</h2>
                            <h6>{{$AboutUs->title2}}</h6>
                            <p>{{$AboutUs->paragraph}}</p>
                            <ul class="stylish-list">
                                @foreach($AboutUs_services as $aboutS)
                                <li><i class="far fa-check-square"></i>{{$aboutS->service}}</li>
                                @endforeach
                            </ul>
                            <a href="#aboutUs" class="tm-button">About Us <b></b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// About Us Area -->

    </main>
    <!--// Main Content -->
</div>

<!-- Js Files -->
<script src="{{ asset('js/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!--// Js Files -->
</body>


</html>
