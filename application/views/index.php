
	
 
<?php include_once"includes/header.php" ?>
<style>
	.portfolio
	.img_container img {
    width: 100%;
    height: 200px;
	padding:10px;
	border-radius: 7px;
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
    <div class="main-slider">
    
        <div class="content">
            <div id="rev_slider_1059_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept121" data-source="gallery">
                <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div id="rev_slider_1078_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                     <?php 
									foreach($sliderData as $key=>$val){
									?>
                        <!-- SLIDE  -->
                        <li data-index="rs-3049" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"
                            data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-saveperformance="off" data-title="Love it?" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="upload/<?php echo $val['image']  ?>" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone"
                                data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500"
                                data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- Mobile only text -->
                            <div class="visible-xs caption-mobile">
                                <div class="h1" style="color: #008ccb;"><?php echo $val['title']  ?>t</div>
                                <div class="h2" style="color: #323a45;"><?php echo $val['description']  ?></div>
                            </div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title  tp-resizeme rs-parallaxlevel-3" id="slide-3046-layer-7" data-x="left" data-hoffset="0"
                                data-y="center" data-voffset="0" data-width="none" data-height="none" data-whitespace="nowrap"
                                data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[60]" data-fontsize="[90,56,40,30]" data-paddingleft="[0,50,50,50]" style="z-index: 9; white-space: nowrap;text-transform:left;">
                                <div class="h1" style="color: #008ccb;"><?php echo $val['title']  ?></div>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-2" id="slide-3046-layer-15" data-x="left" data-hoffset="0"
                                data-y="center" data-voffset="120" data-width="none" data-height="none" data-whitespace="nowrap"
                                data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap;text-transform:left;">
                                <div class="h2" style="color: #323a45;"><?php 
											$des= strip_tags($val['description']);
											
echo get_words($des,10);

											  ?></div>
                                <br>
                                <a href="#" class="dmb-home medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">GET A QUOTE
                                    <span class="icon-chevron-right"></span>
                                </a>
                                <a class="dmb-home medium-btn2 btn btn-nofill page-scroll" href="#portfolio-home">our portfolio</a>
                            </div>
                        </li>

 <?php } ?>
                    
                    </ul>
                    <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
    <!--end carousel-->
    <!--clients section-->
    <div class="clients" style="display:none";>
        <!-- clients item slider-->
        <div class="container">
            <div class="clients-logos owl-carousel owl-theme">
                <div class="item">
                    <img src="public/images/client1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->
                <div class="item">
                    <img src="public/images/client2.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->
                <div class="item">
                    <img src="public/images/client3.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->
                <div class="item">
                    <img src="public/images/client4.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->
                <div class="item">
                    <img src="public/images/client5.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->
                <div class="item">
                    <img src="public/images/client6.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->
                <div class="item">
                    <img src="public/images/client1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->
                <div class="item">
                    <img src="public/images/client2.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->
                <!-- to add more items copy and paste one of
                the items underneath the last item -->
            </div>
            <!-- End of .partner_logos -->
        </div>
        <!--end clients item slider -->
    </div>
    <!--end clients section-->
    <!--services Section-->
    <section class="bg-white o-hidden services dms-modern" id="services">
        <div class="container">
        
            <!--section title -->
            <h2 class="b-clor">Services We Provide</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="row">
               <?php 
									foreach($cmservicesData as $key=>$val){
									?>
                <!-- features box -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-green-border">
                        <a href="services#bm-online-marketing">
                            <span class="<?php echo $val['icon_class'] ?>"></span>
                            <div><?php echo $val['title'] ?></div>
                        </a>
                        <p><?php echo $val['content'] ?></p>
                        <div class="service-overlay">
                            <ul class="clearfix">
                                <li>
                                    <a href="domain">
                                        <i class="icon-magnifier"></i> Domain</a>
                                </li>
                                <li>
                                    <a href="hosting">
                                        <i class="icon-server"></i> Hosting</a>
                                </li>
                                <li>
                                    <a href="big-data-analysis">
                                        <i class="icon-pie-chart"></i> Big Data Analysis</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of .service-overlay -->
                    </div>
                </div>
                <!--end features box -->
                 <?php } ?>
            </div>
            
        </div>
    </section>
    <!--end services Section-->
    <!--portfolio section-->
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
                            
                            <a href="index.php" class="medium-btn2  btn btn-fill">Launch website</a>
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
    <section class="case-studies-section" id="case_studies">
    <h1 class="b-clor" style="margin-left:100px;">Tastingmonail</h1>
   
        <div id="case-studies-carousel" class="case-studies-carousel carousel slide" data-ride="carousel">
            <!-- Indicators -->
             <ol class="carousel-indicators">
             <?php 
								$i=0;
									foreach($tastingmonailData as $key=>$val){
										$ActiveClass='';
										if($i==0){
											$ActiveClass='active';
											}
									?>
           
                <li style="background:url(<?=base_url()?>upload/<?=$val['image']?>);background-size:100%" data-target="#case-studies-carousel<?=$val['id']?>" data-slide-to="<?=$i?>" class="<?=$ActiveClass?>" id="slide-<?=$i?>"></li>
           
            <?php
			$i++;
			 } ?>
              </ol>
            <!-- Wrapper for slides -->
             
            <div class="carousel-inner" role="listbox">
              <?php 
			  $i=0;
									foreach($tastingmonailData as $key=>$val){
										$ActiveClass='';
										if($i==0){
											$ActiveClass='active';
											}
									?>
                <div class="item item <?=$ActiveClass?>">
                    <div class="carousel-caption ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 text-center">
                                    <h2 class="b-clor"><?php echo $val['title'] ?></h2>
                                  <center> <p class="regular-text" style="text-align:center"><?php echo $val['description'] ?></p>
                                </center> 
                                </div>
                                
                            </div>
                            <!-- End of .row -->
                            
                        </div>
                        <!-- End of .container -->
                    </div>
                </div>
                     <?php
					 $i++;
					  } ?>
                <!-- End of .item -->
            </div>
            <!-- Controls -->
           
        </div>
    </section>
    <!--end case studies section-->
    <!--Choosing Us Section-->
    <section class="bg-white o-hidden dmb-home why-us common-form-section" id="why-us">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor">Reasons for Choosing Us</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="row">
                <!--text box-->
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h3 class="semi-bold">We Lead from the Front</h3>
                    <p class="regular-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                    , sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                     Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                      lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor 
                      in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat
                       nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent 
                       luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                    </div>
                <!--end text box-->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"> </div>
                <!--form for free quote-->
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <?php include_once 'includes/qoutform.php'; ?>
                </div>
                <!--end form for free quote-->
            </div>
        </div>
    </section
    ><!--end Choosing Us section-->
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