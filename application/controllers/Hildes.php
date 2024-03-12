<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hildes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	**/

	public function __construct()
	{
	        parent::__construct();
	        error_reporting(0);
	        $this->load->database();
	        $this->load->model('Model_functions','model');
	        $this->load->helper(array('form', 'url', 'dall'));
	        $this->load->library('session');
	}

	/**
	*

		@HATH NA LAIE

	*
	*/
	public function template($page = '', $data = '', $jsScript = false)
	{
		$data['setting'] = $this->model->setting(1);
		$this->load->view('header',$data);
		$this->load->view($page,$data);
		$this->load->view('footer',$data);
		if ($jsScript !== false) {
			$this->load->view('scripts/'.$page);
		}
	}
	/**
	*
		@START
	*
	*/
	public function index()
	{
		$data = page(1);
		$data['active_menu'] = 'home';
		$blog['blog'] = $this->model->blog(3);
		if ($blog['blog']) {
			$data['blog'] = $this->load->view('html/blog',$blog,true);
		}
		else{
			$data['blog'] = false;
		}
		$data['testimonial'] = $this->model->get_row("SELECT * FROM `testimonial` WHERE `show_home` = 1;");
		$mission['mission'] = $this->model->our_mission();
		$data['mission'] = $this->load->view('html/our_mission',$mission,true);
		$data['red_section'] = $this->load->view('html/red_section','',true);
		$this->template('index', $data);
	}
	/**
	*
	*
	*	@PAGEs
	*
	*/
	public function about_us()
	{
		$data = page(7);
		$data['active_menu'] = 'about_us';
		$team['team'] = $this->model->team();
		if ($team['team']) {
			$data['team'] = $this->load->view('html/team',$team,true);
		}
		else{
			$data['team'] = false;
		}
		$testimonials['testimonials'] = $this->model->testimonials();
		$data['testimonials'] = $this->load->view('html/testimonials',$testimonials,true);
		$mission['mission'] = $this->model->our_mission();
		$data['mission'] = $this->load->view('html/our_mission',$mission,true);
		$this->template('about_us', $data);
	}
	public function privacy_policy()
	{
		$data = page(8);
		$data['active_menu'] = '';
		$this->template('privacy_policy', $data);
	}
	public function terms_and_conditions()
	{
		$data = page(9);
		$data['active_menu'] = '';
		$this->template('terms_and_conditions', $data);
	}
	public function our_mission()
	{
		$data = page(15);
		$data['active_menu'] = '';
		$mission['mission'] = $this->model->our_mission();
		$data['mission'] = $this->load->view('html/our_mission',$mission,true);
		$this->template('our_mission', $data);
	}
	public function pricing()
	{
		$data = page(13);
		$data['active_menu'] = 'pricing';
		$this->template('pricing', $data);
	}
	public function contact_us()
	{
		$data = page(11);
		$data['active_menu'] = 'contact_us';
		$this->template('contact_us', $data);
	}
	public function faqs()
	{
		$data = page(5);
		$data['active_menu'] = 'faqs';
		$faqs['faqs'] = $this->model->faqs();
		$data['faqs'] = $this->load->view('html/faqs',$faqs,true);
		$this->template('faqs', $data);
	}
	public function team()
	{
		$data = page(12);
		$data['active_menu'] = 'team';
		$team['team'] = $this->model->team();
		if ($team['team']) {
			$data['team'] = $this->load->view('html/team',$team,true);
		}
		else{
			$data['team'] = false;
		}
		$data['red_section'] = $this->load->view('html/red_section','',true);
		$this->template('team', $data);
	}
	public function testimonials()
	{
		$data = page(13);
		$data['active_menu'] = 'testimonials';
		$data['red_section'] = $this->load->view('html/red_section','',true);
		$testimonials['testimonials'] = $this->model->testimonials();
		$data['testimonials'] = $this->load->view('html/testimonials',$testimonials,true);
		$this->template('testimonials', $data);
	}
	public function blog()
	{
		$data = page(6);
		$data['active_menu'] = 'blog';
		$blog['blog'] = $this->model->blog(0);
		if ($blog['blog']) {
			$data['blog'] = $this->load->view('html/blog',$blog,true);
		}
		else{
			$data['blog'] = false;
		}
		$this->template('blog', $data);
	}
	public function blog_detail($slug)
	{
		$data['post'] = $this->model->get_blog_post($slug);
		$data['meta_title'] = $data['post']['meta_title'];
		$data['meta_key'] = $data['post']['meta_key'];
		$data['meta_desc'] = $data['post']['meta_desc'];
		$data['popular'] = $this->model->get_results("SELECT `title`,`slug`,`image`,`at` FROM `blog` WHERE `blog_id` != '".$data['post']['blog_id']."' ORDER BY RAND() LIMIT 6;");
		$data['active_menu'] = '';
		$this->template('blog_detail', $data, 'blog_detail');
	}
	public function services()
	{
		$data = page(2);
		$data['active_menu'] = 'services';
		$this->template('services', $data);
	}
	public function service_detail($slug)
	{
		$data['meta_title'] = "Services Detail";
		$data['meta_key'] = "Services Detail";
		$data['meta_desc'] = "Services Detail";

		$data['active_menu'] = '';
		$this->template('service_detail', $data);
	}


	/*
	*
	*
	* AJAX
	*
	*
	*/
	public function submit_newsletter()
	{
		$chk = $this->model->get_row("SELECT `email` FROM `newsletter` WHERE `email` = '".$_POST['email']."';");
		if (!($chk)) {
			$this->db->insert('newsletter',$_POST);
		}
		echo json_encode(array("status"=>true));
	}

	/*
	*
	*
	* SITEMAP
	*
	*
	*/



	public function sitemap()
	{ 
	  // Create an array of pages to include in the sitemap
		$data['pages'] = array(
			array('slug' => ''),
			array('slug' => 'about-us'),
			array('slug' => 'contact-us'),
			array('slug' => 'privacy-policy'),
			array('slug' => 'team'),
			array('slug' => 'testimonial'),
			array('slug' => 'services'),
			array('slug' => 'terms-and-conditions'),
			array('slug' => 'faqs'),
		);
		$this->db->select('slug');
	    $this->db->from('blog');
	    $data['blog'] = $this->db->get()->result_array();

		// Load the sitemap view and pass in the page data
		header("Content-Type: application/xml;charset=utf-8");
		$this->load->view('sitemap', $data);
	}

	public function show_404()
	{
	  $this->output->set_status_header('404');
	  $this->load->view('404');
	}

	/**
	*

		@TEST

	*
	*/
	public function test()
	{
		die;
		$query = $this->db->query('UPDATE `phase` SET `count`=`count`+1 WHERE `phase_id` = 1');
	}

}
