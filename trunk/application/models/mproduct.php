<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mproduct extends Mbase{
	
	public function __construct(){
		parent::__construct();
		$this->setTableName("product");
	}
	
}