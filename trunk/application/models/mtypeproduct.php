<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mtypeproduct extends Mbase{
	
	public function __construct(){
		parent::__construct();
		$this->setTableName("loai");
	}
	
}
