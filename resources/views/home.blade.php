@extends('layouts.app')

@section('pageTitle')
{{ config('app.name') }}
@endsection
@section('content')
<section class="main-banner">
  <div class="container-fluid">
    <div class="row mb-10">
      <div class="col-md-12 text-center">
        <h1>Your <span class="blue-text">Safety</span> is our <span class="blue-text">Priority</span></h1>
      </div>
    </div>
    <div class="row d-flex banner-bottom-box">
      <div class="col-md-6">
        <div class="banner-thumb"><img src="{{ asset('img/banner-thumb.png') }}" alt=""></div>
      </div>
      <div class="col-md-6">
        <ul class="offer-list">
          <li>
            <img src="{{ asset('img/offer-icon1.png') }}" alt="">
            <h4>$850 in FREE*</h4>
            <p>Home Security
              Equipment</p>
          </li>
          <li>
            <img src="{{ asset('img/offer-icon2.png') }}" alt="">
            <h4>Plus a FREE*</h4>
            <p>Doorbell Camera
              with Video Package</p>
          </li>
          <li>
            <img src="{{ asset('img/offer-icon3.png') }}" alt="">
            <h4>Plus a $100</h4>
            <p>Visa Gift Card** <br>
              from <a href="javascript:void(0)">SafeStreets</a></p>
          </li>
        </ul>
        <div class="right-bottom-content text-center">
          <a class="nav-link btn btn-info" href="javascript:void(0)">REDEEM YOUR $850 OFFER</a>
          <small>*with $99 installation charge and new monitoring agreement. Early termination fee applies.</small>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-system">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6">
        <img src="{{ asset('img/home-system-thumb.jpg') }}" alt="">
      </div>
      <div class="col-md-6">
        <h2>Have ALL Your Home Systems
          <span class="blue-text">Supported</span> by <span class="blue-text">ADT Monitoring</span></h2>
        <p>When protecting your family or home, you shouldn’t cut corners. ADT has proven that they are the leader in
          home security and automation monitoring.</p>
        <ul class="system-list">
          <li>Connect with more than 150 devices</li>
          <li>140+ Years of Experience</li>
          <li>24/7 Professional Monitoring</li>
          <li>A+ BBB Rating</li>
          <li>6-Month ADT Money-Back Guarantee<sup>*</sup></li>
        </ul>
        <div class="btn-box">
        <a class="nav-link btn btn-info" href="{{ route('quote') }}">Get a free quote</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-10 text-center"><span>Testimonials</span>What Our Clients Are Saying</h2>
        <!-- Owl carousel start -->
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="thumBox">
              <div class="review-star">
                <img src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt="">
              </div>
              <h4>Excellent service</h4>
              <p>Good choice and helpful</p>
              <h5 class="author">Charlene Mclean<br>
                <span>3 hoours ago</span></h5>
            </div>
          </div>
          <div class="item">
            <div class="thumBox">
              <div class="review-star">
                <img src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt="">
              </div>
              <h4>Adt Installation</h4>
              <p>Installation went perfect .Doug is a excellent worker, very
                knowledgeable.</p>
              <h5 class="author">Claudio Tirabasso<br>
                <span>3 hoours ago</span></h5>
            </div>
          </div>
          <div class="item">
            <div class="thumBox">
              <div class="review-star">
                <img src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt="">
              </div>
              <h4>You did a good job</h4>
              <p>You did a good job</p>
              <h5 class="author">Samuel Phillips<br>
                <span>3 hoours ago</span></h5>
            </div>
          </div>
          <div class="item">
            <div class="thumBox">
              <div class="review-star">
                <img src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt="">
              </div>
              <h4>Myke was great</h4>
              <p>Myke was great, very
                knowledgeable and answered all of my (many) questions!!</p>
              <h5 class="author">Tonya Wright<br>
                <span>4 hoours ago</span></h5>
            </div>
          </div>
          <div class="item">
            <div class="thumBox">
              <div class="review-star">
                <img src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt=""><img src="{{ asset('img/start-mark-img.png') }}" alt=""><img
                  src="{{ asset('img/start-mark-img.png') }}" alt="">
              </div>
              <h4>Ben was amazing and
                extremely helpful</h4>
              <p>Ben was amazing and
                extremely helpful! We look
                forward to using him again in the...</p>
              <h5 class="author">Linsey Fine<br>
                <span>7 hoours ago</span></h5>
            </div>
          </div>
          </div> <!-- Owl carousel end -->

      </div>
    </div>
  </div>
</section>

<section class="guarantee-sec">
  <div class="container">
    <div class="row mb-8">
      <div class="col-md-12 text-center">
        <p><span>SafeStreets Express Written Consent Form MARKETING AUTHORIZATION:</span> I, the undersigned, hereby authorize Home Protectors, LLC (“Home Protectors”), directly or through its 
          affiliates and marketing partners, to contact me from time-to-time by telephone, text, email, text/SMS and/or direct mail with information and offers about products and services that might interest me. By clicking contact me below, I hereby authorize the receipt of such solicitations at the telephone number(s), (including cellular numbers), emails address(es) and/or mailing 
          address(es) shown below, even if such telephone number(s), email address(es) or mailing addresses are listed on any “do not call” or other do not solicit registry or list and I agree that any such telephone calls and text messages may be generated using an automated phone dialing system. To discontinue or opt out of text messages reply with stop. I understand I am not required to consent to make a purchase.</p>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-6">
        <div class="blue-section">
        <figure><img src="{{ asset('img/big-icon1.png') }}" alt=""></figure>
        <div class="right-content">
          <h3>6-Month ADT Money-Back Guarantee</h3>
          <p>Money-back service guarantee only applies after ADT has made attempts to resolve a system-related issue and has not been able to resolve that issue within the first 6 months of your 
            contract. Equipment must be fully removed before a refund will be processed. Conditions preventing normal system operation cannot be caused by the customer.</p>
        </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="blue-section">
        <figure><img src="{{ asset('img/big-icon2.png') }}" alt=""></figure>
        <div class="right-content">
          <h3>ADT Theft Protection Guarantee</h3>
          <p>Customer may receive reimbursement of up to five hundred 
            dollars ($500) of Customer’s homeowner’s insurance deductible (if any) if, and only if, ALL requirements for Theft Protection 
            Guarantee are met to ADT’s reasonable satisfaction. Customer must request reimbursement within 60 days of property loss. Request must be mailed to ADT and include: Theft Protection Guarantee certificate signed by Customer, a letter from 
            Customer requesting reimbursement, a copy of the police report, and a copy of the accepted insurance claim. ADT reserves the right to reject any application for reimbursement that does not comply with all of the requirements.</p>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts') 

@stop
