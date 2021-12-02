<section id="product-listing">
    <!-- Navigation Section Ends -->
    <!-- Breadcrumb Section Starts -->
    <section id="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="m-0 p-0 d-flex align-items-center">
                        <li class="font-weight-bold">Home</li><span class="mx-2"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></span>
                        <li class="">Product Listing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- Breadcrumb Section Ends -->
<!-- Things We Believe Section Starts -->
<section id="booster-seats">
    <div class="container">
        <div class="row">
            <div class="col-10 m-auto">
                <div class="content-wrapper text-center">
                    <div class="head">
                        <h1 class="font-weight-bold">Booster seats</h1>
                    </div>
                    <div class="content">
                        <p>
                            Thanks to the practical table seats and chair racks, the child can share with
                            parents one of the most important moments
                            of the day: the baby food.
                        </p>

                        <p>
                            Even outside the home!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Things We Believe Section Ends -->
<!-- Filter Section Starts -->
<section id="filter-section" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-4 mb-2">
                <a class="mb-2 rotate-icon" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <span class="icon mr-2 ">
                        <i class="rotate fa fa-plus" aria-hidden="true"></i> </span> Filter
                </a>

            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-8">
                <div class="sort d-flex justify-content-end align-items-center">
                    <form class="w-100"> 
                        <label for="sorting" class="m-0">Sort by:</label>
                        <select class="custom-select w-50 mb-0 ml-3 sortBy">
                            <option value="">choose</option>
                            <option disabled><b>Price</b></option>
                            <option value="low-high" data-sort-by="price" data-sort-type="asc">Low To High</option>
                            <option value="high-to" data-sort-by="price" data-sort-type="desc">High To Low</option>
                            <option disabled><b>Name</b></option>
                            <option value="A-Z" data-sort-by="title" data-sort-type="asc">A-Z</option>
                            <option value="Z-A" data-sort-by="title" data-sort-type="desc">Z-A</option>
                        </select>
                    </form>
                </div>

            </div>
            
            <form class="w-100">
                <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                    <div class="collapse" id="collapse1">
                        <div class="card card-body border-0 px-0">
                            <select class="custom-select">
                                <option value="">choose</option>
                                <option disabled><b>Price</b></option>
                                <option value="low-high" data-sort-by="price" data-sort-type="asc">Low To High</option>
                                <option value="high-to" data-sort-by="price" data-sort-type="desc">High To Low</option>
                                <option disabled><b>Name</b></option>
                                <option value="A-Z" data-sort-by="title" data-sort-type="asc">A-Z</option>
                                <option value="Z-A" data-sort-by="title" data-sort-type="desc">Z-A</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="collapse text-center" id="collapse1">
                        <a href="#" id="filter" class="btn-blue px-5 py-3 text-white font-weight-bold">Apply Now</a>
                    </div>
                </div>
            </form>

        </div>

    </div>
</section>
<!-- Filter Section Ends -->
<!-- Product List Starts -->
<section id="product-list" class="bg-light py-5">
    <div class="container">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 title mb-2">
                    <h6>
                        Products
                    </h6>
                </div>
                @include(isset(getSetting()['card_style']) ?
                    'includes.cart.product_card_'.getSetting()['card_style'] : "includes.cart.product_card_style1")
                

            </div>
        </div>
    </div>
</section>
<!-- Product List Ends -->



