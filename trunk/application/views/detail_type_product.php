<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="publics/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="publics/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="publics/css/style.css"/>
<link rel="stylesheet" type="text/css" href="publics/css/flexslider.css"/>
<link rel="stylesheet" type="text/css" href="publics/css/jquery.fancybox.css"/>
<link rel="stylesheet" type="text/css" href="publics/css/cloud-zoom.css"/>
<link rel="shortcut ico" href="publics/assets/ico/favicon.html" />
</head>
<body>
<!-- Header Start -->
	<?php $this->load->view("header")?>

<!-- Container -->
    
   <div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Hãng Laptop</li>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Hãng Laptop</span></h2>
            <ul class="nav nav-list categories">
              <li>
                <a href="category.html">Lenovo</a>
              </li>
              <li>
                <a href="category.html">Sony Vaio</a>
              </li>
              <li>
                <a href="category.html">Dell</a>
              </li>
              <li>
                <a href="category.html">HP</a>
              </li>
              <li>
                <a href="category.html">Acer</a>
              </li>
            </ul>
          </div>
         <!--  Mua nhiều nhất -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Mua Nhiều</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="publics/img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
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
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
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
                  <ul class="thumbnails grid">
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
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
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
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
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
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
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
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
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="offer tooltip-test" >Offer</span>
                        <a href="#"><img alt="" src="img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
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
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="img/product2.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
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
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
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
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="offer tooltip-test" >Offer</span>
                        <a href="#"><img alt="" src="img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
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
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="img/product2.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
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
                  </ul>
                  <ul class="thumbnails list row">
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                            <a href="#"><img alt="" src="img/product1.jpg"></a>
                          </div>
                          <div class="span6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
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
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                            <a href="#"><img alt="" src="img/product1.jpg"></a>
                          </div>
                          <div class="span6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
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
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                            <a href="#"><img alt="" src="img/product1.jpg"></a>
                          </div>
                          <div class="span6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
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
                  </ul>
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
<script src="publics/js/jquery.js"></script>
<script src="publics/js/bootstrap.js"></script>
<script src="publics/js/respond.min.js"></script>
<script src="publics/js/application.js"></script>
<script src="publics/js/bootstrap-tooltip.js"></script>
<script defer src="publics/js/jquery.fancybox.js"></script>
<script defer src="publics/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="publics/js/jquery.tweet.js"></script>
<script  src="publics/js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="publics/js/jquery.validate.js"></script>
<script type="text/javascript"  src="publics/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="publics/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="publics/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="publics/js/jquery.ba-throttle-debounce.min.js"></script>
<script defer src="publics/js/custom.js"></script>

</body>
</html>