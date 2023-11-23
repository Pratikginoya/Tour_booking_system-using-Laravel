@include('header')

    @foreach($arr as $pack)
       <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">Pay Now</h1>
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                        <h4 class="tour-form-title">Pay Now</h4>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Select Payment Option</label>
                                            <select class="form-control input_field" required>
                                                <option>UPI</option>
                                                <option>Credit / Debit card</option>
                                                <option>Wallet - PhonePay, GooglePay,Etc</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <input type="submit" name="final_book" class="btn btn-primary" value="Process">
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