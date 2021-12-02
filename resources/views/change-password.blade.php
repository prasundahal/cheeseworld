@extends('layouts.master')
@section('content')

    <!-- page Content -->
    <section class="page-area pro-content wishlist-content pro-content py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="heading">
                        <h2>
                            My Account
                        </h2>
                        <hr>
                    </div>
    
                    @include('includes.side-menu')
    
                </div>
                <div class="col-12 col-lg-9 ">

                    <div class="col-12">
                        <div class="heading">
                            <h2>
                                {{ trans('lables.change-password') }}
                            </h2>
                            <hr>
                        </div>
                        <div class="tab-content" id="registerTabContent">
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <div class="registration-process">
                                    <form>
                                        <div class="from-group mb-3">
                                            <div class="col-12"> <label for="inlineFormInputGroup">{{ trans('lables.change-password-current-password') }}</label>
                                            </div>
                                            <div class="input-group col-12">

                                                <input type="password" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="{{ trans('lables.change-password-current-password') }}">
                                            </div>
                                        </div>
                                        <div class="from-group mb-3">
                                            <div class="col-12"> <label for="inlineFormInputGroup">{{ trans('lables.change-password-new-password') }}</label>
                                            </div>
                                            <div class="input-group col-12">

                                                <input type="password" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="{{ trans('lables.change-password-new-password') }}">
                                            </div>
                                        </div>
                                        <div class="from-group mb-3">
                                            <div class="col-12"> <label for="inlineFormInputGroup">{{ trans('lables.change-password-confirm-password') }}</label>
                                            </div>
                                            <div class="input-group col-12">

                                                <input type="password" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="{{ trans('lables.change-password-confirm-password') }}">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12">
                                            <button class="btn btn-secondary">{{ trans('lables.change-password') }}</button>

                                        </div>
                                    </form>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-12 my-5">
                        <div class="registration-socials">
                            <div class="row align-items-center justify-content-between">

                                <div class="col-12 mb-2">
                                    {{ trans('lables.change-password-access-text') }}
                                </div>
                                <div class="col-12 ">
                                    <button type="button" class="btn btn-google"><i
                                            class="fab fa-google-plus-g"></i>&nbsp;Google</button>
                                    <button type="button" class="btn btn-facebook"><i
                                            class="fab fa-facebook-f"></i>&nbsp;Facebook</button>
                                    <button type="button" class="btn btn-twitter"><i
                                            class="fab fa-twitter"></i>&nbsp;Twitter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
@section('script')
@endsection
