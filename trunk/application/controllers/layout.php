<?php
class Layout extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$temp['title']="Shop Laptop";
		$temp['temple']='index_layout';
		$temp['data']['info']="Chào thầy và các bạn!";
		$this->load->view("bluesky/layout",$temp);
	}
	
}
