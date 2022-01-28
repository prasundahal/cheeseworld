<?php

$prod = App\Models\Admin\Product::where('id', $product)
    ->with('productDetail')
    ->with('productGallaryDetail')
    ->with('product_combination')
    ->first();

$gallary_id = [];
if (!$prod->productGallaryDetail->isEmpty()) {
    foreach ($prod->productGallaryDetail as $gallaryDetail) {
        $gallary_id[] = $gallaryDetail->gallary_id;
    }
}
if (!$prod->product_combination->isEmpty()) {
    foreach ($prod->product_combination as $prod_combination) {
        $gallary_id[] = $prod_combination->gallary_id;
    }
}
$gallaryIds = array_unique($gallary_id);
$galleries = App\Models\Admin\Gallary::whereIn('id', $gallaryIds)
    ->get()
    ->toArray();

$newgalleries = array_chunk($galleries, 4, true);

// foreach ($newgalleries as $key => $newgallery) {
//     foreach ($newgallery as $gal) {
//         echo '<pre>';
//         print_r($gal['name']);
//         echo '</pre>';
//     }
//     // echo "<pre>";
//     // print_r($newgallery);
// }
// die();

?>

<template id="product-detail-section">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

    <script>
        function toggleActiveClass(id) {
            $(".currentSlider").find(".")
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-12">
                <div class="row carousel-gallery-wrapper">
                    <div class="col-xl-3 col-lg-3 col-12">
                        <!-- Carousel Navigatiom -->
                        <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                            <?php
                            $i = 0;
                            $id = [];
                            // $j = 1;
                            ?>
                            <div class="carousel-inner allSlide">
                                @foreach ($newgalleries as $key => $newgallery)
                                    <div class="carousel-item {{ $loop->first ? 'active': '' }}" data-slide-number="{{ $key }}">
                                        <div
                                            class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                            @foreach ($newgallery as $v => $gal)
                                                <div id="carousel-selector-{{ $v }}"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="{{ $v }}">
                                                    <img src="{{ asset('gallary/large' . $gal['name']) }}"
                                                        class="img-fluid">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach

                                {{-- @for ($i = 0; $i <= 1; $i++)
                                    @if ($i == 0)
                                        <div class="carousel-item active" data-slide-number="0">
                                            <div
                                                class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                                @foreach ($galleries->take(4) as $key => $gallery)
                                                    <?php
                                                    $id[] = $gallery->id;
                                                    ?>
                                                    <div id="carousel-selector-{{ $key }}"
                                                        class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                        data-target="#carousel" data-slide-to="{{ $key }}">
                                                        <img src="{{ asset('gallary/large' . $gallery->name) }}"
                                                            class="img-fluid">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                    @if ($i == 1)
                                        <div class="carousel-item" data-slide-number="1">
                                            <div
                                                class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                                @foreach ($galleries->whereNotIn('id', (array) $id)->take(4) as $k => $gallery)
                                                    <div id="carousel-selector-{{ $k }}"
                                                        class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                        data-target="#carousel" data-slide-to="{{ $k }}">
                                                        <img src="{{ asset('gallary/large' . $gallery->name) }}"
                                                            class="img-fluid">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                @endfor --}}

                            </div>
                            <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                                <span class="icon-prv">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                                <span class="icon-nxt">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-12">
                        <!-- Carousel -->
                        <div id="carousel" class="carousel slide gallery" data-ride="carousel">
                            <div class="carousel-inner allImage">
                                @foreach ($galleries as $v => $gallery)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}"
                                        data-slide-number="{{ $v }}" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="{{ asset('gallary/large' . $gallery['name']) }}">
                                        <img src="{{ asset('gallary/large' . $gallery['name']) }}"
                                            class="d-block w-100" alt="...">
                                    </div>
                                @endforeach


                            </div>
                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-12">
                <input type="hidden" id="product_combination_id" />
                <div class="d-flex flex-column">
                    <h1 class="font-weight-bold pro-title mt-3" style="font-size: 25px">

                    </h1>
                    <h3 class="font-weight-bold">
                        {{-- <span class="product-card-price"></span> --}}
                        <span class="price product-card-price2"></span>
                    </h3>
                    <p class="description">

                    </p>
                    {{-- <div class="share ml-auto">
                        <a><i class=" fa fa-share-alt fa-2x" aria-hidden="true"></i></a>
                    </div> --}}
                </div>
                <div class="pro-counter mt-2">
                    <div class="input-group custom_width item-quantity">

                        <input type="text" id="quantity-input" name="quantity" class="form-control" value="1">

                        <span class="input-group-btn">
                            <button type="button" class="quantity-plus btn" data-type="plus" data-field="">
                                <i class="fas fa-plus"></i>
                            </button>

                            <button type="button" class="quantity-minus btn" data-type="minus" data-field="">
                                <i class="fas fa-minus"></i>
                            </button>
                        </span>
                    </div>

                 
                    <button type="button" class="btn  wishlist-icon btn-secondary swipe-to-top mt-2">Add to Wishlist</button>
                    <button type="button" class="btn btn-secondary swipe-to-top add-to-cart mt-2">Add to Cart</button>



                </div>
                <div class="pro-options mt-4">

                </div>
            </div>

        </div>
        
        <div class="row py-5">

        </div>
    </div>


</template>
