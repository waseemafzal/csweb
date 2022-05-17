<?php
 include_once"config/config.php";
//  echo '<pre>';
//print_r($_POST);
$response=array();
$response['status']=201;
$response['message']='Not sure what happen';
if(isset($_POST['email'])){
$email= $_POST['email'];
}else{
  $email='n/a';
}
  $insertQuery="INSERT INTO  `tbl_contactus` (`id`, `name`, `email`, `phone`, `website`, `messages`) VALUES (
  '".$_POST['name']."',
  '".$email."',
   '".$_POST['phone']."',
   '".$_POST['website']."',
   '".$_POST['messages']."'
  
)";
//echo $insertQuery;exit;
 $result= $con->query($insertQuery);
  if($result==1){
$response['status']=200;
$response['message']='Thanks for contact us. We will back to you soon.';
}else{
$response['status']=204;
$response['message']='Error. something went wrong';
}

echo json_encode($response);

?>