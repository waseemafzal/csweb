<?php include_once"includes/header.php" ?>
<!--end header-->
 
    <!-- ++++ banner ++++ -->
    <section class="banner  o-hidden banner-inner graphic-design-banner">
        <div class="container">
            <!--banner text-->
            <div class="banner-txt">
                <h1>Team</h1>
                <p class="semi-bold">Grow your business online by awesomely designed mobile apps
                    <br /> that fits all types.</p>
                <a href="#team_members" class="medium-btn3 btn btn-nofill page-scroll">Meet our team</a>
            </div>
            <!--end banner text-->
        </div>
    </section>
    <!-- ++++ end banner ++++ -->
    <!-- ++++ Mobile first concept ++++ -->
    <section id="team_members" class="bg-white team_members">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor"> It Takes Two Flints to Make a Fire</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="row">
             <?php 
									foreach($TeamData as $key=>$val){
									?>
                                <li>
                <div class="col-md-4 col-xs-6">
                    <div class="content">
                        <div class="img_container">
                            <img src="upload/<?php echo $val['image'] ?>" alt="team members" class="img-responsive">
                            <div class="por-overlay">
                                <div class="text-inner">
                                    <a href="career" class="btn btn-nofill tmDetModal1">View Details</a>
                                </div>
                                <!-- End of .text-inner -->
                            </div>
                            <!-- End of .por-overlay -->
                        </div>
                        <!-- End of .img_container -->
                        <div class="member_details">
                            <h3>
                                <a class="member_intro tmDetModal"><?php echo $val['name'] ?></a><?php echo $val['designation'] ?></h3>
                        </div>
                        <!-- End of .member_details -->
                    </div>
                    <!-- End of .content -->
                </div>
                <?php } ?>
                
            </div>
            <!-- End of .row -->
            <div class="col-sm-12 text-center join-our-team-btn clearfix">
                <a href="career" class="btn btn-fill full-width">Join Our Team</a>
            </div>
        </div>
        <!-- End of .container -->
    </section>
    <!-- ++++ end mobile first concept ++++ -->
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
    <div class="modal fade verticl-center-modal" id="teamDetModal1" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-cross-circle"></span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="img_container">
                                <img src="public/images/team/team-modal-img1.jpg" alt="team details image" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content team-modal-content">
                                <h2 class="b-clor">Steve Johnson</h2>
                                <p class="gray-text">Cheif Executive Officer</p>
                                <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                                    qui blandit praesent luptatum.</p>
                                <ul class="list-inline social_icons text-left">
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="teamDetModal2" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-cross-circle"></span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="img_container">
                                <img src="public/images/team/team-modal-img2.jpg" alt="team details image" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content team-modal-content">
                                <h2 class="b-clor">Olivia Jackson</h2>
                                <p class="gray-text">Cheif Operating Officer</p>
                                <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                                    qui blandit praesent luptatum.</p>
                                <ul class="list-inline social_icons text-left">
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="teamDetModal3" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-cross-circle"></span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="img_container">
                                <img src="public/images/team/team-modal-img3.jpg" alt="team details image" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content team-modal-content">
                                <h2 class="b-clor">John Kenny</h2>
                                <p class="gray-text">Head of Marketing</p>
                                <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                                    qui blandit praesent luptatum.</p>
                                <ul class="list-inline social_icons text-left">
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="teamDetModal4" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-cross-circle"></span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="img_container">
                                <img src="public/images/team/team-modal-img4.jpg" alt="team details image" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content team-modal-content">
                                <h2 class="b-clor">Silvia Perry</h2>
                                <p class="gray-text">Senior Design Stategist</p>
                                <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                                    qui blandit praesent luptatum.</p>
                                <ul class="list-inline social_icons text-left">
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="teamDetModal5" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-cross-circle"></span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="img_container">
                                <img src="public/images/team/team-modal-img5.jpg" alt="team details image" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content team-modal-content">
                                <h2 class="b-clor">David Schwimmer</h2>
                                <p class="gray-text">Senior Software Engineer</p>
                                <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                                    qui blandit praesent luptatum.</p>
                                <ul class="list-inline social_icons text-left">
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="teamDetModal6" tabindex="-1" role="dialog" aria-labelledby="teamDetModal">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal team-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-cross-circle"></span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="img_container">
                                <img src="public/images/team/team-modal-img6.jpg" alt="team details image" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content team-modal-content">
                                <h2 class="b-clor">Lowra</h2>
                                <p class="gray-text">Office Pet</p>
                                <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                                    qui blandit praesent luptatum.</p>
                                <ul class="list-inline social_icons text-left">
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end team details modal -->
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


<!-- Mirrored from themes.axilweb.com/html/marketo/modern-big-digital-agency/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2017 15:03:41 GMT -->
</html>