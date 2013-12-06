<?php

class User extends CI_Controller{
    
    public function __construct(){
		parent ::__construct();
		$this->load->library(array('form_validation','email','session','my_auth'));
		$this->load->helper(array("url","date","form","string"));
        
        $this->load->model("muser");
	}
    public function index(){
		if(!$this->my_auth->is_Login())
        {
            redirect(base_url()."user_view/dangnhap");
            exit();
        }
        else
        {
            $userid = $this->my_auth->userid;
            $data['info'] = $this->muser->getInfo($userid);
            
            $this->my_layout->view("user_view/home",$data);
        }
	}
	function layout(){
		$this->data['title']="Đăng Nhập";
		$this->load->view("user_view/dangnhap",$this->data);
	}
    public function dangnhap(){
        $this->data['title']="Đăng Nhập";
        $this->load->view("user_view/dangnhap",$this->data);
    }
    public function dangky(){     
        //--- Neu Login thi khong duoc dang ki
        if($this->my_auth->is_Login()){
            redirect(base_url()."user_view/home");
            exit();
        }
        
        $this->data['title']="Đăng Ký";
        $this->form_validation->set_rules("full_name","Họ tên","required|min_length[6]");
        $this->form_validation->set_rules("password","Mật Khẩu","required|matches[repassword]");
        $this->form_validation->set_rules("email","Email","required|valid_email|callback_checkEmail");
        $this->form_validation->set_rules("address","Địa chỉ","required");
        $this->form_validation->set_rules("phone","Số Điện Thoại","required|min_length[10]");
        $this->form_validation->set_rules("checkbox","Đồng ý","required");
        $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
        $this->form_validation->set_message('valid_email','Email không hợp lệ !');
        $this->form_validation->set_message('min_length','%s có tối thiểu %s ký tự !');
        $this->form_validation->set_message('matches','Xác thực mật khẩu sai !');
        if($this->form_validation->run()==FALSE){
            
            $this->load->view("user_view/dangky",$this->data);
        }
        else
        {
            $salt = random_string('alnum',5);
            $add = array(
                "full_name" => $this->input->post("full_name"),
                "salt"      => $salt,
                "password"  => md5($this->input->post("password")),
                "email"     => $this->input->post("email"),
                "address"   => $this->input->post("address"),
                "phone"     => $this->input->post("phone"),
                "level"     => 2, // mac dinh la memmber khi dang ki thanh vien
                "gender"    => $_POST['gender'],
                "add_date"  => date("Y-m-d H:i:s"),
                "active"    => 0, // chua kich hoat
                );  
                    
             $message = "";
             if($this->muser->addUser($add)){

                /*$userid = mysql_insert_id();
                $link_active = base_url()."home/user/active/?userid=".$userid."&key=".md5($salt);
                $message  = "Please follow this link to active your acount <br/>".
                $message .= "Link : <a href=".$link_active.">".$link_active."</a><br/>";
                $message .= "password : ".$this->input->post("password");

                $mail = array(
                    "to_receiver"   => $add['email'],
                    "message"       => $message,
                );

                $this->load->library("my_email");
                $this->my_email->config($mail);
                $this->my_email->sendmail();*/

                $this->load->view("user_view/dangky_thanhcong",$this->data);
            }   
        }
        
    }
    //---- Kiem tra Email khi đăng kí
    function checkEmail($email)
    {
        if($this->muser->checkEmail($email,$id)==TRUE){
            return TRUE;
        }
        else{
            $this->form_validation->set_message("checkEmail","Email này đã đăng ký !");
            return FALSE;
        }
    }
}