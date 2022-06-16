<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
        }
	
	public function home()
		{
			$array['sliderData']=	$this->silders_model->getData(); 
			
			$array['cmservicesData']=	$this->cmservices_model->getData();
			$array['portfolioData']=	$this->portfolio_model->getData();
			$array['BlogsData']=	$this->Blogs_model->getData();
			$array['tastingmonailData']=	$this->tastingmonail_model->getData();
			$this->load->view('index',$array);  
			
		} 
			
	public function	blogdetails(){
		$array['detail']=	$this->Blogs_model->getDataById($_GET['id']);
		$array['recentBlogs']=	$this->Blogs_model->recentBlogs();
						$this->load->view('blog-details',$array);  

			}
		
		
	
	public function services()
		{		
$array['cmservicesData']=	$this->cmservices_model->getData();
			$this->load->view('services',$array);
			
		}

		
		
		public function portfolio()
		{
			$array['portfolioData']=	$this->portfolio_model->getData();
			
			$this->load->view('portfolio',$array);
			
		}
		public function case_studies()
		{
			
			$this->load->view('case_studies');
			
		}
		public function about()
		{
			
			$this->load->view('about');
			
		}
		public function blog()
		{
			$array['BlogsData']=	$this->Blogs_model->getData();
			$array['recentBlogs']=	$this->Blogs_model->recentBlogs();
			//pre($array['recentBlogs']);
			$this->load->view('blog',$array);
			
		}
		public function contact()
		{
			
			$this->load->view('contact');
			
		}
		
		public function domain()
		{
			
			$this->load->view('domain');
			
		}
		public function hosting()
		{
			
			$this->load->view('hosting');
			
		}
		public function reporting()
		{
			
			$this->load->view('reporting');
			
		}
	
		public function cms($id)
		{
			$array['row']=	$this->cmservices_model->editData($id);
			$array['processArray']=	$this->db->where(array('cms_id'=>$id))->get('cms_process')->result_array();
			$this->load->view('cms',$array);
			
		}
		
		
		
		public function digitalstrategy()
		
		{
			
			$this->load->view('digital-strategy');
			
		}
			public function businessconsulting()
		
		{
			
			$this->load->view('business-consulting');
			
		}
			public function contentwriting()
		
		{
			
			$this->load->view('content-writing');
			
		}
		public function bigdataanalysis()
		
		{
			
			$this->load->view('big-data-analysis');
			
		}
		public function team()
		
		{
			$array['TeamData']=	   $this->team_model->getData();
			$this->load->view('team',$array);
			
		}
		public function awardsandrecognitions()
		
		{
			
			$this->load->view('awards-and-recognitions');
			
		}
		public function career()
		
		{
			$array['CareersData']=	$this->Careers_model->getData();
			
			$this->load->view('career',$array);
			
		}
		public function customerreviews()
		
		{
			
			$this->load->view('customer-reviews');
			
		}
		public function faqs()
		
		{
			
			$this->load->view('faqs');
			
		}
		public function searchresults()
		
		{
			
			$this->load->view('search-results');
			
		}
		public function termsconditions()
		
		{
			
			$this->load->view('terms-conditions');
			
		}
		public function privacypolicy()
		
		{
			
			$this->load->view('privacy-policy');
			
		}
		public function applyfrom()
		
		{
			
			$this->load->view('apply-from');
			
		}
		public function index()
		
		{
			
			$this->load->view('index');
			
		}


}
