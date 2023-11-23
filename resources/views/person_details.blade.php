@include('header')

    @foreach($arr as $pack)
       <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">Provide Details of All Members</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-header-->
        <!-- tour-booking -->
        <div class="content">
            <div class="container">
                <div class="row ">
                    <!-- footer-logo -->
                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12 mb30">
                        <div class="tour-booking-form">
                            @php

                            $length = $pack->no_of_people;

                            @endphp
                            <form method="post" id="tour-booking-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                        <h4 class="tour-form-title">Membar Details</h4>
                                    </div>

                                    @for($i=1; $i<=$length; $i++)
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                        <h4 class="tour-form-title">Member {{$i}}</h4>
                                    </div>

                                    <input id="name" type="hidden" placeholder="Member Name" name="book_id[]" class="form-control input_field" required value="{{$pack->book_id}}">
                                    
                                    <input id="name" type="hidden" placeholder="Member Name" name="package_id[]" class="form-control input_field" required value="{{$pack->package_id}}">

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Name</label>
                                            <input id="name" type="text" placeholder="Member Name" name="name[]" class="form-control input_field" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email"> Email</label>
                                            <input id="email" type="email" placeholder="Enter email" name="email[]" class="form-control input_field" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="phone"> Mobile</label>
                                            <input id="phone" type="text" placeholder="Enter mobile number" name="mobile[]" class="form-control input_field" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="country">Age</label>
                                            <input id="country" type="number" placeholder="Member age" name="age[]" class="form-control input_field" required>
                                        </div>
                                    </div>
                                    @endfor
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <input type="submit" name="add_details" class="btn btn-primary" value="Process to Pay">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 ">
                        <div class="widget-primary support-list total_price" id="get_total_price">
                            @php
                                $price = explode(',',$pack->from_price);
                                $basic_price = $price[1]*$pack->no_of_people;
                                $gst = $price[1]*18/100;
                                $total_price = $basic_price + $gst;
                            @endphp
                            <div class="total_rate_title">TOTAL PRICE <br> <span style="font-size: 16px;">(for <span id="person"> {{$pack->no_of_people}} </span> persons)</span></div>
                            <div class="total_rate_edit">Rs.<span id="basic_price">{{$basic_price}}</span></div>
                            
                            <div class="total_rate_edit_gst">+ (18% of GST) &nbsp; Rs.<span id="gst">{{$gst}}</span></div>
                            <div class="dashed"></div>

                            <div class="total_rate_total">Rs.<span id="total_price">{{$total_price}}</span></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.tour-booking -->
    @endforeach

@include('footer')