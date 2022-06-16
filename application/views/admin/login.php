<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="<?php echo base_url() ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>


<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>


                                    <form id="form_add_update" name="form_add_update" class="user">
                            <div style="display:none" id="customAlert"></div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                       
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="form-control form-control-user" name="submit">
                                                
                                        </div>
 
                                        
                                    </form>
                                   </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<script type="text/javascript">
    $('#form_add_update').on("submit",function(e) {
	//	alert(200);
e.preventDefault(); // prevent form submit
var formdata= new FormData();
var other_data = $('#form_add_update').serializeArray();
    $.each(other_data,function(key,input){
        formdata.append(input.name,input.value);
		
  });

$.ajax({
  type: "POST",
  url: "admin/user/loginuser",
  processData: false,
    contentType: false,
    cache: false,
    data: formdata,
    enctype: 'multipart/form-data',
   datatype: "json",
   beforeSend: function() {
        $("#loader").show();  
    },
  success: function(response){

     $("#loader").hide();  
   response = jQuery.parseJSON(response);
    console.log(response);
  //alert(response.status);
     if(response.status==200){
         $("#customAlert").addClass("alert-success");
     }
     else if(response.status==204){
        $("#customAlert").addClass("alert-danger");
     }

        $("#customAlert").show(); // will show the div display:block
        $("#customAlert").html(response.message); 
      
       setTimeout(function(){
    $("#customAlert").hide();
	 if(response.status==200){
	window.location.href='admin/dashboard';
	 }
        },2000);

  }
  // ajax end
});


    });


$( document ).ready(function() {
    console.log( "ready!" );
	setTimeout(function(){
	$('#email').val('');
	$('#password').val('');
	},1000);
	
});

</script>