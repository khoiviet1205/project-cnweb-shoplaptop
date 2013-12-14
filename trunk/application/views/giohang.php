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
          <a href="#">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Giỏ Hàng</li>
      </ul>       
      <h1 class="heading1"><span class="maintext"> Giỏ Hàng Của Bạn</span><span class="subtext"></span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="name">Tên Sản Phẩm</th>
            <th class="quantity">Số Lượng</th>
            <th class="price">Đơn Giá</th>
            <th class="total">Tổng Đơn Giá</th>
            <th class="delete" style="text-align:center"></th>
          </tr>
          <?php $i = 1; ?>
				<?php foreach ($info as $items){?>
          <input type='hidden' name='<?php echo $i."[rowid]" ?>' value="<?php echo $items['rowid']?>" />
          <tr>
            <td  class="name"><a href="#"><?php echo $items['name']?></a></td>
            <td class="quantity"><input type="text" size="1" value="<?php echo $items['qty']; ?>" name="quantity[40]" class="span1">             
             </td>           
            <td class="price"><?php echo number_format(($items['price']),0,',','.');?> đ</td>
            <td class="total"><?php echo number_format((($items['price'])*$items['qty']),0,',','.');?> đ</td>
            <td class="delete"><a class="btn btn-orange pull-right mr10" href="<?php echo base_url()."welcome/del_giohang/".$items['id'];?>">Xóa</a></td>             
          </tr>    
          <?php 
			$i++; }?>     
        </table>
      </div>
          </fieldset>
        </form>
      </div>
      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tr>
                <td><span class="extra bold">Tổng( chưa VAT) :</span></td>
                <td><span class="bold"><?php echo number_format(($this->cart->total()),0,',','.');?>đ</span></td>
              </tr>
              <tr>
                <td><span class="extra bold">VAT (10%) :</span></td>
                <td><span class="bold"><?php echo number_format((($this->cart->total()*10)/100),0,',','.');?>đ</span></td>
              </tr>
              <tr>
                <td><span class="extra bold totalamout">Tổng Cộng :</span></td>
                <td><span class="bold totalamout"><?php echo number_format((($this->cart->total())+(($this->cart->total()*10)/100)),0,',','.');?>đ</span></td>
              </tr>
            </table>
            <a class="btn btn-orange pull-right mr10" href="<?php echo base_url();?>index.php/welcome/thanhtoan/">Thanh Toán</a>
            <a class="btn btn-orange pull-right mr10" href="<?php echo base_url();?>">Tiếp Tục Mua Hàng</a>
          </div>
        </div>
        </div>
    </div>
  </section>
</div>

<!-- Footer -->
<?php $this->load->view("footer")?>
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