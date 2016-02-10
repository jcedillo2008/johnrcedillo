<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->home();
	}
	public function __construct(){
		parent::__construct();
		$this->load->helper('url', 'html', 'form');
		$this->load->library('javascript');
	} 
	public function home(){
		$data['site_title'] = "City Block Designs - Home";
		$data['comp_name'] = "City Block Designs";
		$data['author_name'] = "John Cedillo";
		$data['pg_title'] = "index";
		$data['scheme_name'] = "index-main";
		$data['breadcrumb'] = "Home";
		$this->load->view("view_cbd_header", $data);
		$this->load->view("view_cbd_navbar", $data);
		$this->load->view("view_cbd_home", $data);
		$this->load->view("view_cbd_footer", $data);
	}
	public function about(){
		$data['site_title'] = "City Block Designs - About";
		$data['comp_name'] = "City Block Designs";
		$data['author_name'] = "John Cedillo";
		$data['pg_title'] = "about";
		$data['scheme_name'] = "about-main";
		$data['breadcrumb'] = "About Me";
		$this->load->model("Model_get");
		$data["results"] = $this->Model_get->getData("about");
		$this->load->helper('url', 'html');
		$this->load->library('javascript');
		$this->load->view("view_cbd_header", $data);
		$this->load->view("view_cbd_navbar", $data);
		$this->load->view("view_cbd_about", $data);
		$this->load->view("view_cbd_footer", $data);
	}
}
