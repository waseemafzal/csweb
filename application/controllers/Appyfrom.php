<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appyfrom extends CI_Controller {

public function __construct()
        {
                parent::__construct();
				$this->load->model('silders_model');
				$this->load->model('cmservices_model');
				$this->load->model('portfolio_model');
				$this->load->model('Blogs_model');
        }
		public function saved(){
		$response=array();
/*		print_r($_FILES);
		print_r($_POST);exit;
*/		extract($_POST);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'name','required');
		$this->form_validation->set_rules('email', 'email','required');
		$this->form_validation->set_rules('phone', 'phone','required');
		$this->form_validation->set_rules('description', 'description','required');
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
                       		$response['message']=validation_errors();
							echo json_encode($response);exit;

                }
                else
                {
					$data=array('name'=>$name,'email'=>$email,'phone'=>$phone,'description'=>$description,'job_id'=>$job_id,'created_date'=>date('Y-m-d  H:i:s'));  
				  if(isset($_FILES['image']['name'])){
					 
					$data['image']=  $this->do_upload();
					  
					  }else{
						  if($id==''){
							  $response['status']=204;
                       		$response['message']='image field is required';
							echo json_encode($response);exit;
							  }

						  }
						  
                   
				 //print_r($_POST);exit;
				   $data=array('name'=>$name,'email'=>$email,'phone'=>$phone,'description'=>$description,'image'=>$image,'job_id'=>$job_id,'created_date'=>date('Y-m-d  H:i:s')); 
					$result=  $this->db->insert('tbl_cvs',$data); 
					if($result==1){
						$response['status']=200;
                       		$response['message']='Thanks for contact us we will back to you within one business day!';
							echo json_encode($response);exit;
						}else{
							$response['status']=204;
                       		$response['message']='Not saved '.$result;
							echo json_encode($response);exit;
							}
						}
					
                
		
		
		}
		public function do_upload()
        {
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'pdf';
             $config['encrypt_name']           = true;
                $config['remove_spaces']           = true;
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $response['status']=204;
                       		$response['message']='Not uploaded';
                       		$response['error']=$error;
							echo json_encode($response);exit;
                }
                else
                {
					$uploaded=$this->upload->data();
					return $uploaded['file_name'];
					
                }
        }



}