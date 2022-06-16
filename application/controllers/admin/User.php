<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function signup()
	{
		$this->load->view('admin/register');
	}
	
	public function login()
	{
		$this->load->view('admin/login');	
	}
	public function logout()
	{
		$this->session->sess_destroy();
							redirect('admin/user/login','refresh');

	}
	public function saveuser(){
		//print_r($_POST);exit;
		// form validation in codeigniter
				extract($_POST);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First  name','required');
		$this->form_validation->set_rules('lname', 'Last name','required');
		$this->form_validation->set_rules('email', 'email address','required|valid_email');
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
                       		$response['message']=strip_tags(validation_errors());
							echo json_encode($response);exit;

                }
		
			$array=array();
			$array['status']=204;
			$array['message']='Not successfull';
		if(isset($_POST)){
			// data insert
			
			$password =md5($password);
			$data=array(
			'fname'=>$fname,
			'lname'=>$lname,
			'email'=>$email,
			'password'=>$password
			);
			
			$result	=$this->db->insert('users',$data); // table , array
			if($result==1){
			//echo 'data inserted';
			$array['status']=200;
			$array['message']='Signup successfull';
				}else{
			$array['message']=$this->db->error ['message'];
				}
		
			}
			
			echo json_encode($array);
		
		
		
	}
	public function loginuser(){
		//print_r($_POST);exit;
		// form validation in codeigniter
				extract($_POST);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'email address','required|valid_email');
$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
                {
                       		$response['status']=204;
                       		$response['message']=strip_tags(validation_errors());
							echo json_encode($response);exit;

                }
		
			$array=array();
			$array['status']=204;
			$array['message']='Unable to login ';
		if(isset($_POST)){
			// data insert
			
			$password =md5($password);
			$data=array(
			'email'=>$email,
			'password'=>$password
			);
			
			//$result	=$this->db->query("select * from users where  email='$email' and password='$password'");
		$data	=	$this->db->where($data)->get('users');
		//pre($data);
			if($data->num_rows()>0){
				$raheel = $data->result_array();
				$user= $raheel[0];
				//echo '<pre>';print_r($user[0]);exit;
				$newdata = array(
				'username'  => $user['fname'].' '.$user['lname'],
				'email'     => $user['email'],
				'logged_in' => TRUE
					);
		//echo '==>';	print_r($newdata);exit;
			$this->session->set_userdata($newdata); // set session
				$array['status']=200;
			     $array['message']='Login successfull';
				
				
				
				
				}
		
		
			}
			
			echo json_encode($array);
		
		
		
	}
}
