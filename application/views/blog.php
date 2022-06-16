<?php include_once"includes/header.php" ?>
<!--end header-->
 
    <!-- ++++ Most Bold Title ++++ -->
    <section class="blog-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- ++++ Most Bold Title ++++ -->
    <!-- ++++ blog standard content ++++ -->
    <section class="page-section bg-white o-hidden blog-content">
        <div class="container relative">
            <div class="row">
            
                <!-- Content -->
                <div class="col-sm-8">
                  <?php 
									foreach($BlogsData as $key=>$val){
									?>
                    <!-- Post -->
                    <div class="blog-item">
                        <!-- Post Title -->
                        <h2 class="blog-item-title font-alt">
                            <a href="blog-media-gallery"><?php echo $val['title'] ?></a>
                        </h2>
                        <!-- Date, Categories, Author, Comments -->
                        <div class="blog-item-data">
                         
                               <a> <i class="icon-calendar-full"></i><?php echo $val['date'] ?></a>
                            <span class="separator">&nbsp;</span>
                            
                               <a> <i class="icon-list4"></i><?php echo $val ['category'] ?></a>
                            <span class="separator">&nbsp;</span>
                            <br class="visible-xs">
                               <a> <i class="icon-user"></i> Admin</a>
                            <span class="separator">&nbsp;</span>
                        </div>
                        <!-- Media Gallery -->
                        <div class="blog-media">
                            <img src="<?=base_url()?>upload/<?php echo $val['image'] ?>" alt="" />
                        </div>
                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p><?php 
							$description = strip_tags($val ['description']);
							echo  substr($description,0,500) ?></p>
                        </div>
                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-details?id=<?php echo $val['id'] ?>" class="medium-btn3 btn btn-nofill green-text">Read More</a>
                        </div>
                    </div>
                    <!-- End Post -->
                   <?php } ?>
                </div>
                <!-- End Content -->
                <!-- Sidebar -->
                <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                    <!-- Search Widget -->
                    
                    <!-- End Search Widget -->
                    <!-- Widget -->
                    <div class="widget">
                        <h5 class="widget-title font-alt">Recent Posts</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-posts">
                            <?php
							foreach ($recentBlogs as $key=>$val){
							 ?>
                                <li class="clearfix">
                                    <div class="widget-posts-descr">
                                        <a href="#" title=""><?php echo $val['title'] ?></a> <?php echo $val['date'] ?> </div>
                                </li>
                                
                                <?php  }?>
                              
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget -->
                    <!-- Widget -->
                   
                    <!-- End Widget -->
                    <!-- Widget -->
                    
                    <!-- End Widget -->
                    <!-- Widget -->
                    
                   
                    </div>
                    <!-- End Widget -->
                </div>
                <!-- End Sidebar -->
            </div>
           
        </div>
    </section>
    <!-- ++++ end blog Standard content ++++ -->
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


<!-- Mirrored from themes.axilweb.com/html/marketo/modern-big-digital-agency/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2017 15:04:08 GMT -->
</html>