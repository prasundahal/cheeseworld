@extends('layouts.master')
@section('content')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"> --}}
    <style>
        .variation_active {
            border: 1px solid;
        }

        .price-active {
            border: 1px solid;
        }

    </style>
    @include(isset(getSetting()['product_detail']) ? 'includes.productdetail.product-'.getSetting()['product_detail'] :
    'includes.productdetail.product-style1')

    @include(isset(getSetting()['product_detail']) ?
    'includes.productdetail.product-'.getSetting()['product_detail']."-template" :
    'includes.productdetail.product-style1-template')

    @include(isset(getSetting()['card_style']) ?
    'includes.cart.product_card_'.getSetting()['card_style'] : "includes.cart.product_card_style1")

    <input type="hidden" id="product_id" value="{{ $product }}" />





    <!-- Observatory Section Starts -->
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
                <div class="row">
                    <div class="col-xl-4 col-md-4 d-md-block d-none">
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
                    <div class="col-xl-4 col-md-4 col-sm-12">
                        <div class="box-3rd d-flex justify-content-center align-items-center h-100">
                            <img src="../image/observatory/kid.jpg" alt="">
                        </div>

                    </div>
                    <div class="col-xl-4 col-md-4 d-md-block d-none">
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
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Observatory Section Ends -->
    @include('includes.productdetail.related-product-section');
@endsection


