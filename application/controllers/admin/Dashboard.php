<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

public function __construct(){
		parent::__construct();
		// Your own constructor code
		//pre($this->session->userdata());
		if(!$this->session->userdata('logged_in')){
		redirect('admin/user/login','refresh');// redirect to login page
		}
}

	public function index()
	{
		
		$this->load->view('admin/index');
		
	}
	

}
