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
<link href="<?php echo $path_css; ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo $path_css; ?>bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo $path_css; ?>style.css" rel="stylesheet">
<link href="<?php echo $path_css; ?>flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="<?php echo $path_css; ?>jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo $path_css; ?>cloud-zoom.css" rel="stylesheet">

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
          <a href="<?php echo base_url();?>">Trang chủ</a>
          <span class="divider">/</span>
	   </li>
       <?php $lsp=$this->uri->segment(3); ?>
        <li class="active"><?php echo $tenloai; ?></li>    
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Hãng Laptop</span></h2>
            <ul class="nav nav-list categories">
            <?php foreach($hanglaptop as $item) : ?>
              <li>
                <a href="<?php echo base_url();?>index.php/welcome/lay_sp_theohang/<?php echo $item['id_cate2'];?>"><?php echo $item['name_cate2'] ?></a>
              </li>
               <?php endforeach ?>
            </ul>
          </div>
         <!--  Mua Nhiều -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Mua Nhiều</span></h2>
            <ul class="bestseller">
            <?php foreach($sp_muanhieu as $item) : ?>
              <li>
                <img width="50" height="50" src="<?php echo base_url();?>/<?php echo $item['img_sp']; ?>" alt="product" title="product">
                <a class="productname" href="<?php echo base_url();?>index.php/welcome/chitietsanpham/<?php echo $item['id_sp'];?>"><?php echo $item['name_sp'] ?></a>
                <span class="procategory"><?php echo $item['name_loai'] ?></span>
                <span class="price"><?php echo number_format(($item['price']-(($item['price']*$item['price_km'])/100)),0,',','.');?> đ</span>
              </li>
              <?php endforeach ?>
            </ul>
          </div>
          
          <!--  Must have -->  
          <div class="sidewidt">
          <h2 class="heading2"><span>Nên Mua</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="<?php echo base_url();?>/publics/img/product1.jpg" alt="" />
              </li>
              <li>
                <img src="<?php echo base_url();?>/publics/img/product2.jpg" alt="" />
              </li>
            </ul>
          </div>
          </div>
        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Sorting-->
                <div class="sorting well">
                  <form class=" form-inline pull-left">
                    Xếp theo :
                    <select class="span2" name="chonsx">
                      <option value="macdinh">Mặc định</option>
                      <option value="ten">Tên</option>
                      <option value="gia">Giá</option>
                    </select>
                    &nbsp;&nbsp;
                  </form>
                  <div class="btn-group pull-right">
                    <button class="btn" id="list"><i class="icon-th-list"></i>
                    </button>
                    <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
                  </div>
                </div>
               <!-- Category-->
                <section id="categorygrid">
                 <?php if(!empty($tatca_sp)) { ?> 
                  <ul class="thumbnails grid">
                   <?php foreach($tatca_sp as $item) : ?>
                   <li class="span3">                 
                      <a class="prdocutname" href="product.html"><?php echo $item['name_sp'] ?></a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="<?php echo base_url();?>/<?php echo $item['img_sp']; ?>"></a>
                        <div class="shortlinks">
                          <a class="details" href="<?php echo base_url();?>index.php/welcome/chitietsanpham/<?php echo $item['id_sp'];?>">Chi Tiết</a>
                          <a class="wishlist" href="#">Ưa Thích</a>
                          <a class="compare" href="#">So Sánh</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="<?php echo base_url();?>index.php/welcome/add_giohang/<?php echo $item['id_sp']; ?>" class="productcart">THÊM VÀO</a>
                          <div class="price">
                            <div class="pricenew"><?php echo number_format(($item['price']-(($item['price']*$item['price_km'])/100)),0,',','.');?> đ</div>
                            <div class="priceold"><?php echo number_format($item['price'],0,',','.'); ?></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach ?>
                   </ul> 
                    <?php }else{ ?>
					Đang cập nhật...
                   <?php } ?>
                    <?php if(!empty($tatca_sp)) { ?> 
                  <ul class="thumbnails list row">
                   <?php foreach($tatca_sp as $item) : ?>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                            <a href="#"><img alt="" src="<?php echo base_url();?>/<?php echo $item['img_sp']; ?>"></a>
                          </div>
                          <div class="span6">
                            <a class="prdocutname" href="product.html"><?php echo $item['name_sp'] ?></a>
                            <div class="productdiscrption"> Mô tả sản phẩm ở đây </div>
                            <div class="pricetag">
                              <span class="spiral"></span><a href="#" class="productcart">THÊM VÀO</a>
                              <div class="price">
                                <div class="pricenew"><?php echo number_format(($item['price']-(($item['price']*$item['price_km'])/100)),0,',','.');?> đ</div>
                                <div class="priceold"><?php echo number_format($item['price'],0,',','.'); ?> đ</div>
                              </div>
                            </div>
                            <div class="shortlinks">
                              <a class="details" href="<?php echo base_url();?>index.php/welcome/chitietsanpham/<?php echo $item['id_sp'];?>">CHI TIẾT</a>
                              <a class="wishlist" href="#">ƯA THÍCH</a>
                              <a class="compare" href="#">SO SÁNH</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>     
                    <?php endforeach ?>               
                  </ul>
                  <?php }else{ ?>
					Đang cập nhật...
                 <?php } ?>
                  <div class="pagination pull-right">
                    <ul>
                    <h2><div style="font-size: large;"> Trang <?php echo $this->pagination->create_links();?></div></h2>
                      
                    </ul>
                  </div>
                  
                </section>
              </div>
            </div>
          </section>
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
<script  src="<?php echo $path_js?>cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="<?php echo $path_js?>jquery.validate.js"></script>
<script type="text/javascript"  src="<?php echo $path_js?>jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="<?php echo $path_js?>jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="<?php echo $path_js?>jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="<?php echo $path_js?>jquery.ba-throttle-debounce.min.js"></script>
<script defer src="<?php echo $path_js?>custom.js"></script>
</body>
</html>