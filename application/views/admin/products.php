
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<base href="<?php echo base_url() ?>" >
    <title><?php echo $title ?></title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style type="text/css">
    .title{
        display: inline-block;
    }
.fr{ float: right; }
.fl{float: left}
.pad0{ padding: 0 }
.clear{
    clear: both;
}
</style>
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
            <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="title h3 mb-2 text-gray-800"><?=$modeltitle;?></h1>
                   <a class="btn btn-lg fr btn-info" href="#" data-toggle="modal" data-target="#productsModal">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </a>
                       <div class="clear">&nbsp;</div>         
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                          
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Select ppoduct</th>
                                            <th>Price</th>
                                            <th>description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php 
									foreach($data as $key=>$val){
									?>
                                     <tr id="row_<?php echo  $val['id'] ?>">
                                            <td><?php echo $val['name']  ?></td>
                                            <td><?php echo $val['product']  ?></td>
                                            <td><?php echo $val['price']  ?></td>
                                            <td><?php echo $val['description']  ?></td>
                                            <td><a class="btn btn-info" onClick="editRecord('<?php echo  $val['id'] ?>')">edit</a>
                                             <a onClick="deleteRecord('<?php echo  $val['id'] ?>')"  class="btn btn-danger">delete</a></td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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

    <!-- Logout Modal-->
    <div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <form id="form_add_update">
                <div class="modal-body">
                    <div id="customAlert" class="alert" style="display: none" ></div>
                    
                       
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" id="text_name" name="name"  class="form-control" >
                                            
                                        </div>
                                       <label>Select Product category:</label>
                    <select class="form-control" name="product" id="text_category">
                   
                       <option value="Car">Car</option>
            <option value="Bus">Bus</option>
            <option value="Motorcycle">Motorcycle</option>
              <option value="Cycle ">Cycle </option>
            <option value="Computer">Computer</option>
            <option value="Laptop">Laptop</option>
             <option value="LCD">LCD</option>
              <option value="Television">Television</option>
            <option value="Washing Machine">Washing Machine</option>
            <option value="Fan">Fan</option>
             <option value="Table Fan">Table Fan</option>
              <option value="Refrigerator">Refrigerator</option>
            <option value="Iron">Iron</option>
            <option value="Microwave Oven">Microwave Oven</option>
                    </select>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" id="text_price" name="price"  class="form-control" >
                                             
                                        </div>
                                        <div class="form-group">
                                            <label>description</label>
                                            <textarea id="text_description" name="description"  class="form-control"rows="5" ></textarea>
                                            
                                        </div>
                                       
                                     
                                   
                    

                </div>
               
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                     <button type="submit" class="btn btn-success"><i class="fa fa-spinner fa-spin" id="loader" style="font-size:24px;display: none"></i> Save </button>
                      <input type="hidden" id="id" name="id" value="" >
                </div>
                </form>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<script type="text/javascript">

    /**************delete record******************/


    function deleteRecord(id){

var formdata= new FormData();
formdata.append('id',id);
formdata.append('action','delete');

if(!confirm('Are you sure to delete')){
	return false;
	}
    // $("#loader").hide(); 
  /*********ajax start******************/ 

$.ajax({
  type: "POST",
  url: "admin/products/delete",
  processData: false,
    contentType: false,
    cache: false,
    data: formdata,
    enctype: 'multipart/form-data',
   datatype: "json",
   
  success: function(response){
 
//row_9
    //console.log(response);
   response = jQuery.parseJSON(response);
console.log(response);
   $("#row_"+id).hide();
     if(response.status==200){
         $("#alert").addClass("alert-success");
     }
     else if(response.status==204){
        $("#alert").addClass("alert-danger");
     }

        $("#alert").show(); // will show the div display:block
        $("#alert").html(response.message); 
       setTimeout(function(){
        $("#alert").hide();
        },1000);

  }
  });
  /*********ajax end******************/ 

}


    $('#form_add_update').on("submit",function(e) {
e.preventDefault();
var formdata= new FormData();

var other_data = $('#form_add_update').serializeArray();
	
    $.each(other_data,function(key,input){
        formdata.append(input.name,input.value);
    });   
	/* if($('#image').val()!=''){
		formData.append("image", document.getElementById('image').files[0]);
		}*/


$.ajax({
  type: "POST",
  url: "admin/products/save",
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
  // alert(response.status);
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


//Update Data
function editRecord(id){

var formdata= new FormData();
formdata.append('id',id);
formdata.append('action','edit');



$.ajax({
  type: "POST",
  url: "admin/products/edit",
  processData: false,
    contentType: false,
    cache: false,
    data: formdata,
    enctype: 'multipart/form-data',
   datatype: "json",
  
  success: function(response){
    console.log(response);
   response = jQuery.parseJSON(response);

/*
{"status":200,"data":{"id":"2","name":"ferter","product":"Bus","price":"-74","description":"ertfawert"}}
*/
$('#text_name').val(response.data.name);
//$('#text_category').val(response.data.name);
$("#text_category option[value='"+response.data.product+"']").attr("selected","selected");

$('#text_price').val(response.data.price);
$('#text_description').val(response.data.description);

$('#id').val(id);
$('#action').val('update');

$('#productsModal').modal('show');

  }
  // ajax end
});


}

</script>