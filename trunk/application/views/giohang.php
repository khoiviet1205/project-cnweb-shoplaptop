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
        <li class="active"> Shopping Cart</li>
      </ul>       
      <h1 class="heading1"><span class="maintext"> Shopping Cart</span><span class="subtext"> All items in your  Shopping Cart</span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Image</th>
            <th class="name">Product Name</th>
            <th class="model">Model</th>
            <th class="quantity">Qty</th>
              <th class="total">Action</th>
            <th class="price">Unit Price</th>
            <th class="total">Total</th>
           
          </tr>
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
            <td  class="name"><a href="#">Jeans</a></td>
            <td class="model">Purchased Product</td>
            <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
             
             </td>
             <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
              <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>
           
             
            <td class="price">$120.68</td>
            <td class="total">$120.68</td>
             
          </tr>
          
          
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
            <td  class="name"><a href="#">T-shirt</a></td>
            <td class="model">Purchased Product</td>
            <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
             
             </td>
             <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
              <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>
           
             
            <td class="price">$120.68</td>
            <td class="total">$120.68</td>
             
          </tr>
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
            <td  class="name"><a href="#">Shirt</a></td>
            <td class="model">Purchased Product</td>
            <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
             
             </td>
             <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
              <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>
           
             
            <td class="price">$120.68</td>
            <td class="total">$120.68</td>
             
          </tr>
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
            <td  class="name"><a href="#">Camera</a></td>
            <td class="model">Purchased Product</td>
            <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
             
             </td>
             <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
              <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>
           
             
            <td class="price">$120.68</td>
            <td class="total">$120.68</td>
             
          </tr>
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
            <td  class="name"><a href="#">Mobile</a></td>
            <td class="model">Purchased Product</td>
            <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
             
             </td>
             <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
              <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>
           
             
            <td class="price">$120.68</td>
            <td class="total">$120.68</td>
             
          </tr>
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
            <td  class="name"><a href="#">Jeans</a></td>
            <td class="model">Purchased Product</td>
            <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
             
             </td>
             <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
              <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>
           
             
            <td class="price">$120.68</td>
            <td class="total">$120.68</td>
             
          </tr>
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
            <td  class="name"><a href="#">Jeans</a></td>
            <td class="model">Purchased Product</td>
            <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
             
             </td>
             <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
              <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>
           
             
            <td class="price">$120.68</td>
            <td class="total">$120.68</td>
             
          </tr>
        </table>
      </div>
      <div class="cartoptionbox">
        <h4 class="heading4"> Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost. </h4>
        <input type="radio" class="radio">
        Use Coupon Code <br>
        <input type="radio" class="radio">
        Use Gift Voucher <br>
        <input type="radio" class="radio" checked="checked">
        Estimate Shipping & Taxes <br><br>
        <form class="form-vertical form-inline">
          <h4 class="heading4"> Enter your destination to get a shipping estimate.</h4>
          <fieldset>
            <div class="control-group">
              <label  class="control-label">Select list</label>
              <div class="controls">
                <select  class="span3 cartcountry">
                  <option>Country:</option>
                  <option>United Kindom</option>
                  <option>United States</option>
                </select>
                <select class="span3 cartstate">
                  <option>Region / State:</option>
                  <option>Angus</option>
                  <option>highlands</option>
                </select>
                <input type="submit" value="Get Quotes" class="btn btn-orange">
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tr>
                <td><span class="extra bold">Sub-Total :</span></td>
                <td><span class="bold">$101.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold">Eco Tax (-5.00) :</span></td>
                <td><span class="bold">$11.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold">VAT (18.2%) :</span></td>
                <td><span class="bold">$21.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold totalamout">Total :</span></td>
                <td><span class="bold totalamout">$150.28</span></td>
              </tr>
            </table>
            <input type="submit" value="CheckOut" class="btn btn-orange pull-right">
            <input type="submit" value="Continue Shopping" class="btn btn-orange pull-right mr10">
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