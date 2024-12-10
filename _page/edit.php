<div class="store">
    <?php 
    $sql_product = 'SELECT * from cart WHERE id = "'.$_GET['id'].'"';
    $query_product = $connect->query($sql_product);
    $product = $query_product->fetch_assoc();
    $sql_edit = 'SELECT * from shop WHERE name = "'.$product['name'].'"';
    $query_edit = $connect->query($sql_edit);
    while($edit = $query_edit->fetch_assoc()){
    ?>
    
    <div class="confirm">
    <div class="col-md-4">
  <div class="item" style="margin-top: 20px;display: flex;">
  <div class="item-image">
    <center><img style="width: 30vh;height: 30vh;margin-top:85px;margin-left:100px;" src="<?php echo $edit['pic'] . '.png'; ?>"></center>
    </div>
    <center><div style="font-weight: bold;font-size: 30px; background-color:white; width: 100%;margin-top: 20px;"><?php echo $edit['name']; ?>
    </div>
    <div class="containerconfirm">
    <form>
            <p1 style="font-size: 30px;">Color: </p1>
            <?php
                $colors = explode(' ', $edit['color']);
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
                $sizes = explode(' ', $edit['size']);
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
    <center><div style="border-radius:80px;margin-left: 90px;font-size: 30px; background-color:orange; width: 100%;margin-top: 0;position: relative;border-radius: 80px;box-shadow: #F5CD26 0px -50px 36px -28px inset;">ราคา: <?php echo $edit['price']; ?> Baht</div></center>
    <center><input type="button" onclick="sendtocart(<?php echo $_GET['id'];?>)" value="แก้ไขสินค้า" style="border-width:0;border-radius:80px;margin-left: 482px;font-size: 20px;border-width:0;box-shadow: #F0F1EF 0px -50px 36px -28px inset; background-color:#CCCCCC; width: 100%;height:50px;margin-top: -80px;position: relative;"></button></center>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</div>
<script>
  function sendtocart(id){
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
  var name = "<?php echo $edit['name']; ?>";
  var price = "<?php echo $edit['price']?>";
  var pic = "<?php echo $edit['pic']?>";
  if(size != '' && color != ''){
  Swal.fire({
            title: 'ทำรายการสำเร็จ',
            text: 'แก้ไขสินค้าเรียบร้อยแล้ว',
            type: 'success',
            confirmButtonText: 'ตกลง'
          }).then(() => window.location.href = "?page=cart");
  $.post("edit_to_cart.php", {
    id: id,
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
    <?php
    }
    ?>
</script>
    </div>
</div>
</div>
</div>

