<?php include_once"includes/header.php" ?>
<!--end header-->
 
    <!-- ++++ banner ++++ -->
    <section class="banner  o-hidden banner-inner pricing-banner">
        <div class="container">
            <!--banner text-->
            <div class="banner-txt">
                <h1>Pricing Plans</h1>
                <p class="semi-bold">Based on market demand, we have created 3 packages that will cover all
                    <br> your business needs .</p>
                <a href="#pricing-plans" class="medium-btn2 btn btn-nofill page-scroll">SEE OUR PRICING</a>
            </div>
            <!--end banner text-->
        </div>
    </section>
    <!-- ++++ end banner ++++ -->
    <section id="pricing-plans" class="pricing-plans">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor">For Businesses of All Sizes</h2>
            <hr class="dark-line" />
            <p class="regular-text">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
            </p>
            <!--end section title -->
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <ul class="pricing">
                        <li class="price">
                            <i class="flaticon-vegetable-shop"></i> Small Business
                            <span>
                                <sup>$</sup>4,999</span>
                        </li>
                        <li>10 Pages
                            <strong>Responsive Website</strong>
                        </li>
                        <li>5
                            <strong>PPC</strong> Campaigns</li>
                        <li>10
                            <strong>SEO</strong> Keywords</li>
                        <li>5
                            <strong>Facebook</strong> Camplaigns</li>
                        <li>2
                            <strong>Video</strong> Camplaigns</li>
                    </ul>
                    <!-- End of .pricing -->
                    <a href="#" class="btn btn-fill">KICKSTART YOUR BUSINESS</a>
                </div>
                <!-- End of .col-sm-6 -->
                <div class="col-sm-6 col-md-4">
                    <ul class="pricing">
                        <li class="price">
                            <i class="flaticon-shop"></i> Medium Business
                            <span>
                                <sup>$</sup>9,999</span>
                        </li>
                        <li>20 Pages
                            <strong>Responsive Website</strong>
                        </li>
                        <li>10
                            <strong>PPC</strong> Campaigns</li>
                        <li>25
                            <strong>SEO</strong> Keywords</li>
                        <li>10
                            <strong>Facebook</strong> Camplaigns</li>
                        <li>5
                            <strong>Video</strong> Camplaigns</li>
                    </ul>
                    <!-- End of .pricing -->
                    <a href="#" class="btn btn-fill">KICKSTART YOUR BUSINESS</a>
                </div>
                <!-- End of .col-sm-6 -->
                <div class="col-sm-6 col-md-4">
                    <ul class="pricing">
                        <li class="price">
                            <i class="flaticon-building-4"></i> Corporate Business
                            <span>Call</span>
                        </li>
                        <li>Unlimited Pages
                            <strong>Responsive Website</strong>
                        </li>
                        <li>Unlimited
                            <strong>PPC</strong> Campaigns</li>
                        <li>Unlimited
                            <strong>SEO</strong> Keywords</li>
                        <li>Unlimited
                            <strong>Facebook</strong> Camplaigns</li>
                        <li>Unlimited
                            <strong>Video</strong> Camplaigns</li>
                    </ul>
                    <!-- End of .pricing -->
                    <a href="#" class="btn btn-fill">KICKSTART YOUR BUSINESS</a>
                </div>
                <!-- End of .col-sm-6 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .pricing-plans -->
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
    <!--portfolio details  modal-->
    <div class="modal fade verticl-center-modal" id="portfolioDetModal" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="icon-cross-circle"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- main slider carousel -->
                            <div id="slider">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel" class="carousel slide">
                                        <!-- main slider carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0" style="background: url('images/portfolio/portfolio-details-slider-one.jpg')">
                                            </div>
                                            <div class="item" data-slide-number="1" style="background: url('images/portfolio/portfolio-details-slider-two.jpg')"> </div>
                                            <div class="item" data-slide-number="2" style="background: url('images/portfolio/portfolio-details-slider-three.jpg')"> </div>
                                            <div id="slider-thumbs">
                                                <!-- thumb navigation carousel items -->
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0" class="carousel-selector selected">
                                                            <img src="images/portfolio/portfolio-slider-thum-1.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1" class="carousel-selector">
                                                            <img src="images/portfolio/portfolio-slider-thum-2.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2" class="carousel-selector">
                                                            <img src="images/portfolio/portfolio-slider-thum-3.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="port-modal-content">
                                <p class="gray-text">Featured - Design</p>
                                <h2 class="b-clor">Featured Projects</h2>
                                <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                                    qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            </div>
                            <h3>We delivered:</h3>
                            <ul class="list-with-arrow">
                                <li>A strategy to grow business online.</li>
                                <li>A unique website with great user experience design.</li>
                                <li>A custom content management system to maintain </li>
                                <li>the website flowlessly.</li>
                            </ul>
                            <a href="#" class="medium-btn2  btn btn-fill">Launch website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end portfolio details modal-->
    <!-- ++++ Javascript libraries ++++ -->
    <!--js library of jQuery-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
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
    <!--custom js-->
    <script type="text/javascript" src="js/script.js"></script>
</body>


<!-- Mirrored from themes.axilweb.com/html/marketo/modern-big-digital-agency/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2017 15:03:07 GMT -->
</html>