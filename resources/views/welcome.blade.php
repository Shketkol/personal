<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mykola Shkit - Portfolio</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<body>

<!--  ======================= Start Alert Area ============================== -->
@if (Session::has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Thanks!</strong> I'll send you.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<!--  ======================= End Alert Area ============================== -->

<!--  ======================= Start Header Area ============================== -->

<header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/"><img src="./img/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about-block">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services-block">services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio-block">portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-block">contact</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>

<!--  ======================= End Header Area ============================== -->

<!--  ======================= Start Main Area ================================ -->
<main class="site-main">


    <!--  ======================= Start Banner Area =======================  -->
    <section class="site-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text">Hey</h3>
                    <h1 class="title-text text-uppercase">I am Mykola Shkit</h1>
                    <h4 class="title-text text-uppercase">Software Developer</h4>
                    <div class="site-buttons">
                        <div class="d-flex flex-row flex-wrap">
                            <a href="CV.pdf" download type="button" class="btn button secondary-button text-uppercase">Get cv</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="./img/banner/banner-image.png" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Banner Area =======================  -->

    <!--  ========================= About Area ==========================  -->

    <section class="about-area" id="about-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="./img/about-us.png" alt="About us" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 about-title">
                    <h2 class="text-uppercase pt-5">
                        <span>Let me</span>
                        <span>introduce</span>
                        <span>myself</span>
                    </h2>
                    <div class="paragraph py-4 w-75">
                        <p class="para">
                            Hello. My name is Nick. I From Ukraine. I've more experience in a lot of Web technologies such as
                            Languages: PHP (v5.5+), JavaScript, Python (Junior)
                            Frameworks: Yii1/2, Flask (Python), NodeJs, AngularJs, Symfony, Laravel, React, VueJs
                            Databases: MySQL, Redis
                            Libraries & Technologies: Websockets, AJAX, jQuery, Twitter Bootstrap, RabbitMQ, HTML\CSS, SASS
                            OS: Linux (Ubuntu), Windows
                        </p>
                        <p class="para">
                            Working with Git, Composer. Developed REST API and use this for mobile APPS.
                            Written parsers to sites with private content (make mini price-aggregate site) (using CURL, phpQuery or json), writing REST APIs (in Yii2, Laravel),
                            connecting third-party APIs (Payment systems, Facebook, Google, Zendesk and others). Worked with Microservice architecture.
                        </p>
                    </div>
                    <a href="CV.pdf" download class="btn button primary-button text-uppercase">Download cv</a>
                </div>
            </div>
        </div>
    </section>

    <!--  ========================= End About Area ==========================  -->

    <!--  ======================== Brand Area ==============================  -->

    <section class="brand-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="first-row row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="./img/brands/logo1.png" alt="Brand-1 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="./img/brands/logo2.png" alt="Brand-2 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="./img/brands/logo3.png" alt="Brand-3 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="./img/brands/logo4.png" alt="Brand-4">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="./img/brands/logo5.png" alt="Brand-5 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="./img/brands/logo6.png" alt="Brand-6">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="./img/brands/logo7.png" alt="Brand-7 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="./img/brands/logo8.png" alt="Brand-8 ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-brand">
                                <img src="./img/brands/logo9.png" alt="Brand-9">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="experience-area">
                        <div class="d-flex flex-row years-area">
                            <h2 class="p-3 years">5</h2>
                            <h2>
                                <span>Years</span>
                                <span>Experience</span>
                                <span>Working</span>
                            </h2>
                        </div>
                        <div class="d-flex flex-row flex-wrap call-area">
                            <span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
                            <div class="call-now">
                                <a href="#" class="text-uppercase h4 font-roboto">Call Now</a>
                                <span class="font-roboto py-2">(+380)-96-330-5184</span>
                            </div>
                        </div>
                        <div class="bg-panel"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  ======================== End Brand Area ==============================  -->

    <!--  ====================== Start Services Area =============================  -->

    <section class="services-area" id="services-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center services-title">
                    <h1 class="text-uppercase title-text">Services Offers</h1>
                </div>
            </div>
            <div class="container services-list">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="services">
                            <div class="sevices-img text-center py-4">
                                <img src="./img/services/s1.png" alt="Services-1">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase font-roboto">Wp developer</h5>
                                <p class="card-text text-secondary">
                                    Some quick example text to build on the card
                                    title and make up
                                    the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="services">
                            <div class="sevices-img text-center py-4">
                                <img src="./img/services/s2.png" alt="Services-2">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase font-roboto">ux/ui desing</h5>
                                <p class="card-text text-secondary">
                                    Some quick example text to build on the card
                                    title and make up
                                    the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="services">
                            <div class="sevices-img text-center py-4">
                                <img src="./img/services/s3.png" alt="Services-3">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase font-roboto">web design</h5>
                                <p class="card-text text-secondary">
                                    Some quick example text to build on the card
                                    title and make up
                                    the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="services">
                            <div class="sevices-img text-center py-4">
                                <img src="./img/services/s4.png" alt="Services-4">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase font-roboto">seo optimize</h5>
                                <p class="card-text text-secondary">
                                    Some quick example text to build on the card
                                    title and make up
                                    the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  ====================== End Services Area =============================  -->

    <!--  ======================= Project Area =============================  -->

    <section class="project-area" id="portfolio-block">
        <div class="container">
            <div class="project-title pb-5">
                <h1 class="text-uppercase title-h1">Recently Done Project</h1>
                <h1 class="text-uppercase title-h1">Quality Work</h1>
            </div>

            <div class="button-group">
                <button type="button" class="active" id="btn1" data-filter="*">All</button>
                <button type="button" data-filter=".popular">Popular</button>
                <button type="button" data-filter=".latest">Latest</button>
            </div>

            <div class="row grid">
                <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="https://atr.ua/">
                                <img src="./img/portfolio/p1.png" alt="portfolio-1" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">ATR TV</h4>
                            <span class="text-secondary">News</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="https://www.speak-up.com.ua/">
                                <img src="./img/portfolio/p2.png" alt="portfolio-2" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">SPEAK-UP</h4>
                            <span class="text-secondary">English, Foreign language school</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="https://guidetoiceland.is/">
                                <img src="./img/portfolio/p3.png" alt="portfolio-3" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Guide to Iceland</h4>
                            <span class="text-secondary">Travel, Booking</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="https://dota2pari.com/ru">
                                <img src="./img/portfolio/p4.png" alt="portfolio-4" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Dota2 Pari</h4>
                            <span class="text-secondary">Dota2, Bets</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="https://dschool.com.ua/">
                                <img src="./img/portfolio/p5.png" alt="portfolio-5" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Denis School</h4>
                            <span class="text-secondary">English, Foreign language school</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="https://fibalon.com.ua/">
                                <img src="./img/portfolio/p6.png" alt="portfolio-6" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Fibalon</h4>
                            <span class="text-secondary">Pool filter</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="http://gs1.com.ua/">
                                <img src="./img/portfolio/p7.png" alt="portfolio-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">GS-1</h4>
                            <span class="text-secondary">Building</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="https://cvetochki.kiev.ua/">
                                <img src="./img/portfolio/p8.png" alt="portfolio-8" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">CVETOCHKI</h4>
                            <span class="text-secondary">Bouquets</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="https://www.network-olympus.com/">
                                <img src="./img/portfolio/p9.png" alt="portfolio-9" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Network Olympus</h4>
                            <span class="text-secondary">Corporate network</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="http://meydan.fm/ua">
                                <img src="./img/portfolio/p10.png" alt="portfolio-9" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Meydan FM</h4>
                            <span class="text-secondary">Radio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" target="_blank" href="http://guenther-oil.com/">
                                <img src="./img/portfolio/p11.png" alt="portfolio-9" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Guenther Oil</h4>
                            <span class="text-secondary">Motor Oil</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  ======================= End Project Area =============================  -->

    <!--  ========================== Subscribe me Area ============================  -->
    <section class="subscribe-us-area" id="contact-block">
        <div class="container subscribe">
            <div class="row">
                <div class="col-lg-12 text-center subscribe-title">
                    <h4 class="text-uppercase">Fill youur email and I'll call you</h4>
                </div>
            </div>
            <div class="d-sm-flex justify-content-center">
                <form class="w-50" action="/send" method="post" id="contact-form">
                    {{ csrf_field() }}
                    <div class="row d-flex flex-row flex-wrap">
                        <div class="col-lg-8 col-sm-6 input-textbox">
                            <input type="email" id="txtemail" class="form-control" placeholder="Email" name="email" style="width: 100%">
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="btn-submit float-left">
                                <button type="submit" class="btn btn-success float-right">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--  ========================== End Subscribe me Area ============================  -->


</main>
<!--  ======================= End Main Area ================================ -->

<footer class="footer-area">
    <div class="container">
        <div class="">
            <div class="site-logo text-center py-4">
                <a href="#"><img src="./img/logo.png" alt="logo"></a>
            </div>
            <div class="copyrights text-center">
                <p class="para">
                    Copyright ©2019 All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>


<!--  Jquery js file  -->
<script src="./js/jquery.3.4.1.js"></script>

<!--  Bootstrap js file  -->
<script src="./js/bootstrap.min.js"></script>

<!--  isotope js library  -->
<script src="./vendor/isotope/isotope.min.js"></script>

<!--  Magnific popup script file  -->
<script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

<!--  Owl-carousel js file  -->
<script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

<!--  custom js file  -->
<script src="./js/main.js"></script>


</body>

</html>
