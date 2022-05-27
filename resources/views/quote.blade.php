@extends('layouts.app')

@section('pageTitle')
Quote | {{ config('app.name') }}
@endsection
@section('content')
<section class="contact-form">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 text-center">
                <h3>Get a free quote and SafeStreets offers.</h3>
                <p>Call (800) 867-5309 or complete the form and a SafeStreets specialist will contact you with a quote</p>

                <form class="form-validate row g-3" id="frmQuote">
                    @csrf
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Last Name">
                    </div>

                    <div class="col-md-6">
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email Address">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="zipcode" name="zipcode" required placeholder="Zip Code">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="phone" name="phone" required placeholder="Phone Number">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" id="btnSubmit">Get a free quote</button>
                    </div>
                    <div id="msgdiv" style="margin-top:10px;display:none;"></div>

                    <input type="hidden" id="leadid_token" value="">
                </form>
            </div>
        </div>
    </div>
</section>

<section class="guarantee-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p><span>SafeStreets Express Written Consent Form MARKETING AUTHORIZATION:</span> I, the undersigned, hereby authorize Home Protectors, LLC (“Home Protectors”), directly or through its 
                affiliates and marketing partners, to contact me from time-to-time by telephone, text, email, text/SMS and/or direct mail with information and offers about products and services that might interest me. By clicking contact me below, I hereby authorize the receipt of such solicitations at the telephone number(s), (including cellular numbers), emails address(es) and/or mailing 
                address(es) shown below, even if such telephone number(s), email address(es) or mailing addresses are listed on any “do not call” or other do not solicit registry or list and I agree that any such telephone calls and text messages may be generated using an automated phone dialing system. To discontinue or opt out of text messages reply with stop. I understand I am not required to consent to make a purchase.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts') 
<script>
$(function(){
    $("input#phone").inputmask('(999)-999-9999');

    $('#frmQuote').formValidation({
        framework: 'bootstrap',
        message: 'This value is not valid',
        icon: {
            valid: 'fas fa-check',
            invalid: 'fas fa-times',
            validating: 'fas fa-sync-alt'
        },
        fields: {
            email: {
                validators: {
                    regexp: {
                        regexp: /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/,
                        message: 'The input is not a valid email address.'
                    }
                }
            },
            firstname: {
                validators: {
                    notEmpty: {
                        message: 'The firstname is required.'
                    }
                }
            },
            lastname: {
                validators: {
                    notEmpty: {
                        message: 'The lastname is required.'
                    }
                }
            },
            zipcode: {
                validators: {
                    notEmpty: {
                        message: 'The zip is required.'
                    },
                    regexp: {
                        regexp: /^[0-9]{5}(?:-[0-9]{4})?$/,
                        message: 'The input is not a valid zip code.'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'The phone number is required.'
                    },
                    regexp: {
                        regexp: /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/,
                        message: 'The input is not a valid phone number.'
                    }
                }
            }
        }
    })
    .on('success.form.fv', function (e) {
        // Prevent form submission
        e.preventDefault();
        var arg = $("form#frmQuote").serialize();
        //alert(arg);
        $.ajax({
            url: "{{ route('quotesubmit') }}",
            type: "POST",
            data: arg,
            timeout: 50000,
            cache: false,
            success: function (html) {
                if (html.sms == 1) {
                    window.location = "{{ route('thankyou') }}";
                } else {
                    $('div#msgdiv').html('Updation failed. Please try after some time.');
                    $('div#msgdiv').prop('class', 'alert alert-danger');
                    $("div#msgdiv").fadeIn(100);
                    var et = setTimeout('$("div#msgdiv").fadeOut(100)', 5000);
                    $('button#btnSubmit').removeClass('disabled');
                    $('button#btnSubmit').removeAttr('disabled');
                }
                return false;
            },
            error: function (jqXHR, exception) {
                    var msg = '';
                    $('div#msgdiv').prop('class','alert alert-danger');
                    if (jqXHR.status === 0) {
                            msg = 'Not connect. Verify Network.';
                    } else if (jqXHR.status == 404) {
                            msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                            msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                            msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                            msg = 'Time out error.';
                    } else if (exception === 'abort') {
                            msg = 'Ajax request aborted.';
                    } else {
                            msg = 'Uncaught Error ' + jqXHR.responseText;
                    }
                    $('div#msgdiv').fadeIn(100);
                    $('div#msgdiv').html(msg);
                    var et = setTimeout('$("div#msgdiv").fadeOut(100)', 4000);
                    $('button#btnSubmit').removeClass('disabled');
                    $('button#btnSubmit').removeAttr('disabled');
                    return false;
            }
        });
    });
});
</script>

<script id="LeadiDscript" type="text/javascript">
(function() {
var s = document.createElement('script');
s.id = 'LeadiDscript_campaign';
s.type = 'text/javascript';
s.async = true;
s.src = '//create.lidstatic.com/campaign/a2181750-6acc-4f65-22c3-84bd8d0b3a88.js?snippet_version=2';
var LeadiDscript = document.getElementById('LeadiDscript');
LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
})();
</script>
<noscript><img src='//create.leadid.com/noscript.gif?lac=17b1014d-89d8-0a9a-d23f-b85698f480b4&lck=a2181750-6acc-4f65-22c3-84bd8d0b3a88&snippet_version=2' /></noscript>

@stop
