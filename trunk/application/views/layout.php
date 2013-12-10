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
	<?php $this->load->view("header",$hanglaptop)?>

<!-- Container -->
    <div id="maincontainer">
  <!-- Slider Start-->
  <section class="slider">
    <div class="container">
      <div class="flexslider" id="mainslider">
        <ul class="slides">
          <li>
            <img src="publics/img/banner1.jpg" alt="" />
          </li>
          <li>
            <img src="publics/img/banner2.jpg" alt="" />
          </li>
          <li>
            <img src="publics/img/banner3.jpg" alt="" />
          </li>
          <li>
            <img src="publics/img/banner4.jpg" alt="" />
          </li>
		  <li>
            <img src="publics/img/banner5.jpg" alt="" />
          </li>
		  <li>
            <img src="publics/img/banner6.jpg" alt="" />
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Slider End-->
  
  <!-- Section Start-->
  <section class="container otherddetails">
    <div class="otherddetailspart">
      <div class="innerclass free">
        <h2>Giao Hàng Miễn Phí</h2>
        Trên toàn thế giới chỉ với 200$</div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass payment">
        <h2>Dễ Thanh Toán</h2>
        Hỗ trợ nhiều hình thức </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass shipping">
        <h2>Vận Chuyển 24h</h2>
        Miễn phí đối với khu vực Tp.HCM </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass choice">
        <h2>Hơn 5000 Lựa Chọn</h2>
        50,000+ Sản Phẩm </div>
    </div>
  </section>
  <!-- Section End-->
<br />
  
  <?php $this->load->view("sanphammoinhat") ?>
  
  <?php $this->load->view("sanphamcaocap",$itemsspcc)?>
  
  <?php $this->load->view("sanphamphothong",$itemssppt)?> 
  
  <?php $this->load->view("sanphamtrungcap",$itemssptc)?>
  <!-- Section  Banner Start-->
  <section class="container smbanner">
    <div class="row">
      <div class="span3"><a href="#"><img src="publics/img/smbanner1.jpg" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="publics/img/smbanner2.jpg" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="publics/img/smbanner3.jpg" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="publics/img/smbanner4.jpg" alt="" title=""></a>
      </div>
    </div>
  </section>
  <!-- Section  End-->
  
  <!-- Popular Brands-->
  <?php $this->load->view("thuonghieunoitieng") ?>
  
  <!-- Newsletter Signup-->
  <section id="newslettersignup" class="mt40">
    <div class="container">
      <div class="pull-left newsletter">
        <h2> Đăng Ký Nhận Tin</h2>
        Đăng ký nhận thông tin khuyến mãi, ưu đãi, giá tốt, các chương trình khuyến mại khác của chúng tôi. </div>
      <div class="pull-right">
        <form class="form-horizontal">
          <div class="input-prepend">
            <input type="text" placeholder="Đăng Ký Nhận Tin" id="inputIcon" class="input-xlarge">
            <input value="Đăng Ký" class="btn btn-orange" type="submit">
            Đăng Nhập           
          </div>
        </form>
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