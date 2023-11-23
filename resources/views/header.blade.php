<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Travelair Agency HTML Website Template</title>
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.css')}}" rel="stylesheet">
    <!-- jquery ui  -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
    <!-- FontAwesome CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="wrapper">
        <!-- header-section-->
        <div class="header-wrapper">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-7 col-md-8 d-none d-xl-block d-sm-block">
                            <div class="top-header-content">
                                <ul class="list-none">
                                    <li><i class="fa fa-envelope top-header-icon"></i>info@travel.com</li>
                                    <li><i class="fa fa-phone top-header-icon"></i>+180-123-4567</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6 col-8 d-none d-block d-sm-block">
                            <div class="top-header-content">
                                <div class="top-social"> <a href="#" class="btn-social-icon"><i class="fa fa-facebook"></i></a> <a href="#" class="btn-social-icon"><i class="fa fa-twitter"></i></a> <a href="#" class="btn-social-icon"><i class="fa fa-linkedin"></i></a> <a href="#" class="btn-social-icon"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="btn-social-icon"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">
                            <a href="#" class="search-icon" data-toggle="modal" data-target="#exampleModal">
                           <i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-section-->
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-12">
                            <div class="logo"> <a href="/"><img src="{{asset('imagess/logo.png')}}" alt=""> </a> </div>
                        </div>
                        <div class="col-xl-9 col-lg-10 col-md-9 col-sm-12 col-12">
                            <!-- navigations-->
                            <div class="navigation">
                                <div id="navigation">
                                    <ul>
                                        <li class="active"><a href="/">Home</a></li>
                                        <li class="active"><a href="/tour-list">Packages For You</a></li>
                                        
                                        <li><a href="/about">About</a></li>
                                        
                                        <li><a href="/contact-us">Contact</a></li>

                                        @if(Session::has('user_login'))
                                        <li class="has-sub"><a href="#">My Account</a>
                                            <ul>
                                                <li><a href="#" style="pointer-events: none;">Hello... {{Session::get('user_name')}}</a></li>
                                                <li><a href="#">My Profile</a></li>
                                                <li><a href="/my_booking">My Bookings</a></li>
                                            </ul>
                                        </li>
                                        @endif

                                        @if(Session::has('user_login'))
                                        <li><a href="/logout">Logout</a></li>
                                        @else
                                        <li><a href="/login">Login</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <!-- /.navigations-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. header-section-->