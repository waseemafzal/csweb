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
	public function saveuser(){
		
		if(isset($_POST['btnSubmit'])){
			// data insert
			unset($_POST['btnSubmit']);
			extract($_POST);
			$data=array(
			'name'=>$txt_name,
			'email'=>$txt_email,
			'password'=>$txt_password,
			'phone'=>$txt_phone,
			'dob'=>$txt_dob
			);
			
			$result	=$this->db->insert('users',$data); // table , array
			if($result==1){
			echo 'data inserted';
				}
		
			}
		
		
		
	}
}
