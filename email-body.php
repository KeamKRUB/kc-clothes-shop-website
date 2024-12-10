<!DOCTYPE html>
<html>
<body>
<?php
include '_system/_database.php';
    $sql_cart = 'SELECT * from cart WHERE user="'.$_SESSION['username'].'"';
    $i = 0;
    
    $query_cart = $connect->query($sql_cart);
    while($cart=$query_cart->fetch_assoc()){
        $i++;
        $price = $cart['price'] * $cart['amount'];
    ?>
    <div style="color:black;display: flex;"><img style="color:black;width:30vh;height:30vh" src="<?php echo $cart['pic'] . '.png';?>">
    <div style="color:black;margin-left:50px;margin-top:-25px;">
    <p style="font-size:25px">รายละเอียดสินค้า Order.<?php echo $i?><p>
    <p> ชื่อสินค้า: <?php echo $cart['name']?></p>
    <p> สี: <?php echo $cart['color']?></p>
    <p> ไซส์: <?php echo $cart['size']?></p>
    <p> จำนวน: <?php echo $cart['amount']?></p>
    <p> ราคา: <?php echo $price?></p></div>
</div>
    <hr>
    <?php
  }
  ?>
  <?php
  $sql_users = 'SELECT * from users WHERE user="'.$_SESSION['username'].'"';
  $query_users = $connect->query($sql_users);
  while($user = $query_users->fetch_assoc()){
  ?>
      <div style="color:black;margin-left:50px;margin-top:-25px;">
    <p style="color:black;font-size:25px">ข้อมูลผู้สั่งซื้อ</p>
    <p> ชื่อผู้สั่งซื้อ: <?php echo $user['firstname']?></p>
    <p> อีเมล: <?php echo $user['email']?></p>
    <p> เบอร์โทรศัพท์: <?php echo $user['phone']?></p>
    <p> ที่อยู่สำหรับจัดส่ง: <?php echo $user['address']?></p>
</div>
<?php
  }
?>
</body>
</html>