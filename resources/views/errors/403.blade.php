@extends('layouts.error')
@section('pageTitle')
Error 401
@stop

@section('content')
<section class="mainBanner">
    <div class="container">
        <div class="row">
            <h1 class="nk-error-head">401</h1>
            <h3 class="nk-error-title">Oops! Why you’re here?</h3>
            <p class="nk-error-text">We are very sorry for inconvenience. It looks like you’re try to access a page which you are unauthorized.</p>
            <a href="{{ route('home') }}" class="btn btn-sm btn-primary mt-2">Back To Home</a>
        </div>
    </div>
</section>
@stop() 