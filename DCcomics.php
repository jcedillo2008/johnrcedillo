<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DCcomics extends CI_Controller {

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
		$this->DCcomics_proj();
	}
	public function __construct(){
		parent::__construct();
		$this->load->helper('url', 'html', 'form');
		$this->load->library('javascript');
	} 
	public function dccomics_proj(){
		$data['site_title'] = "City Block Designs - DC Comics - Fan Project";
		$data['comp_name'] = "City Block Designs";
		$data['author_name'] = "John Cedillo";
		$data['pg_title'] = "dc-comics-fanproj";
		$data['scheme_name'] = "dc-comics-fanproj-main";
		$data['breadcrumb'] = "DC Comics - Fan Proj";
		$this->load->view("dc-comics-proj/view_cbd_comics_header", $data);
		$this->load->view("dc-comics-proj/view_cbd_comics_navbar", $data);
		$this->load->view("dc-comics-proj/view_cbd_comics_home", $data);
		$this->load->view("dc-comics-proj/view_cbd_comics_footer", $data);
	}
}
