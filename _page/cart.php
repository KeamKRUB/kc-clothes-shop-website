<div class="store">
<div class="rows" style="background-color: white;margin-top: 17%;border-radius: 50px;"><br>
<?php
  $sql_cart = 'SELECT * from cart WHERE user="'.$_SESSION['username'].'"';

$query_cart = $connect->query($sql_cart);
if($query_cart->num_rows <= 0){
  echo '<center><h5 style="padding-bottom:20px;">ยังไม่มีสินค้าในตะกร้า<h5></center>';
}
else{
while($cart = $query_cart->fetch_assoc()){
?>
<div class="" style="border-radius: 20px;">
  <div class="item" style="margin-top: 5px;margin-bottom: 20px;">
  <div class="item-image">
  <div class="containerconfirm" style="margin-left: 400px;padding-left: 30px;padding-top: 10px;border-radius: 50px;box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
  <div style="background-color:orange;width: 120px;font-size:30px;border-radius: 50px;box-shadow: #F5CD26 0px -50px 36px -28px inset;">&nbsp;Details: </div>
  <p>ชื่อสินค้า: <?php echo $cart['name']?><input type="button" class="editbutton" onclick="edit(<?php echo $cart['id'];?>)" value="แก้ไข">
  <p style="margin-top:-42px;">สี: <?php echo $cart['color']?></p>
  <input type="button" class="delbutton" onclick="removefromcart(<?php echo $cart['id'];?>)" value="ลบ">
  <p style="margin-top:-47px;">ไซส์: <?php echo $cart['size']?></p>
  <p>จำนวน: <?php echo $cart['amount']?></p>
  <p>ราคา: <?php echo $cart['price']?></p>  
</div>

</div>
  <img style="width: 30vh;height: 30vh;margin-left: 80px;margin-top: -350px;" src="<?php echo $cart['pic'] . '.png'; ?>">

    <div style="font-size: 20px; color:white;background-color:black;border-radius:80px;border-width:0;box-shadow: #DCDCDC 0px -50px 36px -28px inset; width: 281px;margin-top: -40px;margin-left: 52px;position: relative;"><center><?php echo $cart['name']; ?></center></a>
  </div>
  <br><br>
<div class="item-info">
  <div class="item-text">
  <div style="font-size: 20px; background-color:black;opacity:0.5;color:white; width: 281px;margin-left: 80px;margin-top: 10px;position: relative;"><center><?php echo $cart['description']; ?></center></div>

</div>
</div>
</div>
</div>
<script>
function edit(id) {
  window.location.href = "?page=edit&id=" + id
}
function removefromcart(id) {
  Swal.fire({
    title: 'ยืนยันที่จะลบสินค้าออกจากตะกร้า?',
    text: "",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'ยกเลิก',
    confirmButtonText: 'ตกลง'
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: 'rem_from_cart.php',
        method: 'POST',
        data: {id: id},
        success: function(response) {
          Swal.fire({
            title: 'ทำรายการสำเร็จ',
            text: 'นำสินค้าออกจากตะกร้าเรียบร้อยแล้ว',
            type: 'success',
            confirmButtonText: 'ตกลง'
          }).then((result) => {
            if (result.value) {
              window.location.reload();
            }
          });
        },
        error: function(xhr, status, error) {
          Swal.fire({
            title: 'เกิดข้อผิดพลาด',
            text: 'ไม่สามารถลบสินค้าออกจากตะกร้าได้',
            type: 'error',
            confirmButtonText: 'ตกลง'
          });
          console.log(error);
        }
      });
    }
  }).catch(err => console.log(err));
}
function removefromcartall(id) {
  Swal.fire({
    title: 'ยืนยันที่จะลบสินค้าออกจากตะกร้าทั้งหมด?',
    text: "",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'ยกเลิก',
    confirmButtonText: 'ตกลง'
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: 'rem_from_cart.php',
        method: 'POST',
        data: {user: '<?php echo $_SESSION['username'];?>'},
        success: function(response) {
          Swal.fire({
            title: 'ทำรายการสำเร็จ',
            text: 'นำสินค้าออกจากตะกร้าเรียบร้อยแล้ว',
            type: 'success',
            confirmButtonText: 'ตกลง'
          }).then((result) => {
            if (result.value) {
              window.location.reload();
            }
          });
        },
        error: function(xhr, status, error) {
          Swal.fire({
            title: 'เกิดข้อผิดพลาด',
            text: 'ไม่สามารถลบสินค้าออกจากตะกร้าได้',
            type: 'error',
            confirmButtonText: 'ตกลง'
          });
          console.log(error);
        }
      });
    }
  }).catch(err => console.log(err));
}
function confirm() {
  Swal.fire({
    title: 'คุณต้องการที่จะยืนยันสินค้าใช่ไหม?',
    text: "",
    type: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'ยกเลิก',
    confirmButtonText: 'ตกลง'
  }).then((result) => {
    if (result.value) {
      Swal.fire({
  title: 'ทำรายการสำเร็จ',
  text: 'ยืนยันออเดอร์สินค้าเรียบร้อยแล้ว',
  type: 'success',
  confirmButtonText: 'ตกลง'
}).then()
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'email-body.php');
      xhr.onload = function() {
        if (xhr.status === 200) {
          var emailBody = xhr.responseText;
          Email.send({
            SecureToken : "", //ใส่ SecureToken
            To : '', // ใส่ email ของผู้รับ
            From : "", // ใส่ email ของผู้ส่ง)
            Subject : "ออเดอร์สินค้าจาก <?php echo $cart['user']?>",
            Body : emailBody
          }).then(() => {
  $.ajax({
    url: 'rem_from_cart.php',
    method: 'POST',
    data: {user: '<?php echo $_SESSION['username'];?>'},
    success: function(response) {
      window.location.reload();
    }
    
  });
});
        }
      };
      xhr.send();
    }
  }).catch(err => console.log(err));
}
</script>
<?php
    
  }
}?>
</div>
<center><div style="margin-bottom:20px;"><input type="button" class="submitbutton" onclick="confirm(<?php echo $cart['id'];?>)" value="ยืนยันการสั่งซื้อ">
<input type="button" class="delbutton" onclick="removefromcartall(<?php echo $cart['id'];?>)" value="ยกเลิกรายการทั้งหมด" style="margin-left:50px"></div></center>
</div>

</div>
</div>
</div>