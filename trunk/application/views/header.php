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
                  <li><a class="myaccount" href="#">Tài Khoản</a>
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
            <form class="form-search top-search">
              <input type="text" class="input-medium search-query" placeholder="Tìm Kiếm…">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="headerdetails">
      <div class="pull-right">
        <ul class="nav topcart pull-left">
          <li class="dropdown hover carticon ">
            <a href="#" class="dropdown-toggle" > Giỏ Hàng <span class="label label-orange font14">1 SP(s)</span> - $589.50 <b class="caret"></b></a>
            <ul class="dropdown-menu topcartopen ">
              <li>
                <table>
                  <tbody>
                    <tr>
                      <td class="image"><a href="product.html"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                      <td class="name"><a href="product.html">MacBook</a></td>
                      <td class="quantity">x&nbsp;1</td>
                      <td class="total">$589.50</td>
                      <td class="remove"><i class="icon-remove"></i></td>
                    </tr>
                    <tr>
                      <td class="image"><a href="product.html"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                      <td class="name"><a href="product.html">MacBook</a></td>
                      <td class="quantity">x&nbsp;1</td>
                      <td class="total">$589.50</td>
                      <td class="remove"><i class="icon-remove "></i></td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td class="textright"><b>Sub-Total:</b></td>
                      <td class="textright">$500.00</td>
                    </tr>
                    <tr>
                      <td class="textright"><b>Eco Tax (-2.00):</b></td>
                      <td class="textright">$2.00</td>
                    </tr>
                    <tr>
                      <td class="textright"><b>VAT (17.5%):</b></td>
                      <td class="textright">$87.50</td>
                    </tr>
                    <tr>
                      <td class="textright"><b>Total:</b></td>
                      <td class="textright">$589.50</td>
                    </tr>
                  </tbody>
                </table>
                <div class="well pull-right buttonwrap">
                  <a class="btn btn-orange" href="#">View Cart</a>
                  <a class="btn btn-orange" href="#">Checkout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
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