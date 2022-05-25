@extends('layouts.error')
@section('pageTitle')
Error 500
@stop

@section('content')
<section class="mainBanner">
    <div class="container">
        <div class="row">
            <h1 class="nk-error-head">500</h1>
            <h3 class="nk-error-title">Oops! Somthing went wrong.</h3>
            <p class="nk-error-text">We are very sorry for inconvenience.</p>
            <a href="{{ route('home') }}" class="btn btn-sm btn-primary mt-3">Back To Home</a>
        </div>
    </div>
</section>
@stop() 