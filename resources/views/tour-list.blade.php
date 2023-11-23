@include('header')

       <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">Latest Packages</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-header-->
        <!-- destination-section -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <?php $i=0; ?>
                    @foreach($arr as $pack)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
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
                                        <li>{{$pack->total_days}} days / {{$pack->total_nights}} nights</li>
                                        <li>{{$pack->hotel_type}} hotel</li>
                                        <li>Breakfast and Dinner</li>
                                    </ul>
                                    <p class="price">Rs.{{$pack->default_price}}</p>
                                    <p class="price_note">(Per person from New-Delhi)</p>

                                        <a href="/tour-single/{{$pack->package_id}}" class="btn-link go_to_place">Go for {{$pack->to_place}} <i class="fa fa-angle-right"></i></a></div>
                                
                            </div>
                        </div>
                        <!-- /.destination-section -->
                    </div>
                    <?php $i++; if($i==9){break;} ?>
                    @endforeach
                </div>
            </div>
        </div>

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
                                <a href="/domestic_tour" class="btn-link">Go For Domestic Tour<i class="fa fa-angle-right"></i></a>
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
        
@include('footer')