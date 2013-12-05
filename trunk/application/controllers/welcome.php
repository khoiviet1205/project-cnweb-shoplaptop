<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'controllers/cpanel.php';

class Welcome extends Cpanel{
    
	public function __construct(){
		parent ::__construct();
		$this->data['k']="";
		$this->load->library(array('pagination','form_validation','email'));
		$this->load->helper(array("url","date"));
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
		$this->data['itemsspmn']=$this->Mbase->getspmn();
		$this->data['itemsspcc']=$this->Mbase->getspcc();
		$this->data['itemssppt']=$this->Mbase->getsppt();
		$this->data['itemssptc']=$this->Mbase->getsptc();
		$this->load->view("layout",$this->data);
		//$this->load->view("chitietsanpham",$this->data);
	}
	public function chitietsanpham($param){
		$this->data['title']="Shop Laptop";
		$this->data['detail_product']=$this->Mbase->get_detail_product($param);
		$this->data['sp_uachuong']=$this->Mbase->get_sp_uachuong();
		$this->load->view("chitietsanpham",$this->data);
	}
	public function tatcasanpham($param){
		$this->data['title']="Shop Laptop";
		$this->data['tatca_sp']=$this->Mbase->get_tatca_sp($param);
		$this->load->view("tatcasanpham",$this->data);
	}
	public function giohang(){
		$this->data['title']="Giỏ Hàng";
		$this->load->view("giohang",$this->data);
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
    public function dangnhap(){
        $this->data['title']="Đăng Nhập";
        $this->load->view("dangnhap",$this->data);
    }
    public function tintuc(){
        $this->data['title']="Tin Tức";
        $this->load->view("tintuc",$this->data);        
    }
    //--- Dang ki thanh vien
    function dangky()
    {        
        $this->data['title']="Đăng Ký";
        $this->form_validation->set_rules("full_name","Họ tên","required|min_length[6]");
        $this->form_validation->set_rules("password","Mật Khẩu","required|matches[repassword]");
        $this->form_validation->set_rules("email","Email","required|valid_email");
        $this->form_validation->set_rules("address","Địa chỉ","required");
        $this->form_validation->set_rules("phone","Số Điện Thoại","required|min_length[10]");
        $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
        $this->form_validation->set_message('valid_email','Email không hợp lệ !');
        $this->form_validation->set_message('min_length','%s có tối thiểu %s ký tự !');
        $this->form_validation->set_message('matches','Xác thực mật khẩu sai !');
        if($this->form_validation->run()==FALSE){
            
            $this->load->view("dangky",$this->data);
        }
        else
        {
                
        }
        
    }
   
}