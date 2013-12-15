<?php
	//Css file path :
		$path_css=base_url().'publics/css/';
	//Js file path :
		$path_js=base_url().'publics/js/';
    //Img file path :
		$path_img=base_url().'publics/img/';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
          <a href="<?php echo base_url();?>">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Quản lý tin tức</li>
      </ul>
      <div class="row">
        <div id="box_display">
        <div id="list_table">
                  <!-- Paging -->
                  <div id="paging" class="pagination">
                  <?php
                    if($num_rows>0){
                        echo "<h1 class=\"heading1\"><span class=\"maintext\">Tổng số tin tức</span> : ".$num_rows."</h1>";                        
                        echo "<h2><div style=\"font-size: large;\"> Trang ".$link."</div></h2>";
                    }
                  ?>
                  </div>
                    <table width="75%" cellpadding="2" cellspacing="2" class="table table-striped table-bordered">
                          <tbody>
                          <tr style="font-weight: bold; font-size: large;">
                            <td width="20%" class="orange">Tiêu Đề Tin Tức</td>
                            <td width="20%" class="orange">Nội Dung</td>
                            <td width="20%" class="orange">Ngày Đăng</td>
                            <td width="20%" class="orange">Người Đăng</td>
                            <td width="20%" class="orange">Thao tác</td>
                          </tr>
                          
                          <?php
                                foreach ($news as $item) {
                                    echo "<tr>";
                                    echo '<td>'.$item['page_title'].'</td>';
                                    echo '<td>'.$item['full_news'] = substr(($item['full_news']),0,100).'</td>';
                                    echo '<td>'.$item['date_news'].'</td>';
                                    echo '<td>'.$item['duyet_news'].'</td>';                                    
                                    echo '<td class="total"><a href="'.base_url().'index.php/admin/suatintuc/'.$item['page_id'].'"><img class="tooltip-test" data-original-title="Chỉnh Sửa" src="'.$path_img.'edit.png" alt=""></a>
                                    <a onclick="return confirm(\'Bạn có chắc chắn xóa?\');" href="'.base_url().'index.php/admin/xoatintuc/'.$item['page_id'].'"><img class="tooltip-test" data-original-title="Xóa"  src="'.$path_img.'remove.png" alt=""></a></td>';
                                    echo "</tr>"; 
                                }
                           ?>  
                                                    
                    </tbody>
                   </table>
                   <div class="control-group">
                <a href="<?php echo base_url();?>index.php/admin/themtintuc/" class="btn btn-orange">Thêm tin tức</a>
                <?php echo "&nbsp&nbsp&nbsp&nbsp"?>
                <a href="<?php echo base_url();?>index.php/user/" class="btn btn-orange">Trở về trang Admin</a>
            </div>
        </div>
        </div>
    </div>
    </div>
  </section>
</div>
<!-- Footer -->
<?php
    $this->load->view("footer");
?>
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