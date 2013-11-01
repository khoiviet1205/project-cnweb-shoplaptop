<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<link rel="stylesheet" type="text/css" href="publics/css/style1.css"/>
</head>
<body>
	<!--Begin top-->
		<?php $this->load->view("top")?>
    
    <!--Begin content-->
    <div id="content">
	<div class="left_content">
    	<?php $this->load->view("left") ?>
    </div>
    <div class="main_content">content</div>
    <div class="right_content">
    	<?php $this->load->view("right")?>
    </div>
	</div>
    
    <!--Begin bottom-->
    	<?php $this->load->view("bottom") ?>
    
    
</body>
</html>