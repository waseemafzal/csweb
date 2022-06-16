<footer id="footer">
        <!--scroll to top-->
        <a class="top-btn page-scroll" href="#top">
            <span class="icon-chevron-up b-clor regular-text text-center"></span>
        </a>
        <!--end scroll to top-->
        <!--newsletter section-->
        <div class="grey-dark-bg text-center">
            <div class="container">
                <h2>Sign up for our newsletter to stay up to date with tech news!</h2>
                <div class="customise-form">
                   <form method="POST" id="sinupForm"> 
                        <div class="row">
                            <!--box one-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group customised-formgroup">
                                    <span class="icon-user"></span>
                                    <input class="form-control" name="name" id="fname" placeholder="Name">
                                </div>
                            </div>
                            <!--end box one-->
                            <!--box two-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group customised-formgroup">
                                    <span class="icon-envelope"></span>
                                    <input class="form-control" name="email" id="femail"  placeholder="Email">
                                </div>
                            </div>
                            <!--end box two-->
                            <!--box three-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div>
                                        <button type="submit" class="btn btn-fill full-width">SIGN UP FOR FREE
                                            <span class="icon-chevron-right"></span>
                                        </button>
                                    </div>
                            </div>
                            <!--end box three-->
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <!-- end newsletter section -->
        <!-- footer content -->
       <div class="light-ash-bg">
            <div class="container">
           
            
                <ul>
                    <li>
                        <!-- footer left content-->
                        <ul>
                            <li><a>
                                    <img src="<?=$logo?>" alt="logo" class="cyphersol logo">
                                </a>
                            </li>
                            <li>
                                <p class="extra-small-text">&copy; <?php echo date('Y') ?></p>
                            </li>
                            <li>
                                <p class="extra-small-text">Cyphersol </p>
                            </li>
                        </ul>
                        <!--end footer left content-->
                    </li>
                    <li>
                        <!--footer service list-->
                        <ul>
                            <li>
                                <a class="regular-text text-color-light">Services</a>
                            </li>
                            <li>
                                <a href="services#bm-design" class="extra-small-text">Design</a>
                            </li>
                            <li>
                                <a href="services#bm-development" class="extra-small-text">Development</a>
                            </li>
                            <li>
                                <a href="services#bm-online-marketing" class="extra-small-text">online marketing</a>
                            </li>
                            <li>
                                <a href="services#bm-business" class="extra-small-text">Business</a>
                            </li>
                            <li>
                                <a href="services#bm-technology" class="extra-small-text">Technology</a>
                            </li>
                        </ul>
                        <!--end footer service list-->
                    </li>
                    <li>
                        <!--footer Resources list-->
                        <ul>
                            <li>
                                <a class="regular-text text-color-light">Resources</a>
                            </li>
                            <li>
                                <a href="portfolio" class="extra-small-text">Portfolio</a>
                            </li>
                            <li>
                                <a href="case-studies" class="extra-small-text">Case Studies</a>
                            </li>
                            <li>
                                <a href="blog" class="extra-small-text">Blog</a>
                            </li>
                        </ul>
                        <!--end footer Resources list-->
                    </li>
                    <li>
                        <!--footer Support list-->
                        <ul>
                            <li>
                                <a class="regular-text text-color-light">Support</a>
                            </li>
                            <li>
                                <a href="contact" class="extra-small-text">Contact</a>
                            </li>
                            <li>
                                <a href="privacy-policy" class="extra-small-text">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-conditions" class="extra-small-text">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                        <!--end footer Support list-->
                    </li>
                    <li class="big-width">
                        <!--footer social media list-->
                        <ul class="list-inline">
                            <li>
                                <p class="regular-text text-color-light">Get in Touch</p>
                                <ul class="social-links">
                                    <li>
                                        <a href="<?=$setting['facebook']?>">
                                            <span class="icon-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$setting['twitter']?>">
                                            <span class="icon-twitter"></span>
                                        </a>
                                    </li>
                                   
                                    <li>
                                        <a href="<?=$setting['whatsapp']?>">
                                            <span class="icon-instagram"></span>
                                        </a>
                                    </li>
                                 
                                    <li>
                                        <a href="<?=$setting['linkedin']?>">
                                            <span class="icon-linkedin"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!--end footer social media list-->
                    </li>
                </ul>
            </div>
        
        </div>
    </footer>
        <!-- ++++ Javascript libraries ++++ -->
    <!--js library of jQuery-->
    <script type="text/javascript" src="public/js/jquery.min.js"></script>
    <!--js library of bootstrap-->
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>

