@extends('layouts.master')
@section('content')

    @include(isset(getSetting()['slider_style']) ? 'includes.sliders.slider-'.getSetting()['slider_style'] :
    'includes.sliders.slider-style1')


    @foreach (homePageBuilderJson() as $template)
        @if (!$template['skip'] && $template['display'])
            @include('sections.home-'.$template['template_postfix'].'-section')
        @endif
    @endforeach

    <section id="moment-wrapper">
        <div class="container">
            <div class="moment">
                <div class="row">
                    <div class="col-12">
                        <div class="slick-w2-a">
                            {{-- <div class="content text-center">
                                <a href="#">
                                    <div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend//image/services/1.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Expecting</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend//image/services/2.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Feeding</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend//image/services/3.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Relaxation & Sleeptime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend//image/services/4.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Mealtime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend//image/services/5.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Nappy change and
                                            Bathtime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend//image/services/6.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Feeding</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend//image/services/7.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Relaxation & Sleeptime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend//image/services/8.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <label for="image" class="font-weight-bold mb-0">Mealtime</label>
                                    </div>
                                </a>
                            </div>
                            <div class="content text-center">
                                <a href="#">
                                    <div class=" d-flex flex-column m-auto justify-content-center align-items-center h-100">
                                        <div class="image mb-1">
                                            <img src="{{ asset('frontend//image/services/9.png') }}"
                                                class="img-fluid">
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
                                    <img src="{{ asset('frontend//image/welcome/1 (1).png') }}" class="img-fluid"
                                        alt="image-1">
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
                                    <img src="{{ asset('frontend//image/welcome/1 (1).png') }}" class="img-fluid"
                                        alt="image-1">
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
                                    <img src="{{ asset('frontend//image/welcome/1 (1).png') }}" class="img-fluid"
                                        alt="image-1">
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
                                    <img src="{{ asset('frontend//image/welcome/1 (1).png') }}" class="img-fluid"
                                        alt="image-1">
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
                    <img src="{{ asset('frontend//image/observatory/1.png') }}" alt="logo-icon" class="img-fluid">
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
                            <img src="{{ asset('frontend//image/observatory/kid.jpg') }}" alt="">
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
                    <input type="text" class="w-75">
                </div>

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        // Navigation Js Scroll Starts
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 150) {
                    $(".navigation-wrap").css("background", "white");
                    $(".nav-link").css("color", "black");
                } else {
                    $(".navigation-wrap").css("background", "transparent");
                    $(".nav-link").css("color", "white");
                }
            })
        });
        // Navigation Js Scroll Ends
        // Navigation Js Onclick Starts
        $(document).ready(function() {
            var scroll;
            $("#navbarDropdown")
                .focusout(function() {
                    scroll = $(window).scrollTop();
                    $('.dropdown-menu').toggle();
                    if (scroll > 150) {

                        $(".navigation-wrap").css("background", "white");
                        $(".nav-link").css("color", "black");
                    } else {
                        $(".navigation-wrap").css("background", "transparent");
                        $(".nav-link").css("color", "white");
                    }

                });

            $('#navbarDropdown').click(function(e) {
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
                    } else {
                        $(".navigation-wrap").css("background", "transparent");
                        $(".nav-link").css("color", "white");
                    }

                }

            });

        });
    </script>

    <script>
        $(document).ready(function() {
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

            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                '/api/client/products?limit=10&getCategory=1&getDetail=1&language_id=1&topSelling=1&currency=' + localStorage.getItem("currency"),
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
                                        '<h4 class="font-weight-bold">' + e.detail[0].name + '</h4>' +
                                    '</div>' +
                                    '<div class="card-body-cus">' +
                                        '<p class="card-text mb-2">' + e.detail[0].description.substring(0, 150) + '...</p>' +
                                        '</div>' +
                                    '<div class="card-footer-cus">' +
                                        '<a href="#" class="font-weight-bold text-uppercase">Go To Article</a>' +
                                        '</div>' +
                                '</div>' +
                            '</div>';
                            if((i + 1) % 2 == 0 && i != 0){
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
                        $('#articles').html(articles);
                    }
                },
                error: function(data) {},
            });


            // var url = "{{ url('') }}" +
            //     '/api/client/products?limit=10&getCategory=1&getDetail=1&language_id=' + languageId +
            //     '&topSelling=1&currency=' + localStorage.getItem("currency");
            // appendTo = 'tab_top_sales';
            // fetchProduct(url, appendTo);

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
            // fetchFeaturedWeeklyProduct(url, appendTo)

            // blogNews();
            sliderMedia();
            // categorySlider();
            // bannerMedia();
            // cartSession = $.trim(localStorage.getItem("cartSession"));
            // if (cartSession == null || cartSession == 'null') {
            //     cartSession = '';
            // }
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
                    if (data.status == 'Success') {
                        const templ = document.getElementById("product-card-template");

                        for (i = 0; i < data.data.length; i++) {
                            const clone = templ.content.cloneNode(true);
                            // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");

                            clone.querySelector(".wishlist-icon").setAttribute('data-id', data.data[i]
                                .product_id);
                            clone.querySelector(".wishlist-icon").setAttribute('onclick', 'addWishlist(this)');
                            clone.querySelector(".wishlist-icon").setAttribute('data-type', data.data[i]
                                .product_type);
                            clone.querySelector(".compare-icon").setAttribute('data-id', data.data[i]
                                .product_id);
                            clone.querySelector(".compare-icon").setAttribute('data-type', data.data[i]
                                .product_type);
                            clone.querySelector(".compare-icon").setAttribute('onclick', 'addCompare(this)');
                            clone.querySelector(".quick-view-icon").setAttribute('data-id', data.data[i]
                                .product_id);
                            clone.querySelector(".quick-view-icon").setAttribute('data-type', data.data[i]
                                .product_type);
                            clone.querySelector(".quick-view-icon").setAttribute('onclick',
                                'quiclViewData(this)');

                            rating = '';
                            if (data.data[i].product_rating == 1) {
                                rating =
                                    '<label class="full fa " for="star1" title="Awesome - 1 stars"></label><label class="full fa " for="star_2" title="Awesome - 2 stars"></label><label class="full fa " for="star_3" title="Awesome - 3 stars"></label><label class="full fa " for="star_4" title="Awesome - 4 stars"></label><label class="full fa active" for="star_5" title="Awesome - 5 stars"></label>'
                            } else if (data.data[i].product_rating == 2) {
                                rating =
                                    '<label class="full fa " for="star1" title="Awesome - 1 stars"></label><label class="full fa " for="star_2" title="Awesome - 2 stars"></label><label class="full fa " for="star_3" title="Awesome - 3 stars"></label><label class="full fa active" for="star_4" title="Awesome - 4 stars"></label><label class="full fa active" for="star_5" title="Awesome - 5 stars"></label>'
                            } else if (data.data[i].product_rating == 3) {
                                rating =
                                    '<label class="full fa " for="star1" title="Awesome - 1 stars"></label><label class="full fa " for="star_2" title="Awesome - 2 stars"></label><label class="full fa active" for="star_3" title="Awesome - 3 stars"></label><label class="full fa active" for="star_4" title="Awesome - 4 stars"></label><label class="full fa active" for="star_5" title="Awesome - 5 stars"></label>'
                            } else if (data.data[i].product_rating == 4) {
                                rating =
                                    '<label class="full fa " for="star1" title="Awesome - 1 stars"></label><label class="full fa active" for="star_2" title="Awesome - 2 stars"></label><label class="full fa active" for="star_3" title="Awesome - 3 stars"></label><label class="full fa active" for="star_4" title="Awesome - 4 stars"></label><label class="full fa active" for="star_5" title="Awesome - 5 stars"></label>'
                            } else if (data.data[i].product_rating == 5) {
                                rating =
                                    '<label class="full fa active" for="star1" title="Awesome - 1 stars"></label><label class="full fa active" for="star_2" title="Awesome - 2 stars"></label><label class="full fa active" for="star_3" title="Awesome - 3 stars"></label><label class="full fa active" for="star_4" title="Awesome - 4 stars"></label><label class="full fa active" for="star_5" title="Awesome - 5 stars"></label>'
                            } else {
                                rating =
                                    '<label class="full fa " for="star1" title="Awesome - 1 stars"></label><label class="full fa " for="star_2" title="Awesome - 2 stars"></label><label class="full fa " for="star_3" title="Awesome - 3 stars"></label><label class="full fa " for="star_4" title="Awesome - 4 stars"></label><label class="full fa " for="star_5" title="Awesome - 5 stars"></label>'
                            }

                            clone.querySelector(".display-rating").innerHTML = rating;
                            clone.querySelector(".display-rating1").innerHTML = rating;

                            if (data.data[i].product_gallary != null && data.data[i].product_gallary !=
                                'null' && data.data[i].product_gallary != '') {
                                if (data.data[i].product_gallary.detail != null && data.data[i].product_gallary
                                    .detail != 'null' && data.data[i].product_gallary.detail != '') {
                                    clone.querySelector(".product-card-image").setAttribute('src', data.data[i]
                                        .product_gallary.detail[1].gallary_path);
                                }
                            }
                            if (data.data[i].detail != null && data.data[i].detail != 'null' && data.data[i]
                                .detail != '') {
                                clone.querySelector(".product-card-image").setAttribute('alt', data.data[i]
                                    .detail[0].title);
                            }
                            if (data.data[i].category != null && data.data[i].category != 'null' && data.data[i]
                                .category != '') {
                                if (data.data[i].category[0].category_detail != null && data.data[i].category[0]
                                    .category_detail != 'null' && data.data[i].category[0].category_detail != ''
                                ) {
                                    if (data.data[i].category[0].category_detail.detail != null && data.data[i]
                                        .category[0].category_detail.detail != 'null' && data.data[i].category[
                                            0].category_detail.detail != '') {
                                        clone.querySelector(".product-card-category").innerHTML = data.data[i]
                                            .category[0].category_detail.detail[0].name;
                                    }
                                }
                            }
                            if (data.data[i].detail != null && data.data[i].detail != 'null' && data.data[i]
                                .detail != '') {
                                clone.querySelector(".product-card-name").innerHTML = data.data[i].detail[0]
                                    .title;
                                clone.querySelector(".product-card-name").setAttribute('href', '/product/' +
                                    data
                                    .data[i].product_id + '/' + data
                                    .data[i].product_slug);
                                var desc = data.data[i].detail[0].desc;
                                clone.querySelector(".product-card-desc").innerHTML = desc.substring(0, 50);
                            }

                            if (data.data[i].product_type == 'simple') {
                                if (data.data[i].product_discount_price == '' || data.data[i]
                                    .product_discount_price == null || data.data[i].product_discount_price ==
                                    'null') {
                                    clone.querySelector(".product-card-price").innerHTML = data.data[i]
                                        .product_price_symbol;
                                } else {
                                    clone.querySelector(".product-card-price").innerHTML =
                                        data.data[i]
                                        .product_discount_price_symbol + '<span>' + data.data[i]
                                        .product_price_symbol + '</span>';
                                }
                            } else {
                                if (data.data[i].product_combination != null && data.data[i]
                                    .product_combination != 'null' && data.data[i].product_combination != '') {
                                    clone.querySelector(".product-card-price").innerHTML = data.data[i]
                                        .product_combination[0].product_price_symbol;
                                }
                            }
                            if (data.data[i].product_type == 'simple') {
                                clone.querySelector(".product-card-link").setAttribute('onclick',
                                    "addToCart(this)");
                                clone.querySelector(".product-card-link").setAttribute('data-id', data.data[i]
                                    .product_id);
                                clone.querySelector(".product-card-link").setAttribute('data-type', data.data[i]
                                    .product_type);
                                clone.querySelector(".product-card-link").innerHTML = 'Add To Cart';
                            } else {
                                clone.querySelector(".product-card-link").setAttribute('href', '/product/' +
                                    data
                                    .data[i].product_id + '/' + data
                                    .data[i].product_slug);
                            }

                            $("." + appendTo).append(clone);

                            if (appendTo == 'new-arrival' || appendTo == 'weekly-sale') {
                                $(".div-class").addClass('col-12 col-sm-6 col-lg-3');
                            }
                        }


                        if (appendTo != 'new-arrival' && appendTo != 'weekly-sale')
                            getSliderSettings(appendTo);
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
                        console.log(data, "final data");
                        var htmlToRender =
                            "<article><div class='badges'><span class='badge badge-success'>Featured</span></div><div class='detail'>";

                        htmlToRender += '<h5 class="title"><a  href="/product/' + data
                            .data[0].product_id + '/' + data
                            .data[0].product_slug + '">' + data.data[0].detail[0]
                            .title + '</a></h5>';


                        htmlToRender += '<p class="discription">' + data.data[0].detail[0]
                            .desc + '</p>';




                        if (data.data[0].product_type == 'simple') {
                            if (data.data[0].product_discount_price == '' || data.data[0]
                                .product_discount_price == null || data.data[0].product_discount_price ==
                                'null') {
                                htmlToRender += '<div class="price">' + data.data[0]
                                    .product_price_symbol + '</div>';
                            } else {
                                htmlToRender += '<div class="price">' + data.data[0]
                                    .product_discount_price_symbol + '<span>' + data.data[0]
                                    .product_price_symbol + '</span></div>';
                            }
                        } else {
                            if (data.data[0].product_combination != null && data.data[0]
                                .product_combination != 'null' && data.data[0].product_combination != '') {
                                htmlToRender += '<div class="price">' + data.data[0]
                                    .product_combination[0].product_price_symbol + '</div>';
                            }
                        }

                        htmlToRender +=
                            '<div class="pro-sub-buttons"><div class="buttons"><button type="button" class="btn  btn-link " data-id=' +
                            data.data[0]
                            .product_id + ' onclick="addWishlist(this)" data-type=' + data.data[0]
                            .product_type + '><i class="fas fa-heart"></i>Add to Wishlist</button>';

                        htmlToRender += '<button type="button" class="btn btn-link" data-id=' + data.data[0]
                            .product_id + ' data-type=' + data.data[0]
                            .product_type +
                            ' onclick="addCompare(this)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add to Compare"><i class="fas fa-align-right"></i>Add to Compare</button></div></div></div>';
                        htmlToRender += '<picture><div class="product-hover">';
                        if (data.data[0].product_type == 'simple') {

                            htmlToRender +=
                                '<button type="button" onclick="addToCart(this)" class="btn btn-block btn-secondary cart swipe-to-top" >Add to Cart</button>';

                        } else {

                            htmlToRender += '<a href="/product/' + data
                                .data[0].product_id + '/' + data
                                .data[0].product_slug +
                                '" onclick="addToCart(this)" class="btn btn-block btn-secondary cart swipe-to-top" >View Detail</a>';

                        }

                        htmlToRender += '</div>';

                        if (data.data[0].product_gallary != null && data.data[0].product_gallary !=
                            'null' && data.data[0].product_gallary != '') {
                            if (data.data[0].product_gallary.detail != null && data.data[0].product_gallary
                                .detail != 'null' && data.data[0].product_gallary.detail != '') {
                                htmlToRender += '<img class="img-fluid" src="' + data.data[0]
                                    .product_gallary.detail[1].gallary_path +
                                    '" alt="Men"s Cotton Classic Baseball Cap">';

                            }
                        }
                        htmlToRender += '</picture></article>';


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
                    '/api/client/blog_news?getGallaryDetail=1&limit=10&sortBy=id&language_id=' + languageId +
                    '&getDetail=1&getBlogCategory=1&sortType=DESC',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        $(".blog-news-data").html('');
                        const templ = document.getElementById("news-blog-template");
                        // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                        for (i = 0; i < data.data.length; i++) {
                            const clone = templ.content.cloneNode(true);
                            // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                            clone.querySelector(".news-blog-date").innerHTML = data.data[i].date;
                            clone.querySelector(".news-blog-date").setAttribute('data-id', data.data[i]
                                .product_id);
                            clone.querySelector(".blog-url").setAttribute('href', '/blog-detail/' + data.data[i]
                                .slug);
                            clone.querySelector(".read-more-url").setAttribute('href', '/blog-detail/' + data
                                .data[i].slug);

                            if (data.data[i].gallary != null && data.data[i].gallary != 'null' && data.data[i]
                                .gallary != '') {
                                if (data.data[i].gallary.detail != null && $.trim(data.data[i].gallary
                                        .detail) != '' && data.data[i].gallary.detail != 'null') {
                                    if (data.data[i].gallary.detail[2].gallary_path) {
                                        clone.querySelector(".news-blog-image").setAttribute('src', data.data[i]
                                            .gallary.detail[1].gallary_path);
                                    } else {
                                        clone.querySelector(".news-blog-image").setAttribute('src', data.data[i]
                                            .gallary.detail[0].gallary_path);
                                    }
                                }
                            }
                            if (data.data[i].detail != null && $.trim(data.data[i].detail) != '' && data.data[i]
                                .detail != 'null') {
                                clone.querySelector(".news-blog-image").setAttribute('alt', data.data[i].detail[
                                    0].name);
                            }
                            if (data.data[i].category != null && data.data[i].category != 'null' && $.trim(data
                                    .data[i].category) != '') {
                                if (data.data[i].category.blog_detail != null && data.data[i].category
                                    .blog_detail != 'null' && data.data[i].category.blog_detail != '') {
                                    clone.querySelector(".news-blog-category").innerHTML = data.data[i].category
                                        .blog_detail[0].name;
                                }
                            }
                            if (data.data[i].detail != null && data.data[i].detail != 'null' && $.trim(data
                                    .data[i].detail) != '') {
                                clone.querySelector(".news-blog-name").innerHTML = data.data[i].detail[0].name;
                                clone.querySelector(".news-blog-desc").innerHTML = data.data[i].detail[0]
                                    .description;
                            }
                            $(".blog-news-data").append(clone);
                        }
                        getSliderSettings("blog-news-data");
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
                    '/api/client/slider?getLanguage=1&getSliderType=1&getSliderNavigation=1&getSliderGallary=1&limit=5&sortBy=id&sortType=DESC&sliderType=1&language_id=1',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        if($(".carousel-content").find($(".slider-navigation-show")).length > 0){
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
                        }else{
                            var indicator = '';
                            var carousel = '';
                            $.each(data.data, function(i, e){
                                if(i == 0){
                                    indicator += '<li data-target="#carousel-index-wrapper" data-slide-to="' + i + '" class="active"></li>';
                                    carousel += '<div class="carousel-item active">'
                                }else{
                                    indicator += '<li data-target="#carousel-index-wrapper" data-slide-to="' + i + '"></li>';
                                    carousel += '<div class="carousel-item">'
                                }
                                carousel += '<img class="d-block w-100" src="{{ asset("gallary") }}/' + e.gallary + '" alt="First slide">' +
                                    '<div class="carousel-caption d-flex flex-column h-100 align-items-start justify-content-center w-100">' +
                                        '<div class="row w-100">' +
                                            '<div class="col-4"></div>' +
                                            '<div class="col-xl-6 col-md-6 col-sm-12 col-12">' +
                                                '<div class="header-content text-left">' +
                                                    '<h1 class="font-weight-bold mb-3">' + e.slider_title + '</h1>' +
                                                    '<h5 class="mb-4">' + e.slider_description + '</h5>' +
                                                    '<a href="' + e.slider_url + '" class="btn-anch px-4 py-2 font-weight-bold text-white">Know More</a>' +
                                                '</div>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>';
                            });
                            $('.carousel-inner').html(carousel);
                            $('.carousel-indicators').html(indicator);
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
                    '/api/client/category?getDetail=1&page=1&limit=10&getGallary=1&language_id=' + languageId +
                    '&sortBy=category_name&sortType=DESC',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        $(".category-slider-show").html('');
                        const templ = document.getElementById("category-slider-template");
                        // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                        for (i = 0; i < data.data.length; i++) {
                            const clone = templ.content.cloneNode(true);
                            // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                            clone.querySelector(".category-slider-url").setAttribute('href', '/shop?category=' +
                                data.data[i].id);
                            clone.querySelector(".category-slider-image").setAttribute('src', '/gallary/' + data
                                .data[i].icon);
                            clone.querySelector(".category-slider-title").innerHTML = data.data[i].name;
                            $(".category-slider-show").append(clone);
                        }
                        getSliderSettings("category-slider-show");
                    }
                },
                error: function(data) {},
            });
        }

        function bannerMedia() {
            var bannerType = "{{ getSetting()['banner_style'] ? getSetting()['banner_style'] : 'style1' }}";
            if (bannerType == "style1") {
                bannerType = 'banner1';
            }
            if (bannerType == "style2" || bannerType == "style3" || bannerType == "style4") {
                bannerType = "banner2";
            }
            if (bannerType == "style5" || bannerType == "style6") {
                bannerType = "banner5";
            }
            if (bannerType == "style7" || bannerType == "style8") {
                bannerType = "banner7";
            }
            if (bannerType == "style9") {
                bannerType = "banner9";
            }
            if (bannerType == "style10" || bannerType == "style11" || bannerType == "style12") {
                bannerType = "banner10";
            }

            if (bannerType == "style13" || bannerType == "style14" || bannerType == "style15") {
                bannerType = "banner13";
            }

            if (bannerType == "style16" || bannerType == "style17") {
                bannerType = "banner16";
            }

            if (bannerType == "style18" || bannerType == "style19") {
                bannerType = "banner18";
            }
            $('.banner_div').css('display', 'none');
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" + '/api/client/constant_banner?getLanguage=' + languageId + '&title=' +
                    bannerType +
                    '&language_id=' + languageId + '&getGallary=1',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        if (typeof data.data[0] !== 'undefined') {
                            $('.banner-link1').attr('href', data.data[0]
                                .banner_url);

                            $('.banner-image1').attr('src', "/gallary/" + data.data[0].gallary
                                .gallary_name);
                        }



                        if (typeof data.data[1] !== 'undefined') {
                            $('.banner-link2').attr('href', data.data[1]
                                .banner_url);

                            $('.banner-image2').attr('src', "/gallary/" + data.data[1].gallary
                                .gallary_name);
                        }




                        if (typeof data.data[2] !== 'undefined') {
                            $('.banner-link3').attr('href', data.data[2]
                                .banner_url);
                            $('.banner-image3').attr('src', "/gallary/" + data.data[2].gallary
                                .gallary_name);
                        }

                        if (typeof data.data[3] !== 'undefined') {
                            $('.banner-link4').attr('href', data.data[3]
                                .banner_url);
                            $('.banner-image4').attr('src', "/gallary/" + data.data[3].gallary
                                .gallary_name);
                        }

                        if (typeof data.data[4] !== 'undefined') {

                            $('.banner-link5').attr('href', data.data[4]
                                .banner_url);
                            $('.banner-image5').attr('src', "/gallary/" + data.data[4].gallary
                                .gallary_name);
                        }
                        if (typeof data.data[5] !== 'undefined') {
                            $('.banner-link6').attr('href', data.data[5]
                                .banner_url);
                            $('.banner-image6').attr('src', "/gallary/" + data.data[5].gallary
                                .gallary_name);

                        }
                        $('.banner_div').css('display', 'block');
                    }
                },
                error: function(data) {},
            });
        }
    </script>
@endsection
