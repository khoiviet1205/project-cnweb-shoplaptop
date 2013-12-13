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
    
}


















