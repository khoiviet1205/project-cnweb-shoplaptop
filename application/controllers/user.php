<?php

class User extends CI_Controller{
    
    public function __construct(){
		parent ::__construct();
		$this->load->library(array('form_validation','email','session','my_auth','cart'));
		$this->load->helper(array("url","date","string","form"));
        
        $this->load->model("muser");
	}
    public function index(){
		$this->dangnhap();
	}
    public function dangnhap(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        if($this->my_auth->is_Login()){
            $userid = $this->my_auth->userid;
            $this->data['info'] = $this->muser->getInfo($userid);
            if($this->my_auth->is_Admin()){
                $this->data['title']="Trang Admin";
                $this->load->view("admin_view/home",$this->data);
            } else{
                $this->data['title']="Trang Cá Nhân";
                $this->load->view("user_view/home",$this->data);
            }
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
                if(!$this->my_auth->is_Active($session['userid'])){
                    $data['userid'] = $session['userid'];
                    $data['report'] = "Tài khoản của bạn chưa được kích hoạt, vui lòng kiểm tra email để kích hoạt !";
                    $data['title'] = "Kích hoạt tài khoản";
                    $this->load->view("user_view/dangky_thanhcong",$data);
                }
                else
                {
                    $data = array(
                                   "email"  => $session['email'],
                                   "userid"    => $session['userid'],
                                   "level"  => $session['level'],
                               );
                    $this->my_auth->set_userdata($data);
                    $userid = $this->my_auth->userid;
                    if($this->my_auth->is_Admin()){
                        $this->data['title']="Trang Admin";
                        $this->data['info'] = $this->muser->getInfo($userid);
                        $this->load->view("admin_view/home",$this->data);
                    } else {
                        $this->data['title']="Trang Cá Nhân";
                        $this->data['info'] = $this->muser->getInfo($userid);
                        $this->load->view("user_view/home",$this->data);
                    }
                 }
             }
             else
             {  
                $this->data['error']="Email hoặc mật khẩu sai !";
                $this->load->view("user_view/dangnhap",$this->data);    
             }
        }
    }
    public function dangky(){    
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        //--- Neu Login thi khong duoc dang ki
        if($this->my_auth->is_Login()){
            $userid = $this->my_auth->userid;
            $this->data['info'] = $this->muser->getInfo($userid);
            if($this->my_auth->is_Admin()){
                $this->data['title']="Trang Admin";
                $this->load->view("admin_view/home",$this->data);
            } else{
                $this->data['title']="Trang Cá Nhân";
                $this->load->view("user_view/home",$this->data);
            }
        }
        
        $this->data['title']="Đăng Ký";
        $this->form_validation->set_rules("full_name","Họ tên","required|min_length[6]");
        $this->form_validation->set_rules("password","Mật Khẩu","required|matches[repassword]");
        $this->form_validation->set_rules("email","Email","required|valid_email|callback_checkEmail");
        $this->form_validation->set_rules("address","Địa chỉ","required");
        $this->form_validation->set_rules("phone","Số Điện Thoại","required|min_length[9]|numeric");
        $this->form_validation->set_rules("checkbox","Đồng ý","required");
        $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
        $this->form_validation->set_message('valid_email','Email không hợp lệ !');
        $this->form_validation->set_message('min_length','%s có tối thiểu %s ký tự !');
        $this->form_validation->set_message('matches','Xác thực mật khẩu sai !');
        $this->form_validation->set_message('numeric','%s chỉ được nhập số !');
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

                $userid = mysql_insert_id();
                $link_active = base_url()."index.php/user/active/?userid=".$userid."&key=".md5($salt);
                $message  = "Please follow this link to active your acount <br/>";
                $message .= "Link : <a href=".$link_active.">".$link_active."</a><br/>";
                $message .= "password : ".$this->input->post("password");

                $mail = array(
                    "to_receiver"   => $add['email'],
                    "message"       => $message,
                );

                $this->load->library("my_email");
                $this->my_email->config($mail);
                $this->my_email->sendmail();

                $this->data['title'] = "Thành Công";
                $this->data['report'] = "Đăng ký tài khoản thành công, kiểm tra email để kích hoạt !";
                $this->load->view("user_view/dangky_thanhcong",$this->data);
            }   
        }
        
    }
    public function dangxuat(){
        $this->my_auth->sess_destroy();
		$this->dangnhap();
    }
    
    //--- Kick hoat tai khoan
    function active(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        //--- Neu Login thi khong active
        if($this->my_auth->is_Login()){
            $userid = $this->my_auth->userid;
            $this->data['info'] = $this->muser->getInfo($userid);
            if($this->my_auth->is_Admin()){
                $this->data['title']="Trang Admin";
                $this->load->view("admin_view/home",$this->data);
            } else{
                $this->data['title']="Trang Cá Nhân";
                $this->load->view("user_view/home",$this->data);
            }
        }
        
        $userid = $_GET['userid'];
        $key = $_GET['key'];
        $data = array();
        $data['title'] = "Kích hoạt tài khoản";
        
        if(is_numeric($userid)){
            
            $check = $this->muser->checkActive($userid,$key);

            if($check){
                
                if($check['active']==1)
                {
                    $data['report'] = "Tài khoản của bạn đã được kích hoạt !";
                    //$this->load->view("user_view/dangky_thanhcong",$data);
                }
                else
                {
                    
                     $update = array(
                                    "active"      => 1,
                                );
                    $this->muser->updateUser($update,$userid);
                    $data['report'] = "Tài khoản của bạn đã được kích hoạt !";   
                }
            
            }
            else{
                
                $data['report'] = "Tài khoản không tồn tại !";
            }
            
        }else{
            
            $data['report'] = "Đường dẫn sai !";
        }

        $this->load->view("user_view/dangky_thanhcong",$data);
    }
    
    //--- Cap nhat tai khoan
    public function suataikhoan(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        if(!$this->my_auth->is_Login())
        {
            $this->data['report'] = "Bạn vui lòng đăng nhập trước !";
            $this->load->view("user_view/dangky_thanhcong",$this->data);
        }
        
            $userid = $this->my_auth->userid;
            $data['info'] = $this->muser->getInfo($userid); 
            $data['title'] = "Trang Cá Nhân";
            if(isset($_POST['ok']))
            {
                $this->form_validation->set_rules("full_name","Họ Tên","required|min_length[6]");
                $this->form_validation->set_rules("address","Địa Chỉ","required");
                $this->form_validation->set_rules("phone","Số Điện Thoại","required|min_length[9]|numeric");
                $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
                $this->form_validation->set_message('min_length','%s có tối thiểu %s ký tự !');
                $this->form_validation->set_message('numeric','%s chỉ được nhập số !');
                
                if($this->form_validation->run()==FALSE){
                    $this->load->view("user_view/suataikhoan",$data);
                
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
                $this->load->view("user_view/suataikhoan",$data);    
            } 
        
    }
    
    //--- Cap nhat tai khoan
    public function suamatkhau(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        $this->data['report'] = "";
        $this->data['title'] = "Trang Cá Nhân";
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
                    
                    $this->load->view("user_view/suamatkhau",$this->data);
                
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
                        $this->load->view("user_view/suamatkhau",$this->data);
                    }
                            
                }
            }
            else
            {
                
                $this->load->view("user_view/suamatkhau",$this->data);    
            } 
        
    }
    
    //---- Quên mật khẩu
    public function quenmatkhau(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        //--- Neu Login thi khong duoc vao trang nay
        if($this->my_auth->is_Login()){
            $this->data['title']="Trang Cá Nhân";
            $userid = $this->my_auth->userid;
            $this->data['info'] = $this->muser->getInfo($userid);
            $this->load->view("user_view/home",$this->data);
        }
        $this->data['title'] = "Quên Mật Khẩu";
        $this->form_validation->set_rules("email","Email","required|valid_email|callback_checkEmailForgot");
        $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
        $this->form_validation->set_message('valid_email','Email không hợp lệ !');
        
        if($this->form_validation->run()==FALSE){

            $this->load->view("user_view/quenmatkhau",$this->data);
            
        }else{
             $email = $this->input->post("email");
             $info = $this->muser->getInfoByEmail($email);

             $message = "";
             if($info['active']==1){

                // reset password cho user
                $password = random_string('alnum',5);
                $reset = array(
                                "password" => md5($password),
                            );
                $this->muser->updateUser($reset,$info['userid']);
                
                //--- Gui mail cho user
                $message  = "Please login with :<br/>";
                $message .= "email :".$info['email']."<br/>";
                $message .= "password :".$password;
                
                $mail = array(
                            "to_receiver"   => $email,
                            "message"       => $message,
                        );

                $this->load->library("my_email");
                $this->my_email->config($mail);
                $this->my_email->sendmail();

                $this->data['title'] = "Thành Công";
                $this->data['report'] = "Thành công, vui lòng kiểm tra email để xem mật khẩu mới !";
                $this->load->view("user_view/dangky_thanhcong",$this->data); 
                
             }else{
                $this->data['title'] = "Thất Bại";
                $this->data['report'] = "Tài khoản của bạn chưa được kích hoạt, vui lòng kiểm tra email để kích hoạt !";
                $this->data['userid'] = $info['userid'];
                $this->load->view("user_view/dangky_thanhcong",$this->data); 
             }
             
        }
        
    }
    
    //--- gửi lại email kích hoạt
    public function guimail(){
        $userid = $_GET['userid'];
        $data['title'] = "Kích hoạt tài khoản";
        
        if(is_numeric($userid)){
            $info = $this->muser->getInfo($userid);
                $link_active = base_url()."index.php/user/active/?userid=".$userid."&key=".md5($info['salt']);
                $message  = "Please follow this link to active your acount <br/>";
                $message .= "Link : <a href=".$link_active.">".$link_active."</a><br/>";

                $mail = array(
                    "to_receiver"   => $info['email'],
                    "message"       => $message,
                );

                $this->load->library("my_email");
                $this->my_email->config($mail);
                $this->my_email->sendmail();

                $this->data['title'] = "Thành Công";
                $this->data['report'] = "Gửi thành công, kiểm tra email để kích hoạt !";
                $this->load->view("user_view/dangky_thanhcong",$this->data);
        }else{
            
            $data['report'] = "Đường dẫn sai !";
            $this->load->view("user_view/dangky_thanhcong",$data);
        }
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
    //--- Kiem tra email khi quen mat khau
    function checkEmailForgot($email)
    {
        if($this->muser->checkEmail($email)==FALSE){ // co ton tai email
            return TRUE;
        }
        else{
            $this->form_validation->set_message("checkEmailForgot","Email này chưa đăng ký, vui lòng nhập lại !");
            return FALSE;
        }
    }
}