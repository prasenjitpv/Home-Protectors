<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('pageTitle')</title>
<link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon"/>
<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon"/>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/formValidation.css') }}">
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.defer=!0;a.src=document.location.protocol+"//dist.routingapi.com/jsapi/v1/retreaver.min.js";a.onload=a.onreadystatechange=function(){Retreaver.configure({host:"api.routingapi.com",prefix:"https:"==document.location.protocol?"https":"http"});(new Retreaver.Campaign({campaign_key:"0788877019f7529a7518b5f49c839120"})).auto_replace_numbers()};(document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]).appendChild(a)})();</script>
</head>

<body>
@include('includes.header')
@yield('content')
@include('includes.footer')

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script> 
<script src="{{ asset('/js/formValidation.js') }}" type="text/javascript"></script> 
<script src="{{ asset('/js/bootstrapfrm.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/owl.carousel.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.inputmask.bundle.min.js') }}" type="text/javascript"></script>
<script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 40,
      nav: true,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>
  <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
  $(function(){

  });
  </script>
  @yield('scripts')
</body>
</html>
