@include('header')

    @foreach($arr as $pack)
       <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">Book Your Tour Now</h1>
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
                            <form method="post" id="tour-booking-form">
                                @csrf
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
                                                <input id="datepicker" name="checkin" type="text" placeholder="Date" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">Number of Persons:</label>
                                            <div class="select">
                                                <select name="no_of_people" class="form-control" id="no_of_people">
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label required" for="select">From</label>
                                            <div class="select">
                                            @php
                                            $from_place = explode(' | ',$pack->from);
                                            $from_price = explode(' | ',$pack->price);
                                            $total_place = count($from_place);
                                            @endphp
                                            
                                            <select class="form-control" name="from_price" id="from_price">
                                                <option value="New-Delhi,{{$pack->default_price}}">New delhi</option>
                                                @for($i=0; $i<$total_place; $i++)
                                                <option value="{{$from_place[$i]}},{{$from_price[$i]}}">{{$from_place[$i]}}</option>
                                                @endfor
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="">
                                            <label class="control-label required" for="select">Total Days</label>
                                            <div class="">
                                                <input id="name" type="text" placeholder="First Name" class="form-control" required readonly name="total_days" value="{{$pack->total_days}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="">
                                            <label class="control-label required" for="select">Total Night</label>
                                            <div class="">
                                                <input id="name" type="text" placeholder="First Name" class="form-control" required readonly name="total_nights" value="{{$pack->total_nights}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="">
                                            <label class="control-label required" for="select">Hotel Type</label>
                                            <div class="">
                                                <input id="name" type="text" placeholder="First Name" class="form-control" required readonly name="hotel_type" value="{{$pack->hotel_type}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="">
                                            <label class="control-label required" for="select">Vehicle</label>
                                            <div class="">
                                                <input id="name" type="text" placeholder="First Name" class="form-control" required readonly name="vehicle" value="{{$pack->vehicle}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="">
                                            <label class="control-label required" for="select">Food Includes</label>
                                            <div class="">
                                                <input id="name" type="text" placeholder="First Name" class="form-control" required readonly name="food" value="{{$pack->food}}">
                                            </div>
                                        </div>
                                    </div>       

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="book_no">
                                    <input type="button" onclick="get_price()" class="btn btn-primary" value="Get Price">
                                </div> 

                            </div>
                        </form>        

                                      
                    </div>
                        
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 ">
                        <div class="widget-primary support-list total_price" id="get_total_price">
                            <div class="total_rate_title">TOTAL PRICE <br> <span style="font-size: 16px;">(for <span id="person"> 01 </span> persons)</span></div>
                            <div class="total_rate_edit">Rs.<span id="basic_price">{{$pack->default_price}}</span></div>
                            @php
                                $gst = $pack->default_price * 18/100;
                                $total_price = $pack->default_price + $gst;
                            @endphp
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