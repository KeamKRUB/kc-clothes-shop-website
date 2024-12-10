<div class="shop">
    <div class="row" style="margin-top: 5px;">
        <?php
        $sql_edit = 'SELECT * from shop WHERE id = "'.$_GET['id'].'"';
        $query_edit = $connect->query($sql_edit);
        while($edit = $query_edit->fetch_assoc()){
?>
<div><div class="editframe">
        <img style="margin-top:30px;width: 30vh; height: 30vh;" src="<?php echo $edit['pic'] . '.png';?>">
    <div class="editframe2" style="font-size:20px;">
        <p>ชื่อสินค้า: <?php echo $edit['name'];?></p>
        <p>คำอธิบายสินค้า: <?php echo $edit['description'];?></p>
        <p>ประเภทสินค้า: <?php echo $edit['category'];?></p>
        <p>ราคา: <?php echo $edit['price'];?></p>
        <p>สีทั้งหมด: <?php echo $edit['color'];?></p>
        <p>ไซส์: <?php echo $edit['size'];?></p>
        <p>ลิงค์รูปภาพ: <?php echo $edit['stock'];?></p>
        <p>ลิงค์รูปภาพ: <?php echo $edit['pic'];?></p>
    </div>
</div>
<div class="editframe3" style="padding-top:30px;">
<form method="post" action="">
        <input type="hidden" name="profile_edit">
        <p style="font-size:20px;margin-left:25px;">ชื่อสินค้า: <input name="name" class="editinput" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter product's name"></p>
        <p style="font-size:20px;margin-left:25px;">คำอธิบายสินค้า: <input name="desc" class="editinput" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter product's description"></p>
        <p style="font-size:20px;margin-left:25px;">ประเภทสินค้า: <input name="category" class="editinput" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter product's category"></p>
        <p style="font-size:20px;margin-left:25px;">ราคา: <input name="price" class="editinput" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter product's price"></p>
        <p style="font-size:20px;margin-left:25px;">สี(Ex.ดำ ขาว etc.): <input name="color" class="editinput" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter product's color"></p>
        <p style="font-size:20px;margin-left:25px;">ไซส์(Ex.S M etc.): <input name="size" class="editinput" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter product's size"></p>
        <p style="font-size:20px;margin-left:25px;">ลิงค์รูปภาพ: <input name="stock" class="editinput" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter product's stock"></p>
        <p style="font-size:20px;margin-left:25px;">ลิงค์รูปภาพ: <input name="pic" class="editinput" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter product's picture"></p>
    </div>
    <div class="barframe" style="border-width:0px; padding-top:0;margin-top:15px;padding-bottom: 20px;">
<center><div style="font-size:25px;padding-top:5px;border-radius:10px;background-color:#75D918;height:50px;border-width:0;box-shadow: #B8FF76 0px -50px 36px -28px inset;"><button type="submit" style="border-width:0;background-color:transparent ">บันทึกข้อมูลสินค้า</a></center>
</form>

</div>
<?php
        }
        ?>
    </div>
</div>