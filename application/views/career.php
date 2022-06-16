<?php include_once"includes/header.php" ?>
<!--end header-->
 <style>
 li {
    list-style: inherit;
}
 </style>
    <!-- ++++ banner ++++ -->
    <section class="banner  o-hidden banner-inner join-our-team-banner">
        <div class="container">
            <!--banner text-->
            <div class="banner-txt">
                <h1>Career</h1>
                <p class="semi-bold">Increase traffic and create better customer engagement by our
                    <br /> social media marketing strategy.</p>
                <a href="#join-our-team" class="medium-btn2 btn btn-nofill page-scroll">discover more</a>
            </div>
            <!--end banner text-->
        </div>
    </section>
    <!-- ++++ end banner ++++ -->
    <!-- ++++  join-our-team ++++ -->
    <section id="join-our-team" class="bg-white o-hidden  join-our-team">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor">Why Join Our Team?</h2>
            <hr class="dark-line" />
            <p class="regular-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                et iusto odio dignissim qui blandit praesent luptatum.</p>
            <!--end section title -->
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="content text-center">
                        <div class="icon_holder">
                            <span class="icon-clock3"></span>
                        </div>
                        Flexible
                        <br> Working Time
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-2 -->
                <div class="col-sm-3 col-xs-6">
                    <div class="content text-center">
                        <div class="icon_holder">
                            <span class="icon-plane"></span>
                        </div>
                        Paid
                        <br> Time of
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-2 -->
                <div class="col-sm-3 col-xs-6">
                    <div class="content text-center">
                        <div class="icon_holder">
                            <span class="icon-heart-pulse"></span>
                        </div>
                        Health
                        <br> Insurance
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-2 -->
                <div class="col-sm-3 col-xs-6">
                    <div class="content text-center">
                        <div class="icon_holder">
                            <span class="icon-dumbbell"></span>
                        </div>
                        Gym
                        <br> Facility
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-2 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- ++++ end join our team ++++ -->
    <!-- ++++  available-positions ++++ -->
    <section class="bg-white o-hidden  available-positions">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor">Available Positions</h2>
            <hr class="dark-line" />
            <?php 
									foreach($CareersData as $key=>$val){
									?>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="content">
                        <h3> <?php echo $val['title']  ?>
                        <span><?php echo $val['positions']  ?></span>
                            <span><?php echo $val['department']  ?></span>
                        </h3>
                        <div class="inner_content">
                            <p class="regular-text"><?php echo $val ['description'] ?></p>
                            <a href="apply-from?job_id=<?php echo $val['id']  ?>" class="btn btn-fill proDetModal">view details</a>
                        </div>
                        <!-- End of .inner_content -->
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-4 -->
              
            </div>
             <?php } ?>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- ++++ end service description ++++ -->
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
                    <div class="port-modal-content team-modal-content">
                        <h2 class="b-clor">Senior Designer</h2>
                        <p class="gray-text">Department: Design | Number of Positions: 01</p>
                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum mLorem ipsum dolor sit
                            amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <p class="regular-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                            dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                            praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        <h3>Job Responsibilities:</h3>
                        <ul class="list-with-arrow">
                            <li>Creating cutting edge designs for print/web/mobile accounts</li>
                            <li>Provide direction and tips to Associate designers, serving as a mentor to guide them into the
                                next level</li>
                            <li>Present designs and concepts (internally and to clients), bringing fresh ideas to each client
                                meeting and providing feedback when necessary Guided by your account director, work alongside
                                an expert information architecture, marketing, and development team members to provide web
                                designs, logos, and branding for a number of clients simultaneously</li>
                        </ul>
                        <p class="regular-text">If you think you’re right fit for this job, send your resume at
                            <a href="mailto:career@yourcompany.com"
                                target="_top"> career@yourcompany.com</a>
                        </p>
                    </div>
                </div>
                <!-- End of .modal-body -->
            </div>
        </div>
    </div>
    <!--end portfolio details modal-->
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


<!-- Mirrored from themes.axilweb.com/html/marketo/modern-big-digital-agency/career.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2017 15:03:52 GMT -->
</html>