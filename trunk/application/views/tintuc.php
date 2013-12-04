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
<title>SimpleOne - A Responsive Html5 Ecommerce Template</title>
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
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Blog</li>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside  class="span3">
          <div class="sidewidt">
            <h2 class="heading2"><span>Blog Categories</span></h2>
            <ul class="nav nav-list categories">
              <li>
                <a href="category.html">Women </a>
              </li>
              <li>
                <a href="category.html">Men </a>
              </li>
              <li>
                <a href="category.html">Children </a>
              </li>
              <li>
                <a href="category.html">Electronics </a>
                <ul>
                  <li><a href="product.html">Mobile </a>
                  </li>
                  <li><a href="product.html">Laptop</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="category.html">Computers</a>
              </li>
              <li>
                <a href="category.html">Jewellery </a>
              </li>
            </ul>
          </div>
          <div class="sidewidt">
            <h2 class="heading2"><span>Others</span></h2>
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#popular">Popular</a>
              </li>
              <li><a href="#recent">Recent</a>
              </li>
              <li><a href="#comments">Comments</a>
              </li>
            </ul>
            <div class="tab-content sideblog">
              <div id="popular" class="tab-pane active">
                <ul>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a class="blogtitle" href="product.html">My Blog Title will appear here </a>
                    <div class="pull-left">
                      <span class="mr10"><i class="icon-calendar"></i> January 10, 2013 </span>
                      <span class="mr10"><a href="#"><i class="icon-comment"></i> 8 Comments</a>
                      </span>
                      <span class="mr10">
                      <a href="#"><i class="icon-tag"></i> css3, html5, responsive</a>
                      </span>
                    </div>
                  </li>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a class="blogtitle" href="product.html">My Blog Title will appear here </a>
                    <div class="pull-left">
                      <span class="mr10"><i class="icon-calendar"></i> August 26, 2012 </span>
                      <span class="mr10"><a href="#"><i class="icon-comment"></i> 15 Comments</a>
                      </span>
                      <span class="mr10">
                      <a href="#"><i class="icon-tag"></i> css3, html5, responsive</a>
                      </span>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="recent" class="tab-pane">
                <ul>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a class="blogtitle" href="product.html">Lorem Ipsum Title appear here </a>
                    <div class="pull-left">
                      <span class="mr10"><i class="icon-calendar"></i> February 03, 2012</span>
                      <span class="mr10"><a href="#"><i class="icon-comment"></i> 3 Comments</a>
                      </span>
                      <span class="mr10">
                      <a href="#"><i class="icon-tag"></i> css3, html5, responsive</a>
                      </span>
                    </div>
                  </li>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a class="blogtitle" href="product.html">My Blog Title will appear here </a>
                    <div class="pull-left">
                      <span class="mr10"><i class="icon-calendar"></i> January 3, 2013 </span>
                      <span class="mr10"><a href="#"><i class="icon-comment"></i> 6 Comments</a>
                      </span>
                      <span class="mr10">
                      <a href="#"><i class="icon-tag"></i> css3, html5, responsive</a>
                      </span>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="comments" class="tab-pane">
                <ul>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a href="product.html">Your recent comment will appear here...</a>
                    <a class="usercomment" href="enavato.html"><i class="icon-edit"></i> User 1</a>
                  </li>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a href="product.html">Your recent comment will appear here...</a>
                    <a class="usercomment" href="enavato.html"><i class="icon-edit"></i> User 2</a>
                  </li>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a href="product.html">Your recent comment will appear here...</a>
                    <a class="usercomment" href="enavato.html"><i class="icon-edit"></i> User 3</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="sidewidt">
            <h2 class="heading2"><span>Tags</span></h2>
            <ul class="tags">
              <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> html</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> html</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> css</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> jquery</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> css</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> jquery</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> css</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> jquery</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> html</a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
        <div class="span9">
         <!-- Blog start-->   
          <section id="latestblog">         
            <div class="blogdetail">
              <h2 class="heading2"><span>BLog Title Appear</span></h2>
              <div class="blogicons">
                <div class="pull-left">
                  <span class="mr10"><i class="icon-calendar"></i> August 26, 2012 </span>
                  <span class="mr10"><a href="#"><i class="icon-comment"></i> 5 Comments</a>
                  </span>
                  <span class="mr10">
                  <a href="#"><i class="icon-tag"></i> css3, html5, responsive</a>
                  </span>
                </div>
              </div>
              <ul class="margin-none">
                <li class="listblcok">
                  <div class="mb20">
                    <a class="fancyboxpopup thumbnail" href="img/product1big.jpg"><img src="img/productblog.jpg" alt=""></a>
                  </div>
                  <div class="caption">
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. </p>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. </p>
                    <br>
                    <br>
                    <div class="author">by:<a href="#"> themeforest</a>
                    </div>
                  </div>
                </li>
              </ul>
              <!-- Comment-->
              <section class="commentsblog">
                <h2 class="heading2"><span>Comments (2)</span></h2>
                <ul class="comments">
                  <li>
                    <a class="avtar thumbnail" ><img src="img/avtar.jpg" alt=""></a>
                    <div class="commentdetail">
                      <a class="blogtitle" href="#">themeforest</a>
                      <p> Hi, I am themeforest. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                      <p> I am themeforest. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                      <a href="#">http://www.themeforest.net</a>
                    </div>
                  </li>
                  <li>
                    <a class="avtar thumbnail " ><img src="img/avtar.jpg" alt=""></a>
                    <div class="commentdetail">
                      <a class="blogtitle" href="#">themeforest</a>
                      <p> Hi, I am themeforest. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                      <p> I am themeforest. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                      <a href="#">http://www.themeforest.net</a>
                    </div>
                  </li>
                </ul>
              </section>
              <!-- Leave Comment-->
              <section class="leavecomment">
                <h2 class="heading2"><span>Leave a comment</span></h2>
                <form method="post" class="form-horizontal commentform2" novalidate="novalidate">
                  <fieldset>
                    <div class="control-group">
                      <label class="control-label" >Name <span class="required">*</span></label>
                      <div class="controls">
                        <input type="text" name="name" value="" id="name" class="required">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Email <span class="required">*</span></label>
                      <div class="controls">
                        <input type="email" name="email" value="" id="email" class="required email">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Url</label>
                      <div class="controls">
                        <input type="url" name="url" value="" id="url">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Your Comment</label>
                      <div class="controls">
                        <textarea name="messagee" id="message" cols="40" rows="6" class="required"></textarea>
                      </div>
                    </div>
                    <div class="controls">
                      <input type="submit" id="submit_id" value="Submit" class="btn btn-orange">
                      <input type="reset" value="Reset" class="btn">
                    </div>
                  </fieldset>
                </form>
              </section>
            </div>
             <!-- Paging-->
            <div class="row">
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
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Footer -->
<footer id="footer">
  <section class="footersocial">
    <div class="container">
      <div class="row">
        <div class="span3 aboutus">
          <h2>About Us </h2>
          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
            <br>
            t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        </div>
        <div class="span3 contact">
          <h2>Contact Us </h2>
          <ul>
            <li class="phone"> +123 456 7890, +123 456 7890</li>
            <li class="mobile"> +123 456 7890, +123 456 78900</li>
            <li class="email"> test@test.com</li>
            <li class="email"> test@test.com</li>
          </ul>
        </div>
        <div class="span3 twitter">
          <h2>Twitter </h2>
          <div id="twitter">
          </div>
        </div>
        <div class="span3 facebook">
          <h2>Facebook </h2>
          <div id="fb-root"></div>
          <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript"></script>
          <script type="text/javascript">FB.init("");</script>
          <script type="text/javascript">
//<![CDATA[
document.write('<fb:fan profile_id="80655071208" stream="0"	connections="6"	logobar="0" height="190px"	width="200"css="css/fb.css"></fb:fan> ');
//]]>
</script>
        </div>
      </div>
    </div>
  </section>
  <section class="footerlinks">
    <div class="container">
      <div class="info">
        <ul>
          <li><a href="#">Privacy Policy</a>
          </li>
          <li><a href="#">Terms &amp; Conditions</a>
          </li>
          <li><a href="#">Affiliates</a>
          </li>
          <li><a href="#">Newsletter</a>
          </li>
        </ul>
      </div>
      <div id="footersocial">
        <a href="#" title="Facebook" class="facebook">Facebook</a>
        <a href="#" title="Twitter" class="twitter">Twitter</a>
        <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
        <a href="#" title="rss" class="rss">rss</a>
        <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
        <a href="#" title="Skype" class="skype">Skype</a>
        <a href="#" title="Flickr" class="flickr">Flickr</a>
      </div>
    </div>
  </section>
  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="span6"> All images are copyright to their owners. </div>
        <div class="span6 textright"> ShopSimple @ 2012 </div>
      </div>
    </div>
  </section>
  <a id="gotop" href="#">Back to top</a>
</footer>
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