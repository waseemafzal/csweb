<?php
include_once "config.php";
?>
<?php 
$id=1;
$sql="select * from setting where id='$id'";
$query=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($query);

?>
           

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

     <?php include "sidebar.php";?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               <?php include_once"topnav.php"; ?>

        <form class="user" method="post" enctype="multipart/form-data">
                                  <div class="card-header">

                      <h4>Admin Page</h4>
                    </div>
                    <div class="card-body">
                      <div class="card-footer text-right">
                      <input type="file" name="file" >
                      <img  width="100" src="upload/<?php echo $row['logo']?>" >
                      <input type="hidden" name="pre_filename" value="<?php echo $row['logo']?>">
                    </div>
       
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Enter Phone</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control"  name="phone" required="" value="<?php echo $row['phone'] ?>">
                          <div class="invalid-feedback">
                            What's your no.?
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Enter Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" required=""value="<?php echo $row['email'] ?>">

                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Enter Description</label>
                        <div class="col-sm-9">
                          <textarea type="text" class="form-control" name="description"><?php echo $row['description']?></textarea>
                          <div class="valid-feedback">
                            Good job!
                          </div>
                        </div>
                      </div>
                      
                    <div class="form-group mb-0 row">
                        <label class="col-sm-3 col-form-label">Enter Facebook</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="facebook" required="" value="<?php echo $row['facebook'] ?>">
                          <div class="invalid-feedback">
                            What do you wanna say?
                          </div>
                        </div>
                      </div><br>
<div class="form-group mb-0 row">
                        <label class="col-sm-3 col-form-label">Enter Instagram</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="instagram" required="" value="<?php echo $row['instagram'] ?>">
                          <div class="invalid-feedback">
                            What do you wanna say?
                          </div>
                        </div>
                      </div><br>
<div class="form-group mb-0 row">
                        <label class="col-sm-3 col-form-label">Enter Twitter</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="twitter" required="" value="<?php echo $row['twitter'] ?>">
                          <div class="invalid-feedback">
                            What do you wanna say?
                          </div>
                        </div>
<input type="submit" name="submit">
</div>
           </div>
</div>
                            </form>
                                    <?php
   if(isset($_POST['submit'])){
extract($_POST);
$image=$_POST['pre_filename'];

// check if he choosed the file
if(isset($_FILES['file']['name'])){
  $filename=$_FILES['file']['name'];
  $temp=$_FILES['file']['tmp_name'];
  $ext=explode('.', $filename);
  $check=strtolower(end($ext));
  $reqext=array('jpg','jpeg','png');
    if(in_array($check, $reqext)){
    $destination='upload/'.$filename;

    $fileresult=move_uploaded_file($temp, $destination);
    if($fileresult==1){
     $image = $filename;
    }
  }
}



   $Phone=$_POST['phone'];
   $Email=$_POST['email'];
   $Address=$_POST['description'];
   $Facebook=$_POST['facebook'];
   $instagram=$_POST['instagram'];
   $Twitter=$_POST['twitter'];
$update="UPDATE setting SET logo='$image', phone='$Phone', email='$Email', description='$description',  facebook='$facebook',  instagram='$instagram', twitter='$Twitter' WHERE id='$id'";
//echo $update;exit;
//echo $update;exit;
 if($conn->query($update)==true){
echo "<div class='alert alert-success'>Data updated succseefully</div>";

   }
 }
?>
                       <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>



