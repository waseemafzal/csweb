<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('category_model','model');
        }

	
	
	// main page to show data in table
	public function index(){		
	$array=array();
	$array['title']='Category Managements';
	$array['data']=	$this->model->getData(); // call to model function to get data from database	
	$this->load->view('Category',$array);			
	}
	
	// delete function to delete data
	public function delete(){	
	extract($_POST);	
	$this->db->where('id', $id);
	$res=$this->db->delete('tbl_cat'); // delete query to delete from db 
	if($res==1){
		$response['status']=200;
         $response['message']='deleted successfully';
	}else{
		$response['status']=204;
        $response['message']='Not deleted ';
		}
	echo json_encode($response);exit;	
	}
	
	// save data either insert or update using one function
	public function save(){
		$response=array();
		// form validation start
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cat', 'Category', 'required|min_length[3]|max_length[10]|is_unique[tbl_cat.category]');
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
                       		$response['message']=strip_tags(validation_errors());
							echo json_encode($response);exit;

                }
				// form validation end
                else
                {
					// if form is valid then below code
                   extract($_POST);
				   
				   $data=array('category'=>$cat); // This is data array to insert or update the category is a db colmn name and $cat is the value comming from form enter by user
				   
				   // check if form has id field in hidden and not empty
					if(isset($id) and $id!=''){
						// if not empty then it mean we have to update
						// update
						$result=  $this->model->updateData($id,$data); // call the update model function and pass id and array
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
							 // insert data
					$result=  $this->model->insertData($data); // call insert function in model to insert data and passed data array
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
	
	// edit function will get data and show to user in form so he can edit it 
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
