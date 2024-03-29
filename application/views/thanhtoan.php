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
        <li class="active">Checkout</li>
      </ul>
      <div class="row">        
        <!-- Account Login-->
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Checkout</span><span class="subtext"> Checkout Process Steps</span></h1>
          <div class="checkoutsteptitle">Step 1: Checkout Options<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep ">
            <section class="newcustomer ">
              <h3 class="heading3">New Customer </h3>
              <div class="loginbox">
                <label class="inline">
                  <input type="radio" value="option1">
                  Register Account </label>
                <br>
                <label class="inline">
                  <input type="radio" value="option1">
                  Guest Checkout </label>
                <p><br>
                  By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                <br>
                <a href="#" class="btn btn-orange">Continue</a>
              </div>
            </section>
            <section class="returncustomer">
              <h3 class="heading3">Returning Customer </h3>
              <div class="loginbox">
                <form class="form-vertical">
                  <fieldset>
                    <div class="control-group">
                      <label class="control-label">E-Mail Address:</label>
                      <div class="controls">
                        <input type="text" class="span3">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Password:</label>
                      <div class="controls">
                        <input type="text"  class="span3">
                      </div>
                    </div>
                    <a class="" href="#">Forgotten Password</a>
                    <br>
                    <br>
                    <a href="#" class="btn btn-orange">Login</a>
                  </fieldset>
                </form>
              </div>
            </section>
          </div>
          <div class="checkoutsteptitle">Step 2: Billing Details<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep">
            <div class="row">
              <form class="form-horizontal">
                <fieldset>
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >First Name<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Last Name<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >E-Mail<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Telephone<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Fax</label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Telephone<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Password<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Password Confirm<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                  </div>
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >Company</label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Company Id</label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Address 1<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Address 2</label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >City<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Post Code<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Country<span class="red">*</span></label>
                      <div class="controls">
                        <select >
                          <option>Please Select</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Region / State<span class="red">*</span></label>
                      <div class="controls">
                        <select >
                          <option>Please Select</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
            <a class="btn btn-orange pull-right">Continue</a>
          </div>
          <div class="checkoutsteptitle">Step 3: Delivery Details<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep">
            <div class="row">
              <form class="form-horizontal">
                <fieldset>
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >First Name<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Last Name<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >E-Mail<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Telephone<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Fax</label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Telephone<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Password<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Password Confirm<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                  </div>
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >Company</label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Company Id</label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Address 1<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Address 2</label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >City<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Post Code<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Country<span class="red">*</span></label>
                      <div class="controls">
                        <select >
                          <option>Please Select</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Region / State<span class="red">*</span></label>
                      <div class="controls">
                        <select >
                          <option>Please Select</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
            <a class="btn btn-orange pull-right">Continue</a>
          </div>
          <div class="checkoutsteptitle">Step 4: Delivery Method<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep">
            <p>Please select the preferred shipping method to use on this order..</p>
            <label class="inline">
              <input type="radio"  value="option1">
              Flat Shipping Rate</label>
            <textarea rows="3" >Add Comment here...</textarea>
            <br>
            <a class="btn btn-orange pull-right">Continue</a>
          </div>
          <div class="checkoutsteptitle">Step 5: Payment  Method<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep">
            <p>Please select the preferred payment method to use on this order.</p>
            <label class=" inline">
              <input type="radio" value="option1">
              Cash On Delivery</label>
            <textarea rows="3" >Add Comment here...</textarea>
            <br>
            <div class="pull-right">
              <a class="btn btn-orange pull-right">Continue</a>
              <div class="privacy">I have read and agree to the <a href="#">Privacy Policy</a>
              </div>
            </div>
          </div>
          <div class="checkoutsteptitle">Step 6: Confirm Order<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep">
            <div class="cart-info">
              <table class="table table-striped table-bordered">
                <tr>
                  <th class="image">Image</th>
                  <th class="name">Product Name</th>
                  <th class="model">Model</th>
                  <th class="quantity">Quantity</th>
                  <th class="price">Unit Price</th>
                  <th class="total">Total</th>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                  <td  class="name"><a href="#">Jeans</a></td>
                  <td class="model">My Product</td>
                  <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
                    &nbsp;
                    <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
                    <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>
                  <td class="price">$120.68</td>
                  <td class="total">$120.68</td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                  <td   class="name"><a href="#">T-Shirt</a></td>
                  <td class="model">My Product</td>
                  <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
                    &nbsp;
                    <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
                    <a href="#"><img class="tooltip-test" data-original-title="Remove" src="img/remove.png" alt=""></a></td>
                  <td class="price">$120.68</td>
                  <td class="total">$120.68</td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                  <td   class="name"><a href="#">Mobile</a></td>
                  <td class="model">My Product</td>
                  <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
                    &nbsp;
                    <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
                    <a href="#"><img class="tooltip-test" data-original-title="Remove" src="img/remove.png" alt=""></a></td>
                  <td class="price">$130.00</td>
                  <td class="total">$110.25</td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                  <td   class="name"><a href="#">T-Shirt</a></td>
                  <td class="model">product 11</td>
                  <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
                    &nbsp;
                    <a href="#"><img class="tooltip-test" data-original-title="Update" src="img/update.png" alt=""></a>
                    <a href="#">
                      <img class="tooltip-test" data-original-title="Remove" src="img/remove.png" alt=""></a></td>
                  <td class="price">$124.38</td>
                  <td class="total">$120.46</td>
                </tr>
              </table>
            </div>
            <div class="row">
              <div class="pull-right">
                <div class="span4 pull-right">
                  <table class="table table-striped table-bordered ">
                    <tbody>
                      <tr>
                        <td><span class="extra bold">Sub-Total :</span></td>
                        <td><span class="bold">$101.0</span></td>
                      </tr>
                      <tr>
                        <td><span class="extra bold">Eco Tax (-2.00) :</span></td>
                        <td><span class="bold">$11.0</span></td>
                      </tr>
                      <tr>
                        <td><span class="extra bold">VAT (17.5%) :</span></td>
                        <td><span class="bold">$21.0</span></td>
                      </tr>
                      <tr>
                        <td><span class="extra bold totalamout">Total :</span></td>
                        <td><span class="bold totalamout">$120.68</span></td>
                      </tr>
                    </tbody>
                  </table>
                  <input type="submit" class="btn btn-orange pull-right" value="CheckOut">
                  <input type="submit" class="btn btn-orange pull-right mr10" value="Continue Shopping">
                </div>
              </div>
            </div>
          </div>
        </div>        
        <!-- Sidebar Start-->
        <div class="span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span> Checkout Steps</span></h2>
              <ul class="nav nav-list categories">
                <li>
                  <a class="active" href="#">Checkout Options</a>
                </li>
                <li>
                  <a href="#">Billing Details</a>
                </li>
                <li>
                  <a href="#">Delivery Details</a>
                </li>
                <li>
                  <a href="#">Delivery Method</a>
                </li>                
                <li>
                  <a href="#"> Payment Method</a>
                </li>
              </ul>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->
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