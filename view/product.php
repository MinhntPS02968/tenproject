<?php
    $pro = new product();
    $result = $pro->getList();
    $results = $result->fetchAll();
    foreach($results as $set):
?> 

<div class="col-sm-6 col-md-3" style="margin: left; height: 250px; margin-bottom: 10px; padding: 10px">
  <div class="product-thumb" style="text-align: center;">
    <div class="image" style="height: 100px">
    <a href="usercontroller.php?action=view_product&product_id=<?php echo $set['product_id']?>">
    <img src="<?php echo '../controller/images/'.$set['product_images'] ?>" alt="<?php echo $set['product_name']?>" title="<?php echo $set['product_name']?>" class="img-responsive"></a>
    </div>
    <div class="caption" style="height: 80px;">
	 <h4><a href="usercontroller.php?action=view_product&product_id=<?php echo $set['product_id']?>"><?php echo $set['product_name']?></a></h4>
      <p class="price">
          <span class="price-new"><?php echo $set['discount_price']?></span> 
          <span class="price-old"><?php echo $set['price']?></span>
          <span class="saving">-81%</span>
      </p>
    </div>
    <div class="button-group">
      <a class="muahang2" href="usercontroller.php?action=add_cart&product_id=<?php echo $set['product_id']?>"><button class="btn-primary" type="button" onclick="cart.add(&#39;1216&#39;);" ><span>Thêm vào giỏ</span></button></a>
    </div>
  </div>
</div>

<?php
  endforeach;
?>  