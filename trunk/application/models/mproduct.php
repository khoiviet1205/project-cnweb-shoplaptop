<?php
class Mproduct extends Mbase{
	
	public function __construct(){
		parent::__construct();
		$this->setTableName("product");
	}
	
}