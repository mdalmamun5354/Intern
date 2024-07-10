
<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" />
    <!-- font awesome style -->
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" />
</head>
<body>

@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')


<!-- jQery -->
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
<!-- custom js -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
</body>
</html>