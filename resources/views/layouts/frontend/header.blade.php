<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitar | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('css/frontendcss/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontendcss/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontendcss/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontendcss/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontendcss/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontendcss/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontendcss/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontendcss/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/frontendcss/new_style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
     <!-- Page Preloder -->
     <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="logo">
                <a href="./home">
                    <img src="{{url('assets/frontendimg//logo.png')}}" alt="">
                </a>
            </div>
            <div class="top-social">
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li class=" @stack('home-menu') "><a href="./home">Home</a></li>
                            <li class=" @stack('about-menu') "><a href="./about-us">About us</a></li>
                            <li class=" @stack('schedule-menu') "><a href="./schedule">Schedule</a></li>
                            <li class=" @stack('gallery-menu') "><a href="./gallery">Gallery</a></li>
                            <li class=" @stack('blog-menu') "><a href="./blog">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="./about-us">About Us</a></li>
                                    <li><a href="./blog-single">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class=" @stack('shop-menu') "><a href="./shop">Shop</a>
                            <li class=" @stack('contact-menu') "><a href="./contact">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->