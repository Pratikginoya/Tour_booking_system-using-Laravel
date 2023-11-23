@include('header')

    @foreach($arr as $pack)

        @php
            $price = explode(',',$pack->from_price);
            $basic_price = $price[1]*$pack->no_of_people;
            $gst = $price[1]*18/100;
            $total_price = $basic_price + $gst;
        @endphp
        <!-- page-header -->
        <div class="tour-pageheader" style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.7)),url('../images/{{$pack->image2}}')!important;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="tour-caption">
                            <h1 class="text-white tour-title">{{$pack->to_place}}</h1>
                            <p class="tour-caption-text text-white"><strong class="tour-rate">Rs.<span id="price">{{$total_price}}</span>/- for {{$pack->no_of_people}} person (From <span id="city">{{$price[0]}}</span>)</strong>( {{$pack->total_nights}} nights | {{$pack->total_days}} days )</p>

                            <div class="d-flex align-items-center" style="gap: 5px;">
                                <p class="price_note bold_this filghts">- {{$pack->vehicle}} </p>
                                <!-- <span class="edit_edit"><a href="#">Edit</a></span> -->
                            </div>
                            <div class="d-flex align-items-center" style="gap: 5px;">
                                <p class="price_note bold_this filghts">- {{$pack->food}} </p>
                                <!-- <span class="edit_edit"><a href="#">Edit</a></span> -->
                            </div>
                            <div class="d-flex align-items-center" style="gap: 5px;">
                                <p class="price_note bold_this filghts">- From {{$price[0]}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-header-->
       
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                        <div class="highlights-section mb60">
                            <h3>{{$pack->to_place}} Highlights</h3>
                            <p>{{$pack->highlight}}</p>
                        
                            <h4 class="mb30">{{$pack->to_place}} Views</h4>
                            <div class="slide-thumb-gallery">
                                <div class="owl-carousel" data-slider-id="1">
                                    <div class="slider_main_img_size"><img src="{{asset('images/'.$pack->image1)}}" alt="" class="img-fluid"></div>
                                    <div class="slider_main_img_size"><img src="{{asset('images/'.$pack->image2)}}" alt="" class="img-fluid"></div>
                                    <div class="slider_main_img_size"><img src="{{asset('images/'.$pack->image3)}}" alt="" class="img-fluid"></div>
                                    <div class="slider_main_img_size"><img src="{{asset('images/'.$pack->image4)}}" alt="" class="img-fluid"></div>
                                    <div class="slider_main_img_size"><img src="{{asset('images/'.$pack->image5)}}" alt="" class="img-fluid"></div>
                                </div>
                                <div class="owl-thumbs" data-slider-id="1">
                                    <button class="owl-thumb-item button_size"><img src="{{asset('images/'.$pack->image1)}}" alt="" class="img-fluid"></button>
                                    <button class="owl-thumb-item button_size"><img src="{{asset('images/'.$pack->image2)}}" alt="" class="img-fluid"></button>
                                    <button class="owl-thumb-item button_size"><img src="{{asset('images/'.$pack->image3)}}" alt="" class="img-fluid"></button>
                                    <button class="owl-thumb-item button_size"><img src="{{asset('images/'.$pack->image4)}}" alt="" class="img-fluid"></button>
                                    <button class="owl-thumb-item button_size"><img src="{{asset('images/'.$pack->image5)}}" alt="" class="img-fluid"></button>
                                </div>
                            </div>
                        </div>
                        <div class="journey-section mb60">
                            <h3 class="mb30">Journey</h3>
                            @php 
                            $day = explode(' | ',$pack->day);
                            $day_length = count($day);
                            @endphp

                            @for($i=0; $i<$day_length; $i++)
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseOne{{$i}}" aria-expanded="true" aria-controls="collapseOne">
                                           
                                        Day {{$i+1}} : <span class="fa fa-angle-down pull-right"></span>
                                        </a>
                                      </h5>
                                </div>
                                <div id="collapseOne{{$i}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        {{$day[$i]}}
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>

                        @php 
                        $inc = explode('. ',$pack->includes);
                        $inc_length = count($inc);
                        @endphp
                        <div class="included-section mb60">
                            <h3 class="mb30">What's Included</h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <ul class="arrow list-none">
                                        @for($i=0; $i<$inc_length; $i++)
                                        <li>{{$inc[$i]}}</li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="widget-primary support-list">
                            <div class="total_rate_title">TOTAL AMOUNT PAID <br> <span style="font-size: 16px;">(for <span id="person"> {{$pack->no_of_people}} </span> persons)</span></div>
                            <div class="total_rate_edit">Rs.<span id="basic_price">{{$basic_price}}</span></div>
                            
                            <div class="total_rate_edit_gst">+ (18% of GST) &nbsp; Rs.<span id="gst">{{$gst}}</span></div>
                            <div class="dashed"></div>

                            <div class="total_rate_total">Rs.<span id="total_price">{{$total_price}}</span></div>
                        </div>
                        
                        <div id="view_map" class="widget-map map_size_edit">
                            <iframe src="{{$pack->map_html}}"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    <div class="bg-light similar-package">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="">
                        <label class="control-label required" for="select">Destination</label>
                        <div class="">
                            <input id="name" type="text" placeholder="First Name" class="form-control" required readonly name="to_place" value="{{$pack->to_place}}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <label class="control-label" for="datepicker">Check in</label>
                        <div class="input-group">
                            <input id="datepicker" readonly name="checkin" type="text" placeholder="Date" class="form-control" required value="{{$pack->checkin}}">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <label class="control-label required" for="select">Number of Persons:</label>
                        <div class="">
                            <input id="name" type="text" placeholder="First Name" class="form-control" required readonly name="to_place" value="{{$pack->no_of_people}}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <label class="control-label required" for="select">From</label>
                        <div class="select">
                        @php
                        $from_place = explode(',',$pack->from_price);
                        @endphp
                        <div class="">
                            <input id="name" type="text" placeholder="First Name" class="form-control" required readonly name="to_place" value="{{$from_place[0]}}">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                    <h4 class="tour-form-title">Membar Details</h4>
                </div>
    @endforeach
            @php  $i=1;  @endphp
            @foreach($arr2 as $per)
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                    <h4 class="tour-form-title">Member {{$i}}</h4>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <label class="control-label" for="name">Name</label>
                        <input id="name" type="text" placeholder="Member Name" name="name[]" class="form-control input_field" required readonly value="{{$per->name}}">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <label class="control-label" for="email"> Email</label>
                        <input id="email" type="email" placeholder="Enter email" name="email[]" class="form-control input_field" required readonly value="{{$per->email}}">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <label class="control-label" for="phone"> Mobile</label>
                        <input id="phone" type="text" placeholder="Enter mobile number" name="mobile[]" class="form-control input_field" required readonly value="{{$per->mobile}}">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <label class="control-label" for="country">Age</label>
                        <input id="country" type="number" placeholder="Member age" name="age[]" class="form-control input_field" required readonly value="{{$per->age}}">
                    </div>
                </div>
                @php $i++; @endphp
            @endforeach
            </div>
        </div>
    </div>



@include('footer')