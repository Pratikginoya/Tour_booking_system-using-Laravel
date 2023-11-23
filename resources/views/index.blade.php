@include('header')

       <!-- slider -->
        <div class="slider">
            <div class="owl-carousel owl-one owl-theme">
                <!-- item -->
                @foreach($arr as $slider)
                <div class="item">
                    <div class="slider-img">
                        <img src="{{asset('images/'.$slider->image)}}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="slider-captions">
                                    <h1 class="slider-title">{{$slider->title}}</h1>
                                    <a href="/tour-list" class="btn btn-primary">Check-Out The Best</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /.item -->
            </div>
        </div>
        <!-- /.slider -->
        <!-- enguiry-form -->
        <div class="bg-default enquiry-form ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- form -->
                        <form method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12 text-center">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="select"></label>
                                        <div class="">
                                            <input type="text" class="form-control" name="where_to_place" placeholder="Where you want to go ?">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-12 col-md-6 col-sm-3 col-12">
                                    <input type="submit" name="find_best" class="btn btn-primary btn-lg" value="Find The Best">
                                </div>
                            </div>
                        </form>
                        <!-- /.form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.enguiry-form -->
        <!-- tour-service -->
        <div class="space-medium">
            <div class="container">
                <!-- tour-1 -->
                <div class="row ">
                    <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                        <div class="tour-img">
                            <a href="/international_tour" class="imghover"> <img src="imagess/tour_img_1.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                        <div class="tour-block">
                            <div class="tour-content">
                                <h2 class="mb30"><a href="/international_tour" class="title">International Tour</a></h2>
                                <p class="mb30">Vestibulum nec mauris interdum facilisis nequeet convallis odioses praesentet lacinia orciulla dolorerat ullamcorper sitamet meuesered egestas venenatis enimusce sed ipsum seddolor.</p>
                                <a href="/international_tour" class="btn-link">Go For International Tour<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tour-1 -->
                <!-- tour-2 -->
                <div class="row">
                    <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                        <div class="tour-block">
                            <div class="tour-content">
                               <h2 class="mb30"><a href="/domestic_tour" class="title">Domestic Tour</a></h2>
                                <p class="mb30">Donec porttitor lorem utdiam iaculis euismod congue eroset lectus consectetur fermen uspendissolutpat risus utarcu dapibusat conquat quam sodenean pretium a metus euauctor.</p>
                                <a href="/domestic_tour" class="btn-link">Go For Adventure Tour<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                        <div class="tour-img">
                            <a href="/domestic_tour" class="imghover"> <img src="imagess/tour_img_2.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <!-- /.tour-2 -->
            </div>
        </div>
        <!-- /.tour-service -->
        <!-- destination-section -->
        <div class="space-medium">
            <div class="container-fluid">
                <div class="row">
                    <!-- section-title -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="section-title">
                            <h2>Top Destinations</h2>
                        </div>
                    </div>
                    <!-- /.section-title -->
                </div>
                <div class="row">
                    <?php $i=0; ?>
                    @foreach($top as $pack)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 nopl nopr">
                        <!-- destination-section -->
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="{{asset('images/'.$pack->image1)}}" alt="">
                                <a href="#" class="desti-title">{{$pack->to_place}}</a>
                                <div class="overlay">
                                </div>
                                <div class="text">
                                    <h3 class="mb20 text-white">{{$pack->to_place}}</h3>
                                    <ul class="angle list-none">
                                        <li>{{$pack->total_nights}} Nights / {{$pack->total_days}} days</li>
                                        <li>{{$pack->hotel_type}} hotel</li>
                                        <li>Breakfast and Dinner</li>
                                    </ul>
                                    <p class="price">Rs.{{$pack->default_price}}/-</p>
                                    <p class="price_note">(Per person from New-Delhi)</p>
                                    <a href="/tour-single/{{$pack->package_id}}" class="btn-link go_to_place">Go for {{$pack->to_place}} <i class="fa fa-angle-right"></i></a></div>
                            </div>
                        </div>
                        <!-- /.destination-section -->
                    </div>
                    <?php $i++; if($i==4){break;} ?>
                    @endforeach
                    <!-- /.destination-section -->
                </div>
            </div>
        </div>
        <!-- /.destination-section -->

        <!-- service-section -->
        <div class="space-medium service-wrapper" style="">
            <div class="container">
                <!-- service-head -->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                        <div class="">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                        <div class="">
                            <p class="lead">Suctus felis non nibh maximus consectetuis sed nisl eniullase pellentesque euismod eronon ntesque tortor molestieege.</p>
                        </div>
                    </div>
                </div>
                <!-- /.service-head -->
                <div class="row">
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
                        <div class="service-block border-bottom border-right">
                            <div class="service-img"><img src="imagess/hotel_1.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Hotel Reservation</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl nopr">
                        <div class="service-block border-bottom border-right">
                            <div class="service-img"><img src="imagess/disability.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Staff Transportation Services </h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl">
                        <div class="service-block border-bottom">
                            <div class="service-img"><img src="imagess/airplane.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Air Ticketing Services</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
                        <div class="service-block border-right">
                            <div class="service-img"><img src="imagess/passport.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Passport and Visa Assistance </h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl nopr">
                        <div class="service-block  border-right">
                            <div class="service-img"><img src="imagess/car_wash.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Car Rental Services </h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl">
                        <div class="service-block service-right-border service-bottom-border">
                            <div class="service-img"><img src="imagess/car.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Car on Call</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                </div>
            </div>
        </div>
        <!-- /.service-section -->
      
        <!-- /.client-section -->
        <div class="space-small">
            <div class="container">
                <div class="row">
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#"><img src="imagess/dummy_logo_1.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#"> <img src="imagess/dummy_logo_2.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#">  <img src="imagess/dummy_logo_3.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#"><img src="imagess/dummy_logo_4.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#"> <img src="imagess/dummy_logo_2.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                    <!-- client-logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                        <div class="client-logo">
                            <a href="#">  <img src="imagess/dummy_logo_1.png" alt=""></a>
                        </div>
                    </div>
                    <!-- /.client-logo -->
                </div>
            </div>
        </div>
        <!-- /.client-section -->

@include('footer')