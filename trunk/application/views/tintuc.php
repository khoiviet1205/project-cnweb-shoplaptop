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
         <!-- Category-->    
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
           <!-- Other-->
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
                    <a class="blogtitle" href="product.html">My Blog Title will appear here  </a>
                    <div>                      
                      <span class="mr10"><i class="icon-calendar"></i> January 10, 2013 </span>
                      <span class="mr10"><a href="#"><i class="icon-comment"></i> 8 Comments</a> </span>
                      <span class="mr10"> <a href="#"><i class="icon-tag"></i> css3, html5, responsive</a> </span>
                      </div>
                  </li>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a class="blogtitle" href="product.html">My Blog Title will appear here  </a>
                    <div>                      
                      <span class="mr10"><i class="icon-calendar"></i> August 26, 2012 </span>
                      <span class="mr10"><a href="#"><i class="icon-comment"></i> 15 Comments</a> </span>
                      <span class="mr10"> <a href="#"><i class="icon-tag"></i> css3, html5, responsive</a> </span>
                      </div>
                  </li>
                  
                  
                </ul>
              </div>
              <div id="recent" class="tab-pane">
                <ul>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a class="blogtitle" href="product.html">Lorem Ipsum Title appear here  </a>
                    <div>                      
                      <span class="mr10"><i class="icon-calendar"></i> February 03, 2012</span>
                      <span class="mr10"><a href="#"><i class="icon-comment"></i> 3 Comments</a> </span>
                      <span class="mr10"> <a href="#"><i class="icon-tag"></i> css3, html5, responsive</a> </span>
                      </div>
                  </li>
                  <li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a class="blogtitle" href="product.html">My Blog Title will appear here  </a>
                    <div>                      
                      <span class="mr10"><i class="icon-calendar"></i> January 3, 2013 </span>
                      <span class="mr10"><a href="#"><i class="icon-comment"></i> 6 Comments</a> </span>
                      <span class="mr10"> <a href="#"><i class="icon-tag"></i> css3, html5, responsive</a> </span>
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
                  </li><li>
                    <img class="sideblogimage" width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                    <a href="product.html">Your recent comment will appear here...</a>
                    <a class="usercomment" href="enavato.html"><i class="icon-edit"></i> User 3</a>
                  </li>
                  
                 
                </ul>
              </div>
            </div>
          </div>
           <!-- Tags-->
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
         <!-- Blog listing-->      
        <div class="span9 bloggrid">
          <h1 class="heading1"><span class="maintext">Tin Mới Nhất</span></h1>   
          <?php foreach($news as $row): ?>
            <tr> 
                <td><?php echo $row->id_news; ?></td>
                <td><?php echo $row->title_news; ?></td>
                <td><?php echo $row->full_news; ?></td>
                <td><?php echo $row->info_news; ?></td>
            </tr>
            <?php endforeach; ?>
        <!-- <ul class="thumbnails list row">
                   <?php foreach($news as $new) : ?>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">                            
                            <a href="#"><img alt="" src="<?php echo base_url();?>/<?php echo $new['img_news']; ?>"></a>
                          </div>
                          <div class="span6">
                            <a class="news" href="#"><?php echo $new['title_news'] ?></a>                            
                      </div>
                    </li>     
                    <?php endforeach ?>               
                  </ul>
          <h2><a href='single.php?pid={$pages['page_id']}'>{$pages['page_title']}</a></h2>
                    <p><img class='img_feature' src='upload/images/{$pages['image_url']}'/>".the_excerpt(substr(html_entity_decode($pages['content']),0,400))." ... <p class='readmore'><a href='single.php?pid={$pages['page_id']}'>Read more</a></p></p> 
                    <p class='meta'><strong>Posted by: </strong>{$pages['name']} | <strong>Posted on: </strong> {$pages['date']}</p>
                    </div> --> 
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
              <li><a href="#">5</a>
              </li>
              <li><a href="#">6</a>
              </li>
              <li><a href="#">7</a>
              </li>
              <li><a href="#">8</a>
              </li>
              <li><a href="#">Next</a>
              </li>
            </ul>
          </div>
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
