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
	
	// Get san pham cao cap
	public function getspcc(){
		$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=6 order by id_sp DESC limit 0,8");
		return $result->result_array();
	}
	
	//Get san pham pho bien
	public function getsppb(){
		$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=5 order by id_sp DESC limit 0,8");
		return $result->result_array();
	}
	
	//Get san pham trung cap
	public function getsptc(){
		$result=$this->db->query("select * from product as p,loai as l where l.id_loai=p.id_loai and p.id_loai=7 order by id_sp DESC limit 0,8");
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
		
}




















