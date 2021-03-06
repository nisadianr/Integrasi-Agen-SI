<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="{{ asset('css/metro-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metro-bootstrap-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/iconFont.css') }}" rel="stylesheet">
    <link href="{{ asset('css/docs.css') }}" rel="stylesheet">
    <link href="{{ asset('js/prettify/prettify.css') }}" rel="stylesheet">

    <title>Metro UI CSS : Metro Bootstrap CSS Library</title>
</head>
<body class="metro">
    <!--navbar-->
    <div class="navigation-bar dark">
        <div class="navigation-bar-content container">
            <a class="element1 pull-menu" href="#"></a>
            <ul class="element-menu">
                <img src="{{ asset('image/logo.png') }}" class="element span1" style="height:70px;padding-bottom:10px">
                <li><br><a href="#profil">Home</a></li>
                <li>
                    <br><a class="dropdown-toggle active" href="#">Services</a>
                    <ul class="dropdown-menu dark" data-role="dropdown">
                        <li><a href="akap.php">Antar Kota Antar Provinsi (AKAP)</a></li>
                        <li class="divider"></li>
                        <li><a href="responsive.html">Pariwisata</a></li>
                        <li class="divider"></li>
                        <li><a href="layouts.html">Pengiriman Paket</a></li>
                    </ul>
                </li>
                <li><br><a href="#visi">About Us</a></li>
            </ul>
            <br>
            <div class="element place-right">Logout</div>
        </div>
    </div>
    <!--end navbar-->
