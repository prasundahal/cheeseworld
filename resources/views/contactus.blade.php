@extends('layouts.master')
@section('content')
{{-- {{ dd(get_defined_vars()) }} --}}
@include(isset(getSetting()['contact_us']) ? 'includes.contactus.contactus-'.getSetting()['contact_us'] : 'includes.contactus.contactus-style1')


@endsection
@section('script')

<script>

    $("#contactusForm").submit(function(e){
        e.preventDefault();
        $('.invalid-feedback').css('display','none')
        first_name = $.trim($("#first_name").val());
        last_name = $.trim($("#last_name").val());
        email = $.trim($("#email").val());
        phone = $.trim($("#phone").val());
        message = $.trim($("#message").val());
        address = $.trim($("#address").val());
        postal_code = $.trim($("#postal_code").val());
        province = $.trim($("#province").val());
        town = $.trim($("#town").val());

        radio1 = $('input[name="reason_for_request"]:checked').val();
        radio2 = $('input[name="suggestion"]:checked').val();
        radio3 = $('input[name="complaints"]:checked').val();
        radio4 = $('input[name="trade-enquiry"]:checked').val();

        reason = ((!(typeof radio1 === "undefined"))?radio1:',')+
                 ((!(typeof radio2 === "undefined"))?(','+radio2):',')+
                 ((!(typeof radio3 === "undefined"))?(','+radio3):',')+
                 ((!(typeof radio4 === "undefined"))?(','+radio4):'')

                 $.ajax({
                    type: 'post',
                    url: "{{ url('') }}" + '/api/client/contact-us',
                    data:{
                        first_name:first_name,
                        last_name:last_name,
                        email:email,
                        phone:phone,
                        message:message,
                        address:address,
                        postal_code:postal_code,
                        province:province,
                        town:town,
                        reason:reason,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        clientid: "{{isset(getSetting()['client_id']) ? getSetting()['client_id'] : ''}}",
                        clientsecret: "{{isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : ''}}",
                    },
                    beforeSend: function() {
                        $('.submit-btn-contact').text('Sending Message');
                    },
                    success: function(data) {
                        if (data.status == 'Success') {
                            toastr.error('{{ trans("response.contact-form-success") }}');
                            $('.submit-btn-contact').attr('disabled','disabled');
                            $('.submit-btn-contact').text('Message Sent');
                        }
                        else{
                            toastr.error('{{ trans("response.some_thing_went_wrong") }}');
                        }
                    },
                    error: function(data) {
                        // console.log(data);
                        if(data.status == 422){
                            jQuery.each(data.responseJSON.errors, function(index, item) {
                                $("#"+index).parent().find('.invalid-feedback').css('display','block');
                                $("#"+index).parent().find('.invalid-feedback').html(item);
                            });
                        }
                        else{
                            toastr.error('{{ trans("response.some_thing_went_wrong") }}');;
                        }

                    },
                    });
     
    });
</script>
@endsection
