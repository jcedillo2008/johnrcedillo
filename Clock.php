<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clock extends CI_Controller {

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
		$this->digital_clock();
	}
	public function __construct(){
		parent::__construct();
		$this->load->helper('url', 'html', 'form');
		$this->load->library('javascript');
	} 
	public function digital_clock(){
		$data['site_title'] = "City Block Designs - Digital Clock - Project";
		$data['comp_name'] = "City Block Designs";
		$data['author_name'] = "John Cedillo";
		$data['pg_title'] = "digital-clock";
		$data['scheme_name'] = "digital-clock-main";
		$data['breadcrumb'] = "Digital Clock";
		//$this->load->view("digital-clock-proj/view_cbd_solar_navbar", $data);
		$this->load->view("digital-clock-proj/view_cbd_clock_header", $data);
		$this->load->view("view_cbd_navbar", $data);
		$this->load->view("digital-clock-proj/view_cbd_clock_home", $data);
		$this->load->view("digital-clock-proj/view_cbd_clock_footer", $data);
	}
}
