@include('header')

    @foreach($arr as $pack)
        <!-- page-header -->
        <div class="tour-pageheader" style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.7)),url('../images/{{$pack->image2}}')!important;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="tour-caption">
                            <h1 class="text-white tour-title">{{$pack->to_place}}</h1>
                            <p class="tour-caption-text text-white"><strong class="tour-rate">Rs.<span id="price">{{$pack->default_price}}</span>/- per person (From <span id="city">New-Delhi</span>)</strong>( {{$pack->total_nights}} nights | {{$pack->total_days}} days )</p>

                        <form method="post" id="get_price_data">
                        @csrf
                            

                            <div class="d-flex align-items-center" style="gap: 5px;">
                                <p class="price_note bold_this filghts">- {{$pack->vehicle}} </p>
                                <!-- <span class="edit_edit"><a href="#">Edit</a></span> -->
                            </div>
                            <div class="d-flex align-items-center" style="gap: 5px;">
                                <p class="price_note bold_this filghts">- {{$pack->food}} </p>
                                <!-- <span class="edit_edit"><a href="#">Edit</a></span> -->
                            </div>
                        <div id="edit_from_place_html">
                            <div class="d-flex align-items-center" style="gap: 5px;">
                                <p class="price_note bold_this filghts">- From New-delhi </p>
                                <span class="edit_edit"><a href="javascript:void(0)" id="edit_from_place" attr_id="{{$pack->package_id}}">Edit</a></span>
                            </div>
                        </div>

                        </form>

                            
                            <!-- <div class="select_from_city">
                                <p class="select_heading">Select From you want to go and Get price :</p>
                                <select id="select" name="city" class="form-control edit_form_control">
                                    <option value="" disabled>Where you want to go</option>
                                    <option value="New-delhi,{{$pack->default_price}}">New-delhi</option>

                                    @php 
                                    $from = explode(' | ',$pack->from);
                                    $price = explode(' | ',$pack->price);
                                    $from_length = count($from);
                                    @endphp
                                    
                                    @for($i=0; $i<$from_length; $i++)
                                    <option value="{{$from[$i]}},{{$price[$i]}}">{{$from[$i]}}</option>
                                    @endfor

                                </select>
                            </div> -->
                            </form>
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
                        <a href="/tour-booking/{{$pack->package_id}}" class="btn btn-primary mb10 text-center">Book Now</a>

                    </div>

                    
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                        <!-- <div class="widget-form">
                            <h3 class="text-white mb30"> Book Your Tour</h3>
                            <form>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="select"></label>
                                            <div class="select">
                                                <select id="select" name="select" class="form-control">
                                                    <option value="">Where you want to go</option>
                                                    <option value="">Singapore</option>
                                                    <option value="">Thailand</option>
                                                    <option value="">Vietnam</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="datepicker"></label>
                                                <div class="input-group">
                                                    <input id="datepicker" name="datepicker" type="text" placeholder="Date" class="form-control" required>
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="select"></label>
                                            <div class="select">
                                                <select id="select" name="select" class="form-control">
                                                    <option value="">Number of Peoples</option>
                                                    <option value="">6</option>
                                                    <option value="">10</option>
                                                    <option value="">25</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" name="singlebutton" class="btn btn-primary">Enquiry Now</button>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                        <!-- /.enguiry-form -->
                        <div class="widget-primary support-list">
                            <div class="widget-primary-title">
                                <h3>Why Book With Us?</h3>
                            </div>
                            <ul class="arrow list-none">
                                <li>24X7 service and support</li>
                                <li>Totally complaint in all aspects</li>
                                <li>Dedicated, trustworthy team</li>
                                <li>Professional happy services</li>
                            </ul>
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
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-title">
                        <h2>Similar Packages</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($similar_arr as $similar)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- destination-section -->
                   <div class="destination-block">
                            <div class="desti-img">
                                <img src="{{asset('images/'.$similar->image1)}}" alt="">
                                <a href="#" class="desti-title">{{$similar->to_place}}</a>
                                <div class="overlay">
                                </div>
                                <div class="text">
                                    <h3 class="mb20 text-white">{{$similar->to_place}}</h3>
                                    <ul class="angle list-none">
                                        <li>{{$similar->total_nights}} Nights / {{$similar->total_days}} days</li>
                                        <li>{{$similar->hotel_type}} hotel</li>
                                        <li>Breakfast, Lunch and Dinner</li>
                                    </ul>
                                    <p class="price">Rs.{{$similar->default_price}}</p>
                                    <p class="price_note">(Per person from New-Delhi)</p>

                                    <a href="/tour-single/{{$similar->package_id}}" class="btn-link go_to_place">Go for {{$similar->to_place}} <i class="fa fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    <!-- /.destination-section -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- newsletter -->
    <div class="newsletter-wrapper newsletter-overlay" style="background: url(../imagess/newsletter_wrapper.jpg) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 offset-md-5 col-md-6 col-sm-12 col-12">
                    <div class="newsletter-block">
                      <h1 class="newsletter-title">Join The Newsletter</h1>
                        <p class="mb30">Subscribe the newsletter and get update for discounts on tours.</p>
                        <form>
                            <div class="input-group add-on">
                                <input class="form-control" placeholder="email address here" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary newsletter-btn" type="submit">subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.newsletter -->
    @endforeach

@include('footer')