<script>
// my functions

   $('#btnQout').click(
	   function(){
		   $('#getAQuoteModal').modal('show');
		   }
	   );
</script>
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
                                <form method="POST" id="quotetForm"> 
                                    <h3>Get a Free Quote</h3>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-user"></span>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-envelope"></span>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="nter Email">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-telephone"></span>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-laptop"></span>
                                        <input type="text" name="website" id="website" class="form-control" placeholder="Website">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-bubble"></span>
                                        <textarea name="messages" id="messages" class="form-control" placeholder="Message"></textarea>
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
    <script type="text/javascript">
       $('#quotetForm').on("submit",function(e) {
     //alert(200);
          e.preventDefault(); // prevent submit form

var formData= new FormData();
var name= $('#name').val();
formData.append('name',name);
var email= $('#email').val();
formData.append('email',email);
alert(email);
var phone= $('#phone').val();
formData.append('phone',phone);
var website= $('#website').val();
formData.append('website',website);
var messages= $('#messages').val();
formData.append('messages',messages);

$.ajax({

      type: "POST",
      url: "contact/save",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
      beforeSend: function() {
      $('#loader').show();
    
      },

      success: function(response) {
         $('#loader').hide();
      if(response.status==200){
        $('.alert').show();
        $('.alert').html(response.message);
        $('.alert').addClass('alert-success');
        $('.alert').removeClass('alert-danger');
        $('#quotetForm')[0].reset();
      }else if(response.status==204){
        $('.alert').show();
        $('.alert').html(response.message);
        $('.alert').addClass('alert-danger');
      }else{
        $('.alert').show();
        $('.alert').html(response.message);
        $('.alert').addClass('alert-warning');
      }
           /******setTimeout start******/
               setTimeout(
                  function(){
                  $('.alert').hide();
                  },3000
                ); 
        /******setTimeout end******/
      }

});



        });
       
	   
	   $(document).ready(function(e) {
        //$('#getAQuoteModal').modal('show');
    	});
	
	
	
	          $('#contactForm').on("submit",function(e) {
     //alert(200);
          e.preventDefault(); // prevent submit form

var formData= new FormData();
var name= $('#tex_name').val();
formData.append('name',name);
var email= $('#tex_email').val();
formData.append('email',email);

var phone= $('#tex_phone').val();
formData.append('phone',phone);

var website= $('#tex_website').val();
formData.append('website',website);
//alert(website);
var messages= $('#tex_messages').val();
formData.append('messages',messages);

$.ajax({

      type: "POST",
      url: "contact/save",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
      beforeSend: function() {
      $('#loader').show();
    
      },

      success: function(response) {
         $('#loader').hide();
      if(response.status==200){
        $('.alert').show();
        $('.alert').html(response.message);
        $('.alert').addClass('alert-success');
        $('.alert').removeClass('alert-danger');
        $('#contactForm')[0].reset();
      }else if(response.status==204){
        $('.alert').show();
        $('.alert').html(response.message);
        $('.alert').addClass('alert-danger');
      }else{
        $('.alert').show();
        $('.alert').html(response.message);
        $('.alert').addClass('alert-warning');
      }
           /******setTimeout start******/
               setTimeout(
                  function(){
                  $('.alert').hide();
                  },3000
                ); 
        /******setTimeout end******/
      }

});



        });

   
       $('#sinupForm').on("submit",function(e) {
     //alert(200);
          e.preventDefault(); // prevent submit form

var formData= new FormData();
var name= $('#fname').val();
formData.append('name',name);
var email= $('#femail').val();
formData.append('email',email);
//alert(email);


$.ajax({

      type: "POST",
      url: "scubscriber/save",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'JSON',
      beforeSend: function() {
      $('#loader').show();
    
      },

      success: function(response) {
         $('#loader').hide();
      if(response.status==200){
        $('.alert').show();
        $('.alert').html(response.message);
        $('.alert').addClass('alert-success');
        $('.alert').removeClass('alert-danger');
        $('#sinupForm')[0].reset();
      }else if(response.status==204){
        $('.alert').show();
        $('.alert').html(response.message);
        $('.alert').addClass('alert-danger');
      }else{
        $('.alert').show();
        $('.alert').html(response.message);
        $('.alert').addClass('alert-warning');
      }
           /******setTimeout start******/
               setTimeout(
                  function(){
                  $('.alert').hide();
                  },3000
                ); 
        /******setTimeout end******/
      }

});



        });
       
		</script>



      