<?php
	//Css file path :
		$path_css=base_url().'publics/css/';
	//Js file path :
		$path_js=base_url().'publics/js/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="<?php echo $path_css; ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo $path_css; ?>bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo $path_css; ?>style.css" rel="stylesheet">
<link href="<?php echo $path_css; ?>flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="<?php echo $path_css; ?>jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo $path_css; ?>cloud-zoom.css" rel="stylesheet">
<link rel="shortcut ico" href="publics/assets/ico/favicon.html" />
</head>
<body>
<!-- Header Start -->
	<?php $this->load->view("header",$hanglaptop)?>

<!-- Container -->
    <div id="maincontainer">
	<br />
 <!-- San pham tìm kiếm-->
  <section id="latest" class="row">
   <?php if(!empty($results)) { ?> 
    <div class="container">
      <h1 class="heading1"><span class="maintext">Kết Quả Tìm Kiếm</span>
      <span class="subtext"></span></h1>
       <ul class="thumbnails">
      	<?php foreach($results as $item) : ?>
        <li class="span3">
          <a class="prdocutname" href="product.html"><?php echo $item['name_sp']; ?></a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo base_url();?>/<?php echo $item['img_sp']; ?>"></a>
            <div class="shortlinks">
              <a class="details" href="<?php echo base_url();?>index.php/welcome/chitietsanpham/<?php echo $item['id_sp'];?>">Chi Tiết</a>
              <a class="wishlist" href="#">Ưa Thích</a>
              <a class="compare" href="#">So Sánh</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="<?php echo base_url();?>index.php/welcome/add_giohang/<?php echo $item['id_sp']; ?>" class="productcart">Thêm Vào</a>
              <div class="price">
                <div class="pricenew"><?php echo number_format(($item['price']-(($item['price']*$item['price_km'])/100)),0,',','.');?> đ</div>
                <div class="priceold"><?php echo number_format($item['price'],0,',','.'); ?> đ</div>
              </div>
            </div>
          </div>
        </li>
        <?php endforeach ?>
      </ul>
      <?php }else{ ?>
		<h1 style="text-align:center"><span class="maintext">Không tìm thấy sản phẩm nào</span></h1>
		<?php } ?>
      <div class="pagination pull-right">
           <ul>
             <?php echo $this->pagination->create_links();?>
            </ul>
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
<script  src="<?php echo $path_js?>cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="<?php echo $path_js?>jquery.validate.js"></script>
<script type="text/javascript"  src="<?php echo $path_js?>jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="<?php echo $path_js?>jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="<?php echo $path_js?>jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="<?php echo $path_js?>jquery.ba-throttle-debounce.min.js"></script>
<script defer src="<?php echo $path_js?>custom.js"></script>

</body>
</html>