<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	public function error()
	{
		
		$this->load->view('404');
		
	}
	
	public function blank()
		{
			
			$this->load->view('blank');
			
		}
	
	public function buttons(){	
		$array=array();
	$array['moduleTitle']='Buttons Managements';	
			$this->load->view('buttons',$array);			
	}
	

	
	

}
