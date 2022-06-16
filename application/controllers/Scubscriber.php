<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scubscriber extends CI_Controller {

public function __construct()
        {
                parent::__construct();
				$this->load->model('silders_model');
				$this->load->model('cmservices_model');
				$this->load->model('portfolio_model');
				$this->load->model('Blogs_model');
        }
		public function save(){
		$response=array();
		extract($_POST);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'name','required');
		$this->form_validation->set_rules('email', 'email','required');
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
                       		$response['message']=validation_errors();
							echo json_encode($response);exit;

                }
                else
                {
                   
				 //print_r($_POST);exit;
				   $data=array('name'=>$name,'email'=>$email); 
					$result=  $this->db->insert('tbl_scubscriber',$data); 
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



}