<?php
	//Css file path :
		$path_css=base_url().'publics/css/';
	//Js file path :
		$path_js=base_url().'publics/js/';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
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
<?php $this->load->view("header") ?>
<div id="maincontainer">
  <section id="product">
    <div class="container">
      <!--  breadcrumb -->
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo base_url();?>">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">So Sánh Sản Phẩm</li>
      </ul>
      <!-- Compare -->
      <div class="row">
        <!-- Compare Products-->
        <div class="span12">
          <h1 class="heading1"><span class="maintext">So Sánh Sản Phẩm</span><span class="subtext"> So Sánh Sản Phẩm Bạn Chọn</span></h1>
          <div class="cart-info">
            <table class="table table-striped table-bordered compare">
              <tbody>
                <tr>
                  <td>Tên Sản Phẩm</td>
                  <td>Hình Ảnh</td>
                  <td>Giá</td>
                  <td>Mô Tả</td>
                  <td>Loại</td>
                </tr>
                <?php if(!empty($infosp)) { ?> 
                <?php foreach($infosp as $items) : ?>
                <tr>
                  <td class="name"><a href="#"><?php echo $items['name_sp']?></a></td>
                  <td><img alt="" src="<?php echo $items['hinhanh'] ?>"></td>
				  <td><?php echo $items['price']?></td>
                  <td><?php echo $items['note_sp']?></td>
                  <td><?php echo $items['name_loai']?></td>
                </tr>
                 <?php endforeach ?>
                  <?php }else{ ?>
				<?php } ?>
              </tbody>
              <tbody>
              </tbody>
            </table>
            <a class="btn btn-orange pull-right mr10" href="<?php echo base_url();?>index.php/welcome/huy_sosanh/">Hủy So Sánh</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Footer -->
<?php $this->load->view("footer") ?>
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