@extends('layouts.master')
@section('content')

<section class="wishlist-content pro-content py-4">

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
                <div class="heading">
                    <h2>
                        Wishlist Products
                    </h2>
                    <hr>
                </div>

                <div class="col-12 px-0 media-main" id="wishlist-show">

                </div>

                <!-- ............the end..... -->
            </div>
        </div>
    </div>
</section>


@endsection
@section('script')
<script>

    loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
    if(loggedIn != '1'){
        window.location.href = "{{url('/')}}";
    }

    cartSession = $.trim(localStorage.getItem("cartSession"));
    if(cartSession == null || cartSession == 'null'){
        cartSession = '';
    }
    loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
    customerToken = $.trim(localStorage.getItem("customerToken"));
    customerId = $.trim(localStorage.getItem("customerId"));

    $(document).ready(function(){
        getProfile();
    });

    function getProfile() {
        $.ajax({
            type: 'get',
            url: "{{ url('') }}" +
                '/api/client/profile/'+customerId,
            headers: {
                'Authorization' : 'Bearer '+customerToken,
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
            },
            beforeSend: function() {},
            success: function(data) {
                if (data.status == 'Success') {
                    $("#profileForm").find("#first_name").val(data.data.customer_first_name);
                    $("#profileForm").find("#last_name").val(data.data.customer_last_name);
                }
            },
            error: function(data) {},
        });

        $.ajax({
            type: 'get',
            url: "{{ url('') }}" +
                '/api/client/customer_address_book?is_default=1',
            headers: {
                'Authorization' : 'Bearer '+customerToken,
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
            },
            beforeSend: function() {},
            success: function(data) {
                if (data.status == 'Success') {
                    if(data.data != null && data.data != 'null' && data.data != ''){
                        $("#profileForm").find("#gender").val(data.data[0].gender);
                        $("#profileForm").find("#gender").trigger('change');
                        $("#profileForm").find("#dob").val(data.data[0].dob);
                        $("#profileForm").find("#phone").val(data.data[0].phone);
                        $("#profileForm").find("#method").val('put');
                        $("#profileForm").find("#addres_id").val(data.data[0].id);
                    }
                    else{
                        $("#profileForm").find("#method").val('post');
                    }
                }
            },
            error: function(data) {
            },
        });
    }

    $("#profileForm").submit(function(e){
        e.preventDefault();
        first_name = $("#profileForm").find("#first_name").val();
        last_name = $("#profileForm").find("#last_name").val();

        $.ajax({
            type: 'put',
            url: "{{ url('') }}" +
                '/api/client/profile/'+customerId,
            data:{
                first_name:first_name,
                last_name:last_name,
                type:'profile'
            },
            headers: {
                'Authorization' : 'Bearer '+customerToken,
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
            },
            beforeSend: function() {},
            success: function(data) {
                if (data.status == 'Success') {
                    toastr.success('{{ trans("profile-updated-successfully") }}');
                }
                else if (data.status == 'Error') {
                    toastr.error('{{ trans("response.some_thing_went_wrong") }}');
                }
            },
            error: function(data) {
                console.log();
                if(data.status == 422){
                    jQuery.each(data.responseJSON.errors, function(index, item) {
                        $("#"+index).parent().find('.invalid-feedback').css('display','block');
                        $("#"+index).parent().find('.invalid-feedback').html(item);
                    });
                }
                else{
                    toastr.error('{{ trans("response.some_thing_went_wrong") }}');
                }
            },
        });

        gender = $("#profileForm").find("#gender").val();
        dob = $("#profileForm").find("#dob").val();
        phone = $("#profileForm").find("#phone").val();
        method = $("#profileForm").find("#method").val();
        if(method == 'post'){
            url = '/api/client/customer_address_book';
        }
        else{
            ids = $("#profileForm").find("#addres_id").val();
            url = '/api/client/customer_address_book/'+ids;
        }

        $.ajax({
            type: method,
            url: "{{ url('') }}" +url,
            data:{
                is_default:'1',
                gender:gender,
                first_name:first_name,
                last_name:last_name,
                dob:dob,
                phone:phone,
                type:'profile'
            },
            headers: {
                'Authorization' : 'Bearer '+customerToken,
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
            },
            beforeSend: function() {},
            success: function(data) {
                if (data.status == 'Success') {
                    $("#profileForm").find("#method").val('put');
                    $("#profileForm").find("#addres_id").val(data.data.id);
                }
                else if (data.status == 'Error') {
                    toastr.error('{{ trans("response.some_thing_went_wrong") }}');
                }
            },
            error: function(data) {
                console.log();
                if(data.status == 422){
                    jQuery.each(data.responseJSON.errors, function(index, item) {
                        $("#"+index).parent().find('.invalid-feedback').css('display','block');
                        $("#"+index).parent().find('.invalid-feedback').html(item);
                    });
                }
                else{
                    toastr.error('{{ trans("response.some_thing_went_wrong") }}');
                }
            },
        });
    });
</script>
@endsection