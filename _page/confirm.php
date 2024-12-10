<div class="store">
    <?php 
    $sql_product = 'SELECT * from shop WHERE id = "'.$_GET['id'].'"';
    $query_product = $connect->query($sql_product);
    while($product = $query_product->fetch_assoc()){
    ?>
    
    <div class="confirm">
    <div class="col-md-4">
  <div class="item" style="margin-top: 20px;display: flex;">
  <div class="item-image">
    <center><img style="width: 30vh;height: 30vh;margin-top:85px;margin-left:100px;" src="<?php echo $product['pic'] . '.png'; ?>"></center>
    </div>
    <center><div style="font-weight: bold;font-size: 30px; background-color:white; width: 100%;margin-top: 20px;"><?php echo $product['name']; ?>
    </div>
    <div class="containerconfirm">
    <form>
            <p1 style="font-size: 30px;">Color: </p1>
            <?php
                $colors = explode(' ', $product['color']);
                foreach($colors as $color){
                    echo '<label class="radio-inline">';
                    echo '<input type="radio" name="color" id="'.$color.'" value="'.$color.'">'.$color;
                    echo '</label>';
                }
            ?>
        </form>
  <form>
            <p1 style="font-size: 30px;">Size: </p1>
            <?php
                $sizes = explode(' ', $product['size']);
                foreach($sizes as $size){
                    echo '<label class="radio-inline">';
                    echo '<input type="radio" name="size" id="'.$size.'" value="'.$size.'">'.$size;
                    echo '</label>';
                }
            ?>
        </form>
  <form>
  <p1 style="font-size: 30px;">Amount: </p1>
  <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value" style="padding-top:-20px;"><p style="color: black;margin-top:-15px;">-</p></div>
  <input type="number" id="number" value="1" />
  <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"><p style="color: black;margin-top:-15px;">+</p></div>
</form>
<center><form style="margin-top: 20px;">
<textarea id="w3review" name="w3review" rows="4" cols="30"style="color: black;background-color: #E7E7E7;resize: none;"></textarea>
</form></center>

    </div>

</div>
    <center><div style="border-radius:80px;margin-left: 90px;font-size: 30px; background-color:orange; width: 100%;margin-top: 0;position: relative;border-radius: 80px;box-shadow: #F5CD26 0px -50px 36px -28px inset;">ราคา: <?php echo $product['price']; ?> Baht</div></center>
    <center><input type="button" class="confirmbutton" onclick="sendtocart()" value="เพิ่มไปยังตะกร้า"></button></center>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</div>
<script>
  function sendtocart(){
  var amountf = document.getElementById("number");
  var color = '';
  var colorRadios = document.getElementsByName('color');
  for (var i = 0; i < colorRadios.length; i++) {
    if (colorRadios[i].checked) {
      color = colorRadios[i].value;
      break;
    }
  }
  var size = '';
  var sizeRadios = document.getElementsByName('size');
  for (var i = 0; i < sizeRadios.length; i++) {
    if (sizeRadios[i].checked) {
      size = sizeRadios[i].value;
      break;
    }
  }
  var amount = amountf.value;
  var user = "<?php echo $_SESSION['username']; ?>";
  var name = "<?php echo $product['name']; ?>";
  var price = "<?php echo $product['price']?>";
  var pic = "<?php echo $product['pic']?>";
  if(size != '' && color != ''){
  Swal.fire({
            title: 'ทำรายการสำเร็จ',
            text: 'นำสินค้าไปยังตะกร้าเรียบร้อยแล้ว',
            type: 'success',
            confirmButtonText: 'ตกลง'
          })
  $.post("add_to_cart.php", {
    user: user,
    name: name,
    color: color,
    size: size,
    amount: amount,
    pic: pic,
    price: price
  });
}
else{
Swal.fire(
  'ทำรายการไม่สำเร็จ',
  'กรุณาเลือกสีและขนาดด้วยครับ',
  'error')
}}
</script>
<style>
/* The Modal (background) */
.modal-content
 {
 border-radius: 0px;
 border: solid 1px white;
     padding:9px 15px;
     background-color: rgba(255,255,255,1);
 }
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
  position: fixed;
  bottom: 0;
  background-color: #fefefe;
  width: 100%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 0}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 0}
}
</style>
  </script>
    <?php
    
    }
    ?>

    </div>
</div>
</div>
</div>

