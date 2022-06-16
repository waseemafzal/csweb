<!DOCTYPE html>
<html lang="en">

<head>

    <base href="<?=base_url()?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Register</title>

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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form id="form_add_update" name="form_add_update" class="user">
                            <div style="display:none" id="customAlert"></div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="fname" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lname" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="confirm_password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <input type="submit" value="Register Account" name="btnSubmit" class="btn btn-primary btn-user btn-block">
                                    
                               
                                <hr>
                               
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
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
e.preventDefault();
var formdata= new FormData();
var other_data = $('#form_add_update').serializeArray();
    $.each(other_data,function(key,input){
        formdata.append(input.name,input.value);
  });

$.ajax({
  type: "POST",
  url: "admin/user/saveuser",
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
	location.reload();
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