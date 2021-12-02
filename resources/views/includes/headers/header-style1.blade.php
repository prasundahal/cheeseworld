<!-- //header style One-->
<?php
$categories = App\Models\Admin\Category::inRandomOrder()
    ->with('detail')
    ->whereHas('my_products')
    ->with('my_products')
    ->take(12)
    ->get();

?>

<style>
    #top-cart-product-template .top-cart-product-id .item-thumb .image img {
        max-height: 80px;
        min-height: 80px;
        object-fit: contain;
        object-position: center;
        width: 100%;

    }

    .dropdown-menu .shopping-cart-items {
        overflow-y: scroll;
        height: 350px;
        width: 320px;
    }

    .dropdown-menu .shopping-cart-items li {

        border-bottom: 1px solid #dddddd;

    }

</style>
<section id="navigation-wrapper" class="navigation-wrap fixed-top">
    <div class="container">
        <div class="main-header row py-2">
            <div class="col-4 m-auto">
                <div class=" list">
                    <ul class="navbar-nav mr-auto d-flex flex-row">
                        <li class="nav-item active px-2">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#searchmodal">
                                <span class="mr-1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                <label class="mb-0">Search</label></a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="/shop"> <span class="mr-1"><i
                                        class="fa fa-map-marker" aria-hidden="true"></i>
                                </span>
                                Shops</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-4 m-auto">
                <a href="/">
                    <div class="logo text-center">
                        <img src="{{ isset(getSetting()['site_logo']) ? getSetting()['site_logo'] : asset('01-logo.png') }}"
                            alt="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}"
                            class="img-fluid">
                    </div>
                </a>
            </div>
            {{-- <div class="col-4 auth-login p-0">
              <div class="notice d-flex justify-content-center align-items-center">
                <div class="login-wrapper">
                  <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="welcomeUsername"></span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="loginDropdown">
                      <a class="dropdown-item log_out" href="javascript:void(0)" title="{{  trans("lables.header-logout") }}">{{  trans("lables.header-logout") }}</a>
                  </div>
              </div>
              </div>
            </div> --}}
            <div class="col-4  p-0">
                <div class="notice d-flex  justify-content-center align-items-center">
                    <div class="login-wrapper auth-login">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="welcomeUsername"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="loginDropdown">
                            <a class="dropdown-item log_out" href="javascript:void(0)"
                                title="{{ trans('lables.header-logout') }}">{{ trans('lables.header-logout') }}</a>
                        </div>
                    </div>
                    <div class="login-wrapper without-auth-login">
                        <a class="nav-link" href="{{ url('/login') }}">
                            {{ trans('lables.header-login-register') }}
                        </a>

                    </div>
                    <ul class="pro-header-right-options d-flex pl-0 mb-0">
                        <li>
                            <a href="{{ url('/wishlist') }}" class="btn" data-toggle="tooltip"
                                data-placement="bottom" title="Wishlist">
                                <i class="far fa-heart" aria-hidden="true"></i>
                                <span class="badge badge-secondary wishlist-count"></span>
                            </a>
                        </li>
                        <li class="show">
                            <div class="btn" type="button" id="headerOneCartButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="cart-left">
                                    <i class="fas fa-shopping-bag" aria-hidden="true"></i>
                                    <span class="badge badge-secondary total-menu-cart-product-count"></span>
                                </div>


                            </div>

                            <template id="top-cart-product-template">
                        <li class="top-cart-product-id d-flex justify-content-center align-items-center mb-2">
                            <div class="item-thumb">

                                <div class="image mr-2">
                                    <img class="img-fluid top-cart-product-image" src="" alt="Product Image">
                                </div>
                            </div>
                            <div class="item-detail">
                                <h3 class="top-cart-product-name"></h3>
                                <div
                                    class="item-s top-cart-product-qty-amount d-flex justify-content-between align-items-center mb-2">
                                </div>
                            </div>
                        </li>
                        </template>
                        <template id="top-cart-product-total-template">
                            <li>
                                <span class="item-summary ">{{ trans('lables.header-total') }}&nbsp;:&nbsp;<span
                                        class="top-cart-product-total"></span>
                                </span>
                            </li>
                            <li>
                                <a class="btn btn-link btn-block text-dark"
                                    href="{{ url('/cart') }}">{{ trans('lables.header-view-cart') }}</a>
                                <a class="btn btn-secondary btn-block swipe-to-top"
                                    href="{{ url('/checkout') }}">{{ trans('lables.header-checkout') }}</a>
                            </li>
                        </template>
                        <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="headerOneCartButton"
                            style="position: absolute; transform: translate3d(30px, 39px, 0px); top: 0px; left: 0px; will-change: transform;"
                            x-placement="bottom-end">
                            <ul class="shopping-cart-items top-cart-product-show p-3">
                                {{-- <li class="top-cart-product-id d-flex justify-content-between align-items-center mb-2 pb-2"
                                    style="border-bottom:1px solid #dddddd;">
                                    <div class="item-thumb">

                                        <div class="image mr-2">
                                            <img class="img-fluid top-cart-product-image"
                                                src="/gallary/thumbnail202111154912purex.jpg" alt="Purex Detergent"
                                                style="width:100%;max-height:60px;min-height:60px;object-fit:contain;object-fit:center;">
                                        </div>
                                    </div>
                                    <div class="item-detail">
                                        <h6 class="top-cart-product-name">Purex Detergent</h6>
                                        <div
                                            class="item-s top-cart-product-qty-amount d-flex justify-content-between align-items-center mb-1">
                                            1 x Rs 84.48 <span class="ml-2"> <i class="fas fa-trash"
                                                    data-id="8" data-combination-id="null"
                                                    onclick="removeCartItem(this)" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="remove-item">

                                    </div>
                                </li>
                                <li class="pb-2">
                                    <span class="item-summary ">Total&nbsp;:&nbsp;<span
                                            class="top-cart-product-total">Rs 84.48</span>
                                    </span>
                                </li>
                                <li>
                                    <a class="btn btn-link btn-block text-dark" href="http://127.0.0.1:8000/cart">View
                                        Cart</a>
                                    <a class="btn btn-secondary btn-block  swipe-to-top"
                                        href="http://127.0.0.1:8000/checkout">Checkout</a>
                                </li> --}}
                            </ul>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                    @foreach ($categories as $key => $category)
                                        <div class="col-md-3">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="/shop?category={{ $category->id }}">{{ $category->detail[0]->category_name }}</a>
                                                </li>
                                                @foreach ($category->my_products->take(3) as $value)
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/{{ $value->id }}/{{ $value->product_slug }}">{{ $value->detail[0]->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link font-weight-bold" href="#">Chicco Research Center</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link font-weight-bold" href="/about-us">Who we are</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

