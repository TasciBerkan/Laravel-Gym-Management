<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('title')">
    <meta name="author" content="Berkan Taşçı">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/css/bootstrap.min.css">
    <link href="{{ asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/price-range.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/main.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


    @yield('css')
    @yield('headerjs')


</head><!--/head-->

<body>
@include('home._header')

@section('content')
    içerik alanı
@show

@yield('footerjs')

@include('home._footer')

</body>
</html>
