<?php include_once"includes/header.php" ?>
<!--end header-->
 
    <!-- ++++ banner ++++ -->
    <section class="banner  o-hidden banner-inner search-results-banner">
        <div class="container">
            <!--banner text-->
            <div class="banner-txt">
                <h1>search results for:</h1>
                <form method="get" action="#">
                    <div class="form-group">
                        <i class="icon-magnifier"></i>
                        <input class="form-control" type="text" name="search" placeholder="Search here...">
                        <button type="submit">
                            <i class="icon-chevron-right"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!--end banner text-->
        </div>
        <!-- End of .container -->
    </section>
    <!-- ++++ end banner ++++ -->
    <!-- ++++ Search-results ++++ -->
    <section class="search-results">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor"> 4 search results found</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="content">
                        <h3>website design</h3>
                        <p class="regular-text">We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-4 -->
                <div class="col-sm-6 col-md-4">
                    <div class="content">
                        <h3>Mobile app design</h3>
                        <p class="regular-text">From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-4 -->
                <div class="col-sm-6 col-md-4">
                    <div class="content">
                        <h3>social media design</h3>
                        <p class="regular-text">Our comprehensive Online Marketing strategy will boost your website and traffic hence monthly sales.</p>
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-4 -->
                <div class="col-sm-6 col-md-4">
                    <div class="content">
                        <h3>logo design</h3>
                        <p class="regular-text">We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-4 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .search-results -->
    <!-- ++++ contact-us-now ++++ -->
    <section class="contact-us-now grey-dark-bg">
        <div class="container text-center">
            <h3>Can’t find the thing you’re looking for? Let us help you!</h3>
            <a href="contact.html" class="btn btn-fill">contact us now</a>
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .search-results -->
    <!-- ++++ footer ++++ -->
    <?php include_once"includes/footer.php"; ?>
    <!-- ++++ end footer ++++ -->
    <!--get a quote modal-->
    <div class="modal fade verticl-center-modal" id="getAQuoteModal" tabindex="-1" role="dialog" aria-labelledby="getAQuoteModal">
        <div class="modal-dialog getguoteModal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="icon-cross-circle"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="customise-form">
                                <form class="email_form" method="post">
                                    <h3>Get a Free Quote</h3>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-user"></span>
                                        <input type="text" name="full_name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-envelope"></span>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-telephone"></span>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-laptop"></span>
                                        <input type="text" name="website" class="form-control" placeholder="Website">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-bubble"></span>
                                        <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-fill full-width">GET A QUOTE
                                            <span class="icon-chevron-right"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>What’s Next?</h3>
                            <ul class="list-with-arrow">
                                <li>An email and phone call from one of our representatives.</li>
                                <li>A time & cost estimation.</li>
                                <li>An in-person meeting.</li>
                            </ul>
                            <div class="contact-info-box-wrapper">
                                <div class="contact-info-box">
                                    <span class="icon-telephone"></span>
                                    <div>
                                        <h6>Give us a call</h6>
                                        <p>(123) 456 7890</p>
                                    </div>
                                </div>
                                <div class="contact-info-box">
                                    <span class="icon-envelope"></span>
                                    <div>
                                        <h6>Send an email</h6>
                                        <p>yourcompany@sample.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end get a quote modal-->
    <!-- ++++ Javascript libraries ++++ -->
    <!--js library of jQuery-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--custom js-->
    <script type="text/javascript" src="js/script.js"></script>
    <!--js library of bootstrap-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!--js library for number counter-->
    <script src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <!--js library for video popup-->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <!-- js library for owl carousel -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!--modernizer library-->
    <script type="text/javascript" src="js/modernizr.js"></script>
    <!-- Isotope script -->
    <script type="text/javascript" src="js/isotope.min.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
</body>


<!-- Mirrored from themes.axilweb.com/html/marketo/modern-big-digital-agency/search-results.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2017 15:04:32 GMT -->
</html>