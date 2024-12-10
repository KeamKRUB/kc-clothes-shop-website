<div class="store">
<div class="shophead" style="margin-top:16%">

<?php 
$sql_category = 'SELECT * from category';
$query_category = mysqli_query($connect,$sql_category);
while($product_category = $query_category->fetch_assoc()){
  if(isset($_GET['category']) && !empty($_GET['category']) && $_GET['category'] != NULL){
    echo '<div class="category">';
    echo '<a class="categoryss" href="?page=shop&category='.$product_category['id'].'">'.$product_category['name'].'</a>';
    echo '</div>';
  }
  else{
    echo '<div class="category">';
    echo '<a class="categoryss" href="?page=shop&category='.$product_category['id'].'">'.$product_category['name'].'</a>';
    echo '</div>';
  }
}?></div>
<div class="row" style="background-color: white;margin-top: 3%;"><br>
<?php
$sql_product = 'SELECT * from shop';
if(isset($_GET['category']) && is_numeric($_GET['category']) && $_GET['category'] != 1){
  $sql_product .= ' WHERE category = "'.$_GET['category'].'"';
}
else{
  $sql_product = 'SELECT * from shop';
}

$query_product = $connect->query($sql_product);
if($query_product->num_rows <= 0){
  echo '<center><h5>สินค้าหมด<h5></center>';
}
else{
while($product = $query_product->fetch_assoc()){
  
?>
<div class="col-md-4">
  <div class="item" style="margin-top: 20px;margin-bottom: 20px">
  <div class="item-image">
  <center><img style="width: 30vh;height: 30vh;" src="<?php echo $product['pic'] . '.png'; ?>"></center>

    <center><div style="font-size: 20px; background-color:white; width: 281px;margin-top: -40px;position: relative;"><?php echo $product['name']; ?></a></center>
    
  </div>
<div class="item-info">
  <div class="item-text">
  <center><div style="font-size: 20px; background-color:black;opacity:0.5;color:white; width: 281px;margin-top: 10px;position: relative;"><?php echo $product['description']; ?></div></center>
  <center><div style="font-size: 20px; background-color:orange; width: 100px;margin-top: 0px;position: relative;margin-left: 180px;border-radius: 80px;border-radius: 80px;box-shadow: #F5CD26 0px -50px 36px -28px inset;"><?php echo $product['price']; ?> Baht</a></center>  
  <center><a href="?page=confirm&id=<?php echo $product['id'];?>" class="shopbutton">&nbsp;&nbsp;&nbsp;ซื้อสินค้า&nbsp;&nbsp;&nbsp;</a></center>
</div>
</div>
</div>
</div>
<?php

}}?>
</div>
</div>
</div>
</div>
</div>