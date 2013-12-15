<?php

class Admin extends CI_Controller{
    public function __construct(){
		parent ::__construct();
		$this->load->library(array('form_validation','email','session','my_auth','cart'));
		$this->load->helper(array("url","date","string","form"));
        
        $this->load->model("muser");
        $this->load->model("mbase");
	}
    public function index(){
        
	}
    
    //--- Cap nhat tai khoan
    public function suataikhoan(){
        $data['hanglaptop']=$this->Mbase->get_hang_laptop();
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
                $this->form_validation->set_rules("phone","Số Điện Thoại","required|min_length[9]|numeric");
                $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
                $this->form_validation->set_message('min_length','%s có tối thiểu %s ký tự !');
                $this->form_validation->set_message('numeric','%s chỉ được nhập số !');
                
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
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
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
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        $this->muser->getalldata();
        $max = $this->muser->num_rows();
        $min = 10;
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
    public function qltintuc(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        $this->mbase->setTableName('news');        
        $this->mbase->getalldata();
        $max = $this->mbase->num_rows();
        $min = 3;
        $this->data['num_rows'] = $max;
        //--- Paging
        if($max!=0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."index.php/admin/qltintuc";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 3; 
            $config['next_link'] = 'Next »'; 
            $config['prev_link'] = '« Prev';
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            
            $this->data['link'] = $this->pagination->create_links();
            $this->data['news'] = $this->mbase->getalldata($min,$this->uri->segment($config['uri_segment']));
            $this->data['title'] = "Quản Lý Tin Tức";
            $this->load->view("admin_view/qltintuc",$this->data);
        
        }else{

            $this->data['report'] = "Không có dữ liệu để hiển thị";
            $this->my_layout->view("user_view/dangky_thanhcong",$this->data);
        }
    }    
     public function xoatintuc(){
        $page_id = $this->uri->segment(3);
        
        if(is_numeric($page_id)){
            $this->mbase->deleteNews($page_id);
            redirect(base_url()."index.php/admin/qltintuc");
        
        }else{
            
            $data['report'] = "Duong dan khong hop le";
            $this->load->view("user_view/dangky_thanhcong",$data);
        }
    }
    public function suathanhvien(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        $userid = $this->uri->segment(3);
        $adminid = $this->my_auth->userid;
        $this->data['info'] = $this->muser->getInfo($userid);
        $this->data['title'] = "Sửa thông tin";
        $this->data['adminid'] = $adminid;
        if(is_numeric($userid) && $this->data['info']!=NULL)
        {          
            if(isset($_POST['ok']))
            {
                $this->form_validation->set_rules("full_name","Full name","required|min_length[6]");
                $this->form_validation->set_rules("address","Address","required");
                $this->form_validation->set_rules("phone","Phone number","required|min_length[9]|numeric");
                $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
                $this->form_validation->set_message('min_length','%s có tối thiểu %s ký tự !');
                $this->form_validation->set_message('numeric','%s chỉ được nhập số !');
                
                if($this->form_validation->run()==FALSE){
                    
                    $this->load->view("admin_view/suathanhvien",$this->data);
                
                }else{
                    if($_POST['level']==0){
                        $update = array(
                                    "full_name" => $this->input->post("full_name"),
                                    "address"   => $this->input->post("address"),
                                    "phone"     => $this->input->post("phone"),
                                    "active"    => $_POST['active'],
                                    "gender"    => $_POST['gender'],
                                 );
                    }else{
                        $update = array(
                                    "full_name" => $this->input->post("full_name"),
                                    "address"   => $this->input->post("address"),
                                    "phone"     => $this->input->post("phone"),
                                    "active"    => $_POST['active'],
                                    "gender"    => $_POST['gender'],
                                    "level"     => $_POST['level'],
                                 );
                    }
                    
                    $this->muser->updateUser($update,$userid);
                    redirect(base_url()."index.php/admin/qlthanhvien"); 
                }
            }
            else
            {
                $this->load->view("admin_view/suathanhvien",$this->data);   
            }
            
        }
        else
        {          
            $data['report'] = "Đường dẫn không hợp lệ";
            $this->load->view("user_view/dangky_thanhcong",$data);
        }
    }
    public function qlsanpham(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        $this->mbase->setTableName('product');        
        $this->mbase->getalldatasp();
        $max = $this->mbase->num_rows();
        $min = 10;
        $this->data['num_rows'] = $max;
        //--- Paging
        if($max!=0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url()."index.php/admin/qlsanpham";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 3; 
            $config['next_link'] = 'Next »'; 
            $config['prev_link'] = '« Prev';
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            
            $this->data['link'] = $this->pagination->create_links();
            $this->data['product'] = $this->mbase->getalldatasp($min,$this->uri->segment($config['uri_segment']));
            $this->data['title'] = "Quản Lý Sản Phẩm";
            $this->load->view("admin_view/qlsanpham",$this->data);
        
        }else{

            $this->data['report'] = "Không có dữ liệu để hiển thị";
            $this->my_layout->view("user_view/dangky_thanhcong",$this->data);
        }
    }    
     public function xoasanpham(){
        $id_sp = $this->uri->segment(3);
        
        if(is_numeric($id_sp)){
            $this->mbase->deletesp($id_sp);
            redirect(base_url()."index.php/admin/qlsanpham");
        
        }else{
            
            $data['report'] = "Đường dẫn không hợp lệ";
            $this->load->view("user_view/dangky_thanhcong",$data);
        }
    }
    public function suasanpham(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        $id_sp = $this->uri->segment(3);
        $this->data['info'] = $this->mbase->getProductById($id_sp);
        $this->data['title'] = "Sửa sản phẩm";
        if(is_numeric($id_sp) && $this->data['info']!=NULL)
        {          
           if(isset($_POST['ok']))
            {
                $this->form_validation->set_rules("name_sp","Tên sản phẩm","required");
                $this->form_validation->set_rules("price","Giá","required|numeric");
                $this->form_validation->set_rules("soluong","Số lượng","required|numeric");
                $this->form_validation->set_rules("price_km","Giá khuyến mãi","required|numeric");
                $this->form_validation->set_rules("note_sp","Chi tiết sản phẩm","required");
                $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
                $this->form_validation->set_message('min_length','%s có tối thiểu %s ký tự !');
                $this->form_validation->set_message('numeric','%s chỉ được nhập số !');
                
                if($this->form_validation->run()==FALSE){
                    
                    $this->load->view("admin_view/suasanpham",$this->data);
                
                }else{
                    if($this->upload_image()==FALSE){
                        $update = array(
                        "name_sp"       => $this->input->post("name_sp"),
                        "price"         => $this->input->post("price"),
                        "soluong"       => $this->input->post("soluong"),
                        "price_km"      => $this->input->post("price_km"),
                        "note_sp"       => $this->input->post("note_sp"),
                        "id_cate2"      => $_POST['id_cate2'],
                        "id_loai"       => $_POST['id_loai'],
                        "mota_sp"       => $this->input->post("mota_sp"),
                        );
                    }else{
                        $update = array(
                        "name_sp"       => $this->input->post("name_sp"),
                        "price"         => $this->input->post("price"),
                        "soluong"       => $this->input->post("soluong"),
                        "price_km"      => $this->input->post("price_km"),
                        "note_sp"       => $this->input->post("note_sp"),
                        "id_cate2"      => $_POST['id_cate2'],
                        "id_loai"       => $_POST['id_loai'],
                        "mota_sp"       => $this->input->post("mota_sp"),
                        'img_sp'        => $this->upload_image(),
                        );
                    }
                    $this->mbase->updatesp($update,$id_sp);
                    redirect(base_url()."index.php/admin/qlsanpham"); 
                }
            }
            else
            {
                $this->load->view("admin_view/suasanpham",$this->data);   
            }
            
        }
        else
        {          
            $data['report'] = "Đường dẫn không hợp lệ";
            $this->load->view("user_view/dangky_thanhcong",$data);
        }
    }
    public function themsanpham(){
        $this->data['hanglaptop']=$this->Mbase->get_hang_laptop();
        $this->data['title'] = "Thêm sản phẩm";     
        $this->data['report']="";    
           if(isset($_POST['ok']))
            {
                $this->form_validation->set_rules("name_sp","Tên sản phẩm","required");
                $this->form_validation->set_rules("price","Giá","required|numeric");
                $this->form_validation->set_rules("soluong","Số lượng","required|numeric");
                $this->form_validation->set_rules("price_km","Giá khuyến mãi","required|numeric");
                $this->form_validation->set_rules("note_sp","Chi tiết sản phẩm","required");
                $this->form_validation->set_message('required', 'Bạn chưa điền %s !');
                $this->form_validation->set_message('min_length','%s có tối thiểu %s ký tự !');
                $this->form_validation->set_message('numeric','%s chỉ được nhập số !');
                
                if($this->form_validation->run()==FALSE || $this->upload_image()==FALSE){
                    $this->data['report']=$this->upload->display_errors();
                    $this->load->view("admin_view/themsanpham",$this->data);
                
                }else{
                    
                    $update = array(
                        "name_sp"       => $this->input->post("name_sp"),
                        "price"         => $this->input->post("price"),
                        "soluong"       => $this->input->post("soluong"),
                        "price_km"      => $this->input->post("price_km"),
                        "note_sp"       => $this->input->post("note_sp"),
                        "id_cate2"      => $_POST['id_cate2'],
                        "id_loai"       => $_POST['id_loai'],
                        "mota_sp"       => $this->input->post("mota_sp"),
                        'img_sp'        => $this->upload_image(),
                        );
                    
                    
                    $this->mbase->addsp($update);
                    redirect(base_url()."index.php/admin/qlsanpham"); 
                }
            }
            else
            {
                $this->load->view("admin_view/themsanpham",$this->data);   
            }
        
    }
    function upload_image()
	{
		$config = array(
					'upload_path' => './publics/data/',//thư mục để upload vào
					'allowed_types' => 'gif|jpg|png',
					'overwrite' => true // ghi đè lên hình đã upload 
					);
			//Thư viện upload của C_I
			$this->load->library('upload', $config);
			//lấy giá trị $config định nghĩa về file được upload
			$this->upload->initialize($config);
			//Kiểm tra upload có thành công hay ko ?
			
			if ($this->upload->do_upload('img')) //Tên của input type = file là 'img'
				{
					$image_data = $this->upload->data();
					//print_r($image_data);
					//echo "Tên hình vừa upload :".$image_data['file_name'];
					//die;
                    $luu="publics/data/".$image_data['file_name'];
					return $luu;
				}
			else
				{
					return false;
				}
	}
}