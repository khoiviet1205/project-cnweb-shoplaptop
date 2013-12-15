<?php
	//Css file path :
		$path_css=base_url().'publics/css/';
	//Js file path :
		$path_js=base_url().'publics/js/';
	
    $name_sp = array(
                        "name"  => "name_sp",
                        "id"    => "name_sp",
                        "size"  => "30",
                        "value" => set_value("name_sp"),
                    );
    $price = array(
                        'name'        => 'price',
                        'id'          => 'price',
                        'size'        => '30',
                        'value'       => set_value("price"),
                    );
    $soluong = array(
                        'name'        => 'soluong',
                        'id'          => 'soluong',
                        'size'        => '30',
                        'value'       => set_value("soluong"),
                    );
    $price_km = array(
                        'name'        => 'price_km',
                        'id'          => 'price_km',
                        'size'        => '30',
                        'value'       => set_value("price_km"),
                    );
    $note_sp = array(
                        'name'        => 'note_sp',
                        'id'          => 'note_sp',
                        'size'        => '30',
                        'value'       => set_value("note_sp"),
                        'rows'        => '10',
                    );
    $id_cate2 = array(
                        'name'        => 'id_cate2',
                        'id'          => 'id_cate2',
                        'size'        => '30',
                        'value'       => set_value("id_cate2"),
                    );
    $id_loai = array(
                        'name'        => 'id_loai',
                        'id'          => 'id_loai',
                        'size'        => '30',
                        'value'       => set_value("id_loai"),
                    );
    $mota_sp = array(
                        'name'        => 'mota_sp',
                        'id'          => 'mota_sp',
                        'size'        => '30',
                        'value'       => set_value("mota_sp"),
                        'rows'        => '10',
                    );
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
          <a href="<?php echo base_url();?>">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url();?>index.php/user">Tài khoản</a>
            <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url();?>index.php/admin/qlsanpham">Quản lý sản phẩm</a>
            <span class="divider">/</span>
        </li>
        <li class="active">Chỉnh sửa</li>
      </ul>
      <div class="row">
        
        <!-- My Account-->
        <div class="span9">
        <h1 class="heading1"><span class="maintext">Sửa thông tin sản phẩm</span><span class="subtext"></span></h1>        
              <h3 class="heading3">Sửa thông tin </h3>
        <?php 
                            echo form_open_multipart();
                        ?>
            <fieldset>  
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Tên sản phẩm:</label>
                      <div class="controls">                
                        <?php 
                            echo form_input($name_sp);
                            echo form_error('name_sp','<div class="red">','</div>');
                        ?>
                      </div>  
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Giá:</label>
                      <div class="controls">                
                        <?php 
                            echo form_input($price);
                            echo form_error('price','<div class="red">','</div>');
                        ?>
                      </div>       
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Giá khuyến mãi:</label>
                      <div class="controls">                
                        <?php 
                            echo form_input($price_km);
                            echo form_error('price_km','<div class="red">','</div>');
                        ?>
                      </div>
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Số lượng:</label>
                      <div class="controls">                
                        <?php 
                            echo form_input($soluong);
                            echo form_error('soluong','<div class="red">','</div>');
                        ?>
                      </div> 
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Hãng:</label>
                      <div class="controls">
                        <select name="id_cate2">
                            <option value="9" > ACER </option>
                            <option value="10" > ASUS </option>
                            <option value="11" > DELL </option>
                            <option value="12" > EMACHINES </option>
                            <option value="13" > HP </option>
                            <option value="14" > LENOVO </option>
                            <option value="15" > SONY </option>
                            <option value="16" > TOSHIBA </option>
                        </select><br />
                      </div>
                      </div>
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Loại:</label>
                      <div class="controls">
                        <select name="id_loai">
                            <option value="4" > Sản phẩm ưa chuộng </option>
                            <option value="5" > Sản phẩm phổ thông </option>
                            <option value="6" > Sản phẩm cao cấp </option>
                            <option value="7" > Sản phẩm trung cấp </option>
                            <option value="8" > Sản phẩm mới nhất </option>
                        </select><br />
                      </div>
                      </div> 
            <div class="control-group">
                      <label class="control-label"><span class="red">*</span> Ảnh:</label>
                      <div class="controls">                
                        <?php 
                            echo form_upload('img');
                            echo '<div class="red">'.$report.'</div>';
                        ?>
                      </div>   
            <div class="checkoutsteptitle"><span class="red">*</span> Chi tiết sản phẩm:<a class="modify">Ẩn/Hiện</a>
            </div>
                        <div class="checkoutstep">        
                        <?php 
                            echo form_textarea($note_sp);
                            echo form_error('note_sp','<div class="red">','</div>');
                        ?>       
                        </div>
            
            <div class="checkoutsteptitle">Mô tả sản phẩm:<a class="modify">Ẩn/Hiện</a>
            </div>
                        <div class="checkoutstep">        
                        <?php 
                            echo form_textarea($mota_sp);
                            echo form_error('mota_sp','<div class="red">','</div>');
                        ?>       
                        </div>
            <input class="btn btn-orange" type="submit" name="ok" value="Cập Nhật" />
            <?php echo "&nbsp&nbsp&nbsp&nbsp" ?>
            <a href="<?php echo base_url();?>index.php/admin/qlsanpham/" class="btn btn-orange">Quay lại</a>
            <br />
    
            </fieldset>
                                                                        
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