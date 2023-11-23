@include('header')

        <!-- page-header -->
        <div class="contact-pageheader">
        </div>
        <!-- /.page-header-->
        <!-- contact-section -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="contact-wrapper">
                        <div id="contact-map" class="mb60"></div>
                        <div class="row">
                            <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">
                                <div class="section-title">
                                    <h2>We're here for you all day, everyday!</h2>
                                    <p>If you have any questions or comments please complete the form below.We'd love to hear from you!</p>
                                </div>
                                <div class="contact-block">
                                    <!-- contact-form -->
                                    <form method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name</label>
                                                    <input id="name" type="text" placeholder="Your Name" name="name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email"> Email</label>
                                                    <input id="email" name="email" type="text" placeholder="Your Email Address" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="phone"> Mobile</label>
                                                    <input id="phone" name="mobile" type="text" placeholder="Your Contact Number" class="form-control" required maxlength="10" minlength="10">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="subject">Subject </label>
                                                    <input id="subject" type="text" placeholder="Your Subject" name="subject" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="textarea">Messages</label>
                                                    <textarea class="form-control" id="textarea" name="message" rows="4" placeholder="Your Messages" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                                <input type="submit" value="Submit" name="submit_contact" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                    <!-- contact-form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-info -->
        <div class="space-small">
            <div class="container">
                <div class="row ">
                    <!-- contact -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20">
                        <div class="contact-info">
                            <h4 class="contact-info-title">Head Office Location</h4>
                            <div class="contact-info-content">
                                <i class="fa fa-map-marker contact-info-icon"></i>
                                <p>2166 Matthews Street Arlington Heights, United State 60005</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact -->
                    <!-- contact -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20">
                        <div class="contact-info">
                            <h4 class="contact-info-title">Call Us</h4>
                            <div class="contact-info-content">
                                <i class="fa fa-phone contact-info-icon"></i>
                                <p><strong>+180-123-4567
                                    <br> +180-123-8910</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact -->
                    <!-- contact -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20 ">
                        <div class="contact-info">
                            <h4 class="contact-info-title">Email Us</h4>
                            <div class="contact-info-content">
                                <i class="fa fa-envelope contact-info-icon"></i>
                                <p><strong>info@travel.com<br> support@travelair.com</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact -->
                </div>
            </div>
        </div>
        <!-- /.contact-info -->
        <!-- /.contact-section -->
        <!-- newsletter -->
        <div class="newsletter-wrapper newsletter-overlay" style="background:url(images/newsletter_wrapper.jpg) no-repeat;">
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

@include('footer')