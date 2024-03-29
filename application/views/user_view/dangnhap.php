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
    $password = array(
                        'name'        => 'password',
                        'id'          => 'lname',
                        'size'        => '30',
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
          <a href="<?php echo base_url();?>">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Đăng Nhập</li>
      </ul>
       <!-- Account Login-->
      <div class="row">  
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Đăng Nhập</span><span class="subtext"></span></h1>
          <section class="newcustomer">
            <h2 class="heading2">Bạn chưa có tài khoản?</h2> </h2>
            <div class="loginbox">
              <h4 class="heading4"> Hãy đăng ký ngay</h4>
              <p>Có tài khoản sẽ giúp bạn mua sắm nhanh hơn, theo dõi các đơn đặt hàng bạn đã thực hiện và được cập nhật về tình trạng của đơn hàng đó.</p>
              <br>
              <p>Có tài khoản để tham gia các chương trình khuyến mãi, tri ân khách hàng...</p>
              <br>
              <br>
              <a href="<?php echo base_url();?>index.php/user/dangky/" class="btn btn-orange">Đăng Ký</a>
            </div>
          </section>
          <section class="returncustomer">
            <h2 class="heading2">Đã có tài khoản </h2>
            <div class="loginbox">
              <h4 class="heading4"></h4>
              <?php
                echo form_open('user');
              ?>
                <fieldset>
                  <div class="control-group">
                      <label class="control-label">E-Mail :</label>
                      <div class="controls">                
                        <?php 
                            echo form_input($email);
                            echo form_error('email','<div class="red">','</div>');
                        ?>
                  </div> 
                  <div class="control-group">
                    <label  class="control-label">Mật khẩu:</label>
                    <div class="controls">
                      <?php 
                            echo form_password($password);
                            echo form_error('password','<div class="red">','</div>');
                            if($error!="")
                                echo '<div class="red">'.$error.'</div>';
                        ?>
                    </div>
                  </div>
                  <a class="" href="<?php echo base_url();?>index.php/user/quenmatkhau/">Mất mật khẩu?</a>
                  <br>
                  <br>
                        
                  <input class="btn btn-orange" type="submit" name="ok" value="Đăng Nhập" /><br />
                </fieldset>
              
            </div>
          </section>
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