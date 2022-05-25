<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('pageTitle')</title>
<link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon"/>
<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon"/>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
@yield('content')

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script> 
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
</body>
</html>
