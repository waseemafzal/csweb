
	
 
<?php include_once"includes/header.php" ?>
<style>
	.portfolio
	.img_container img {
    width: 100%;
    height: 200px;
	padding:10px;
	border-radius: 10px;
    box-shadow: 1px 3px 5px 3px #515e44;
	}
	h3 {
    font-size: 24px;
    line-height: 30px;
    /* margin-left: 90px; */
    text-align: center;
}


.blog-content  .blog-img{ 
height: 200px;
    width: 100%;
	}
	
.blog-content .equalheight{ margin:0 !important;}	
.blog-content  {

   
    padding: 10px;
    border-radius: 7px;
    box-shadow: 1px 3px 5px 3px #515e44;
}
.dmb-home.news .box-green-border {
    padding-left: 0;
    padding-top: 41px;
    padding-bottom: 33px;
    margin-bottom: 0px;
    text-align: center;
}
.case-studies-carousel .carousel-inner .item {
    padding: 10px 0 60px;
}



	</style>

    <!-- SLIDER -->
     <section class="banner  o-hidden banner-inner portfolio-banner">
        <div class="container">
            <!--banner text-->
            <div class="banner-txt">
                <h1>Portfolio</h1>
                <p class="semi-bold">We use strategic approaches to provide our clients with high-end.
                    <br /> services that ensure superior customer satisfaction.</p>
                <a href="#more-portfolio" class="medium-btn2 btn btn-nofill page-scroll">DISCOVER MORE</a>
            </div>
            <!--end banner text-->
        </div>
    </section>
      <!-- ++++ end banner ++++ -->
    <!-- ++++ Featured Project content ++++ -->
    <section class="o-hidden bg-white featured-design-section">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor">Featured Designs</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="row margin-top-40 portfolio-p l-margin portfolio">
                <div class="col-md-4 col-sm-6">
                    <div class="grid-item">
                        <div class="img_container is-featured">
                            <img src="public/images/portfolio/portfolio-img-one.jpg" alt="port_img" class="img-responsive">
                            <div class="overlay">
                                <a class="btn btn-nofill proDetModal1">Discover</a>
                            </div>
                            <!-- End of .overlay -->
                        </div>
                        <!-- End of .img_container -->
                        <div class="text-content">
                            <h3>
                                <a class="proDetModal proDetModal1">Ecommerce App Design
                                    <span>Mobile App</span>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="grid-item">
                        <div class="img_container is-featured">
                            <img src="public/images/portfolio/por-fea-project.jpg" alt="port_img" class="img-responsive">
                            <div class="overlay">
                                <a class="btn btn-nofill proDetModal2">Discover</a>
                            </div>
                            <!-- End of .overlay -->
                        </div>
                        <!-- End of .img_container -->
                        <div class="text-content">
                            <h3>
                                <a class="proDetModal proDetModal2">Logo Design
                                    <span>Website</span>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="grid-item">
                        <div class="img_container is-featured">
                            <img src="public/images/portfolio/por-fea-project-three.jpg" alt="port_img" class="img-responsive">
                            <div class="overlay">
                                <a class="btn btn-nofill proDetModal3">Discover</a>
                            </div>
                            <!-- End of .overlay -->
                        </div>
                        <!-- End of .img_container -->
                        <div class="text-content">
                            <h3>
                                <a class="proDetModal proDetModal3">Facebook Cover Design
                                    <span>Website</span>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio clearfix dmb-portfolio-home" id="portfolio-home">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor">Our Impressive Portfolio</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="button-group filter-button-group clearfix">
                <button class="button is-checked" data-filter="*">All Work</button>
                <button class="button" data-filter=".a1">Website</button>
                <button class="button" data-filter=".a2">Logo</button>
                <button class="button" data-filter=".a3">Mobile App</button>
                <button class="button" data-filter=".a4">Social Media</button>
            </div>
            <!-- button-group ends -->
            <div class="grid clearfix row">
                <!-- Items for portfolio 
                currently using 12 items. More Items can be added. -->
                  <?php 
									foreach($portfolioData as $key=>$val){
										$class='';
										$str = $val['category'];
									if (strpos($str, 'Website') !== false) {
										   $class='a1';
										}elseif (strpos($str, 'Logo') !== false) {
										   $class='a2';
										}elseif (strpos($str, 'Mobile App') !== false) {
										   $class='a3';
										}elseif (strpos($str, 'Social Media') !== false) {
										   $class='a4';
										}
										
									?>
                                  
               
                <div class="<?=$class?> grid-item">
                
                    <div class="img_container">
                        <img src="upload/<?php echo $val['image']  ?>" alt="port_img" class="img-responsive">
                        
                        <div class="overlay">
                            <a class="btn btn-nofill" data-toggle="modal" data-target="#myModal<?php echo $val['id'] ?>">Discover</a>
                        </div>
                        <!-- End of .overlay -->
                    </div>
                    <!-- End of .img_container -->
                    <div class="text-content">
                        <h3>
                            <a class="proDetModal proDetModal1">
							<?php echo $val['title'] ?>
                                
                                <span><?php echo $val['category'] ?></span>
                            </a>
                        </h3>
                    </div>
                  
                </div>
                
                 
                <!-- End of .grid-item -->
                <div class="modal fade verticl-center-modal" id="myModal<?php echo $val['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal1">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-cross-circle"></span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- main slider carousel -->
                            <div id="slider">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel" class="carousel slide myCarousel">
                                        <!-- main slider carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="upload/<?php echo $val['image']  ?>" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="upload/<?php echo $val['image']  ?>" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="upload/<?php echo $val['image']  ?>" alt="images" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs">
                                                <!-- thumb navigation carousel items -->
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0" class="carousel-selector selected">
                                                            <img src="upload/<?php echo $val['image']  ?>" class="img-responsive"
                                                                alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1" class="carousel-selector">
                                                            <img src="upload/<?php echo $val['image']  ?>" class="img-responsive"
                                                                alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2" class="carousel-selector">
                                                            <img src="upload/<?php echo $val['image']  ?>" class="img-responsive"
                                                                alt=""> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text"><?php echo $val['category'] ?></p>
                                <h2 class="b-clor"><?php echo $val['title'] ?></h2>
                                <p class="regular-text"><?php echo $val['description'] ?>.</p>
                                
                            </div>
                            
                            <a href="<?php echo $val['website'] ?>" class="medium-btn2  btn btn-fill">Launch website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <!-- End of modal -->
 <?php } ?>
               
                <!-- to add more items to the portfolio section copy and paste any
                of the items underneath the last item -->
            </div>
            <!-- End of .grid -->
            <div class="text-center port-dms">
                <a href="portfolio" class="btn btn-fill full-width">Discover more</a>
                 
            </div>
        </div>
    </section>
    <!--end portfolio section-->
    <!--case studies section-->
   
    <!--end case studies section-->
    <!--Choosing Us Section-->
    <!--end Choosing Us section-->
    <!--counter section-->
    <div class="clearfix"></div>
    <div class="banner  o-hidden success-number">
        <div class="clearfix"></div>
        <div class="parallax-container">
            <div class="clearfix"></div>
            <section>
                <div class="clearfix"></div>
                <div class="stuff" data-type="content">
                    <div class="container hidden">
                        <!--section title -->
                        <h2>Success In Numbers</h2>
                        <!--end section title -->
                        <div class="row counter-inner">
                            <!-- features box -->
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="icon-holder pull-left">
                                    <span class="icon-users2"></span>
                                </div>
                                <div class="pull-left counter-text">
                                    <div class="counter no_count b-clor">157</div>
                                    <p class="semi-bold">Happy Clients</p>
                                </div>
                            </div>
                            <!--end features box -->
                            <!-- features box -->
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="icon-holder pull-left">
                                    <span class="icon-calendar-check"></span>
                                </div>
                                <div class="pull-left counter-text">
                                    <div class="counter no_count b-clor">251</div>
                                    <p class="semi-bold">projects completed</p>
                                </div>
                            </div>
                            <!--end features box -->
                            <!-- features box -->
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="icon-holder pull-left">
                                    <span class="icon-clock"></span>
                                </div>
                                <div class="pull-left counter-text">
                                    <div class="counter no_count b-clor">24,100</div>
                                    <p class="semi-bold">projects completed</p>
                                </div>
                            </div>
                            <!--end features box -->
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--end counter section-->
    <!--testimonial Section-->
    <section class="bg-white testimonial hidden">
        <div class="container hidden">
            <!--section title -->
            <h2 class="b-clor">Meet Our Happy Customers</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="row grid">
                <div class="col-sm-6 col-md-4 grid-item">
                    <div class="content text-left">
                        <div class="img-container">
                            <img src="public/images/google-logo.png" class="img-responsive" alt="google logo">
                        </div>
                        <div class="clients-rating">
                            <div class="clients-rating-top" style="width: 85%;">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="clients-rating-bottom">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <!-- End of .clients-rating -->
                        <h5>Excellent Service</h5>
                        <p class="regular-text">Your brand is how your customers see an your business. It’s shaped by the way you represent yourself
                            – professiona, socially and visually. It’s what makes you unique.</p>
                        <div class="user-info">
                            <span>Mark Harning,</span> Pixelweb</div>
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-4 -->
                <div class="col-sm-6 col-md-4 grid-item">
                    <div class="content text-left">
                        <div class="img-container">
                            <img src="public/images/facebook-logo.png" class="img-responsive" alt="facebook logo">
                        </div>
                        <div class="clients-rating">
                            <div class="clients-rating-top" style="width: 100%;">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="clients-rating-bottom">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <!-- End of .clients-rating -->
                        <h5>Excellent Support</h5>
                        <p class="regular-text">Amazing theme and top class support, as I’m a beginner, They helped me above agenuine care for you
                            to enjoy and move The theme and author!</p>
                        <div class="user-info">
                            <span>Sarah,</span> Tech Support</div>
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-4 -->
                <div class="col-sm-6 col-md-4 grid-item">
                    <div class="content text-left">
                        <div class="img-container">
                            <img src="public/images/yelp-logo.png" class="img-responsive" alt="yelp logo">
                        </div>
                        <div class="clients-rating">
                            <div class="clients-rating-top" style="width: 85%;">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="clients-rating-bottom">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <!-- End of .clients-rating -->
                        <h5>Great Communication</h5>
                        <p class="regular-text">Seriously, WOW! I’ve purchased a ton of stuff on here. This theme is the cleanest and easiest to
                            use i am happy with that, Well done folks.</p>
                        <div class="user-info">
                            <span>Johnathan Doe,</span> On-net Media</div>
                    </div>
                    <!-- End of .content -->
                </div>
                <!-- End of .col-sm-4 -->
            </div>
            <!-- End of .row -->
            <div>
                <a href="customer-reviews.html" class="btn btn-fill full-width">Discover more</a>
            </div>
        </div>
        <!-- End of .container  -->
    </section>
    <!-- End of .testimonial -->
    <!--Blog Section-->
    <!--end blog Section-->
    <!-- ++++ footer ++++ -->
    <?php include_once"includes/footer.php" ?>
    <!--end footer-->

    <!--js library for number counter-->
    <script src="public/js/waypoints.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.counterup.min.js"></script>
    <!--js library for video popup-->
    <script type="text/javascript" src="public/js/jquery.magnific-popup.min.js"></script>
    <!-- js library for owl carousel -->
    <script type="text/javascript" src="public/js/owl.carousel.min.js"></script>
    <!--modernizer library-->
    <script type="text/javascript" src="public/js/modernizr.js"></script>
    <script type="text/javascript" src="public/js/isotope.min.js">
    </script>
    <!-- Slider Revolution core JavaScript files -->
    <script type="text/javascript" src="public/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="public/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider Revolution extension scripts. Remove these scripts before uploading 
    to server -->
    <script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="public/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <!--custom js-->
    <script type="text/javascript" src="public/js/script.js"></script>
</body>

</html>
<script type="text/javascript">
       
	   
	   $(document).ready(function(e) {
        //$('#getAQuoteModal').modal('show');
    	});
	
	
	
	   
    </script>