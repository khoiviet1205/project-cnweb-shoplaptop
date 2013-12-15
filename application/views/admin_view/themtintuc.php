<?php
	//Css file path :
		$path_css=base_url().'publics/css/';
	//Js file path :
		$path_js=base_url().'publics/js/';
    //Js file of CKEditor:
		$path_ckeditor=base_url().'ckeditor/';
    //Img file path :
		$path_img=base_url().'publics/data/';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Tin Tức</title>
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
<script type="text/javascript">
	function KiemTra(frm)
	{
		if(frm.txtTieuDeTin.value =='')
			alert('Chưa nhập tiêu đề của tin tức !');
		else if(frm.txtTrichDan.value =='')
			alert('Chưa nhập trích dẫn tin tức !');
		else if(frm.txtNgayDangTin.value =='')
			alert('Chưa nhập ngày đăng tin');
		else if(frm.txtNguoiDangTin.value=='')
			alert('Chưa chọn thể loại tin tức !');
		else
		{
			alert('Chúc mừng bạn đã thêm tin tức thành công !');
			frm.submit();
		}
			
	}	
</script>
</head>
<body> 
<!-- Header Start -->
<?php
    $this->load->view("header");
?>
<div id="maincontainer">

  <section id="product">
    <div class="container">
        <ul class="breadcrumb">
        <li>
          <a href="<?php echo base_url();?>">Trang Chủ</a>
          <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo base_url();?>index.php/admin/qltintuc">Quản lý tin tức</a>
            <span class="divider">/</span>
        </li>
        <li class="active">Chỉnh sửa</li>
      </ul>
           <form action="<?php echo base_url();?>admin/themtintuc" method="post" enctype="multipart/form-data">
            <table cellpadding="20" cellspacing="20">
            	<tr>
                	<td><b>Tiêu đề tin tức</b></td>
                    <td>
                    	<input type="text" name="txtTieuDeTin" id="txtTieuDeTin" size="68" />
                    </td>
                </tr>
                
                <tr>
                	<td><b>Trích dẫn</b></td>
                    <td>
             <textarea name="txtTrichDan" id="txtTrichDan" cols="50" rows="3"></textarea>
                    </td>
                </tr> 
                <tr>
                	<td><b>Hình đại diện</b></td>
                    <td>
                    	<input type="file" name="img" />
                    </td>
                </tr>
                <tr>
                	<td><b>Ngày đăng tin</b></td>
                    <td>                    
                        <input type="text" name="txtNgayDangTin" id="txtNgayDangTin" value="<?php echo date('Y/m/d');?>" />
                    </td>
                </tr>
                <tr>
                	<td><b>Người Đăng Tin</b></td>
                 <td>
                    <textarea name="txtNguoiDangTin" id="txtNguoiDangTin" cols="50" rows="3"></textarea>
                 </td>
                </tr>
                
                <tr>
                	<td><b>Nội dung chi tiết tin</b></td>
                    <td>                    
                     <textarea name="editor" cols="60" rows="10">
        	<?php
			echo "Chưa có nội dung chi tiết cho tin tức này ! Hãy thêm vào chi tiết tin này.";
            ?>
        </textarea>
         <script type="text/javascript">CKEDITOR.replace('editor')</script>
                    
                    </td>
                </tr>
                <tr>
                	<td></td>
                    <td>
                    	<input type="submit" name="submit" onclick="KiemTra(this.form)" class="btn btn-orange" style="width:120px; height:auto" value="Lưu thông tin" />
                   <input type="reset" class="btn btn-orange" style="width:120px; height:auto" value="Nhập lại" />
                    </td>
                </tr>      
            </table>
         </form>
          
            </div><!--#container_index_2-->
    </div><!--#wrapper-->
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