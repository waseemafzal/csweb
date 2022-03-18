<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermangment extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
				$this->load->model('usermangment_model');
        }

	public function index(){		
	$array=array();
	$array['modeltitle']='User Managements';
	$array['data']=	$this->usermangment_model->getData(); 	
	$this->load->view('Usermangment',$array);			
	}
	

	public function delete(){	
	extract($_POST);	
	$this->db->where('id', $id);
	$res=$this->db->delete('tbl_userm');
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
		$this->form_validation->set_rules('name', 'full name','required');
		$this->form_validation->set_rules('phone', 'contact number','required');
		$this->form_validation->set_rules('email', 'email address','required|valid_email');
		if($id==''){
		$this->form_validation->set_rules('password', 'password','required');
			}
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
                       		$response['message']=strip_tags(validation_errors());
							echo json_encode($response);exit;

                }
                else
                {
                   
				  // print_r($_POST);exit;
				   $data=array('name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password); 
					if(isset($id) and $id!=''){
						$result=  $this->usermangment_model->updateData($id,$data); 
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
					$result=  $this->usermangment_model->insertData($data); 
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
			$result=  $this->usermangment_model->editData($id);
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

