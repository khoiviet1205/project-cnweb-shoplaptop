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
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Compare Products</li>
      </ul>
      <!-- Compare -->
      <div class="row">
        <!-- Compare Products-->
        <div class="span12">
          <h1 class="heading1"><span class="maintext">Compare Prdoucts</span><span class="subtext"> Compare product from choice</span></h1>
          <div class="cart-info">
            <table class="table table-striped table-bordered compare">
              <tbody>
                <tr>
                  <td>Product</td>
                  <td class="name"><a href="#">Jeans</a></td>
                  <td class="name"><a href="#">Jeans</a></td>
                  <td class="name"><a href="#">T-shirts</a></td>
                </tr>
                <tr>
                  <td>Image</td>
                  <td><img alt="" src="img/prodcut-40x40.jpg"></td>
                  <td><img alt="" src="img/prodcut-40x40.jpg"></td>
                  <td><img alt="" src="img/prodcut-40x40.jpg"></td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td> $105.00 </td>
                  <td> $40.00 </td>
                  <td> $200.00 </td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td>Levis</td>
                  <td>Levis</td>
                  <td>Levis</td>
                </tr>
                <tr>
                  <td>Brand</td>
                  <td>Levis</td>
                  <td>Levis</td>
                  <td>Levis</td>
                </tr>
                <tr>
                  <td>Availability</td>
                  <td>In Stock</td>
                  <td>Out of Stock</td>
                  <td>In Stock</td>
                </tr>
                <tr>
                  <td>Rating</td>
                  <td><ul class="rate">
                      <li class="on"></li>
                      <li class="on"></li>
                      <li class="on"></li>
                      <li class="on"></li>
                      <li class="off"></li>
                    </ul>
                    <br>
                    Based on 8 reviews.</td>
                  <td><ul class="rate">
                      <li class="on"></li>
                      <li class="on"></li>
                      <li class="on"></li>
                      <li class="on"></li>
                      <li class="on"></li>
                    </ul>
                    <br>
                    Based on 4 reviews.</td>
                  <td><ul class="rate">
                      <li class="on"></li>
                      <li class="on"></li>
                      <li class="on"></li>
                      <li class="off"></li>
                      <li class="off"></li>
                    </ul>
                    <br>
                    Based on 6 reviews.</td>
                </tr>
                <tr class="description">
                  <td>Summary</td>
                  <td >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</td>
                  <td >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</td>
                  <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a class="btn btn-orange pull-right " href="#">Add to Cart</a>
                    <a class="btn btn-orange pull-right mr10" href="#">Remove</a></td>
                </tr>
              </tbody>
            </table>
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