<?php
class Welcome extends CI_Controller{
	public function __construct(){
		parent ::__construct();
		$this->load->helper("url");
	}
	public function index(){
		$data['title']="Shop Laptop";
		$this->load->view("layout",$data);
	}
}