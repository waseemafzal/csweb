<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {


public function __construct()
        {
                parent::__construct();
				
				$this->load->model('silders_model');
				$this->load->model('cmservices_model');
				$this->load->model('portfolio_model');
				$this->load->model('Blogs_model');
				$this->load->model('Settings_model');
				$this->load->model('Careers_model');
				$this->load->model('team_model');
				$this->load->model('tastingmonail_model');
				header('Content-type: application/json');
        }
	

		public function blogdata()
		{
			$array['status']=	200;
			$array['totalrecord']=	record_count('tbl_blogs');
			
			$array['BlogsArray']=	$this->db->select("tbl_blogs.*,CONCAT('" . base_url() . "upload/', image) as image ")->get('tbl_blogs')->result_array();
			$array['recentBlogs']=	$this->Blogs_model->recentBlogs();
			echo json_encode($array);exit;
		}
		
		
		
		

			public function deleteblogs(){	
	extract($_POST);	
	$this->db->where('id');
	$res=$this->db->delete('tbl_blogs');
	if($res==1){
		$array['status']=	200;
         $response['message']='deleted successfully';
	}else{
		$response['status']=204;
        $response['message']='Not deleted ';
		}
	echo json_encode($array);exit;
			}
			
			
			
	public function insertblogs(){
		
		$response=array();
		
		extract($_POST);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title','required');
		$this->form_validation->set_rules('category', 'select category','required');
		$this->form_validation->set_rules('description', ' description','required');
		
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
                       		$response['message']=validation_errors();
							echo json_encode($response);exit;


                }
                else
                {
                   
				   $data=array('title'=>$title,'category'=>$category,'description'=>$description,'date'=>$date,'tags'=>$tags,'meta_title'=>$meta_title,'meta_description'=>$meta_description,'meta_keywords'=>$meta_keywords);
				  
				  if(isset($_FILES['image']['name'])){
					 // print_r($_FILES);exit;
					$data['image']=  $this->model->do_upload();
					  
					  }else{
						  if($id==''){
							  $response['status']=204;
                       		$response['message']='image field is required';
							echo json_encode($response);exit;
							  }

						  }
				   
					
						
					$result=  $this->model->insertData($data); 
					if($result==1){
						$response['status']=200;
                       		$response['message']='Inserted successfully';
							echo json_encode($response);exit;
						}else{
							$response['status']=204;
                       		$response['message']='Not Inserted '.$result;
							echo json_encode($array);exit;
							}
						}
					
                }
		
		
		
		
	

		
		

}
