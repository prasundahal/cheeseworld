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
$galleries = App\Models\Admin\Gallary::whereIn('id', $gallaryIds)->get();

?>

<template id="product-detail-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-12">
                <div class="row carousel-gallery-wrapper">
                    <div class="col-xl-3 col-lg-3 col-12">
                        <!-- Carousel Navigatiom -->
                        <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner slider-for">
                                <div class="carousel-item active" data-slide-number="0">
                                    <div class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                        @foreach ($galleries as $gallery)
                                            <div id="carousel-selector-{{ $gallery->id }}"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="0">
                                                <img src="{{ asset('gallary/large'.$gallery->name) }}"
                                                    class="img-fluid">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                

                            </div>
                            {{-- <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
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
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-12">
                        <!-- Carousel -->
                        <div id="carousel" class="carousel slide gallery" data-ride="carousel">
                            <div class="carousel-inner slider-nav">
                                @foreach($galleries as $gallery)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-slide-number="0" data-toggle="lightbox"
                                    data-gallery="gallery" data-remote="{{ asset('gallary/thumbnail'.$gallery->name) }}">
                                    <img src="{{ asset('gallary/thumbnail'.$gallery->name) }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-12">
                <div class="d-flex flex-column">
                    <h1 class="font-weight-bold pro-title mt-3">

                    </h1>
                    <p class="description">

                    </p>
                    <div class="share ml-auto">
                        <a><i class=" fa fa-share-alt fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="pro-counter">
                    <div class="input-group item-quantity">
      
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
                    <button type="button" class="btn btn-secondary btn-lg swipe-to-top add-to-cart">Add to Cart</button>
      
      
                  </div>
            </div>
            
        </div>
        <div class="row py-5">
            <div class="col-12">
                <h1 class="font-weight-bold text-center py-4">
                    Chicco SterilNatural
                </h1>
                <p>
                    The new line of sterilizers by Chicco fits the needs of mother and baby. It allows to choose
                    between different models
                    and configurations in order to sterilize effectively and easily.
                </p>

            </div>

        </div>
    </div>
    <div id="mytab-wrapper">
        <div class="tab-navigation">
            <div class="container">
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold text-uppercase" id="a-tab" data-toggle="tab"
                            href="#a" role="tab" aria-controls="a" aria-selected="true">Adjustable Size</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-uppercase" id="b-tab" data-toggle="tab" href="#b"
                            role="tab" aria-controls="b" aria-selected="false">Effective
                            Sterlisation</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="a-tab">
                    <!-- Slick Slider Starts -->
                    <section id="slider">
                        <div class="slider2 py-5">
                            <div class="container">
                                <div class="slick-w4">
                                    <div class="items d-flex align-items-center">
                                        <div class="image mr-4 w-50">
                                            <img src="{{ asset('frontend/image/product-details/1.jpg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="content w-50">
                                            <div class="head ">
                                                <h3 class="font-weight-bold">Who we are</h3>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                minima
                                                molestiae ad
                                                tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                harum natus sint quas
                                                veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                Quasi minima
                                                molestiae ad
                                                tenetur eum accusamus, quos vero possimus</p>
                                            <a href="#" class="text-uppercase font-weight-bold">Find out
                                                more</a>
                                        </div>
                                    </div>
                                    <div class="items d-flex align-items-center">
                                        <div class="image mr-4 w-50">
                                            <img src="{{ asset('frontend/image/product-details/2.jpg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="content w-50">
                                            <div class="head ">
                                                <h3 class="font-weight-bold">Who we are</h3>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                minima
                                                molestiae ad
                                                tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                harum natus sint quas
                                                veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                Quasi minima
                                                molestiae ad
                                                tenetur eum accusamus, quos vero possimus</p>
                                            <a href="#" class="text-uppercase font-weight-bold">Find out
                                                more</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Slick Slider Ends -->
                </div>
                <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="b-tab">
                    <!-- Slick Slider Starts -->
                    <section id="slider2">
                        <div class="slider6 py-5">
                            <div class="container">
                                <div class="slick-w6">
                                    <div class="items d-flex align-items-center">
                                        <div class="image mr-4 w-50">
                                            <img src="{{ asset('frontend/image/product-details/1.jpg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="content w-50">
                                            <div class="head ">
                                                <h3 class="font-weight-bold">Who we are</h3>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                minima
                                                molestiae ad
                                                tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                harum natus sint quas
                                                veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                Quasi minima
                                                molestiae ad
                                                tenetur eum accusamus, quos vero possimus</p>
                                            <a href="#" class="text-uppercase font-weight-bold">Find out
                                                more</a>
                                        </div>
                                    </div>
                                    <div class="items d-flex align-items-center">
                                        <div class="image mr-4 w-50">
                                            <img src="{{ asset('frontend/image/product-details/2.jpg') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="content w-50">
                                            <div class="head ">
                                                <h3 class="font-weight-bold">Who we are</h3>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                minima
                                                molestiae ad
                                                tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                harum natus sint quas
                                                veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                Quasi minima
                                                molestiae ad
                                                tenetur eum accusamus, quos vero possimus</p>
                                            <a href="#" class="text-uppercase font-weight-bold">Find out
                                                more</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Slick Slider Ends -->
                </div>
            </div>
        </div>
    </div>
</template>
