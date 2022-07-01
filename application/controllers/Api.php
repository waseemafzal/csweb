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
	
	public function home()
		{
			$array['status']=	200; 
			$array['slider']=	$this->silders_model->getData(); 
			
			$array['cmservices']=	$this->cmservices_model->getData();
			$array['portfolio']=	$this->portfolio_model->getData();
			$array['blog']=	$this->Blogs_model->getData();
			$array['testimonial']=	$this->tastingmonail_model->getData();
			echo json_encode($array);
			
		} 
		
		
		public function contactus(){
			
		$response=array();
		extract($_POST);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'name','required');
		$this->form_validation->set_rules('email', ' email','required');
		$this->form_validation->set_rules('phone', ' phone','required');
		$this->form_validation->set_rules('messages', ' message','required');
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
                       		$response['message']=strip_tags(validation_errors());
							echo json_encode($response);exit;

                }
                else
                {
                   if($website==''){
					   $website=' ';
					   }
				 //print_r($_POST);exit;
				   $data=array('name'=>$name,'email'=>$email,'phone'=>$phone,'website'=>$website,'messages'=>$messages); 
					$result=  $this->db->insert('tbl_contactus',$data); 
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
		
		/****************/
		
		public function service()
		{
		$type=	$_GET['type'];
		$id='';
		if($type=='mobile-app-development'){
			$id=2;
			}elseif($type=='logo-and-branding'){
			$id=4;
			}elseif($type=='website-design'){
			$id=5;
			}elseif($type=='mobile-app-design'){
			$id=6;
			}elseif($type=='graphic-design'){
			$id=7;
			}elseif($type=='video-production'){
			$id=8;
			}elseif($type=='content-management-system'){
			$id=9;
			}elseif($type=='ecommerce'){
			$id=10;
			}elseif($type=='search-engine-optimization'){
			$id=11;
			}elseif($type=='email-marketing'){
			$id=12;
			}elseif($type=='display-marketing'){
			$id=13;
			}elseif($type=='social-media-marketing'){
			$id=14;
			}
			
			
			
			
			$array['status']=200;
				
			$array['dataArray']=	$this->db->select("cms_process.*,CONCAT('" . base_url() . "upload/', image) as image ")->get('cms_process')->result_array();
			$array['processArray']=	$this->db->where(array('cms_id'=>$id))->get('cms_process')->result_array();
			echo json_encode($array);exit;
			
		}
		public function servicesdata()
		{	
		$array['status']=	200;
		$array['total']=	record_count('cms_services');	
        $array['cmservicesArray']=	$this->db->select("cms_services.*,CONCAT('" . base_url() . "upload/', banner) as banner ")->get('cms_services')->result_array();
			echo json_encode($array);exit;
			
		}
		public function portfoliotbl()
		{
			$array['status']=	200;	
			$array['portfolioArray']=	$this->db->select("tbl_portfolio.*,CONCAT('" . base_url() . "upload/', image) as image ")->get('tbl_portfolio')->result_array();
			echo json_encode($array);exit;
			
		}
		
		/*$dataArr=array();
			foreach($data as $row){
				
				$row['image']=base_url().'upload/'.$row['image'];
				$dataArr[]=$row;
				}
				
			$array['portfolioArray']=	$dataArr;*/
			
			// insertBlog
			//deleteBlog
		
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
			if(!isset($id) or $id==''){
				$response['status']=204;
                       		$response['message']='id is required';
							echo json_encode($response);exit;
				}
		
	$this->db->where('id',$id);
	$res=$this->db->delete('tbl_blogs');
	if($res==1){
		$response['status']=	200;
         $response['message']='deleted successfully';
	}else{
		$response['status']=204;
        $response['message']='Not deleted ';
		}
	echo json_encode($response);exit;
			}
			
	public function insertblogs(){
		
		$response=array();
		
		extract($_POST);
		$this->load->library('form_validation');$this->form_validation->set_rules('title', 'title','required');
		$this->form_validation->set_rules('category', 'select category','required');
		$this->form_validation->set_rules('description', ' description','required');
		$this->form_validation->set_rules('date', 'date','required');
		$this->form_validation->set_rules('tags', ' tags','required');
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
							$str = strip_tags(validation_errors());
					$str=str_replace('required.\nThe','required. The',$str);
                       		$response['message']=$str;
							// str_replace('\n','',);
							
							echo json_encode($response);exit;


                }
                else
                {
                   
				   $data=array('title'=>$title,'category'=>$category,'description'=>$description,'date'=>$date,'tags'=>$tags,'meta_title'=>$meta_title,'meta_description'=>$meta_description,'meta_keywords'=>$meta_keywords);
				  if(isset($_FILES['image']['name']) and $_FILES['image']['name']!=''){
					 // print_r($_FILES);exit;
					$data['image']=  $this->Blogs_model->do_upload();
					  
					  }else{
						  if(!isset($id)){
							  $response['status']=204;
                       		$response['message']='image field is required';
							echo json_encode($response);exit;
							  }

						  }
					
					if(isset($id) and $id!=''){
						// update
							 	$result=  $this->db->where('id',$id)->update('tbl_blogs',$data); 
								if($result==1){
						$response['status']=200;
                       		$response['message']='Updated successfully';
							echo json_encode($response);exit;
						}else{
							$response['status']=204;
                       		$response['message']='Not updated '.$result;
							echo json_encode($response);exit;
							}
							  }
						  else{
								$result=  $this->db->insert('tbl_blogs',$data); 
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
	
		
		
		
	

			public function teams(){
		
			 $array['status']=	200;
		     $array['TeamArray']=	  $this->db->select("tbl_team.*,CONCAT('" . base_url() . "upload/', image) as image ")->get('tbl_team')->result_array();
			 echo json_encode($array);exit;
			
		}
		public function careers()
		
		{
			 $array['status']=	200;
			$array['CareersArray']=	$this->Careers_model->getData();
			 echo json_encode($array);exit;
			
		}
		

}
