<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	
	public function home()
		{
			
			$this->load->view('index');
			
		}
	public function services()
		{
			
			$this->load->view('services');
			
		}
		public function portfolio()
		{
			
			$this->load->view('portfolio');
			
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
			
			$this->load->view('blog');
			
		}
		public function contact()
		{
			
			$this->load->view('contact');
			
		}
		public function ecommerce()
		{
			
			$this->load->view('ecommerce');
			
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
	public function contentmanagementsystem()
		{
			
			$this->load->view('content-management-system');
			
		}
		public function logoandbranding()
		{
			
			$this->load->view('logo-and-branding');
			
		}
		public function websitedesign()
		{
			
			$this->load->view('website-design');
			
		}
		public function mobileappdesign()
		{
			
			$this->load->view('mobile-app-design');
			
		}
		public function graphicdesign  ()
		{
			
			$this->load->view('graphic-design');
			
		}
			public function videoproduction  ()
		{
			
			$this->load->view('video-production');
			
		}
			public function mobileappdevelopment  ()
		{
			
			$this->load->view('mobile-app-development');
			
		}
		
		public function searchengineoptimization ()
		
		{
			
			$this->load->view('search-engine-optimization');
			
		}
		public function emailmarketing ()
		
		{
			
			$this->load->view('email-marketing');
			
		}
		public function displaymarketing()
		
		{
			
			$this->load->view('display-marketing');
			
		}
		public function socialmediamarketing()
		
		{
			
			$this->load->view('social-media-marketing');
			
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
			
			$this->load->view('team');
			
		}
		public function awardsandrecognitions()
		
		{
			
			$this->load->view('awards-and-recognitions');
			
		}
		public function career()
		
		{
			
			$this->load->view('career');
			
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
		public function index()
		
		{
			
			$this->load->view('index');
			
		}


}
