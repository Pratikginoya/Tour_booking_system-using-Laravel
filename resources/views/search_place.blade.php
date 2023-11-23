@include('header')

       <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">Your Best Place is Here</h1>
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
                    @endforeach
                </div>
            </div>
        </div>
        

@include('footer')