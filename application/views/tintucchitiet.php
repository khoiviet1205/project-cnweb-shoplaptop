<?php
	//Css file path :
		$path_css=base_url().'publics/css/';
	//Js file path :
		$path_js=base_url().'publics/js/';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tin Tức</title>
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
         <!-- Blog listing-->  
         <div class="span9 bloggrid">
          <h1 class="heading1"><span class="maintext">Tin Mới Nhất</span></h1>   
            <ul class="thumbnails">
                    	<div>
                        	<?php foreach($new_title_for_new_detail as $ntfnd)
							{
								echo "<h3 style='color:#09F'>" .$ntfnd['page_title']. "</h3>";
							}?>
                            <strong>Posted on: </strong><?php echo $ntfnd['date_news']?></p>
                            <p><img src="<?php echo base_url();?>/<?php echo $ntfnd['image_url']; ?>" alt="" title="">
                            <div class="clear"></div>
                            <?php
                            {
								echo "<b>" .$ntfnd['info_news']. "</b>";
								echo "<br />";
							}
                            ?> 
                        </div>
                        <div class="clear"></div><!--.clear-->
                    	<div id="new_detail">
                        <br />
                        	<?php foreach($new_detail as $nd)
							{
								echo $nd['full_news'];
							}
							?>
                    	</div><!--#new_detail-->                        
         </ul>
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