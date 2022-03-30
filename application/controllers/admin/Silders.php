
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Silders extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
				$this->load->model('silders_model','model');
        }

	public function index(){		
	$array=array();
	$array['modeltitle']='Silders';
	$array['data']=	$this->model->getData(); 	
	$this->load->view('admin/Silders',$array);
				
	}
	

	public function delete(){	
	extract($_POST);	
	$this->db->where('id', $id);
	$res=$this->db->delete('tbl_slider');
	if($res==1){
		$response['status']=200;
         $response['message']='deleted successfully';
	}else{
		$response['status']=204;
        $response['message']='Not deleted ';
		}
	echo json_encode($response);exit;	
	}
	public function save(){
		$response=array();
		extract($_POST);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title','required');
		$this->form_validation->set_rules('description', ' description','required');
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
                       		$response['message']=validation_errors();
							echo json_encode($response);exit;

                }
                else
                {
                   
				  //  //mata_description
				  
				  $image='noimg.png';
				  if(isset($_FILES['image']['name'])){
					 // print_r($_FILES);exit;
					$image=  $this->model->do_upload();
					  
					  }else{
						  if($id==''){
							  $response['status']=204;
                       		$response['message']='image field is required';
							echo json_encode($response);exit;
							  }

						  }
				   $data=array('title'=>$title,'description'=>$description,'image'=>$image); 
					if(isset($id) and $id!=''){
						$result=  $this->model->updateData($id,$data); 
						if($result==1){
						$response['status']=200;
                       		$response['message']='Update success';
							echo json_encode($response);exit;
						}else{
							$response['status']=204;
                       		$response['message']='Not Updated '.$result;
							echo json_encode($response);exit;
							}
						}else{
					$result=  $this->model->insertData($data); 
					if($result==1){
						$response['status']=200;
                       		$response['message']='Inserted successfully';
							echo json_encode($response);exit;
						}else{
							$response['status']=204;
                       		$response['message']='Not Inserted '.$result;
							echo json_encode($response);exit;
							}
						}
					
                }
		
		
		}
	function edit(){
			extract($_POST); 
			$result=  $this->model->editData($id);
			if(!empty($result)){
			$response['status']=200;
			$response['data']=$result;
			echo json_encode($response);exit;
			}else{
			$response['status']=204;
			$response['data']=$result;
			echo json_encode($response);exit;
			}
		}
	
	
	
}