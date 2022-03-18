<?php 
include_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Orders</title>

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

   <form class="user" method="post">
                                  <div class="card-header">

                      <h4>Orders</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">User_id</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control"  name="user_id">
                          <div class="invalid-feedback">
                            What's your no.?
                          </div>
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" required="">
                          <div class="valid-feedback">
                            Good job!
                          </div>
                        </div>
                      </div>
                      
                    <div class="form-group mb-0 row">
                        <label class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="city" required="">
                          <div class="invalid-feedback">
                            What do you wanna say?
                          </div>
                        </div>
                      </div><br>
<div class="form-group mb-0 row">
                        <label class="col-sm-3 col-form-label">Amount</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="amount" required="">
                          <div class="invalid-feedback">
                            What do you wanna say?
                          </div>
                        </div>
                      </div><br>
<div class="form-group mb-0 row">
                        <label class="col-sm-3 col-form-label">Shipping_Address</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="shipping_address" required="">
                          <div class="invalid-feedback">
                            What do you wanna say?
                          </div>
                        </div>
<input type="submit" name="submit">
</div>
           </div>
</div>
                            </form>
     
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





