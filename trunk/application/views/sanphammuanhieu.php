 <!-- San pham mua nhieu -->
  <section id="latest" class="row">
   <?php if(!empty($itemsspmn)) { ?> 
    <div class="container">
      <h1 class="heading1"><span class="maintext">Sản Phẩm Mua Nhiều</span><span class="subtext" ><a href="#"> Xem Tất Cả Sản Phẩm Mua Nhiều</a></span></h1>
       <ul class="thumbnails">
      	<?php foreach($itemsspmn as $item) : ?>
        <li class="span3">
          <a class="prdocutname" href="product.html"><?php echo $item['name_sp']; ?></a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $item['img_sp']; ?>"></a>
            <div class="shortlinks">
              <a class="details" href="<?php echo base_url();?>index.php/welcome/chitietsanpham/<?php echo $item['id_sp'];?>">Chi Tiết</a>
              <a class="wishlist" href="#">Ưa Thích</a>
              <a class="compare" href="#">So Sánh</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">Thêm Vào</a>
              <div class="price">
                <div class="pricenew"><?php echo number_format(($item['price']-(($item['price']*$item['price_km'])/100)),0,',','.');?> đ</div>
                <div class="priceold"><?php echo number_format($item['price'],0,',','.'); ?></div>
              </div>
            </div>
          </div>
        </li>
        <?php endforeach ?>
      </ul>
       <?php }else{ ?>
		Đang cập nhật...
		<?php } ?>
    </div>
  </section>