@include('header')

       <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">MY BOOKINGS</h1>
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
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    @foreach($arr as $pack)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <!-- destination-section -->
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="{{asset('images/'.$pack->image1)}}" alt="">
                                <a href="#" class="desti-title">
                                    <span class="booked_image" style="margin-top: 10px;"> BOOKED </span><br><br>
                                    Ready For {{$pack->to_place}}
                                </a>
                                
                                @php

                                $price = explode(',',$pack->from_price);
                                $basic_price = $price[1]*$pack->no_of_people;
                                $gst = $price[1]*18/100;
                                $total_price = $basic_price + $gst;

                                @endphp

                                <div class="overlay">
                                    </div>
                                    <div class="text">
                                        <h3 class="mb20 text-white">{{$pack->to_place}}</h3>
                                       <ul class="angle list-none">
                                        <li>{{$pack->total_days}} days / {{$pack->total_nights}} nights</li>
                                        <li>{{$pack->hotel_type}} hotel</li>
                                        <li>{{$pack->no_of_people}} persons</li>
                                        <li>Journy Start from {{$pack->checkin}}</li>
                                    </ul>
                                    <p class="price">Rs.{{$total_price}}</p>
                                    <p class="price_note">({{$pack->no_of_people}} person from {{$price[0]}})</p>

                                        <a href="/booked-single/{{$pack->book_id}}" class="btn-link go_to_place">Details of Booking <i class="fa fa-angle-right"></i></a></div>
                                
                            </div>
                        </div>
                        <!-- /.destination-section -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        

@include('footer')