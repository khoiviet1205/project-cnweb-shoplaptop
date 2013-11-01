<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="templates/layout/css/style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript" src="publics/js/jquery-1.js"></script>
<script language="javascript" type="text/javascript"  src="publics/js/jquery.js"></script>

<script language="javascript" type="text/javascript"  src="publics/js/jcarousellite_1.js"></script>
<script language="javascript" type="text/javascript"  src="publics/js/ui.js"></script>
<script language="javascript" type="text/javascript"  src="publics/js/common.js"></script>
<script language="javascript" type="text/javascript"  src="publics/js/ui_002.js"></script>
<link  href="publics/css/slideproduct.css" rel="stylesheet" type="text/css" />
<link  href="publics/css/jquery-ui-1.css" rel="stylesheet" type="text/css" />

<script language="javascript" src="publics/ajax/ajaxlogin.js"></script>
<script language="javascript" src="publics/ajax/ajaxtinnhanh.js"></script>
<script language="javascript" src="publics/ajax/vietUni.js"></script>
<script language="javascript" src="publics/ajax/ajaxcomment.js"></script>
<script language="javascript" src="publics/ajax/ajaxsearchmenu.js"></script>
<script language="javascript" type="text/javascript"  src="publics/js/menu3cap.js"></script>
<script src="publics/ajax/ajaxnews.js" language="javascript" type="text/javascript"></script>

<!-- slide show san pham    -->
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function(jQuery) {
        jQuery("#ctl01_ctl07_ctl00jm-contain").jCarouselLite({
            auto: 1,
            speed: 2000,
            pause: 3000,
            visible: 4,
            btnNext: "#ctl01_ctl07_ctl00jm-next",
            btnPrev: "#ctl01_ctl07_ctl00jm-prev",
            width: 435,
            width_img: 145
        });
    });
    </script>
    
    <!-- jquery-->
    <script type="text/javascript">    
    jQuery(function() {
        jQuery('#ctl01_ctl06_ctl00').cycle({ 
            fx:    'fade', 
            speed:  1000
         });
    });
    
    function On_Image_Clickctl01_ctl06_ctl00(Link, ID)
    {
        window.open(Link);
        UpdateBannerCountctl01_ctl06_ctl00(ID);
    }
    
    function UpdateBannerCountctl01_ctl06_ctl00(bannerID)
    {
        var _hidBannerID = $get('ctl01_ctl06_ctl00_hidBannerID');
        var _btnUpdateCount = $get('ctl01_ctl06_ctl00_btnUpdateCount');
        _hidBannerID.value = bannerID;
        _btnUpdateCount.onclick();
    }    
</script>
<script language="JavaScript1.2">
//Highlight form element- © Dynamic Drive (www.dynamicdrive.com)
//For full source code, 100's more DHTML scripts, and TOS,
//visit http://www.dynamicdrive.com
var highlightcolor="lightyellow"
var ns6=document.getElementById&&!document.all
var previous=''
var eventobj
//Regular expression to highlight only form elements
var intended=/INPUT|TEXTAREA|SELECT|OPTION/
//Function to check whether element clicked is form element
function checkel(which){
if (which.style&&intended.test(which.tagName)){
if (ns6&&eventobj.nodeType==3)
eventobj=eventobj.parentNode.parentNode
return true
}
else
return false
}
//Function to highlight form element
function highlight(e){
eventobj=ns6? e.target : event.srcElement
if (previous!=''){
if (checkel(previous))
previous.style.backgroundColor=''
previous=eventobj
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
}
else{
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
previous=eventobj
}
}
</script>


</head>

<body>
<script language="javascript" type="text/javascript" src="publics/js/_class.js"></script>
<script language="javascript" type="text/javascript" src="publics/js/mootools-1.js"></script>
<div id="banner">
    	<div style="float:left;"><img src="publics/icon/Logo-lap.png" height="54" width="233" /></div>
    	<div style="float:left; margin-left:180px;padding-top:10px;">
            <object codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" 
            classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" align="absmiddle" height="35" width="250">
            <param value="250" name="width">
            <param value="135" name="height">
            <param value="high" name="quality">
            <param value="transparent" name="wmode">
            <param value="hangchinhhang.swf" name="src">
            <embed src="publics/icon/hangchinhhang.swf" wmode="transparent" quality="high" type="application/x-shockwave-flash" height="35" width="250">
        </object>
     	<img src="publics/icon/hot-line.png" align="absmiddle" style="margin-left:70px;" />
   	 	</div>
    </div>

<div id="top_menu">
	<ul>
    	<li><a href="index.php">Trang Chủ</a></li>
        <li><a>Sản Phẩm</a></li>
        <li><a>Tin Tức</a></li>
        <li><a>Help Buy</a></li>
        <li><a>Bảng Giá</a></li>
        <li><a>Liên Hệ</a></li>
    </ul>
</div>

<div style="clear:left; height:39px;"></div>
 <form action="#" method="post" onKeyUp="highlight(event)" onClick="highlight(event)">
<div id="top_search">
	<div class="nangcao">
	<span style="font-weight:bold;">Tìm kiếm :</span>  
    <input type="text" name="txthang" id="txthang" onfocus="if(this.value=='Nhập tên sản phẩm') this.value=''" onBlur="if(this.value=='') this.value='Nhập tên sản phẩm'" value="Nhập tên sản phẩm" />
	<input type="submit"  name="btntim" value="Search" /> 
    </div>
</div>
<div style="clear:left; float:left"></div>
<div id="top_dathang">
	<div class="left_dathang">
	<a><img src="publics/icon/empty_cart_icon.gif" width="44" align="left" border="0" /></a></div>
    <div class="chaynews"><marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()">
	</marquee>
    </div>
    <div class="tygia">
    <a href="#" class="rss">Rss</a>
    <a rel="nofollow" class="giavangin" href="#" onclick="return Javascript.NewWindow('publics/tygia/gia_vang.php','window','180','140','no','center');">Giá vàng</a> 
<a rel="nofollow" href="#" class="tygiain" onclick="return Javascript.NewWindow('publics/tygia/ty_gia.php','window','190','460','no','center');">Tỷ giá ngoại tệ</a></div>
</div>
</form>

 