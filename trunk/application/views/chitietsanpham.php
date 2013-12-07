<?php
	//Css file path :
		$path_css=base_url().'publics/css/';
	//Js file path :
		$path_js=base_url().'publics/js/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>flexslider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path_css; ?>cloud-zoom.css" />
<link rel="shortcut ico" href="publics/assets/ico/favicon.html" />

</head>
<body>
<!-- Header Start -->
	<?php $this->load->view("header")?>

<!-- Container -->
    
   <div id="maincontainer">
    <?php if(!empty($detail_product)) { ?> 
  <section id="product">
    <div class="container"> 
    <?php foreach($detail_product as $item) : ?>     
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="span5">
          <ul class="thumbnails mainimage">
          
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="#">
                <img src="<?php echo base_url();?>/<?php echo $item['img_sp']; ?>" alt="" title="">
              </a>
            </li>
          
          </ul>
         
          <span>Di chuyển chuột để phóng to ảnh</span>
          <ul class="thumbnails mainimage">
            <li class="producthtumb">
              <a class="thumbnail" >
                <img src="<?php echo base_url();?>/<?php echo $item['img_sp'];?>" alt="" title="">
              </a>
            </li>
          </ul>
        </div>
         <!-- Right Details-->
        <div class="span7">
          <div class="row">
            <div class="span7">
              <h1 class="productname"><span class="bgnone"><?php echo $item['name_sp']; ?></span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span><?php echo number_format(($item['price']-(($item['price']*$item['price_km'])/100)),0,',','.');?> đ</div>

                <div class="productpageoldprice"><?php echo number_format($item['price'],0,',','.'); ?></div>
                <ul class="rate">
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="off"></li>
                  <li class="off"></li>
                </ul>
              </div>
              <div class="quantitybox">
                <div class="clear"></div>
                <div class="control-group">
                </div>
              </div>
              <ul class="productpagecart">
                <li><a class="cart" href="#">Thêm Vào</a>
                </li>
                <li><a class="wish" href="#" >Ưa Thích</a>
                </li>
                <li><a class="comare" href="#" >So Sánh</a>
                </li>
              </ul>
         <!-- Product Description tab & comments-->
         <div class="productdesc">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#description">Mô tả</a>
                  </li>
                  <li><a href="#specification">Thông số kỹ thuật</a>
                  </li>
                  <li><a href="#review">Nhận xét</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <h2>h2 tag will be appear</h2>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
                    <br>
                    <ul class="listoption3">
                      <li>Lorem ipsum dolor sit amet Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit </li>
                      <li>Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem</li>
                    </ul>
                  </div>
                  <div class="tab-pane " id="specification">
                    <ul class="productinfo">
                      <?php echo $item['note_sp'] ?>
                    </ul>
                  </div>
                  <div class="tab-pane" id="review">
                    <h3>Write a Review</h3>
                    <form class="form-vertical">
                      <fieldset>
                        <div class="control-group">
                          <label class="control-label">Text input</label>
                          <div class="controls">
                            <input type="text" class="span3">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Textarea</label>
                          <div class="controls">
                            <textarea rows="3"  class="span3"></textarea>
                          </div>
                        </div>
                      </fieldset>
                      <input type="submit" class="btn btn-orange" value="continue">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </section>
   <!-- San pham mua nhieu-->
   <?php $this->load->view("sanphammuanhieu") ?>
   
   <!-- Popular Brands-->
   <?php $this->load->view("thuonghieunoitieng") ?>
   
   <?php }else{ ?>
		Đang cập nhật...
          <?php } ?>
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