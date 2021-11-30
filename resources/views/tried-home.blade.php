<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
    <!--========================================= NEW LINK START  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />

</head>

<body>
    <section id="navigation-wrapper" class="navigation-wrap fixed-top">
        <div class="container">
            <div class="main-header row py-2">
                <div class="col-4 m-auto">
                    <div class=" list">
                        <ul class="navbar-nav mr-auto d-flex flex-row">
                            <li class="nav-item active px-2">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#modal1">
                                    <span class="mr-1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                    Search</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="#"> <span class="mr-1"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i>
                                    </span>
                                    Shops</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-4 m-auto">
                    <div class="logo text-center">
                        <a href="{{url('/')}}">
                            <img src="{{isset(getSetting()['site_logo']) ? getSetting()['site_logo'] : asset('01-logo.png') }}" alt="{{isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-4 m-auto">
                    <div class="notice">
                        <a class="nav-link m-0">BOPPY HUG&NEST - SAFETY NOTICE</a>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item dropdown px-3">
                            <a class="nav-link dropdown-toggle font-weight-bold d-block" href="javascript:void(0);"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Products
                                <span class="ml-1 icon ">
                                    <i class="fa fa-chevron-down toggleico" aria-hidden="true"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container d-block">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="under-construction.html">Boppy</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Pregnancy
                                                        Pillows</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Breastfeeding
                                                        Pillows
                                                    </a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">
                                                        Comfyfit
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="under-construction.html">Boppy</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Pregnancy
                                                        Pillows</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Breastfeeding
                                                        Pillows
                                                    </a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">
                                                        Comfyfit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-3  -->
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="under-construction.html">Weaning</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="under-construction.html">Boppy</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Pregnancy
                                                        Pillows</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Breastfeeding
                                                        Pillows
                                                    </a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">
                                                        Comfyfit
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="under-construction.html">Boppy</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Pregnancy
                                                        Pillows</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Breastfeeding
                                                        Pillows
                                                    </a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">
                                                        Comfyfit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-3  -->
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="under-construction.html">Strollers, Carry Cots and
                                                        Carriers</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Pregnancy
                                                        Pillows</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Pregnancy
                                                        Pillows</a>
                                                </li>
                                            </ul>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="under-construction.html">Boppy</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Pregnancy
                                                        Pillows</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Breastfeeding
                                                        Pillows
                                                    </a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">
                                                        Comfyfit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.col-md-3  -->
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="under-construction.html">Toys</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 1</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="under-construction.html">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!--  /.container  -->
                            </div>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link font-weight-bold" href="#">Chicco Research Center</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link font-weight-bold" href="#">Who we are</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <section id="carousel-index-wrapper" class="carousel slide position-relative" data-ride="carousel">
        <ol class="carousel-indicators">
            {{-- <li data-target="#carousel-index-wrapper" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-index-wrapper" data-slide-to="1"></li>
            <li data-target="#carousel-index-wrapper" data-slide-to="2"></li> --}}
        </ol>
        <div class="carousel-inner position-relative">
            {{-- <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('frontend/image/banner/1.jpg') }}" alt="First slide">
                <div class="carousel-caption d-flex flex-column h-100 align-items-start justify-content-center w-100">
                    <div class="row w-100">
                        <div class="col-4">
                            <!-- SPACE -->

                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                            <div class="header-content text-left">
                                <h1 class="font-weight-bold mb-3">Natural Feeling.</h1>
                                <h5 class="mb-4">Manual Breast Pump</h5>
                                <a href="#" class="btn-anch px-4 py-2 font-weight-bold text-white">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('frontend/image/banner/2.jpg') }}" alt="First slide">
                <div class="carousel-caption d-flex flex-column h-100 align-items-start justify-content-center w-100">
                    <div class="row w-100">
                        <div class="col-4">
                            <!-- SPACE -->

                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                            <div class="header-content text-left">
                                <h1 class="font-weight-bold mb-3">Natural Feeling.</h1>
                                <h5 class="mb-4">Manual Breast Pump</h5>
                                <a href="#" class="btn-anch px-4 py-2 font-weight-bold text-white">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('frontend/image/banner/3.jpg') }}" alt="First slide">
                <div class="carousel-caption d-flex flex-column h-100 align-items-start justify-content-center w-100">
                    <div class="row w-100">
                        <div class="col-4 d-md-block d-none">
                            <!-- SPACE -->

                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                            <div class="header-content text-left">
                                <h1 class="font-weight-bold mb-3">Natural Feeling.</h1>
                                <h5 class="mb-4">Manual Breast Pump</h5>
                                <a href="#" class="btn-anch px-4 py-2 font-weight-bold text-white">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}

        </div>

    </section>
    <section id="moment-wrapper">
        <div class="container">
            <div class="moment">
                <div class="row">
                    <div class="col-12">
                        <div class="slick-w2-a">
                            {{-- <div class="content text-center">
                                <a href="#">
                                    <div
                                        class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend/image/services/1.png') }}" class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Expecting</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div
                                        class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend/image/services/2.png') }}" class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Feeding</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div
                                        class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend/image/services/3.png') }}" class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Relaxation & Sleeptime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div
                                        class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend/image/services/4.png') }}" class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Mealtime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div
                                        class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend/image/services/5.png') }}" class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Nappy change and
                                            Bathtime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div
                                        class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend/image/services/6.png') }}" class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Feeding</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div
                                        class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend/image/services/7.png') }}" class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Relaxation & Sleeptime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div
                                        class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend/image/services/8.png') }}" class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Mealtime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div
                                        class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend/image/services/9.png') }}" class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Nappy change and
                                            Bathtime</label>
                                    </div>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <ul class="d-flex m-0">
                    <li class="1">

                    </li>
                    <li class="2">

                    </li>
                    <li class="3">

                    </li>
                    <li class="4">

                    </li>
                    <li class="5">

                    </li>
                    <li class="2">

                    </li>
                    <li class="3">
                    </li>
                    <li class="4">

                    </li>
                    <li class="5">

                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="welcome-wrapper" class="bg-light py-5">
        <div class="container">
            <div class="heading text-center">
                <h2 class="font-weight-bold">
                    A big welcome from chicco
                </h2>
                <p class="my-5">
                    We are by your side - you who look after children every day. You do so with enthusiasm but you have
                    concerns and
                    questions. We want to take care of you, and those you care about, with exciting new solutions
                    designed for every need.
                </p>
            </div>
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="slick-w3-a">
                            {{-- <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                                <div class="image mb-3">
                                    <img src="{{ asset('frontend/image/welcome/1 (1).png') }}" class="img-fluid" alt="image-1">
                                </div>
                                <div class="heading m-auto">
                                    <a href="#">
                                        <h5 class="font-weight-bold">
                                            Pocket Meal Highchair
                                        </h5>
                                    </a>
                                    <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                                </div>
                            </div>
                            <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                                <div class="image mb-3">
                                    <img src="{{ asset('frontend/image/welcome/1 (1).png') }}" class="img-fluid" alt="image-1">
                                </div>
                                <div class="heading m-auto">
                                    <a href="#">
                                        <h5 class="font-weight-bold">
                                            Pocket Meal Highchair
                                        </h5>
                                    </a>
                                    <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                                </div>
                            </div>
                            <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                                <div class="image mb-3">
                                    <img src="{{ asset('frontend/image/welcome/1 (1).png') }}" class="img-fluid" alt="image-1">
                                </div>
                                <div class="heading m-auto">
                                    <a href="#">
                                        <h5 class="font-weight-bold">
                                            Pocket Meal Highchair
                                        </h5>
                                    </a>
                                    <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                                </div>
                            </div>
                            <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                                <div class="image mb-3">
                                    <img src="{{ asset('frontend/image/welcome/1 (1).png') }}" class="img-fluid" alt="image-1">
                                </div>
                                <div class="heading m-auto">
                                    <a href="#">
                                        <h5 class="font-weight-bold">
                                            Pocket Meal Highchair
                                        </h5>
                                    </a>
                                    <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                                </div>
                            </div>
                            <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                                <div class="image mb-3">
                                    <img src="{{ asset('frontend/image/welcome/1 (1).png') }}" class="img-fluid" alt="image-1">
                                </div>
                                <div class="heading m-auto">
                                    <a href="#">
                                        <h5 class="font-weight-bold">
                                            Pocket Meal Highchair
                                        </h5>
                                    </a>
                                    <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                                </div>
                            </div>
                            <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                                <div class="image mb-3">
                                    <img src="{{ asset('frontend/image/welcome/1 (1).png') }}" class="img-fluid" alt="image-1">
                                </div>
                                <div class="heading m-auto">
                                    <a href="#">
                                        <h5 class="font-weight-bold">
                                            Pocket Meal Highchair
                                        </h5>
                                    </a>
                                    <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="observatory-wrapper" class="py-5">
        <div class="container">
            <div class="heading-wrap d-flex align-items-center justify-content-center flex-column mb-3">
                <div class="icon-logo-head text-center mb-2">
                    <img src="{{ asset('frontend/image/observatory/1.png') }}" alt="logo-icon" class="img-fluid">
                </div>
                <div class="head text-center">
                    <h5 class="font-weight-bold">Observatory</h5>

                    <div class="slogan-wrapper">
                        <h2 class="font-weight-bold">Do you know that...</h2>
                        <p>
                            <span class="fancy-comma font-weight-bold">
                                "
                            </span>
                            Sucking is an instinct that reassures and comforts your child.
                            <span class="fancy-comma font-weight-bold">
                                "
                            </span>
                        </p>
                    </div>
                </div>


            </div>
            <div class="content mb-3">
                <div class="row" id="articles">
                    {{-- <div class="col-4">
                        <div class="box-1st d-flex flex-column mb-5">
                            <div class="card text-center border-0">
                                <div class="card-header-cus">
                                    <h4 class="font-weight-bold">
                                        The milk from the mother, even if she isn't there.
                                    </h4>
                                </div>
                                <div class="card-body-cus">
                                    <p class="card-text mb-2">It is possible to keep on feeding the baby using the
                                        precious
                                        milk from his mother, even if she went back to work or she
                                        needs to leave the baby for a while.</p>
                                </div>
                                <div class="card-footer-cus">
                                    <a href="#" class="font-weight-bold text-uppercase">Go To Article</a>
                                </div>
                            </div>

                        </div>
                        <div class="box-2nd d-flex flex-column">
                            <div class="card text-center border-0">
                                <div class="card-header-cus">
                                    <h4 class="font-weight-bold">
                                        The milk from the mother, even if she isn't there.
                                    </h4>
                                </div>
                                <div class="card-body-cus">
                                    <p class="card-text mb-2">It is possible to keep on feeding the baby using the
                                        precious
                                        milk from his mother, even if she went back to work or she
                                        needs to leave the baby for a while.</p>
                                </div>
                                <div class="card-footer-cus">
                                    <a href="#" class="font-weight-bold text-uppercase">Go To Article</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-3rd d-flex justify-content-center align-items-center h-100">
                            <img src="{{ asset('frontend/image/observatory/kid.jpg') }}" alt="">
                        </div>

                    </div>
                    <div class="col-4">
                        <div class="box-4th d-flex flex-column mb-5">
                            <div class="card text-center border-0">
                                <div class="card-header-cus">
                                    <h4 class="font-weight-bold">
                                        The milk from the mother, even if she isn't there.
                                    </h4>
                                </div>
                                <div class="card-body-cus">
                                    <p class="card-text mb-2">It is possible to keep on feeding the baby using the
                                        precious
                                        milk from his mother, even if she went back to work or she
                                        needs to leave the baby for a while.</p>
                                </div>
                                <div class="card-footer-cus">
                                    <a href="#" class="font-weight-bold text-uppercase">Go To Article</a>
                                </div>
                            </div>

                        </div>
                        <div class="box-5th d-flex flex-column">
                            <div class="card text-center border-0">
                                <div class="card-header-cus">
                                    <h4 class="font-weight-bold">
                                        The milk from the mother, even if she isn't there.
                                    </h4>
                                </div>
                                <div class="card-body-cus">
                                    <p class="card-text mb-2">It is possible to keep on feeding the baby using the
                                        precious
                                        milk from his mother, even if she went back to work or she
                                        needs to leave the baby for a while.</p>
                                </div>
                                <div class="card-footer-cus">
                                    <a href="#" class="font-weight-bold text-uppercase">Go To Article</a>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="discover text-center mt-5">
                <h5 class="mb-4">
                    We observe and listen to those who take care of children. We understand their needs and offer
                    innovative solutions.
                </h5>
                <a href="#" class="btn-blue px-5 py-3 text-white font-weight-bold">Discover More</a>
            </div>

        </div>
    </section>
    <section id="footer-wrapper" class="py-4">
        <div class="container">
            <div class="row text-white">
                <div class="col-6">
                    <h6 class="font-weight-bold">Phone Numbers</h6>
                    <div class="row">
                        <div class="col-6">
                            <ul class="info p-0 ml-0">
                                <li>
                                    Artsana customer service
                                </li>
                                <li>
                                    Operational assistance for Chicco Shop </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="info p-0 ml-0">
                                <li>
                                    <span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span> {{ getSetting()['phone_number'] ?? '1800 102 6702' }}
                                </li>
                                <li>
                                    <span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span> {{ getSetting()['phone_number'] ?? '1800 102 6702' }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="social-media font-weight-bold d-flex justify-content-end align-items-center">
                        <label class="mr-3 mb-0 font-weight-bold text-white">
                            Follow us on
                        </label>
                        <ul class="p-0 m-0 d-flex align-items-center">
                            <li class="mr-2">
                                <a href="{{ getSetting()['google_url'] ?? '#' }}">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="mr-2">
                                <a href="{{ getSetting()['facebook_url'] ?? '#' }}">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="mr-2">
                                <a href="{{ getSetting()['instagram_url'] ?? '#' }}">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="about bord ml-0 pl-0 pt-3 pb-3 d-flex">
                        <li class="circle-dot"><a href="#">Contacts</a></li>
                        <li class="circle-dot"><a href="#">Catalogs</a></li>
                        <li class="circle-dot"><a href="#">Who we are</a></li>
                    </ul>
                </div>
                <div class="col-12">
                    <ul class="about p-0 d-flex m-0">
                        <li class="circle-dot"><a href="#">Product safety warnings</a></li>
                        <li class="circle-dot"><a href="#">Declaration of conformity</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="copyright-wrapper" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="copyright m-0 p-0 d-flex">
                        <li class="circle-dot"><a href="#">PRIVACY DISCLAIMER</a></li>
                        <li class="circle-dot"><a href="#">LEGAL NOTICES</a></li>
                        <li class="circle-dot"><a href="#">COOKIES</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Js link Starts -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- font awesome -->
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <script src="https://kit.fontawesome.com/a26d9146a0.js" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/scripts/main.js') }}"></script>
    <!-- NEW LIN ============================================================ -->
    <script src="{{ asset('frontend/js/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/animated.headline.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/classie.js') }}"></script>
    <script src="{{ asset('frontend/js/cbpGridGallery.js') }}"></script>
    <script>
        // Navigation Js Scroll Starts
        $(document).ready(function () {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll > 150) {
                    $(".navigation-wrap").css("background", "white");
                    $(".nav-link").css("color", "black");
                }

                else {
                    $(".navigation-wrap").css("background", "transparent");
                    $(".nav-link").css("color", "white");
                }
            })
        });
        // Navigation Js Scroll Ends
        // Navigation Js Onclick Starts
        $(document).ready(function () {
            var scroll;
            $("#navbarDropdown")
                .focusout(function () {
                    scroll = $(window).scrollTop();
                    $('.dropdown-menu').toggle();
                    if (scroll > 150) {

                        $(".navigation-wrap").css("background", "white");
                        $(".nav-link").css("color", "black");
                    }
                    else {
                        $(".navigation-wrap").css("background", "transparent");
                        $(".nav-link").css("color", "white");
                    }

                });

            $('#navbarDropdown').click(function (e) {
                console.log('navbarCLick');
                e.stopImmediatePropagation();
                scroll = $(window).scrollTop();
                $('.dropdown-menu').toggle();
                if ($('.dropdown-menu').is(':visible')) {
                    console.log('visible');
                    $("#navigation-wrapper").css("background", "white");
                    $(".nav-link").css("color", "black");
                } else {
                    console.log('notVisible');
                    console.log(scroll);
                    if (scroll > 150) {

                        $(".navigation-wrap").css("background", "white");
                        $(".nav-link").css("color", "black");
                    }

                    else {
                        $(".navigation-wrap").css("background", "transparent");
                        $(".nav-link").css("color", "white");
                    }

                }

            });

        });
    </script>

    <script>
        $(document).ready(function() {
            var url = "{{ url('') }}" +
                '/api/client/products?limit=10&getCategory=1&getDetail=1&language_id=1&topSelling=1&currency=' + localStorage.getItem("currency");
            appendTo = '';
            fetchProduct(url, appendTo);

            // var url = "{{ url('') }}" + '/api/client/products?limit=10&getDetail=1&language_id=' +
            //     languageId + '&currency=' + localStorage.getItem("currency");
            // appendTo = 'tab_special_products';
            // fetchProduct(url, appendTo);

            // var url = "{{ url('') }}" + '/api/client/products?limit=10&getDetail=1&language_id=' +
            //     languageId + '&currency=' + localStorage.getItem("currency");
            // appendTo = 'tab_most_liked';
            // fetchProduct(url, appendTo);

            // var url = "{{ url('') }}" +
            //     '/api/client/products?limit=12&getCategory=1&getDetail=1&language_id=' + languageId +
            //     '&sortBy=id&sortType=DESC&currency=' + localStorage.getItem("currency");
            // appendTo = 'new-arrival';
            // fetchProduct(url, appendTo);

            // var url = "{{ url('') }}" +
            //     '/api/client/products?limit=6&getCategory=1&getDetail=1&language_id=' + languageId +
            //     '&sortBy=id&sortType=DESC&currency=' + localStorage.getItem("currency");
            // appendTo = 'weekly-sale';
            // fetchProduct(url, appendTo);

            // var url = "{{ url('') }}" +
            //     '/api/client/products?limit=1&getCategory=1&getDetail=1&language_id=' + languageId +
            //     '&topSelling=1&currency=' + localStorage.getItem("currency");
            // appendTo = 'weekly-sale-first-div';
            // fetchFeaturedWeeklyProduct(url,appendTo)

            bannerMedia();
            categorySlider();
            blogNews();
            // sliderMedia();
            // cartSession = $.trim(localStorage.getItem("cartSession"));
            // if (cartSession == null || cartSession == 'null') {
            //     cartSession = '';
            // }
            // console.log(cartSession);
            // menuCart(cartSession);
        });

        function fetchProduct(url, appendTo) {
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    var product = '';
                    if (data.status == 'Success') {
                        $.each(data.data, function(i, e){
                            product += '<div class="content d-flex flex-column justify-content-center align-items-center mx-3">' +
                                '<div class="image mb-3">' +
                                    '<img src="{{ asset('gallary') }}/' + e.product_gallary.gallary_name + '" class="img-fluid" alt="image-1">' +
                                '</div>' +
                                '<div class="heading m-auto">' +
                                    '<a href="#">' +
                                        '<h5 class="font-weight-bold">' + e.detail[0].title + '</h5>' +
                                    '</a>' +
                                    '<h6 class="text-uppercase text-center mb-3">' + e.category[0].category_detail.detail[0].name + '</h6>' +
                                '</div>' +
                            '</div>';
                        })
                        $('.slick-w3-a').html(product);

                        $('.slick-w3-a').slick({
                            dots: false,
                            focusOnSelect: false,
                            autoplay: true,
                            arrows: false,
                            speed: 400,
                            slidesToShow: 4,
                            slidesToScroll: 1,

                            responsive: [
                                {
                                    breakpoint: 1400,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 1080,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 780,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1
                                    }
                                },

                                {
                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                }


                            ]


                        });
                    }
                },
                error: function(data) {},
            });
        }

        function fetchFeaturedWeeklyProduct(url, appendTo) {
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        console.log(data,"final data");
                        var htmlToRender ="<article><div class='badges'><span class='badge badge-success'>Featured</span></div><div class='detail'>";
                        
                            htmlToRender +='<h5 class="title"><a  href="/product/'+data
                                    .data[0].product_id +'/'+data
                                    .data[0].product_slug+'">'+data.data[0].detail[0]
                                    .title+'</a></h5>';


                            htmlToRender +='<p class="discription">'+data.data[0].detail[0]
                                    .desc+'</p>';
                            
                            
                            

                            if (data.data[0].product_type == 'simple') {
                                if (data.data[0].product_discount_price == '' || data.data[0]
                                    .product_discount_price == null || data.data[0].product_discount_price ==
                                    'null') {
                                    htmlToRender +='<div class="price">'+data.data[0]
                                        .product_price_symbol+'</div>';
                                } else {
                                    htmlToRender +='<div class="price">'+data.data[0]
                                        .product_discount_price_symbol + '<span>' +data.data[0].product_price_symbol + '</span></div>';
                                }
                            } else {
                                if (data.data[0].product_combination != null && data.data[0]
                                    .product_combination != 'null' && data.data[0].product_combination != '') {
                                        htmlToRender +='<div class="price">'+data.data[0]
                                        .product_combination[0].product_price_symbol+'</div>';
                                }
                            }

                            htmlToRender +='<div class="pro-sub-buttons"><div class="buttons"><button type="button" class="btn  btn-link " data-id='+data.data[0]
                                .product_id+' onclick="addWishlist(this)" data-type='+data.data[0]
                                .product_type+'><i class="fas fa-heart"></i>Add to Wishlist</button>';
                                
                            htmlToRender +='<button type="button" class="btn btn-link" data-id='+data.data[0]
                                .product_id+' data-type='+data.data[0]
                                .product_type+' onclick="addCompare(this)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add to Compare"><i class="fas fa-align-right"></i>Add to Compare</button></div></div></div>';
                            htmlToRender +='<picture><div class="product-hover">';
                            if (data.data[0].product_type == 'simple') {
                                
                                htmlToRender +='<button type="button" onclick="addToCart(this)" class="btn btn-block btn-secondary cart swipe-to-top" >Add to Cart</button>';

                            } else {
                                
                                htmlToRender +='<a href="/product/'+data
                                    .data[0].product_id +'/'+data
                                    .data[0].product_slug+'" onclick="addToCart(this)" class="btn btn-block btn-secondary cart swipe-to-top" >View Detail</a>';
        
                            }
                            
                            htmlToRender +='</div>';

                            if (data.data[0].product_gallary != null && data.data[0].product_gallary !=
                                'null' && data.data[0].product_gallary != '') {
                                if (data.data[0].product_gallary.detail != null && data.data[0].product_gallary
                                    .detail != 'null' && data.data[0].product_gallary.detail != '') {
                                    htmlToRender +='<img class="img-fluid" src="'+data.data[0]
                                        .product_gallary.detail[1].gallary_path+'" alt="Men"s Cotton Classic Baseball Cap">';

                                }
                            }
                            htmlToRender +='</picture></article>';
                        

                        $('#weekly-sale-first-div').html(htmlToRender);
                    }
                },
                error: function(data) {},
            });
        }

        function blogNews() {
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/blog_news?getGallaryDetail=1&limit=10&sortBy=id&language_id=1&getDetail=1&getBlogCategory=1&sortType=DESC',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    console.log(data);
                    if (data.status == 'Success') {
                        var articles = '';
                        $.each(data.data, function(i, e){
                            if(i % 2 == 0){
                                articles += '<div class="col-4">';
                            }
                            articles += '<div class="box-1st d-flex flex-column mb-5">' +
                                '<div class="card text-center border-0">' +
                                    '<div class="card-header-cus">' +
                                        '<h4 class="font-weight-bold">The milk from the mother, even if she isn\'t there.</h4>' +
                                    '</div>' +
                                    '<div class="card-body-cus">' +
                                        '<p class="card-text mb-2">It is possible to keep on feeding the baby using the precious milk from his mother, even if she went back to work or she needs to leave the baby for a while.</p>' +
                                        '</div>' +
                                    '<div class="card-footer-cus">' +
                                        '<a href="#" class="font-weight-bold text-uppercase">Go To Article</a>' +
                                        '</div>' +
                                '</div>' +
                            '</div>';
                            if((i+1) % 2 == 0 && i != 0){
                                articles += '</div>';
                            }
                            if(i == 1){
                                articles += '<div class="col-4">' +
                                    '<div class="box-3rd d-flex justify-content-center align-items-center h-100">' +
                                        '<img src="{{ asset('frontend/image/observatory/kid.jpg') }}" alt="">' +
                                    '</div>' +
                                '</div>';
                            }
                            if(i == 3){
                                return false;
                            }
                        });
                        // console.log(articles);
                        $('#articles').html(articles);
                    }
                },
                error: function(data) {},
            });
        }

        function sliderMedia() {
            var sliderType = "{{ getSetting()['slider_style'] ? getSetting()['slider_style'] : '' }}";
            if (sliderType == "style1") {
                sliderType = 1;
            }
            if (sliderType == "style2") {
                sliderType = 2;
            }
            if (sliderType == "style3") {
                sliderType = 3;
            }
            if (sliderType == "style4") {
                sliderType = 4;
            }
            if (sliderType == "style5") {
                sliderType = 5;
            }
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/slider?getLanguage=' + languageId +
                    '&getSliderType=1&getSliderNavigation=1&getSliderGallary=1&limit=5&sortBy=id&sortType=DESC&sliderType=' +
                    sliderType + '&language_id=' + languageId,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    console.log(data);
                    if (data.status == 'Success') {
                        $(".slider-navigation-show").html('');
                        const templ = document.getElementById("slider-navigation-template");
                        // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                        for (i = 0; i < data.data.length; i++) {


                            $("#slider-bullets-" + i).addClass("d-xl-block");

                            const clone = templ.content.cloneNode(true);
                            // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                            clone.querySelector(".slider-navigation-title").innerHTML = data.data[i]
                                .slider_title;
                            clone.querySelector(".slider-navigation-desc").innerHTML = data.data[i]
                                .slider_description;
                            clone.querySelector(".slider-navigation-url").setAttribute('href', data.data[i]
                                .slider_url);
                            if (i == 0) {
                                clone.querySelector(".slider-navigation-active").classList.add("active");
                            }
                            if (data.data[i].gallary != null && $.trim(data.data[i].gallary) != '') {
                                clone.querySelector(".slider-navigation-image").setAttribute('src',
                                    '/gallary/' + data.data[i].gallary);
                            }
                            $(".slider-navigation-show").append(clone);
                        }
                    }
                },
                error: function(data) {},
            });


            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/constant_banner?getLanguage=' + languageId +
                    '&title=rightsliderbanner&language_id=' + languageId + '&getGallary=1',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        var side_banners = '';
                        side_banners += '<figure class="banner-image imagespace">';
                        side_banners +=
                            '<a class="banner-slider-link1" href=""><img class="img-fluid banner-slider-image1" src="" alt="Banner Image"></a>';
                        side_banners += '</figure>';
                        side_banners += '<figure class="banner-image ">';
                        side_banners +=
                            '<a class="banner-slider-link2" href=""><img class="img-fluid banner-slider-image2" src="" alt="Banner Image"></a>';
                        side_banners += '</figure>';
                        $('.side-banners').html(side_banners);

                        $('.banner-slider-link1').attr('href', "{{ url('') }}" + data.data[0]
                            .banner_url);
                        $('.banner-slider-image1').attr('src', "/gallary/" + data.data[0].gallary.gallary_name);



                        $('.banner-slider-link2').attr('href', "{{ url('') }}" + data.data[1]
                            .banner_url);
                        $('.banner-slider-image2').attr('src', "/gallary/" + data.data[1].gallary.gallary_name);


                    }
                },
                error: function(data) {},
            });
        }

        function categorySlider() {
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/category?getDetail=1&page=1&limit=10&getGallary=1&language_id=1&sortBy=category_name&sortType=DESC',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        var category = '';
                        $.each(data.data, function(i, e){
                            category += '<div class="content text-center">' +
                                '<a href="#">' +
                                    '<div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">' +
                                        '<div class="image mb-1">' +
                                            '<img src="{{ asset("gallary") }}/' + e.gallary + '" class="img-fluid">' +
                                        '</div>' +
                                        '<label for="image" class="font-weight-bold mb-0">' + e.name + '</label>' +
                                    '</div>' +
                                '</a>' +
                            '</div>';
                        });
                        $('.slick-w2-a').html(category);

                        $('.slick-w2-a').slick({
                            dots: false,
                            focusOnSelect: false,
                            autoplay: true,
                            arrows: false,
                            speed: 400,
                            slidesToShow: 9,
                            slidesToScroll: 1,

                            responsive: [
                                {
                                    breakpoint: 1400,
                                    settings: {
                                        slidesToShow: 9,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 1080,
                                    settings: {
                                        slidesToShow: 6,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 780,
                                    settings: {
                                        slidesToShow: 6,
                                        slidesToScroll: 1
                                    }
                                },

                                {
                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                }


                            ]


                        });
                    }
                },
                error: function(data) {},
            });
        }

        function bannerMedia() {
            // var bannerType = "{{ getSetting()['banner_style'] ? getSetting()['banner_style'] : 'style1' }}";
            // if (bannerType == "style1") {
            //     bannerType = 'banner1';
            // }
            // if (bannerType == "style2" || bannerType == "style3" || bannerType == "style4") {
            //     bannerType = "banner2";
            // }
            // if (bannerType == "style5" || bannerType == "style6") {
            //     bannerType = "banner5";
            // }
            // if (bannerType == "style7" || bannerType == "style8") {
            //     bannerType = "banner7";
            // }
            // if (bannerType == "style9") {
            //     bannerType = "banner9";
            // }
            // if (bannerType == "style10" || bannerType == "style11" || bannerType == "style12") {
            //     bannerType = "banner10";
            // }

            // if (bannerType == "style13" || bannerType == "style14" || bannerType == "style15") {
            //     bannerType = "banner13";
            // }

            // if (bannerType == "style16" || bannerType == "style17") {
            //     bannerType = "banner16";
            // }

            // if (bannerType == "style18" || bannerType == "style19") {
            //     bannerType = "banner18";
            // }
            // $('.banner_div').css('display', 'none');
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" + '/api/client/constant_banner?getLanguage=1&title=' + 'banner3' + '&language_id=1&getGallary=1',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    var banner = '';
                    var indicator = '';
                    if (data.status == 'Success') {
                        $.each(data.data, function(i, e){
                            if(i == 0){
                                indicator += '<li data-target="#carousel-index-wrapper" data-slide-to="' + i + '" class="active"></li>';
                                banner += '<div class="carousel-item active">'
                            }else{
                                indicator += '<li data-target="#carousel-index-wrapper" data-slide-to="' + i + '"></li>';
                                banner += '<div class="carousel-item">'
                            }
                            banner += '<img class="d-block w-100" src="{{ asset("gallary") }}/' + e.gallary.gallary_name + '" alt="First slide">' +
                                '<div class="carousel-caption d-flex flex-column h-100 align-items-start justify-content-center w-100">' +
                                    '<div class="row w-100">' +
                                        '<div class="col-4"></div>' +
                                        '<div class="col-xl-6 col-md-6 col-sm-12 col-12">' +
                                            '<div class="header-content text-left">' +
                                                '<h1 class="font-weight-bold mb-3">' + e.banner_title + '</h1>' +
                                                '<h5 class="mb-4">' + e.banner_title + '</h5>' +
                                                '<a href="#" class="btn-anch px-4 py-2 font-weight-bold text-white">Know More</a>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                        });
                        $('.carousel-inner').html(banner);
                        $('.carousel-indicators').html(indicator);
                    }
                },
                error: function(data) {},
            });
        }
    </script>

    <!-- Modal -->
    <div class="modal fade w-100 p-0 position-fixed" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl position-relative" role="document">
            <div class="modal-content">
                <div class="modal-header text-center m-auto">
                    <h5 class="modal-title" id="modal1">
                        <img src="{{ asset('frontend/image/logo/logo.png') }}" alt="logo" class="img-fluid">
                    </h5>

                </div>
                <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body text-center">
                    <input type="text" class="w-75" id="search-input">
                </div>

            </div>
        </div>
    </div>
    <script>
        $('#search-input').on('keypress',function(e) {
            if(e.which == 13) {
                var searchInput = $(this).val();
                if (searchInput == "") {
                    alert("asdfasdf");
                } else {
                    var url = "{{ url('/shop') }}" + '?search=' + searchInput;
                    var catgory_id = $('.selected_category').attr('data-id');
                    if (catgory_id != '' && catgory_id !== undefined)
                        url += "&category=" + catgory_id;
                    window.location.href = url;
                }
            }
        });
    </script>
</body>

</html>