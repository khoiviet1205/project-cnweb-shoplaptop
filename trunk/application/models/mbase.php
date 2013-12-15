<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mbase extends CI_Model{
	private $tableName;
	private $id="id";
	
	public function getTableName(){
		return $this->tableName;
	}
	
	public function setTableName($tableName){
		$this->tableName=$tableName;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id=$id;
	}
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	// lay tat ca doi tuong
	public function getAll(){
		$q = $this->db->get($this->getTableName());
		return $q->result_array();
	}
	
	//xoa 1 doi tuong dua theo id
	public function delItem($idItem){
		$this->db->where('id',$idItem);
		$this->db->delete($this->getTableName());
	}
	
	//luu 1 doi tuong voi item la 1 array
	public function saveItem($item){
		$this->db->insert($this->getTableName(),$item);
	}
	
	//cap nhat 1 doi tuong theo id va 1 array
	public function updateItem($idItem,$arr){
		$this->db->where('id',$idItem);
		$this->db->update($this->getTableName(),$arr);
	}
	
	//tim 1 doi tuong theo ten column va gia tri
	public function findByProperty($columnName,$value){
		$this->db->where($columnName,$value);
		$q = $this->db->get($this->getTableName());
		return ($q->num_rows()==0) ? NULL: $q->row_array();
	}
	
	//tim 1 doi tuong theo 1 cac dieu kien
	public function findByProperties($arr){
		foreach($arr as $k=>$v){
			$this->db->where($k,$v);
		}
		$q =$this->db->get($this->getTableName());
		return ($q->num_rows()==0) ? NULL : $q->row_array();
	}
	
	//kiem tra da ton tai hay chua
	public function checkExitsByProperty($columnName,$value){
		$this->db->where($columnName,$value);
		$q = $this->db->get($this->getTableName());
		return ($q->num_rows() == 0) ? FALSE : TRUE;
	}
	
		//phan trang
	public function getAllPaging($number,$offset,$arraySearch,$columnName=NULL,$orderBy=NULL){
		$this->db->select('*');
		if(!empty($arraySearch)){
			foreach($arraySearch as $k => $v){
				$this->db->or_like($k,$v);
			}
		}
		if($columnName != NULL && $orderBy != NULL){
			$this->db->order_by($columnName,$orderBy);
		}
		$q	=	$this->db->get($this->getTableName(),$number,$offset);
		return $q->result_array();
	}
	
	//phan trang
	public function getAllPagingWhere($number,$offset,$arraySearch,$columnName=NULL,$orderBy=NULL){
		$this->db->select('*');
		if(!empty($arraySearch)){
			foreach($arraySearch as $k => $v){
				$this->db->where($k,$v);
			}
		}
		if($columnName != NULL && $orderBy != NULL){
			$this->db->order_by($columnName,$orderBy);
		}
		$q	=	$this->db->get($this->getTableName(),$number,$offset);
		return $q->result_array();
	}
	
	//lay tat ca doi tuong order by 
	public function getListOrderBy($columnName,$orderBy){
		$this->db->order_by($columnName,$orderBy);
		$q = $this->db->get($this->getTableName());
		return $q->result_array();
	}
	
	//lay danh sach doi tuong theo dieu kien 
	public function getListByArrayWhere($arrayWhere){
		foreach($arrayWhere as $k => $v){
			$this->db->where($k,$v);
		}
		$q = $this->db->get($this->getTableName());
		return $q->result_array();
	}
	
	public function getListOrderByColumnLimit($select="*",$column="id",$orderBy="desc",$limit=10,$star=0){
		$this->db->select($select);
        $this->db->order_by($column,$orderBy);
        $this->db->limit($limit,$star);
		$q = $this->db->get($this->getTableName());
		return $q->result_array();
	}
	
	public function countAll(){
		return $this->db->count_all_results($this->getTableName());
	}
	
	public function countOrLike($arr){
		foreach($arr as $k => $v){
			$this->db->or_like($k,$v);
		}
		$q = $this->db->get($this->getTableName());
		return $q->num_rows();
	}
	
	public function countWhereArray($arr){
		foreach($arr as $k => $v){
			$this->db->where($k,$v);
		}
		$q = $this->db->get($this->getTableName());
		return $q->num_rows();
	}
	
	public function hint($kwSearch,$select="*",$limit=10){
		$this->db->select($select);
		$this->db->or_like("name",$kwSearch);
		$this->db->or_like("alias",$kwSearch);
        $this->db->order_by("name","ASC");
        $this->db->limit($limit);
		$q = $this->db->get($this->getTableName());
		return $q->result_array();
	}
	
	public function getListRandom($limit=10){
		$this->db->order_by('id', 'RANDOM');
	    $this->db->limit($limit);
	    $query = $this->db->get($this->getTableName());
	    return $query->result_array();
	}
	// Get san pham mua nhieu
	public function getspmn(){
		$result=$this->db->query("select *, count(*) as sl from chitietdonhang, product,loai where chitietdonhang.id_sp=product.id_sp and product.id_loai=loai.id_loai group by chitietdonhang.id_sp order by sl desc limit 0,4");
		return $result->result_array();
	}
	// Get tat ca san pham
	public function get_all_sp(){
		$result =$this->db->query("select * from product,loai where product.id_loai=loai.id_loai");
		return $result->result_array();
	}
	// Get san pham moi
	public function getspm(){
		$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=8 order by id_sp DESC limit 0,4");
		return $result->result_array();
	}
	
	// Get san pham cao cap
	public function getspcc(){
		$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=6 order by id_sp DESC limit 0,4");
		return $result->result_array();
	}
	
	//Get san pham pho thong
	public function getsppt(){
		$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=5 order by id_sp DESC limit 0,4");
		return $result->result_array();
	}
	
	//Get san pham trung cap
	public function getsptc(){
		$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=7 order by id_sp DESC limit 0,4");
		return $result->result_array();
	}
	
	//Get san pham theo ma so san pham
	function get_detail_product($param)
	{
		$this->db->select("*");
		//$this->db->join("news","news.new_id = new_details.new_id_detail");
		$this->db->where("id_sp",$param);
		//$this->db->where("news.new_type = new_details.new_detail_type");
		$query=$this->db->get("product");
		return $query->result_array();	
	}
	
	//Get san pham ua chuong
	public function get_sp_uachuong(){
		$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=4 order by id_sp DESC limit 0,4");
		return $result->result_array();
	}
	
	//Get tat ca san pham theo loai
	function get_tatca_sp($param,$number,$offset)
	{
		$this->db->select("*");
		$this->db->where("id_loai",$param);
		$query=$this->db->get("product",$number,$offset);
		return $query->result_array();	
	}
<<<<<<< .mine
=======
	//Get tat ca san pham 
	function get_tatca_sp1($param)
	{
$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=$param");
		return $result->result_array();	
	}
	//Get ten loai san pham theo ma so san pham
	function getLoaiByID($param)
	{
		$result=$this->db->query("SELECT name_loai from loai where id_loai = $param");
		return $result->row_array();
	}
	function getLoaiByID_SP($param)
	{
		$result=$this->db->query("SELECT name_loai from loai,product where loai.id_loai=product.id_loai and Product.id_sp = $param");
		return $result->row_array();
	}
	// Get hãng laptop
	function get_hang_laptop()
	{
		$result =$this->db->query("select * from cate2");
		return $result->result_array();
	}
	
>>>>>>> .r98
    //Tất cả của phần tin tuc
    	//Get tat ca tin tuc
	public function get_news(){	   
		$result = $this->db->query("select * from news");
		return $result->result_array();
	}
    public function list_all($number,$offset){
        $query=$this->db->get('news',$number,$offset);
        return $query -> result_array();
    }	
    public function count_all(){
        return $this->db->count_all('news');
    }
    public function get_title_news_for_new_detail($param)
		{
			$this->db->select("page_title, info_news, image_url, date_news");
			//$this->db->join("news","news.new_id = new_details.new_id_detail");
			$this->db->where("page_id =",$param);
			//$this->db->where("new_type =","news");
			//$this->db->where("new_detail_type =","news");
			$query=$this->db->get("news");
			return $query->result_array();
		}
     public function get_detail_new($param)
		{
			$this->db->select("page_id, full_news");
			//$this->db->join("news","news.new_id = new_details.new_id_detail");
			$this->db->where("page_id =",$param);
			//$this->db->where("news.new_type = new_details.new_detail_type");
			$query=$this->db->get("news");
			return $query->result_array();	
		}
    //--- Lay du lieu
    public function getalldata($off="",$limit=""){
        $this->db->select('*');
        $this->db->limit($off,$limit);
        $this->db->order_by("page_id","ASC");
        $query = $this->db->get("news");
        $data = $query->result_array();
        return $data;
    }
    // Tong so record
    public function num_rows(){
        return $this->db->count_all($this->getTableName());
    }
    //--- Xoa tin tuc
    public function deleteNews($id){        
        if($id!=1){
            $this->db->select('*');
            $this->db->where("page_id",$id); 
            $this->db->delete("news");
        }
    }
    //upload hình news
    public function upload_image_news()
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
			
			if($this->input->post('submit'))
			{
			
			if ($this->upload->do_upload('img')) //Tên của input type = file là 'img'(add_gallery.php)
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
					print_r($this->upload->display_errors());
					die;
				}
			}//end if()
	}
    public function addNews()
		{
			if($this->input->post('submit'))
			{				
			$content = $this->input->post('editor');			
			$data = array('page_id' => '',
						  'page_title' => $this->input->post('txtTieuDeTin'),
						 'info_news' => $this->input->post('txtTrichDan'),
						 'image_url' => $this->upload_image_news(),
						 'date_news' => $this->input->post('txtNgayDangTin'),
						 'duyet_news' => $this->input->post('txtNguoiDangTin'),
						 'full_news' => $content
						 );
					$this->db->insert('news',$data);
					return true;
			}
			return false;          
		}
     public function update_news($param)
		{
			$tham_so = $param;
			if($this->input->post('submit'))
			{
		      $content = $this->input->post('editor');
              $query = $this->db->query("UPDATE news SET full_news ='$content' WHERE page_id ='$tham_so'");
		
		      if($query)
			         return true;
	           	else
			         return false;
			}
		}
	//Get tat ca san pham 
	function get_tatca_sp1($param)
	{
$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=$param order by id_sp ");
		return $result->result_array();	
	}
	// Get hãng laptop
	function get_hang_laptop()
	{
		$result =$this->db->query("select * from cate2");
		return $result->result_array();
	}
	// ***************Phân trang**********************//
	// Tổng số laptop theo điều kiện
	function count_laptop($param)
	{
		$this->db->select('COUNT(*) AS `numrows`');
    		$this->db->where(array('id_loai'=>$param));
  	    $query = $this->db->get('product');
    	return $query->row()->numrows;
	}
<<<<<<< .mine
    
=======
	// Tổng số laptop theo hang
	function count_laptop_theohang($param)
	{
		$this->db->select('COUNT(*) AS `numrows`');
    		$this->db->where(array('id_cate2'=>$param));
  	    $query = $this->db->get('product');
    	return $query->row()->numrows;
	}
    //**********************Tìm kiếm*****************************//
    function search($keyword,$number,$offset)
    {
        $this->db->like('name_sp',$keyword);
        $query = $this->db->get('product',$number,$offset);
        return $query->result_array();
    }
	 function count_laptop_search($keyword)
    {
        $this->db->like('name_sp',$keyword);
        $num_rows = $this->db->count_all_results('product');
		return $num_rows;
    }
>>>>>>> .r98
}


















