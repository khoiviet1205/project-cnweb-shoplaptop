<?php
	//Css file path :
		$path_css=base_url().'publics/css/';
	//Js file path :
		$path_js=base_url().'publics/js/';
    //Js file of CKEditor:
		$path_ckeditor=base_url().'ckeditor/';
    //Img file path :
		$path_img=base_url().'publics/data/';
    // khai bao 
	$page_title = array(
                        "name"  => "page_title",
                        "id"    => "page_title",
                        "size"  => "30",
                        "value" => $info["page_title"]
                    );
    $info_news = array(
                        'name'        => 'info_news',
                        'id'          => 'info_news',
                        'size'        => '30',
                        'value'       => $info["info_news"],
                    );
    $date_news = array(
                        'name'        => 'date_news',
                        'id'          => 'date_news',
                        'size'        => '30',
                        'value'       => $info["date_news"],
                    );
    $duyet_news = array(
                        'name'        => 'duyet_news',
                        'id'          => 'duyet_news',
                        'size'        => '30',
                        'value'       => $info["duyet_news"],
                    );
    $full_news = array(
                        'name'        => 'full_news',
                        'id'          => 'full_news',
                        'size'        => '30',
                        'value'       => $info["full_news"],
                        'rows'        => '10',
                    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "Sửa tin tức" ?></title>
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
          <a href="<?php echo base_url();?>">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url();?>index.php/admin/qltintuc">Quản lý tin tức</a>
            <span class="divider">/</span>
        </li>
        <li class="active">Chỉnh sửa</li>
      </ul>
      <div class="row">
        
        <!-- My Account-->
        <div class="span9">
        <h1 class="heading1"><span class="maintext">Sửa thông tin tin tức</span><span class="subtext"></span></h1>        
              <h3 class="heading3">Sửa thông tin </h3>
        <form name="frmEdit" id="frmEdit" action="" method="post" enctype="multipart-formdata">
            <fieldset>  
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Tiêu đề tin tức:</label>
                      <div class="controls">                
                        <?php 
                            echo form_input($page_title);
                            echo form_error('page_title','<div class="red">','</div>');
                        ?>
                      </div>  
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Trích dẫn</label>
                      <div class="controls">                
                        <?php 
                            echo form_input($info_news);
                            echo form_error('info_news','<div class="red">','</div>');
                        ?>
                      </div>       
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Ngày đăng</label>
                      <div class="controls">                
                        <?php 
                            echo form_input($date_news);
                            echo form_error('date_news','<div class="red">','</div>');
                        ?>
                      </div>
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Người đăng</label>
                      <div class="controls">                
                        <?php 
                            echo form_input($duyet_news);
                            echo form_error('duyet_news','<div class="red">','</div>');
                        ?>
                      </div>
                 
            <div class="checkoutsteptitle"><span class="red">*</span> Chi tiết tin tức:<a class="modify">Ẩn/Hiện</a>
            </div>
                        <div class="checkoutstep">        
                        <?php 
                            echo form_textarea($full_news);
                            echo form_error('full_news','<div class="red">','</div>');
                        ?>       
                        </div>
            <input class="btn btn-orange" type="submit" name="ok" value="Cập Nhật" />
            <?php echo "&nbsp&nbsp&nbsp&nbsp" ?>
            <a href="<?php echo base_url();?>index.php/admin/qltintuc/" class="btn btn-orange">Quay lại</a>
            <br />
    
            </fieldset>
        </form>                                                                
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