       <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="row ">
                    <!-- footer-logo -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                        <div class="ft-img"><img src="{{asset('imagess/ft_logo.png')}}" alt=""></div>
                    </div>
                    <!-- /.footer-logo -->
                    <!-- footer-links -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                        <div class="footer-widget ">
                            <h3 class="footer-title ">Quick Links</h3>
                            <ul class="angle list-none">
                                <li><a href="# ">Home</a></li>
                                <li><a href="# ">Tour</a></li>
                                <li><a href="# ">Blog</a></li>
                                <li><a href="# ">Customer Reviews</a></li>
                                <li><a href="# ">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-links -->
                    <!-- footer-tours -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                        <div class="footer-widget ">
                            <h3 class="footer-title ">Tour Packages</h3>
                            <ul class="angle list-none">
                                <li><a href="# ">International Tour</a>
                                    <li><a href="# ">Domestic Tour</a></li>
                                    <li><a href="# ">Adventure Tour</a></li>
                                    <li><a href="# ">Business Tour</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-Tours -->
                    <!-- footer-post -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
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
        <!-- /.Modal -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/menumaker.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/sticky-header.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>

        <script src="{{asset('js/multiple-carousel.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
        <script src="{{asset('js/date.js')}}"></script>

        <script src="{{asset('js/return-to-top.js')}}"></script>

        <script src="{{asset('js/owl.carousel2.thumbs.min.js')}}"></script>
        <script src="{{asset('js/thumb.js')}}"></script>

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

        <script type="text/javascript">
            
            $(document).ready(function(){

                $('#get_price_data').submit(function(e){
                    e.preventDefault();

                    var city = $('#get_price_data').serialize();

                    // alert(city);
                    $.ajax({

                        type:"post",
                        url:"/get_from_price",
                        data:city,

                        success:function(res)
                        {
                            $('#price').text(res.price);
                            $('#city').text(res.city);
                        }
                    });
                });

                $('#edit_from_place').click(function(){

                    var id = $(this).attr('attr_id');

                    // alert(id);
                    $.ajax({

                        type:"get",
                        url:"/edit_from_place",
                        data:{"_token":"{{csrf_token()}}","id":id},

                        success:function(res)
                        {
                            $('#edit_from_place_html').html(res);
                        }
                    });
                });

                $('#get_final_price').click(function(){

                    var person = $('#no_of_people').val();
                    var citys = $('#from_price').val();

                    alert(person);
                    alert(citys);

                    $.ajax({

                        type:"get",
                        url:"/get_total_price",
                        data:{"person":person,"citys":citys},

                        success:function(res)
                        {
                            $('#person').text(res.person);
                            $('#basic_price').text(res.basic_price);
                            $('#gst').text(res.gst);
                            $('#total_price').text(res.total_price);
                        }
                    });
                });

                // $('#tour-booking-form').submit(function(e){
                //     e.preventDefault();

                //     var form_data = $('#tour-booking-form').serialize();

                //     alert(form_data);
                //     $.ajax({

                //         type:"post",
                //         url:"/get_total_price",
                //         data:form_data,

                //         success:function(res)
                //         {
                //             $('#person').text(res.person);
                //             $('#basic_price').text(res.basic_price);
                //             $('#gst').text(res.gst);
                //             $('#total_price').text(res.total_price);
                //         }
                //     });
                // });


                    
                
                
            });
        </script>

        <script type="text/javascript">
            
            function get_price()
            {
                var person = document.getElementById('no_of_people').value
                var b = document.getElementById('from_price').value


                var citys_price = b.split(",");

                var citys = citys_price[0];
                var prices = citys_price[1];

                var basic_price = person * prices;
                var gst = basic_price*18/100;
                var total_price = parseInt(basic_price) + parseInt(gst);

                document.getElementById('person').innerHTML=person;
                document.getElementById('basic_price').innerHTML=basic_price;
                document.getElementById('gst').innerHTML=gst;
                document.getElementById('total_price').innerHTML=total_price;

                document.getElementById('book_no').innerHTML='<input type="submit" class="btn btn-primary" name="book_now" value="Book Now">';
            }

        </script>
    </div>
</body>


</html>