<?php
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
}




















