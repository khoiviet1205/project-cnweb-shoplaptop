<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'controllers/cpanel.php';

class Welcome extends Cpanel{
	public function __construct(){
		parent ::__construct();
		$this->_data['k']="";
		$this->load->library('pagination');
		$this->load->helper("url");
	}
	public function index(){
		//$this->_data['idCat']=NULL;
		$arraySearch = array();
		$column = "id_sp";
		$orderBy = "asc";
		$this->_data['title']="Shop Laptop";
		$this->_data['template']='../views/container.php';
		//$data['title']="Shop Laptop";
		// Cấu hình phân trang
		
		$config['total_rows']=$this->Mproduct->countAll();
		$number = $config['per_page']=8;
		$config['uri_segment']=2;
		$offset = (int) $this->uri->segment(2);
		$this->pagination->initialize($config);
		//$this->_data['data']['items'] = $this->Mproduct->getAll();
		$this->_data['data']['items'] = $this->Mproduct->getAllPagingWhere($number,$offset,$arraySearch,$column,$orderBy);
		$this->_data['data']['itemsspcc']=$this->Mbase->getspcc();
		$this->_data['data']['itemssppb']=$this->Mbase->getsppb();
		$this->load->view("layout",$this->_data);
	}

	
}