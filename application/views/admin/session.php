<?php
    session_start();
?>
<html>
<head>
<title>
</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
  include_once("config.php");
 if(isset($_POST['submit'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $email_search= "select * from tbl_users where email='$email' "; 
   $query=mysqli_query($conn, $email_search);
   $email_count=mysqli_num_rows($query);
   if($email_count){
   $email_pass=mysqli_fetch_assoc($query);
   $db_pass=$email_pass['password'];
   $_SESSION['name']= $email_pass['name'];
   if($db_pass){
           echo "Login successful";
		   ?>
            <script>location.replace("index.php");</script>		   
		   
		   <?php
   }else{
		 echo "Invalid Password";  
   }
   }
   }
?>
</body>
</html>