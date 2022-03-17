<?php include_once"includes/header.php" ?>

    <!-- ++++ banner ++++ -->
    <section class="banner  o-hidden banner-inner about-banner">
        <div class="container">
            <!--banner text-->
            <div class="banner-txt">
                <h1>About</h1>
                <p class="semi-bold">What makes a company great? That’s simple.
                    <br /> It’s the people who work here.</p>
                <a href="#more-about" class="medium-btn2 btn btn-nofill page-scroll">EXPERIENCE US</a>
            </div>
            <!--end banner text-->
        </div>
    </section>
    <!-- ++++ end banner ++++ -->
    <!-- ++++ about content ++++ -->
    <section class="bg-white o-hidden common-form-section contact-form-wrapper" id="more-about">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor">We’re Your Partner in Your Success</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="row about-content">
                <div class="col-md-5 col-sm-12 pull-right">
                    <div class="about-img">
                        <img src="images/about/about-right-img.jpg" alt="about" class="img-responsive" /> </div>
                </div>
                <div class="col-md-7 col-sm-12 pull-left">
                    <div>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                            tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel
                            eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                            feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                            luptatum.</p>
                        <p class="regular-text">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                            facer possim assum. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                            lobortis nisl. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
                            Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                            etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                        <p class="regular-text">Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact form design -->
    <!-- google map location section start-->
    <section class="o-hidden bg-white about-page-list">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor">Know More about Us</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="row">
                <div class="col-md-4">
                    <div class="about-box firstItem active equalheight">
                        <div class="round-icon-wrapper">
                            <span class="icon-users2"></span>
                        </div>
                        <h3>
                            <a href="team.html">Team</a>
                        </h3>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum my nibh euismod tincidunt.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-box equalheight">
                        <div class="round-icon-wrapper">
                            <span class="icon-trophy2 "></span>
                        </div>
                        <h3>
                            <a href="awards-and-recognitions.html">Awards &amp; Recognitions</a>
                        </h3>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum my nibh euismod tincidunt.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-box equalheight">
                        <div class="round-icon-wrapper">
                            <span class=" icon-user-plus"></span>
                        </div>
                        <h3>
                            <a href="career.html">Career</a>
                        </h3>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum my nibh euismod tincidunt.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-box equalheight">
                        <div class="round-icon-wrapper">
                            <span class="icon-star"></span>
                        </div>
                        <h3>
                            <a href="customer-reviews.html">Customer Reviews</a>
                        </h3>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum my nibh euismod tincidunt.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-box equalheight">
                        <div class="round-icon-wrapper">
                            <span class=" icon-list4"></span>
                        </div>
                        <h3>
                            <a href="faqs.html">FAQs</a>
                        </h3>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum my nibh euismod tincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end google map location section-->
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


<!-- Mirrored from themes.axilweb.com/html/marketo/modern-big-digital-agency/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2017 15:03:23 GMT -->
</html>