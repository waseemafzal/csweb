<?php include_once"includes/header.php" ?>
<!--end header-->
 
    <!-- ++++ banner ++++ -->
    <section class="banner banner-inner business-consulting-banner">
        <div class="container">
            <!--banner text-->
            <div class="banner-txt">
                <h1>Business Consulting</h1>
                <p class="semi-bold">Let us help you start your business. Our experts can guide
                    <br> you step by step to kickstart your business.</p>
                <a href="#concepts" class="medium-btn2 btn btn-nofill page-scroll">READ MORE</a>
            </div>
            <!--end banner text-->
        </div>
    </section>
    <!-- End of .banner -->
    <!-- Section hosting-pricing starts -->
    <section id="concepts" class="bg-white concepts">
        <div class="container">
            <!--section title -->
            <div class="hosting-content">
                <h2 class="b-clor">Concepts for Effective Business &amp; Consulting</h2>
                <hr class="dark-line">
            </div>
            <!-- End of .faqs-content -->
            <div class="row flex-wrapper">
                <div class="col-sm-6">
                    <div class="img-container">
                        <img src="public/images/research.jpg" class="img-responsive" alt="research-img">
                    </div>
                </div>
                <div class="col-sm-6 flex-content flex-left">
                    <div class="content text-left">
                        <h3>Researching your Target Audience</h3>
                        <p>It is a long established fact that a reader will be distracted the readable content of a page when
                            looking at its layout. The point of using and the Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here</p>
                        <ul>
                            <li>
                                <i class="icon-checkmark-circle"></i> Contrary to popular belief.</li>
                            <li>
                                <i class="icon-checkmark-circle"></i> Finibus Bonorum et Malorum.</li>
                            <li>
                                <i class="icon-checkmark-circle"></i> All the Lorem Ipsum generators.</li>
                        </ul>
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-6 -->
            </div>
            <!-- End of .row -->
            <div class="row flex-wrapper">
                <div class="col-sm-6">
                    <div class="img-container">
                        <img src="public/images/business-growth.jpg" class="img-responsive" alt="research-img">
                    </div>
                </div>
                <div class="col-sm-6 flex-content">
                    <div class="content text-left">
                        <h3>Tracking Business Growth and Industry Changes</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, a majority have suffered alteration
                            in some form, by injected humour, or randomwords which don't look even slightly believable.</p>
                        <ul>
                            <li>
                                <i class="icon-checkmark-circle"></i> Latin literature from 45 BC.</li>
                            <li>
                                <i class="icon-checkmark-circle"></i> Non-characteristic words etc.</li>
                            <li>
                                <i class="icon-checkmark-circle"></i> If you are going to use a passage</li>
                        </ul>
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-6 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .hosting-pricing -->
    <!-- Section hosting-plans starts -->
    <section class="start-project">
        <div class="container">
            <div class="content clearfix">
                <div class="pull-left text-content">
                    <h2>Start Your Project Right Now</h2>
                    <p>We provide best service for you.</p>
                </div>
                <a href="contact.html" class="btn btn-fill pull-right"> WORK WITH US </a>
            </div>
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .hosting-plans -->
    <!--footer-->
    <?php include_once"includes/footer.php"; ?>
    <!--end footer-->
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
                                <li>A time &amp; cost estimation.</li>
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


<!-- Mirrored from themes.axilweb.com/html/marketo/modern-big-digital-agency/business-consulting.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2017 15:02:52 GMT -->
</html>