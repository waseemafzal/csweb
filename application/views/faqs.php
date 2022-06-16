<?php include_once"includes/header.php" ?>
<!--end header-->
 
    <!-- ++++ banner ++++ -->
    <section class="banner  o-hidden banner-inner faqs-banner">
        <div class="container">
            <!--banner text-->
            <div class="banner-txt">
                <h1>FAQs</h1>
                <p class="semi-bold">Browser our FAQ page to get the answers for your
                    <br>general queries.</p>
                <a href="#faqs" class="medium-btn2 btn btn-nofill page-scroll">READ FAQs</a>
            </div>
            <!--end banner text-->
        </div>
    </section>
    <!-- ++++ end banner ++++ -->
    <!-- ++++  join-our-team ++++ -->
    <section id="faqs" class="faqs">
        <div class="container">
            <!--section title -->
            <?php 
			$CI =& get_instance();
	$data = $CI->db->select('category')->group_by('category')->get('tbl_faqs');
	if($data->num_rows()>0){
		foreach($data->result() as $cat){
			
			   // sab query
	$faqs = $CI->db->select('*')->where('category',$cat->category)->get('tbl_faqs');
			?>
            <div class="faqs-content bg-white">
                <h2 class="b-clor">FAQs: <?php echo $cat->category; ?></h2>
                <hr class="dark-line">
                <div class="accordion-section">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php 
					if($faqs->num_rows()>0){
		foreach($faqs->result() as $row){
					?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?=$row->id?>" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="more-less icon-plus"></i><?=$row->question?>?</a>
                                </h4>
                            </div>
                            <div id="collapseOne<?=$row->id?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <?=$row->description?>
                                </div>
                            </div>
                        </div>
                        <?php }} ?>                        
                    </div>
                </div>
                <!-- End of .accordion-section -->
            </div>
            <?php }} ?>
            <!-- End of .faqs-content -->
            
        </div>
        <!-- End of .container -->
    </section>
    <!-- ++++ end join our team ++++ -->
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


<!-- Mirrored from themes.axilweb.com/html/marketo/modern-big-digital-agency/faqs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2017 15:03:52 GMT -->
</html>