<?php
	//Css file path :
		$path_css=base_url().'publics/css/';
	//Js file path :
		$path_js=base_url().'publics/js/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>flexslider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>cloud-zoom.css" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
<?php
    $this->load->view("header");
?>
<!-- Header End -->

<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Tài Khoản</li>
      </ul>
      <div class="row">
        
        <!-- My Account-->
        <div class="span9">
        <h1 class="heading1"><span class="maintext">Thông tin tài khoản</span><span class="subtext"></span></h1>        
              <h3 class="heading3">Sửa thông tin cá nhân</h3>
        <form name="frmEdit" id="frmEdit" action="" method="post" enctype="multipart-formdata">
            <fieldset>            
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Mật Khẩu Cũ:</label>
                      <div class="controls">                
                        <?php 
                            echo form_password('oldpassword');
                            echo form_error('oldpassword','<div class="red">','</div>');
                            echo '<div class="red">'.$report.'</div>';
                        ?>
                      </div>  
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Mật Khẩu Mới:</label>
                      <div class="controls">                
                        <?php 
                            echo form_password('password');
                            echo form_error('password','<div class="red">','</div>');
                        ?>
                      </div>       
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Xác Thực Mật Khẩu:</label>
                      <div class="controls">                
                        <?php 
                            echo form_password('repassword');
                            echo form_error('repassword','<div class="red">','</div>');
                        ?>
                      </div>         
            <input class="btn btn-orange" type="submit" name="ok" value="Cập Nhật" /><br />
            </fieldset>
        </form>
                                                               
        </div>
        
        <!-- Sidebar Start-->
          <aside class="span3">
            <div class="sidewidt">
              <h2 class="heading2"><span>Tài Khoản</span></h2>
              <ul class="nav nav-list categories">
                <li>
                  <a href="<?php echo base_url();?>index.php/user/"> Xem thông tin cá nhân</a>
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/user/suataikhoan/">Cập nhật thông tin</a>
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/user/suamatkhau/">Đổi mật khẩu</a>
                </li>
                <li>
                  <a href="#">Giỏ hàng</a>
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/user/dangxuat/">Đăng Xuất</a>
                </li>
              </ul>
            </div>
          </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>

<!-- Footer -->
<?php
    $this->load->view("footer");
?>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $path_js?>jquery.js"></script> 
<script src="<?php echo $path_js?>bootstrap.js"></script> 
<script src="<?php echo $path_js?>respond.min.js"></script> 
<script src="<?php echo $path_js?>application.js"></script> 
<script src="<?php echo $path_js?>bootstrap-tooltip.js"></script>
<script defer src="<?php echo $path_js?>jquery.fancybox.js"></script>  
<script defer src="<?php echo $path_js?>jquery.flexslider.js"></script> 
<script type="text/javascript" src="<?php echo $path_js?>jquery.tweet.js"></script> 
<script src="<?php echo $path_js?>cloud-zoom.1.0.2.js"></script> 
<script type="text/javascript" src="<?php echo $path_js?>jquery.validate.js"></script> 
<script type="text/javascript" src="<?php echo $path_js?>jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript" src="<?php echo $path_js?>jquery.mousewheel.min.js"></script> 
<script type="text/javascript" src="<?php echo $path_js?>jquery.touchSwipe.min.js"></script> 
<script type="text/javascript" src="<?php echo $path_js?>jquery.ba-throttle-debounce.min.js"></script>
<script src="<?php echo $path_js?>custom.js"></script>
</body>
</html>