<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'controllers/cpanel.php';

class Welcome extends Cpanel{
	public function __construct(){
		parent ::__construct();
		$this->data['k']="";
		$this->load->library('pagination');
		$this->load->helper("url");
	}
	public function index(){
		$this->layout();
	}
	function layout(){
		//$this->_data['idCat']=NULL;
		$arraySearch = array();
		$column = "id_sp";
		$orderBy = "asc";
		$this->data['title']="Shop Laptop";
		//$this->_data['template']='../views/container.php';
		//$data['title']="Shop Laptop";
		$this->data['itemsspcc']=$this->Mbase->getspcc();
		$this->_data['data']['itemssppb']=$this->Mbase->getsppb();
		$this->_data['data']['itemssptc']=$this->Mbase->getsptc();
		$this->load->view("layout",$this->data);
	}
	public function chitietsanpham(){
		
	}
	
}