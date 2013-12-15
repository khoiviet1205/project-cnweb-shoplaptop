<header>
  <div class="headerstrip">
    <div class="container">
      <div class="row">
        <div class="span12">
          
          <!-- Top Nav Start -->
          <div class="pull-left">
            <div class="navbar" id="topnav">
              <div class="navbar-inner">
                <ul class="nav" >
                  <li><a class="home active" href="<?php echo base_url();?>">Trang Chủ</a>
                  </li>
                  <li><a class="myaccount" href="<?php echo base_url();?>index.php/user/">Tài Khoản</a>
                  </li>
                  <li><a class="shoppingcart" href="<?php echo base_url();?>index.php/welcome/view_giohang/">Giỏ Hàng</a>
                  </li>
                  <li><a class="checkout" href="<?php echo base_url();?>index.php/welcome/thanhtoan/">Thanh Toán</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Top Nav End -->
          <div class="pull-right">
          <br/>
            <form method="post" action="<?php echo base_url('index.php/welcome/search_keyword');?>" class="form-horizontal commentform2">
	            <input type="text" name = "keyword" />
    	        <input type="submit" value="Search" class="btn btn-orange"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="headerdetails">
      <div class="pull-right">
      <?php if($cart=$this->cart->contents()) { ?> 
        <ul class="nav topcart pull-left">
          <li class="dropdown hover carticon ">
            <a href="#" class="dropdown-toggle" > Giỏ Hàng  <span class="label label-orange font14"><?php echo $this->cart->total_items(); ?>SP</span><?php echo number_format((($this->cart->total())+(($this->cart->total()*10)/100)),0,',','.');?> VNĐ<b class="caret"></b></a>
            <ul class="dropdown-menu topcartopen ">
            
              <li>
              <?php foreach($cart as $item) : ?>
                <table>
                  <tbody>
                    <tr>
                      <td class="image"><a href="#"><img width="50" height="50" src="publics/img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                      <td class="name"><a href="<?php echo base_url();?>index.php/welcome/chitietsanpham/<?php echo $item['id'];?>"><?php echo $item['name'] ?></a></td>
                      <td class="quantity">x<?php echo $item['qty']; ?></td>
                      <td class="total"><?php echo number_format(($item['price']),0,',','.');?> đ</td>
                    </tr>
                  </tbody>
                </table>
                 <?php endforeach ?>
                <table>
                  <tbody>
                    <tr>
                      <td class="textright"><b>Tổng Đơn Giá:</b></td>
                      <td class="textright"><?php echo number_format(($this->cart->total()),0,',','.');?>đ</td>
                    </tr>
                    <tr>
                      <td class="textright"><b>VAT (10%):</b></td>
                      <td class="textright"><?php echo number_format((($this->cart->total()*10)/100),0,',','.');?>đ</td>
                    </tr>
                    <tr>
                      <td class="textright"><b>Tổng:</b></td>
                      <td class="textright"><?php echo number_format((($this->cart->total())+(($this->cart->total()*10)/100)),0,',','.');?> Đ</td>
                    </tr>
                  </tbody>
                </table>
               
                <div class="well pull-right buttonwrap">
                  <a class="btn btn-orange" href="<?php echo base_url();?>index.php/welcome/view_giohang/">Xem Giỏ</a>
                  <a class="btn btn-orange" href="<?php echo base_url();?>index.php/welcome/thanhtoan/">Thanh Toán</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
       <?php } ?>
      </div>
    </div>
    <div id="categorymenu">
      <nav class="subnav">
        <ul class="nav-pills categorymenu">
          <li><a class="active"  href="<?php echo base_url();?>">Trang Chủ</a>
          </li>
           <li><a href="#">LapTop</a>
            <div>
              <ul>
                <?php foreach($hanglaptop as $item) : ?>
              <li>
                <a href="<?php echo base_url();?>index.php/welcome/lay_sp_theohang/<?php echo $item['id_cate2'];?>"><?php echo $item['name_cate2'] ?></a>
              </li>
               <?php endforeach ?>
              </ul>
            </div>
          </li>
          <li><a href="<?php echo base_url();?>index.php/welcome/view_giohang/">Giỏ Hàng</a>
          </li>
          <li><a href="<?php echo base_url();?>index.php/welcome/thanhtoan/">Thanh Toán</a>
          </li>
          <li><a href="<?php echo base_url();?>index.php/welcome/sosanh/">So Sánh</a>
          </li>          
          <li><a href="<?php echo base_url();?>index.php/welcome/tintuc/">Tin Tức</a>
          </li>
          <li><a href="<?php echo base_url();?>index.php/user/">Tài Khoản</a>
            <div>
              <ul>
                <li><a href="<?php echo base_url();?>index.php/user/">Tài Khoản</a>
                </li>
                <li><a class= "dangnhap" href="<?php echo base_url();?>index.php/user/">Đăng Nhập</a>
                </li>
                <li><a class= "dangky" href="<?php echo base_url();?>index.php/user/dangky/">Đăng Ký</a>
                </li>
                <li><a href="<?php echo base_url();?>index.php/user/dangxuat">Đăng Xuất</a>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="<?php echo base_url();?>index.php/welcome/lienhe/">Liên Hệ</a>
          </li>         
        </ul>
      </nav>
    </div>
  </div>
</header>