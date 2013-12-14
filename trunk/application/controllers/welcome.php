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
		$this->data['contain']="container";
		$this->data['itemsspm']=$this->Mbase->getspm();
		$this->data['itemsspcc']=$this->Mbase->getspcc();
		$this->data['itemssppt']=$this->Mbase->getsppt();
		$this->data['itemssptc']=$this->Mbase->getsptc();
		$this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
		$this->load->view("layout",$this->data);
		//$this->load->view("chitietsanpham",$this->data);
	}
	public function chitietsanpham($param){
		$this->data['title']="Shop Laptop";
		$this->data['detail_product']=$this->Mbase->get_detail_product($param);
		$this->data['sp_muanhieu']=$this->Mbase->getspmn();
		$this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
		$this->load->view("chitietsanpham",$this->data);
	}
	public function tatcasanpham(){
		
		$data['title']="Shop Laptop";
		$st=$this->uri->segment(3);
		$tl=$this->Mbase->getLoaiByID($st);
		$data['idd']=$st;
		$data['tenloai']=$tl['name_loai'];
		$data['hanglaptop']=$this->Mbase->get_hang_laptop();
		$data['sp_muanhieu']=$this->Mbase->getspmn();
		// Load thư viện để phân trang
		$this->load->library('pagination');
		// Cấu hình phân trang 
		$data['base_url'] = base_url().'index.php/welcome/tatcasanpham/'.$st; // xác định trang phân trang 
        $data['total_rows'] =$this->Mbase->count_laptop($st); // xác định tổng số record 
        $data['per_page'] = 6; // xác định số record ở mỗi trang 
        $data['uri_segment'] = 4; // xác định segment chứa page number 
        $this->pagination->initialize($data); 
		$data['tatca_sp'] = $this->Mbase->get_tatca_sp($st,$data['per_page'],$this->uri->segment(4)); 
			
		$this->load->view("tatcasanpham",$data);
	}
	public function lay_sp_theohang($param){
		$this->data['title']="Shop Laptop";
		$this->data['tenloai']="Laptop";
		//$this->data['tatca_sp']=$this->Mbase->get_tatca_sp($param);
		$this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
		$this->data['sp_muanhieu']=$this->Mbase->getspmn();
		
		$config['base_url'] = base_url().'index.php/welcome/lay_sp_theohang/'.$param; // xác định trang phân trang 
        $config['total_rows'] = $this->Mbase->count_laptop_theohang($param); // xác định tổng số record 
        $config['per_page'] = 6; // xác định số record ở mỗi trang 
        $config['uri_segment'] = 4; // xác định segment chứa page number 
        $this->pagination->initialize($config); 
		$this->data['tatca_sp'] = $this->Mbase->get_sp_theohang($param,$config['per_page'],$this->uri->segment(4)); 
			
		$this->load->view("tatcasanpham",$this->data);
	}
	
	public function thanhtoan(){
		$this->data['title']="Thanh Toán";
		$this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
		$this->load->view("thanhtoan",$this->data);
	}
	public function sosanh(){
		$this->data['title']="So Sánh";
		$this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
		$this->load->view("sosanh",$this->data);
	}
	public function lienhe(){
		$this->data['title']="Liên Hệ";
		$this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
		$this->load->view("lienhe",$this->data);
	}

	//**************************************Gio hang*******************
	function add_giohang($param){
		$product=$this->Mbase->getProductById($param);
		$insert = array(
				'id' => $param,
				'name'=> $product['name_sp'],
				'qty' => 1,
				'price' => $product['price']
		);
		$this->cart->insert($insert);
		redirect(base_url());
	}
	public function view_giohang(){
		
		$data['title'] ="Giỏ hàng";
		$data['hanglaptop']=$this->Mbase->get_hang_laptop();
		$data['info'] = $this->cart->contents();
		$this->load->view("giohang",$data);
	}
	public function update(){
		$data = $_POST;
		foreach ($data as $item) {
			$this->cart->update($item);
		}
		$data['title'] ="Giỏ hàng";
		$data['info'] = $this->cart->contents();
		$this->load->view("giohang",$data);
	}
	public function del_giohang(){
		$id = $this->uri->segment(3);
		$data = $this->cart->contents();
		foreach ($data as $val) {
			if ($val['id'] == $id) {
				$data_remove = array(
					"rowid" =>$val['rowid'],
					"qty"=>0
				);
				$this->cart->update($data_remove);
			}
		}
		redirect(base_url()."index.php/welcome/view_giohang");
	}
//*****************************************************************

    public function tintuc(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        $this->data['title']="Tin Tức";
        //load thư viện cần thiết
        $this->load->library('pagination');
        $this->load->helper('url');
        //cấu hình phân trang
        $config['base_url']= base_url('index.php/welcome/tintuc/');//xác định phân trang
        $config['total_rows']= $this->Mbase->count_all();//xác định tổng số record
        $config['per_page']= 4;//xác định số record mỗi trang
        $config['uri_segment']= 3;//xác định seament chứa page number
        $this->pagination->initialize($config);
               
        $this->data['news']=$this->Mbase->list_all($config['per_page'],$this->uri->segment(3));
        $this->load->view("tintuc",$this->data);        
    }
    public function tintucchitiet($param){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        $this->data['title']="Tin Tức";
        $this->data['new_title_for_new_detail']=$this->Mbase->get_title_news_for_new_detail($param);
		$this->data['new_detail']=$this->Mbase->get_detail_new($param);
        $this->load->view("tintucchitiet",$this->data);
    }
  }