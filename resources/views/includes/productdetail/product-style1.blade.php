<section id="product-details-wrapper">
    <!-- Breadcrumb Section Starts -->
    <section id="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="m-0 p-0 d-flex align-items-center">
                        <li class="font-weight-bold">Home</li><span class="mx-2"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></span>
                        <li class="">Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Slider With Thumbnails Starts -->
    <section id="product-detail-slider-wrapper" class="py-4 product-page">
       
    </section>
    <!-- Product Details Slider With Thumbnails Ends -->

    <!-- Product Information Tab Starts -->
    <section id="product-info">

        <div id="mytab-wrapper2" class="px-2" style="overflow: hidden;">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 p-0">
                    <div class="tab-navigation">
                        <div class="container">
                            <ul class="nav nav-tabs border-0 flex-column justify-content-center " id="myTab2"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active font-weight-bold text-uppercase" id="aa-tab"
                                        data-toggle="tab" href="#aa" role="tab" aria-controls="aa"
                                        aria-selected="true"><span class="mr-2"><i class="fa fa-list"
                                                aria-hidden="true"></i></span> Technical Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold text-uppercase" id="bb-tab" data-toggle="tab"
                                        href="#bb" role="tab" aria-controls="bb" aria-selected="false"> <span
                                            class="mr-2">
                                            <i class="fa fa-book" aria-hidden="true"></i>
                                        </span> Warnings and Instructions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="tab-content-wrapper p-5">
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="aa" role="tabpanel" aria-labelledby="aa-tab">
                                <p> <span class="font-weight-bold">Product:</span>
                                    asjdvaskdsabdask</p>
                            </div>
                            <div class="tab-pane fade" id="bb" role="tabpanel" aria-labelledby="bb-tab">
                                <div class="content">
                                    Warnings
                                    <ul class="mt-3 pl-0">
                                        <li class="mb-2"><span class="mr-2">
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                            </span>Model: 06782</li>
                                        <li class="mb-2"><span class="mr-2">
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                            </span>Model: 06782</li>
                                        <li class="mb-2"><span class="mr-2">
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                            </span>Model: 06782</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    Instructions
                                    <div class="row mt-3">
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">

                                            <div class="d-flex">
                                                <div class="image mr-2">
                                                    <img src="{{ asset('frontend/image/product-details/1.jpg') }}" class="img-fluid">
                                                </div>
                                                <div class="content">
                                                    <a class="file-name">
                                                        Filename
                                                    </a>
                                                    <p class="size">
                                                        1.32mb
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">

                                            <div class="d-flex">
                                                <div class="image mr-2">
                                                    <img src="{{ asset('frontend/image/product-details/1.jpg') }}" class="img-fluid">
                                                </div>
                                                <div class="content">
                                                    <a class="file-name">
                                                        Filename
                                                    </a>
                                                    <p class="size">
                                                        1.32mb
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- Product Information Tab Ends -->



</section>







{{-- <style>
    .variations li.active{
    border: 1px solid;
    padding: 5px;
    cursor: pointer;
  }
  .variations li{
    padding: 5px;
    cursor: pointer;
  }
  </style>



  <div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">{{ trans('lables.bread-crumb-home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ trans('lables.bread-product-page') }}</li>
            </ol>
        </div>
      </nav>
  </div>

  <section class="pro-content">
    <div class="container">
      <div class="page-heading-title">
          <h2> {{ trans('lables.product-detail-product') }}
          </h2>
      </div>
  </div>

  <section class="product-page">

  </section>

  @include('includes.productdetail.related-product-section');

  </section> --}}
