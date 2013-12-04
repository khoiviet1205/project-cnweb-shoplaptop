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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <li class="active">Đăng ký tài khoản</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Thông tin tài khoản</span><span class="subtext"></span></h1>
          <form class="form-horizontal">
            <h3 class="heading3">Thông tin cá nhân</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Họ tên:</label>
                  <div class="controls">
                    <input type="text"  class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Email:</label>
                  <div class="controls">
                    <input type="text"  class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Số điện thoại:</label>
                  <div class="controls">
                    <input type="text"  class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Địa chỉ:</label>
                  <div class="controls">
                    <input type="text"  class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Giới tính:</label>
                  <div class="controls">
                    <input type="radio" value="nu" name="sex" checked="" class="input-xlarge"> Nữ
                    <?php
                        echo "&nbsp&nbsp&nbsp&nbsp";
                    ?>
                    <input type="radio" value="nam" name="sex" class="input-xlarge"> Nam
                    
                  </div>
                </div>
              </fieldset>
            </div>
            <h3 class="heading3">Mật Khẩu</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Mật Khẩu:</label>
                  <div class="controls">
                    <input type="text"  class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Xác Thực Mật Khẩu:</label>
                  <div class="controls">
                    <input type="text"  class="input-xlarge">
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="pull-right">
              <label class="checkbox inline">
                <input type="checkbox" value="option2" >
              </label>
              I have read and agree to the <a href="#" >Privacy Policy</a>
              &nbsp;
              <input type="Submit" class="btn btn-orange" value="Continue">
            </div>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/application.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script defer src="js/jquery.fancybox.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script  src="js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="js/jquery.ba-throttle-debounce.min.js"></script>
<script defer src="js/custom.js"></script>
</body>
</html>