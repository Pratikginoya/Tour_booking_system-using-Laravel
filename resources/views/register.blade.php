<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Travelair Agency HTML Website Template - Tour Single Page</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
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
                    </div>
                </div>
            </div>
           
            <!-- header-section-->
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-12">
                            <div class="logo"> <a href="index.html"><img src="imagess/logo.png" alt=""> </a> </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /. header-section-->

    <div class="widget-form">
        <h3 class="text-white mb30"> Register Your Self</h3>

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        <!-- validation message -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post">
            @csrf
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Enter your name..." class="form-control" required maxlength="25">
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter your email..." class="form-control" required>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Enter password (8 to 15 digit...)" class="form-control" minlength="8" maxlength="15" required>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <input type="password" name="password2" placeholder="Re-enter password (8 to 15 digit...)" class="form-control" minlength="8" maxlength="15" required>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <input type="text" name="mobile" placeholder="Enter mobile number" class="form-control" minlength="10" maxlength="10" required>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <input type="submit" name="register" value="Register" class="btn btn-primary" style="margin-left: 10px;">
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <a href="/login" class="btn btn-primary" style="margin-top: 20px;">Back to Login</a>
                </div>

            </div>
        </form>
        <!-- /.form -->
    </div>


    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row ">
                <!-- footer-logo -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-left">
                    <div class="ft-img"><img src="imagess/ft_logo.png" alt=""></div>
                </div>
                <!-- /.footer-logo -->
               
                <!-- footer-post -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-right">
                    <div class="footer-widget">
                        <h3 class="footer-title">Contact Info</h3>
                        <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-map-marker"></i></span> <span class="ft-contact-text">3927 Birch StreetEl Paso, TX 79930 </span></div>
                        <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-phone "></i></span> <span class="ft-contact-text">+180-123-4567</span></div>
                        <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-envelope "></i></span> <span class="ft-contact-text">info@travel.com</span></div>
                        <div class="social-icon "> <a href="# " class="btn-social-icon "><i class="fa fa-facebook "></i></a> <a href="# " class="btn-social-icon "><i class="fa fa-twitter "></i></a> <a href="# " class="btn-social-icon "><i class="fa fa-linkedin "></i></a> <a href="# " class="btn-social-icon "><i class="fa fa-google-plus "></i></a> </div>
                    </div>
                </div>
                <!-- /.footer-post -->
            </div>
            <!-- tiny-footer -->
        </div>
        <div class="tiny-footer ">
            <div class="container ">
                <div class="row ">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                     <p><a target="_blank" href="https://www.templateshub.net" style="pointer-events: none; color: whitesmoke;">Tour Booking System Project by Pratik Ginoya</a></p>
                    </div>
                </div>
                <!-- /. tiny-footer -->
            </div>
        </div>
    </div>
    <!-- /.footer -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="search-form">
                            <input type="text" class="form-control" placeholder="Find here">
                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">close</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
        </div>
    </div>
    <!-- /.Modal -->
     <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>   
    <!-- owl-thumb JavaScript -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel2.thumbs.min.js"></script>
    <script src="js/thumb.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/date.js"></script>
    <script src="js/return-to-top.js"></script>
     
   
    <script>
    function initMap() {
        var uluru = {
            lat: 23.094197,
            lng: 72.558148
        };
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            zoom: 14,
            center: uluru,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map_marker.png'

        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&amp;callback=initMap">
    </script>
    </div>
</body>