@section('script')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script> --}}
    <script>
        var attribute_id = [];
        var attribute = [];
        var variation_id = [];
        var variation = [];
        $(document).ready(function() {
            fetchProduct();
            fetchRelatedProduct();
        });

        languageId = localStorage.getItem("languageId");
        if (languageId == null || languageId == 'null') {
            localStorage.setItem("languageId", '1');
            $(".language-default-name").html('Endlish');
            localStorage.setItem("languageName", 'English');
            languageId = 1;
        }

        customerToken = $.trim(localStorage.getItem("customerToken"));


        function fetchProduct() {
            var url = "{{ url('') }}" + '/api/client/products/' + "{{ $product }}" +
                '?getCategory=1&getDetail=1&language_id=' + languageId + '&currency=' + localStorage.getItem("currency");
            var appendTo = 'product-page';
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
                    console.log(data);
                    if (data.status == 'Success') {
                        const templ = document.getElementById("product-detail-section");
                        console.log(templ);
                        const clone = templ.content.cloneNode(true);
                        clone.querySelector(".add-to-cart").setAttribute('onclick', 'addToCart(this)');
                        clone.querySelector(".add-to-cart").setAttribute('data-id', data.data.product_id);
                        clone.querySelector(".add-to-cart").setAttribute('data-type', data.data.product_type);
                        // clone.querySelector(".product-detail-section-product-id").innerHTML = data.data.product_id;
                        /* if (data.data.product_gallary_detail != null) {
                            var image_list_link = "";
                            var image_list = "";
                            for (var g = 0; g < data.data.product_gallary_detail.length; g++) {

                                image_list_link +=
                                    '<a class="slider-for__item ex1 fancybox-button" href="/gallary/large' +
                                    data.data.product_gallary_detail[g].gallary_name +
                                    '" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet"><img class="product-detail-section-image" src="/gallary/large' +
                                    data.data.product_gallary_detail[g].gallary_name +
                                    '" alt="Zoom Image" /></a>'


                                image_list +=
                                    '<div class="slider-nav__item"><img class="product-detail-section-image" src="/gallary/thumbnail' +
                                    data.data.product_gallary_detail[g].gallary_name +
                                    '" alt="Zoom Image"/></div>';

                            }
                            if (data.data.product_combination) {
                                for (loop = 0; loop < data.data.product_combination.length; loop++) {
                                    if (data.data.product_combination[loop].gallary != null) {
                                        image_list_link +=
                                            '<a class="slider-for__item ex1 fancybox-button" href="/gallary/large' +
                                            data.data.product_combination[loop].gallary.gallary_name +
                                            '" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet"><img class="product-detail-section-image" src="/gallary/large' +
                                            data.data.product_combination[loop].gallary.gallary_name +
                                            '" alt="Zoom Image" /></a>';


                                        image_list +=
                                            '<div class="slider-nav__item"><img class="product-detail-section-image" src="/gallary/thumbnail' +
                                            data.data.product_combination[loop].gallary.gallary_name +
                                            '" alt="Zoom Image" id="image-' + data.data.product_combination[
                                                loop].product_combination_id + '"/></div>';
                                    }
                                }
                            }



                            clone.querySelector(".slider-for").innerHTML = image_list_link;
                            clone.querySelector(".slider-nav").innerHTML = image_list;

                        } */

                        if (data.data.detail != null) {
                            clone.querySelector(".pro-title").innerHTML = data.data.detail[0].title;
                            clone.querySelector(".description").innerHTML = data.data.detail[0].desc;

                        }

                        // if (data.data.product_type == 'simple') {
                        //     if (data.data.product_discount_price == '' || data.data
                        //         .product_discount_price == null || data.data.product_discount_price ==
                        //         'null') {
                        //         clone.querySelector(".product-card-price").innerHTML = data.data
                        //             .product_price_symbol;
                        //     } else {

                        //         clone.querySelector(".product-card-price").innerHTML = data.data
                        //             .product_discount_price_symbol + '<span>' + data.data
                        //             .product_price_symbol + '</span>';
                        //     }
                        // } else {
                        //     if (data.data.product_combination != null) {
                        //         clone.querySelector(".product-card-price").innerHTML = data.data
                        //             .product_combination[0].product_price_symbol;
                        //     }


                        // }
                        $("." + appendTo).append(clone);


                    }
                },
                error: function(data) {},
            });
        }

        $(document).on('click', '.variation_list_item', function() {
            var variation_name = $(this).attr('data-variation-name');
            var attribute_name = $(this).attr('data-attribute-name').split(' ').join('_');

            $('.attribute_' + attribute_name + '_div').each(function() {
                $('.attribute_' + attribute_name + '_div').removeClass("variation_active");
            })

            $('.' + variation_name + '-' + attribute_name).addClass("variation_active");

            if (attribute_id.indexOf($(this).attr('data-attribute-id')) === -1) {
                attribute_id.push($(this).attr('data-attribute-id'));
                attribute.push($(this).attr('data-attribute-name'));
                variation_id.push($(this).attr('data-variation-id'));
                variation.push($(this).attr('data-variation-name'));

            } else {

                var index = attribute_id.indexOf($(this).attr('data-attribute-id'));
                if ($(this).attr('data-variation-id') == "") {
                    attribute_id.splice(index, 1);
                    variation_id.splice(index, 1);
                    attribute.splice(index, 1);
                    variation.splice(index, 1);
                } else {
                    attribute_id[index] = $(this).attr('data-attribute-id');
                    variation_id[index] = $(this).attr('data-variation-id');
                    attribute[index] = $(this).attr('data-attribute-name');
                    variation[index] = $(this).attr('data-variation-name');
                }

            }

            // console.log(attribute_id, variation_id, attribute, variation);
            var url = "{{ url('') }}" +
                '/api/client/products/{{ $product }}?getCategory=1&getDetail=1&language_id=' + languageId +
                '&currency=' + localStorage.getItem("currency");
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
                        for (i = 0; i < data.data.product_combination.length; i++) {
                            p = 0;
                            not_combination = 0;
                            product_combination_id = price = gallary = '';
                            variation_array = new Array();
                            for (k = 0; k < data.data.product_combination[i].combination
                                .length; k++) {
                                variation_array[p] = data.data.product_combination[i].combination[k]
                                    .variation_id;
                                ++p;
                            }
                            if (variation_array.length == variation_id.length) {
                                console.log(variation_array);
                                console.log(variation_id);
                                for (m = 0; m < variation_id.length; m++) {
                                    if (jQuery.inArray(parseInt(variation_id[m]),
                                            variation_array) == -
                                        1) {
                                        not_combination = 1;
                                    }
                                }
                            } else {
                                not_combination = 1;
                            }

                            if (not_combination == 0) {
                                product_combination_id = data.data.product_combination[i]
                                    .product_combination_id;
                                $("#product_combination_id").val(product_combination_id);
                                price = data.data.product_combination[i].product_price_symbol;
                                $(".product-card-price").html(price);

                                if (data.data.product_combination[i].gallary != null) {
                                    gallary = data.data.product_combination[i].gallary.gallary_name;
                                    var image_list_link = "";
                                    var image_list = "";

                                    image_list_link = '<a class="" href="/gallary/large' + data.data
                                        .product_combination[i].gallary.gallary_name +
                                        '" title="Lorem ipsum dolor sit amet"><img class="product-detail-section-image" src="/gallary/large' +
                                        data.data.product_combination[i].gallary.gallary_name +
                                        '" alt="Zoom Image" /></a>'


                                    image_list =
                                        '<div class=""><img class="product-detail-section-image" src="/gallary/thumbnail' +
                                        data.data.product_combination[i].gallary.gallary_name +
                                        '" alt="Zoom Image"/></div>';

                                    $("#image-" + data.data.product_combination[i]
                                        .product_combination_id).trigger('click');

                                    // $(".slider-for").removeClass('slick-initialized slick-slider');
                                    // $(".slider-for").html(image_list_link);
                                    // $(".slider-nav").html(image_list);
                                }
                                return;
                            } else {}
                        }

                        // slideInital();
                    }
                },
                error: function(data) {},
            });

        })

        function fetchRelatedProduct() {
            var url = "{{ url('') }}" + '/api/client/products?limit=10&getDetail=1&language_id=' + languageId +
                '&currency=' + localStorage.getItem("currency");
            var appendTo = 'related';
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
                        // templ.prepend('<div class="product-carousel-js">');
                        // templ.append('</div>');
                        for (i = 0; i < data.data.length; i++) {
                            const clone = templ.content.cloneNode(true);
                            // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");

                            if (data.data[i].product_gallary != null) {
                                if (data.data[i].product_gallary.detail != null) {
                                    clone.querySelector(".product-card-image").setAttribute('src', data
                                        .data[i]
                                        .product_gallary.detail[1].gallary_path);
                                }
                            }
                            if (data.data[i].detail != null) {
                                clone.querySelector(".product-card-image").setAttribute('alt', data.data[i]
                                    .detail[0].title);
                            }

                            if (data.data[i].detail != null) {
                                clone.querySelector(".product-card-name").innerHTML = data.data[i].detail[0]
                                    .title;
                                clone.querySelector(".product-card-name").setAttribute('href', '/product/' +
                                    data
                                    .data[i].product_id + '/' + data
                                    .data[i].product_slug);
                                clone.querySelector(".product-card-link").setAttribute('href', '/product/' +
                                    data
                                    .data[i].product_id + '/' + data
                                    .data[i].product_slug);
                                var desc = data.data[i].detail[0].desc;
                                // clone.querySelector(".product-card-desc").innerHTML = desc.substring(0, 50);
                            }




                            $("." + appendTo).append(clone);
                        }
                        // getSliderSettings(appendTo);
                    }
                },
                error: function(data) {},
            });
        }

        function productReview() {
            rating = $("input[name=rating]").val();
            comment = $("#comment").val();
            title = $("#title").val();
            if (rating == '') {
                toastr.error('{{ trans('select-ratings') }}');
                return;
            }

            var url = "{{ url('') }}" + '/api/client/review?product_id={{ $product }}&comment=' + comment +
                '&rating=' + rating + '&title=' + title;
            var appendTo = 'related';
            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        toastr.success('{{ trans('rating-saved-successfully') }}');
                        $("#comment").val('');
                        $("#title").val('');
                        getProductReview();
                    }
                },
                error: function(data) {
                    console.log(data);
                    if (data.status == 422) {
                        jQuery.each(data.responseJSON.errors, function(index, item) {
                            $("#" + index).parent().find('.invalid-feedback').css('display',
                                'block');
                            $("#" + index).parent().find('.invalid-feedback').html(item);
                        });
                    } else if (data.status == 401) {
                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                    }
                },
            });
        }

        function getProductReview() {
            var url = "{{ url('') }}" + '/api/client/review?product_id={{ $product }}';
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        const temp2 = document.getElementById("review-rating-template");
                        $("#review-rating-show").html('');
                        for (review = 0; review < data.data.length; review++) {
                            const clone1 = temp2.content.cloneNode(true);
                            clone1.querySelector(".review-comment").innerHTML = data.data[review].comment;
                            clone1.querySelector(".review-date").innerHTML = data.data[review].date;
                            clone1.querySelector(".review-title").innerHTML = data.data[review].title;
                            if (data.data[review].rating == '5') {
                                clone1.querySelector(".review-rating5").setAttribute('checked', true);
                            } else if (data.data[review].rating == '4') {
                                clone1.querySelector(".review-rating4").setAttribute('checked', true);
                            } else if (data.data[review].rating == '3') {
                                clone1.querySelector(".review-rating3").setAttribute('checked', true);
                            } else if (data.data[review].rating == '2') {
                                clone1.querySelector(".review-rating2").setAttribute('checked', true);
                            } else if (data.data[review].rating == '1') {
                                clone1.querySelector(".review-rating1").setAttribute('checked', true);
                            }
                            $("#review-rating-show").append(clone1);
                        }
                    }
                },
                error: function(data) {
                    console.log(data);
                },
            });
        }


        function slideInital() {
            // Product SLICK
            // $('.slider-show').html('<div class="slider-for"></div><div class="slider-nav"></div>');
            // alert();
            jQuery('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                infinite: false,
                draggable: false,
                fade: true,
                asNavFor: '.slider-nav',
                reinit: true
            });
            jQuery('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                centerMode: true,
                centerPadding: '60px',
                dots: false,
                arrows: true,
                focusOnSelect: true,
                reinit: true
            });


            // Product vertical SLICK
            jQuery('.slider-for-vertical').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                infinite: false,
                draggable: false,
                fade: true,
                asNavFor: '.slider-nav-vertical'
            });
            jQuery('.slider-nav-vertical').slick({
                dots: false,
                arrows: true,
                vertical: true,
                asNavFor: '.slider-for-vertical',
                slidesToShow: 3,
                // centerMode: true,
                slidesToScroll: 1,
                verticalSwiping: true,
                focusOnSelect: true
            });

            jQuery(function() {
                // ZOOM
                jQuery('.ex1').zoom();

            });

        }
    </script>
@endsection
