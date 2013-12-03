<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cpanel extends CI_Controller {

	public $_data = array(); 

	
	function __construct(){ 
        parent::__construct(); 

    }
	
	function pre($object){
		echo "<pre>";
		print_r($object);
		echo "</pre>";
	}
	
	function genRandomString($length) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $string = '';   
	    for ($p = 0; $p < $length; $p++) {
	        $string .= $characters[mt_rand(0, strlen($characters))];
	    }
	    return $string;
	}
	
	function unicode($str){
  	        if(!$str) return false;
  	        $unicode = array(
        		'a'=>array('á','à','?','ã','?','a','?','?','?','?','?','â','?','?','?','?','?'),
  	            'A'=>array('Á','À','?','Ã','?','A','?','?','?','?','?','Â','?','?','?','?','?'),
  	            'd'=>array('d'),
  	            'D'=>array('Ð'),
  	            'e'=>array('é','è','?','?','?','ê','?','?','?','?','?'),
  	            'E'=>array('É','È','?','?','?','Ê','?','?','?','?','?'),
  	            'i'=>array('í','ì','?','i','?'),
  	            'I'=>array('Í','Ì','?','I','?'),
  	            'o'=>array('ó','ò','?','õ','?','ô','?','?','?','?','?','o','?','?','?','?','?'),
  	            '0'=>array('Ó','Ò','?','Õ','?','Ô','?','?','?','?','?','O','?','?','?','?','?'),
  	            'u'=>array('ú','ù','?','u','?','u','?','?','?','?','?'),
  	            'U'=>array('Ú','Ù','?','U','?','U','?','?','?','?','?'),
  	            'y'=>array('ý','?','?','?','?'),
  	            'Y'=>array('Ý','?','?','?','?'),
  	            //'-'=>array(' ','&quot;','.')
  	        );
  	        foreach($unicode as $nonUnicode=>$uni){
  	        	foreach($uni as $value)
            	$str = @str_replace($value,$nonUnicode,$str);
  	        }
    	return strtolower($str);
  	}
    function _substr($str, $length, $minword = 3) {
	    $sub = '';
	    $len = 0;
	    foreach (explode(' ', $str) as $word) {
		    $part = (($sub != '') ? ' ' : '') . $word;
		    $sub .= $part;
		    $len += strlen($part);

		    if (strlen($word) > $minword && strlen($sub) >= $length) {
		        break;
		    }
    	}
    	return $sub . (($len < strlen($str)) ? '...' : '');
    } 
	
	/*function createCapcha(){
		$this->load->helper('captcha');
		$vals = array(
		    //'word'	 => $this->genRandomString(5),
		    'img_path'	 => './resources/captcha/',
		    'img_url'	 => base_url().'resources/captcha/',
		    'font_path'	 => './resources/fonts/comic-italic.ttf',
		    'img_width'	 => 150,
		    'img_height' => 40,
		    'expiration' => 3600,
	    );
		return create_captcha($vals);
	}*/
	
	function GetImageFromUrl($link){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch,CURLOPT_URL,$link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result=curl_exec($ch);
		curl_close($ch);
		/*$savefile = fopen('/images/abc.jpg', 'w');
		fwrite($savefile, $result);
		fclose($savefile);*/
		return $result;
	}
	
	/*function uploadImage($nameInput){
		$config['upload_path'] = './resources/uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['overwrite'] = TRUE;
		$config['max_size']	= '10000';
		$config['max_width'] = '1920';
		$config['max_height'] = '1080';
		$this->upload->initialize($config);
		if(!$this->upload->do_upload($nameInput)){
            $error = array($this->upload->display_errors());
			var_dump($error);
        }else{
            return $this->upload->data();
        }
	}*/
}