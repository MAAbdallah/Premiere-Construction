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

        <!-- Features Area -->
        <div class="tm-section features-area bg-grey tm-padding-section">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-9 col-lg-12">
                        <div class="features-slider-active tm-slider-dots tm-slider-dots-vertical">
                            @php
                                $index=0;
                                $stop = 3;
                            @endphp
                            @for($i =0;$i<3;$i++)
                            <div class="features-slider-row">
                                @while($index<$stop)
                                <!-- Single Feature -->
                                <div class="tm-feature text-center">
                                        <span class="tm-feature-icon">
                                            <i class="{{$Service[$index]->icon}}"></i>
                                        </span>
                                    <h5>{{$Service[$index]->title}}</h5>
                                    <p>{{$Service[$index]->paragraph}}</p>
                                </div>
                                <!--// Single Feature -->
                                    @php
                                        $index+=1;
                                    @endphp
                                @endwhile
                            </div>
                                @php
                                    $stop+=3;
                                @endphp
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-image">
                <img class="wow fadeInLeft" src="{{asset('images/others/feature-image.png')}}" alt="feature image">
            </div>
        </div>
        <!--// Features Area -->

        <!-- Funfact Area -->
        <div  class="tm-section funfact-area tm-padding-section tm-parallax" data-bgimage="assets/images/funfact/funfact-bg.jpg"
              data-black-overlay="8">
            <div class="funfact-areashape">
                <img src="assets/images/funfact/funfact-shape.png" alt="funfact area shape">
            </div>
            <div class="container">
                <div class="row mt-30-reverse">
                    @php
                        $icons = ['flaticon-check-mark','flaticon-smile','flaticon-email','flaticon-trophy'];
                        $counts = ['500','3210','2345','159'];
                        $heading = ['Projects Complete','Happy Clients','Mail Conversation','Awards'];
                        $size =count($icons);
                    @endphp
                    @for($i =0;$i<$size;$i++)
                        <!-- Funfact Single -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                            <div class="tm-funfact">
                                    <span class="tm-funfact-icon">
                                        <i class="{{$icons[$i]}}"></i>
                                    </span>
                                <div class="tm-funfact-content">
                                    <span class="odometer" data-count-to="{{$counts[$i]}}"></span>
                                    <h5>{{$heading[$i]}}</h5>
                                </div>
                            </div>
                        </div>
                        <!--// Funfact Single -->
                    @endfor
                </div>
            </div>
        </div>
        <!--// Funfact Area -->


        <!-- Services Area -->
        <div id="Services" class="tm-section services-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>Facilities We Provide</h2>
                            <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                                an cule dicta iriure at phaedrum. </p>
                        </div>
                    </div>
                </div>
                <div class="row services-wrap">
                    @foreach($feature as $F)
                    <!-- Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                                <span class="tm-service-icon">
                                    <i class="{{$F->icon}}"></i>
                                </span>
                            <h5><a href="{{url('sr/'.$F->id)}}">{{$F->title}}</a></h5>
                            <p>{{$F->paragraph}}</p>
                        </div>
                    </div>
                    <!--// Single Service -->
                    @endforeach
                </div>
            </div>
        </div>
        <!--// Services Area -->

        <!-- Testimonial Area -->
        <div id="Accrediation" class="tm-section testimonial-area tm-padding-section bg-grey">
            <div class="container">
                <div class="row testimonial-slider-active">
                    @foreach($Test as $test)
                    <!-- Testimonial -->
                    <div class="col-lg-6">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-top">
                                <div class="tm-testimonial-author">
                                    <img src="storage/{{$test->image}}" alt="author image">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>{{$test->paragraph}}</p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>{{$test->name}}</h5>
                                <p>{{$test->position}}</p>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial -->
                    @endforeach
                </div>
            </div>
        </div>
        <!--// Testimonial Area -->


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
