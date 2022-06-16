<?php include_once"includes/header.php";
/*
tbl_cvs
id,name,email,phone,description,file,job_id,created_date accept=".pdf"

*/

 ?>
<!--end header-->
 
    <!-- ++++ banner ++++ -->
        </div>
    <section class="banner  o-hidden banner-inner contact-banner">
        <div class="container">
            <!--banner text-->
            <div class="banner-txt"><br><br>
                <h1>C V S</h1>
                <p class="semi-bold">Get in touch with us to see how our company can help you grow
                    <br /> your business online.</p>
            </div>
            <!--end banner text-->
    </section>
    <!-- ++++ end banner ++++ -->
    <!-- ++++ contact form design ++++ -->
    <section class="bg-white o-hidden common-form-section contact-form-wrapper">
        <div class="container">
            <!--section title -->
            <h2 class="b-clor">Send Us Your C V S</h2>
            <hr class="dark-line" />
            <!--end section title -->
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="customise-form contact-form">
                        <form method="POST" id="applyForm"> 
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-user"></span>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-envelope"></span>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-telephone"></span>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group customised-formgroup">
                                        <span class="fa fa-file-pdf-o"></span>
                                        <input type="file" accept="application/pdf"  name="image" id="image" class="form-control">
                                    </div>
                                </div>
                                 <input type="hidden" id="job_id" name="job_id" value="<?php echo $_GET['job_id'] ?>">
                                 <input type="text" id="created_date" name="created_date" style="display:none">
                                <div class="col-xs-12">
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-bubble"></span>
                                        <textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-fill full-width">Submit<i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;margin: 3px 8px 0 0;float: right;"></i>
                                    <span class="icon-chevron-right"></span>
                                </button>
                            </div>   
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-info-box-wrapper">
                        <div class="contact-info-box">
                            <span class="icon-telephone"></span>
                            <div>
                                <h6>Call / whatsapp</h6>
                                <p>+923417090031</p>
                            </div>
                        </div>
                        <div class="contact-info-box">
                            <span class="icon-telephone"></span>
                            <div>
                                <h6>Skype</h6>
                                <p>waseemafzal100</p>
                            </div>
                        </div>
                        <div class="contact-info-box">
                            <span class="icon-envelope"></span>
                            <div>
                                <h6>Send an email</h6>
                                <p>waseemafzal31@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-info-box">
                            <ul class="social-links">
                                <li>
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
                                 <li>
                                    <a href="career">
                                        <span class="fa fa-exchange"></span>
                                    </a>
                                </li>
                                 
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact form design -->
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
                                        <input type="text" name="femail" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-telephone"></span>
                                        <input type="text" name="fphone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-laptop"></span>
                                        <input type="text" name="fwebsite" class="form-control" placeholder="Website">
                                    </div>
                                    <div class="form-group customised-formgroup">
                                        <span class="icon-bubble"></span>
                                        <textarea name="fmessages" class="form-control" placeholder="Message"></textarea>
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
  
</body>


<!-- Mirrored from themes.axilweb.com/html/marketo/modern-big-digital-agency/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2017 15:04:31 GMT -->
</html>
<script type="text/javascript">
       $('#applyForm').on("submit",function(e) {
     //alert(200);
          e.preventDefault(); // prevent submit form

var formData= new FormData();
var name= $('#name').val();
formData.append('name',name);
var email= $('#email').val();
formData.append('email',email);
//alert(email);
var phone= $('#phone').val();
formData.append('phone',phone);

var description= $('#description').val();
formData.append('description',description);

var job_id= $('#job_id').val();
formData.append('job_id',job_id);

//alert(image);
 if($('#image').val()!=''){
		formData.append("image", document.getElementById('image').files[0]);
		}
$.ajax({
	

      type: "POST",
      url: "appyfrom/saved",
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
        $('#applyForm')[0].reset();
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
	
	
	
	   
    </script>