<?php

class Admin extends CI_Controller{
    public function __construct(){
		parent ::__construct();
		$this->load->library(array('form_validation','email','session','my_auth'));
		$this->load->helper(array("url","date","string","form"));
        
        $this->load->model("muser");
	}
    public function index(){
        
	}
    
    //--- Cap nhat tai khoan
    public function suataikhoan(){
        
        if(!$this->my_auth->is_Login())
        {
            $this->data['report'] = "Bạn vui lòng đăng nhập trước !";
            $this->load->view("user_view/dangky_thanhcong",$this->data);
        }
        
            $userid = $this->my_auth->userid;
            $data['info'] = $this->muser->getInfo($userid); 
            $data['title'] = "Trang Admin";
            if(isset($_POST['ok']))
            {
                $this->form_validation->set_rules("full_name","Họ Tên","required|min_length[6]");
                $this->form_validation->set_rules("address","Địa Chỉ","required");
                $this->form_validation->set_rules("phone","Số Điện Thoại","required|min_length[10]");
                $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
                $this->form_validation->set_message('min_length','%s có tối thiểu %s ký tự !');
                
                if($this->form_validation->run()==FALSE){
                    $this->load->view("admin_view/suataikhoan",$data);
                
                }else{
                    
                    $update = array(
                                    "full_name" => $this->input->post("full_name"),
                                    "address"   => $this->input->post("address"),
                                    "phone"   => $this->input->post("phone"),
                                    "gender"    => $_POST['gender'],
                                 );
                    $this->muser->updateUser($update,$userid);
                    redirect(base_url()."index.php/user"); 
                }
            }
            else
            {              
                $this->load->view("admin_view/suataikhoan",$data);    
            } 
        
    }
    
    //--- Cap nhat tai khoan
    public function suamatkhau(){
        $this->data['report'] = "";
        $this->data['title'] = "Trang Admin";
        if(!$this->my_auth->is_Login())
        {
            $this->data['report'] = "Bạn vui lòng đăng nhập trước !";
            $this->load->view("user_view/dangky_thanhcong",$this->data);
        }
        
            $userid = $this->my_auth->userid;
            $info = $this->muser->getInfo($userid); 
            $this->data['info'] = $info;
            
            if(isset($_POST['ok']))
            {
                $this->form_validation->set_rules("oldpassword","Mật Khẩu Cũ","required");
                $this->form_validation->set_rules("password","Mật Khẩu","required|matches[repassword]");
                $this->form_validation->set_rules("repassword","Xác Thực Mật Khẩu","required");
                $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
                $this->form_validation->set_message('matches','Xác thực %s sai !');
                
                if($this->form_validation->run()==FALSE){
                    
                    $this->load->view("admin_view/suamatkhau",$this->data);
                
                }else{
                    $oldpw = md5($this->input->post("oldpassword"));
                    if($oldpw === $info['password']){
                        $update = array(
                                "password" => md5($this->input->post("password")),
                                );
                    
                        $this->muser->updateUser($update,$userid);
                        $this->data['title'] = "Thành Công";
                        $this->data['report'] = "Đổi mật khẩu thành công !";
                        $this->load->view("user_view/dangky_thanhcong",$this->data);  
                    }else{
                        $this->data['report'] = "Mật Khẩu Cũ sai !";
                        $this->load->view("admin_view/suamatkhau",$this->data);
                    }
                            
                }
            }
            else
            {
                
                $this->load->view("admin_view/suamatkhau",$this->data);    
            } 
    }
    
    public function qlthanhvien(){
        $this->muser->getalldata();
        $max = $this->muser->num_rows();
        $min = 3;
        $this->data['num_rows'] = $max;
        //--- Paging
        if($max!=0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."index.php/admin/qlthanhvien";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 3; 
            $config['next_link'] = 'Next »'; 
            $config['prev_link'] = '« Prev';
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            
            $this->data['link'] = $this->pagination->create_links();
            $this->data['users'] = $this->muser->getalldata($min,$this->uri->segment($config['uri_segment']));
            $this->data['title'] = "Quản Lý Thành Viên";
            $this->load->view("admin_view/qlthanhvien",$this->data);
        
        }else{

            $this->data['report'] = "Không có dữ liệu để hiển thị";
            $this->my_layout->view("user_view/dangky_thanhcong",$this->data);
        }
    }    
    
    public function xoathanhvien(){
        $userid = $this->uri->segment(3);
        
        if(is_numeric($userid)){
            
            $this->muser->deleteUser($userid);
            redirect(base_url()."index.php/admin/qlthanhvien");
        
        }else{
            
            $data['report'] = "Duong dan khong hop le";
            $this->load->view("user_view/dangky_thanhcong",$data);
        }
    }
    
}