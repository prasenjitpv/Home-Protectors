@extends('layouts.app')

@section('pageTitle')
Thankyou | {{ config('app.name') }}
@endsection
@section('content')
<section class="contact-form">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-12 text-center">
          <h2>Thank You !</h2>
          <p>Call (800) 867-5309</p>
          
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

@stop
