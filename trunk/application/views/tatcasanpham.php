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
        <li class="active">ads</li>    
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Categories</span></h2>
            <ul class="nav nav-list categories">
              <li>
                <a href="category.html">Men Accessories</a>
              </li>
              <li>
                <a href="category.html">Women Accessories</a>
              </li>
              <li>
                <a href="category.html">Computers </a>
              </li>
              <li>
                <a href="category.html">Home and Furniture</a>
              </li>
              <li>
                <a href="category.html">Others</a>
              </li>
            </ul>
          </div>
         <!--  Best Seller -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Best Seller</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>
          <!-- Latest Product -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Latest Products</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>
          <!--  Must have -->  
          <div class="sidewidt">
          <h2 class="heading2"><span>Must have</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="img/product1.jpg" alt="" />
              </li>
              <li>
                <img src="img/product2.jpg" alt="" />
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
                    Sort By :
                    <select class="span2">
                      <option>Default</option>
                      <option>Name</option>
                      <option>Pirce</option>
                      <option>Rating </option>
                      <option>Color</option>
                    </select>
                    &nbsp;&nbsp;
                    Show:
                    <select class="span1">
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                    </select>
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
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="<?php echo base_url();?>/<?php echo $item['img_sp']; ?>"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">Chi Tiết</a>
                          <a class="wishlist" href="#">Ưa Thích</a>
                          <a class="compare" href="#">So Sánh</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
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
                            <div class="productdiscrption"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.<br>
                              <br>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stan </div>
                            <div class="pricetag">
                              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                              <div class="price">
                                <div class="pricenew">$4459.00</div>
                                <div class="priceold">$5000.00</div>
                              </div>
                            </div>
                            <div class="shortlinks">
                              <a class="details" href="#">DETAILS</a>
                              <a class="wishlist" href="#">WISHLIST</a>
                              <a class="compare" href="#">COMPARE</a>
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
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
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