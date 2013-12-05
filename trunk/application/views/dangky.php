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
<?php
    //--- Giu gia tri cua form
    $full_name = array(
                        "name"  => "full_name",
                        "id"    => "full_name",
                        "size"  => "30",
                        "value" => set_value("full_name")
                    );

    $password = array(
                        'name'        => 'password',
                        'id'          => 'lname',
                        'size'        => '30',
                        'value'       => set_value('password'),
                    );

    $repassword = array(
                        'name'        => 'repassword',
                        'id'          => 'lname',
                        'size'        => '30',
                        'value'       => set_value('repassword'),
                    );
    $address = array(
                        'name'        => 'address',
                        'id'          => 'address',
                        'size'        => '30',
                        'value'       => set_value('address'),
                    );
    $phone = array(
                        'name'        => 'phone',
                        'id'          => 'phone',
                        'size'        => '30',
                        'value'       => set_value('phone'),
                    );
    $email = array(
                        'name'        => 'email',
                        'id'          => 'email',
                        'size'        => '30',
                        'value'       => set_value('email'),
                    );
?>
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Đăng ký tài khoản</li>
      </ul>
    
     <form name="frmEdit" id="frmEdit" action="" method="post" enctype="multipart-formdata">
        <fieldset>
        <h1 class="heading1"><span class="maintext">Thông tin tài khoản</span><span class="subtext"></span></h1>
        
        <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Họ tên:</label>
                  <div class="controls">                
                    <?php 
                        echo form_input($full_name);
                        echo form_error('full_name','<div class="error">','</div>');
                    ?>
                  </div>  
        <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Email:</label>
                  <div class="controls">                
                    <?php 
                        echo form_input($email);
                        echo form_error('email','<div class="error">','</div>');
                    ?>
                  </div>       
        <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Mật Khẩu:</label>
                  <div class="controls">                
                    <?php 
                        echo form_input($password);
                        echo form_error('password','<div class="error">','</div>');
                    ?>
                  </div>  
        <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Xác Thực Mật Khẩu:</label>
                  <div class="controls">                
                    <?php 
                        echo form_input($repassword);
                        echo form_error('repassword','<div class="error">','</div>');
                    ?>
                  </div> 
        <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Địa Chỉ:</label>
                  <div class="controls">                
                    <?php 
                        echo form_input($address);
                        echo form_error('address','<div class="error">','</div>');
                    ?>
                  </div>
        <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Điện Thoại:</label>
                  <div class="controls">                
                    <?php 
                        echo form_input($phone);
                        echo form_error('phone','<div class="error">','</div>');
                    ?>
                  </div>        
        <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Giới tính:</label>
                  <div class="controls">
                    <input type="radio" value="nam" name="sex" checked="" class="input-xlarge"> Nam
                    <?php
                        echo "&nbsp&nbsp&nbsp&nbsp";
                    ?>
                    <input type="radio" value="nu" name="sex" class="input-xlarge"> Nữ
                    
                  </div>
                </div>
        <label class="checkbox inline">
                <input type="checkbox" value="option2" >
              </label>
              Tôi đã đọc và đồng ý với <a href="#" >CÁC ĐIỀU KHOẢN Ở ĐÂY</a>
        <label>&nbsp;</label> <input class="btn btn-orange" type="submit" name="ok" value="Đăng Ký" /><br />

        </fieldset>
    </form>
          <div class="clearfix"></div>
          <br>
        </div>        
       
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