{{-- <header id="headerOne" class="header-area header-one  header-desktop d-none d-lg-block d-xl-block">
  
    @if (trans('lables.header-top-offer') != '')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <div class="container">
        <div class="pro-description">
          <div class="pro-info">
            {!!  trans("lables.header-top-offer") !!}
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      </div>
    </div>
    @endif
  
    <div class="header-mini bg-top-bar">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
  
            <div class="navbar-lang">
  
              <div class="dropdown">
                <button class="btn dropdown-toggle language-default-name" type="button">
                  English
                </button>
  
                
  
              <div class="dropdown-menu">
                  @foreach ($data['language'] as $languages)
                    <a class="dropdown-item language-default" href=" {{ url('/lang/'.$languages->code) }}" data-id={{$languages->id}} data-name="{{$languages->name}}">{{$languages->name}}</a>
                  @endforeach
                </div>
              </div>
  
              
              <div class="dropdown">
                <button class="btn dropdown-toggle" id="selected-currency" type="button">
                  USD
                </button>
                <div class="dropdown-menu">
                  @foreach ($data['currency'] as $currencies)
                    <a class="dropdown-item selected-currency" data-id="{{$currencies->id}}" data-code="{{$currencies->title}}" href="javascript:void(0)">{{$currencies->title}}</a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-12 col-md-6 without-auth-login">
            
            <ul class="link-list pro-header-options">
              <li>
                <div class="link-item">{{  trans("lables.header-welcome-user") }}</div>
              </li>
              <li>
                <li class="link-item"><a href="{{ url('/login') }}" class="nav-link -before" style="padding-right: 0;
                  color: #fff;"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;{{  trans("lables.header-login-register") }}</a></li>                      
              </li>            
            </ul>
  
          </div>
          <div class="col-12 col-md-6 auth-login">
            <ul class="pro-header-options">
              <li>
                <p> {{  trans("lables.header-welcome-text") }} <span class="welcomeUsername"></span></p>
              </li>
              <li class="dropdown">
                <button class="btn dropdown-toggle" type="button">
                  {{  trans("lables.header-my-account") }}
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ url('/profile') }}" title="{{  trans("lables.header-profile") }}">{{  trans("lables.header-profile") }}</a>
                  <a class="dropdown-item" href="{{ url('/wishlist') }}" title="{{  trans("lables.header-wishlist") }}">{{  trans("lables.header-wishlist") }}</a>
                  <a class="dropdown-item" href="{{ url('/compare') }}" title="{{  trans("lables.header-compare") }}">{{  trans("lables.header-compare") }}</a>
                  <a class="dropdown-item" href="{{ url('/orders') }}" title="{{  trans("lables.header-order") }}">{{  trans("lables.header-order") }}</a>
                  <a class="dropdown-item" href="{{ url('/shipping-address') }}" title="{{  trans("lables.header-shipping-address") }}">{{  trans("lables.header-shipping-address") }}</a>
                  <a class="dropdown-item log_out" href="javascript:void(0)" title="{{  trans("lables.header-logout") }}">{{  trans("lables.header-logout") }}</a>
                </div>
              </li>
            </ul>
  
          </div>
        </div>
      </div>
    </div>
    <div class="header-maxi bg-header-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-12 col-lg-3">
            <a href="{{url('/')}}" class="logo" data-toggle="tooltip" data-placement="bottom" title="{{isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
              <img class="img-fluid" src="{{isset(getSetting()['site_logo']) ? getSetting()['site_logo'] : asset('01-logo.png') }}" alt="{{isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
            </a>
          </div>
  
          <div class="col-12 col-sm-6">
  
            <form class="form-inline">
              <div class="search-field-module">
                <button class="btn btn-secondary swipe-to-top dropdown-toggle selected_category" type="button" id="headerOneCartButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="bottom" title="{{  trans("lables.header-all-categories") }}">
                  {{  trans("lables.header-all-categories") }}
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
                  @foreach ($data['category'] as $categories)
                  
                  <a class="dropdown-item cat-dropdown" href="javascript:void(0)" data-id="{{ $categories->id }}" data-name="{{isset($categories->detail[0]->category_name) ? $categories->detail[0]->category_name : ''}}">{{isset($categories->detail[0]->category_name) ? $categories->detail[0]->category_name : ''}}</a>
                  @endforeach
  
                </div>
                <div class="search-field-wrap">
                  <input type="search" placeholder="{{ isset($_GET['search']) ? $_GET['search'] : trans('lables.header-search-products').'...' }}" data-toggle="tooltip" data-placement="bottom" title="Search Item" id="search-input">
                  <button class="btn btn-secondary swipe-to-top" id="search_button" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.header-search-products') }}">
                    <i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <ul class="pro-header-right-options">
              <li>
                <a href="{{ url('/wishlist') }}" class="btn" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.header-wishlist') }}">
                  <i class="far fa-heart"></i>
                  <span class="badge badge-secondary wishlist-count">0</span>
                </a>
              </li>
              <li class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="headerOneCartButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="cart-left">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="badge badge-secondary total-menu-cart-product-count">0</span>
                  </div>
  
                  <div class="cart-right d-flex flex-column align-self-end ml-13">
                    <span class="title-cart"> {{  trans("lables.header-cart") }} </span>
                    <span class="cart-item"> {{  trans("lables.header-item") }} </span>
                  </div>
                </button>
                <template id="top-cart-product-template">
              <li class="top-cart-product-id">
                <div class="item-thumb">
  
                  <div class="image">
                    <img class="img-fluid top-cart-product-image" src="" alt="Product Image">
                  </div>
                </div>
                <div class="item-detail">
                  <h3 class="top-cart-product-name"></h3>
                  <div class="item-s top-cart-product-qty-amount"></div>
                </div>
              </li>
              </template>
              <template id="top-cart-product-total-template">
                <li>
                  <span class="item-summary ">{{  trans("lables.header-total") }}&nbsp;:&nbsp;<span class="top-cart-product-total"></span>
                  </span>
                </li>
                <li>
                  <a class="btn btn-link btn-block " href="{{url('/cart')}}">{{  trans("lables.header-view-cart") }}</a>
                  <a class="btn btn-secondary btn-block  swipe-to-top" href="{{url('/checkout')}}">{{  trans("lables.header-checkout") }}</a>
                </li>
              </template>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
                <ul class="shopping-cart-items top-cart-product-show">
                  <li>{{  trans("lables.header-emptycart") }}</li>
                </ul>
              </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-navbar bg-menu-bar">
      <div class="container">
        <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar">
  
          <div class="navbar-collapse">
        @include('includes.headers.main-menu')
        </div>
      </nav>
      </div>
    </div>
  </header> --}}


{{-- @include('includes.headers.sticky-header')
  
  @if (isset($header_menu->menu))  
    @php $header_menu = json_decode(($header_menu->menu), true); $menuloop = 0; @endphp
    <!-- header mobile -->
    @include('includes.headers.mobile-menu')
  @endif --}}
