<?php

class User extends CI_Controller{
    
    public function __construct(){
		parent ::__construct();
		$this->load->library(array('form_validation','email','session','my_auth'));
		$this->load->helper(array("url","date","string","form"));
        
        $this->load->model("muser");
	}
    public function index(){
		$this->dangnhap();
	}
    public function dangnhap(){
        if($this->my_auth->is_Login()){
            $this->data['title']="Trang Cá Nhân";
            $userid = $this->my_auth->userid;
            $this->data['info'] = $this->muser->getInfo($userid);
            $this->load->view("user_view/home",$this->data);
            //exit();
        }
        $this->data['title']="Đăng Nhập";
        $this->data['error']="";
        $this->form_validation->set_rules("email","Email","required");
        $this->form_validation->set_rules("password","Mật Khẩu","required");
        $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
        if($this->form_validation->run()==FALSE){           
            $this->load->view("user_view/dangnhap",$this->data);
        }
        else{
            $u = $this->input->post("email");
            $p = $this->input->post("password");
            $session = $this->muser->checkLogin($u,$p);
             
            if($session)
            {
                //if(!$this->my_auth->is_Active($session['userid'])){
                    
                    //$data['error'] = "Please check mail and active your account !";
                    //$this->load->view("frontend/login",$data);
                //}
                //else
                //{
                    $this->data['title']="Trang Cá Nhân";
                     $data = array(
                                   "email"  => $session['email'],
                                   "userid"    => $session['userid'],
                                   "level"  => $session['level'],
                               );
                                
                     $this->my_auth->set_userdata($data);
                     $userid = $this->my_auth->userid;
                     $this->data['info'] = $this->muser->getInfo($userid);
                    // redirect(base_url()."user_view/home");
                    $this->load->view("user_view/home",$this->data);
                 //}
             }
             else
             {  
                $this->data['error']="Email hoặc mật khẩu sai !";
                $this->load->view("user_view/dangnhap",$this->data);    
             }
        }
    }
    public function dangky(){     
        //--- Neu Login thi khong duoc dang ki
        if($this->my_auth->is_Login()){
            $this->data['title']="Trang Cá Nhân";
            $userid = $this->my_auth->userid;
            $this->data['info'] = $this->muser->getInfo($userid);
            $this->load->view("user_view/home",$this->data);
            //exit();
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
    public function dangxuat(){
        $this->my_auth->sess_destroy();
		$this->dangnhap();
    }
    
    //---- Kiem tra Email khi đăng kí
    function checkEmail($email)
    {
        $id = $this->uri->segment(4);
        if($this->muser->checkEmail($email,$id)==TRUE){
            return TRUE;
        }
        else{
            $this->form_validation->set_message("checkEmail","Email này đã đăng ký !");
            return FALSE;
        }
    }
    
}