<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'controllers/cpanel.php';

class Welcome extends Cpanel{
    
	public function __construct(){
		parent ::__construct();
		$this->data['k']="";
		$this->load->library(array('pagination','cart'));
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
		$this->data['itemsspcc']=$this->Mbase->getspcc();
		$this->data['itemssppt']=$this->Mbase->getsppt();
		$this->data['itemssptc']=$this->Mbase->getsptc();
		$this->load->view("layout",$this->data);
		//$this->load->view("chitietsanpham",$this->data);
	}
	public function chitietsanpham($param){
		$this->data['title']="Shop Laptop";
		$this->data['detail_product']=$this->Mbase->get_detail_product($param);
		$this->data['sp_muanhieu']=$this->Mbase->getspmn();
		$this->load->view("chitietsanpham",$this->data);
	}
	public function tatcasanpham($param){
		$this->data['title']="Shop Laptop";
		//$this->data['tatca_sp']=$this->Mbase->get_tatca_sp($param);
		$this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
		$this->data['sp_muanhieu']=$this->Mbase->getspmn();
		
		$config['base_url'] = base_url('index.php/welcome/tatcasanpham'); // xác định trang phân trang 
        $config['total_rows'] = $this->Mbase->count_laptop($param); // xác định tổng số record 
        $config['per_page'] = 6; // xác định số record ở mỗi trang 
        $config['uri_segment'] = 2; // xác định segment chứa page number 
        $this->pagination->initialize($config); 
		$this->data['tatca_sp'] = $this->Mbase->get_tatca_sp($param,$config['per_page'],$this->uri->segment(2)); 
			
		$this->load->view("tatcasanpham",$this->data);
	}
	public function thanhtoan(){
		$this->data['title']="Thanh Toán";
		$this->load->view("thanhtoan",$this->data);
	}
	public function sosanh(){
		$this->data['title']="So Sánh";
		$this->load->view("sosanh",$this->data);
	}
	public function lienhe(){
		$this->data['title']="Liên Hệ";
		$this->load->view("lienhe",$this->data);
	}
	//****************************************************
	//Tất cả hàm liên quan đến giỏ hàng
	public function add_giohang($param){
		$mcart= $this->Mbase->get_detail_product($param);		
		$data_cart = array(
				"id"=>$param,
				"name"=>$mcart['name_sp'],
				"price"=>$mcart['price'],
				"qty"=>1
		);
		$this->cart->insert($data_cart);	
	}
	public function view_giohang(){
		$data['title'] ="Thông Tin Giỏ hàng";
		$data['info'] = $this->cart->contents();
		$this->load->view("giohang",$data);
	}
//********************************************************

    
    public function tintuc(){
        $this->data['title']="Tin Tức";
        $this->load->view("tintuc",$this->data);        
    }
    
}