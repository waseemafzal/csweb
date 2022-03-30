

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

.customWidth{
    width: 90%;
    max-width: initial;
}

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
                   <a class="btn btn-lg fr btn-info" href="#" data-toggle="modal" data-target="#cmsprocessModal">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </a>
                       <div class="clear">&nbsp;</div>         
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cms Process</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                          
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                             <th>Icon Class</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                             <th>Cms Id</th> 
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php 
									foreach($data as $key=>$val){
									?>
                                     <tr id="row_<?php echo  $val['id'] ?>">
                                            <td><?php echo $val['title']  ?></td>
                                            <td><?php echo $val['icon_class']  ?></td>
                                            <td><?php 
											$des= strip_tags($val['description']);
											
echo get_words($des,10);
											  ?></td>
                                            <td><img width="50" src="upload/<?php echo $val['image']  ?>" ></td>
                                            <td><?php echo $val['cms_id']  ?></td>
                                            
                                            <td><a class="btn btn-info btn-xs" onClick="editRecord('<?php echo  $val['id'] ?>')">
                                            <i class="fa fa-pen"></i></a>
                                             <a onClick="deleteRecord('<?php echo  $val['id'] ?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
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
    <div class="modal fade" id="cmsprocessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog customWidth" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cms Process</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="form_add_update">
                <div class="modal-body">
                    <div id="customAlert" class="alert" style="display: none" ></div>
                    
                       
                                        <div class="col-md-12 col-xs-12">
                                            <label>Title</label>
                                            <input type="text" id="text_title" name="title"  class="form-control" >
                                            
                                        </div>
                                         <div class="col-md-12 col-xs-12">
                                            <label>Icon Class</label>
                                            <input type="text" id="icon_class" name="icon_class"  class="form-control" >
                                            
                                        </div
                                  
                                        ><div class="col-md-12 col-xs-12">
                                            <label>Description</label>
                                            <textarea id="description" name="description"  class="form-control"rows="5" ></textarea>
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <label>Image</label>
                                            <input type="file" id="image" name="image"  class="form-control" >
                                            <div id="imgdiv" class="col-xs-12"></div>
                                        </div>
                                         <div class="col-md-12 col-xs-12">
                                           <input type="hidden" id="cms_id" name="cms_id" value="<?php echo $_GET['cms_id'] ?>"  class="form-control" >
                                            
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
  url: "admin/cmsprocess/delete",
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
if($('#image').val()!=''){
		formdata.append("image", document.getElementById('image').files[0]);
		}
		

formdata.append("description", CKEDITOR.instances.description.getData());


$.ajax({
  type: "POST",
  url: "admin/cmsprocess/save",
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


//Update Data
function editRecord(id){

var formdata= new FormData();
formdata.append('id',id);
formdata.append('action','edit');



$.ajax({
  type: "POST",
  url: "admin/cmsprocess/edit",
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
$('#text_title').val(response.data.title);
$('#icon_class').val(response.data.icon_class);

CKEDITOR.instances.description.setData(response.data.description);
$('#cms_id').val(response.data.cms_id);
$('#id').val(id);
$('#action').val('update');

$('#cmsprocessModal').modal('show');
var src ='upload/'+response.data.image;
var img= '<div class="thumbnail"><img src="'+src+'" width="50"></div>';

$('#imgdiv').html(img);

  }
  // ajax end
});


}

</script>

<script src="public/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
			$(function () {
				CKEDITOR.replace('description');
			});
			
</script>