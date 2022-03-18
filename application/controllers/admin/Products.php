<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
				$this->load->model('product_model');
        }

	public function index(){		
	$array=array();
	$array['modeltitle']='Product';
	$array['data']=	$this->product_model->getData(); 	
	$this->load->view('Products',$array);			
	}
	

	public function delete(){	
	extract($_POST);	
	$this->db->where('id', $id);
	$res=$this->db->delete('tbl_product');
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
		$this->form_validation->set_rules('product', 'select product','required');
		$this->form_validation->set_rules('price', 'price','required');
		if($id==''){
		$this->form_validation->set_rules('description', 'description','required');
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
				   $data=array('name'=>$name,'product'=>$product,'price'=>$price,'description'=>$description); 
					if(isset($id) and $id!=''){
						$result=  $this->product_model->updateData($id,$data); 
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
					$result=  $this->product_model->insertData($data); 
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
			$result=  $this->product_model->editData($id);
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

