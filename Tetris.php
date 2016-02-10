<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tetris extends CI_Controller {

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
		$this->tetris_demo();
	}
	public function __construct(){
		parent::__construct();
		$this->load->helper('url', 'html', 'form');
		$this->load->library('javascript');
	} 
	public function tetris_demo(){
		$data['site_title'] = "City Block Designs - Hexagon JS Demo - Project";
		$data['comp_name'] = "City Block Designs";
		$data['author_name'] = "John Cedillo";
		$data['pg_title'] = "hexagon-demo";
		$data['scheme_name'] = "hexagon-demo-main";
		$data['breadcrumb'] = "Hexagon Demo";
		//$this->load->view("digital-clock-proj/view_cbd_solar_navbar", $data);
		$this->load->view("tetris-demo-proj/view_cbd_tetris_header", $data);
		$this->load->view("view_cbd_navbar", $data);
		$this->load->view("tetris-demo-proj/view_cbd_tetris_home", $data);
		$this->load->view("view_cbd_footer", $data);
	}
}
