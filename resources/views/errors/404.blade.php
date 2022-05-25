@extends('layouts.error')
@section('pageTitle')
Error 404
@stop

@section('content')
<section class="mainBanner">
    <div class="container">
        <div class="row" style="width:50% !important;">
            <h1 class="nk-error-head">404</h1>
            <h3 class="nk-error-title">Oops! You weren't supposed to see this</h3>
            <p class="nk-error-text">The page you're looking for no longer exists.</p>
            <a href="{{ route('home') }}" class="btn btn-sm btn-primary mt-2">Back To Home</a>
        </div>
    </div>
</section>
@stop() 