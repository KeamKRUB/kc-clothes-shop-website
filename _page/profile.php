<div class="store">
<?php 
        $sql_profile = 'SELECT * from users WHERE user = "'.$_SESSION['username'].'"';
        $query_profile = $connect->query($sql_profile);      
        while($profile = $query_profile->fetch_assoc()){
        ?>
<div class="profileframe">
    <div class="userframe">
        <p style="font-size:30px;margin-left:25px;margin-top:50pxx;">ข้อมูลส่วนตัว</p><hr>
        <p style="font-size:20px;margin-left:25px;">ชื่อบัญชีผู้ใช้งาน: <?php echo $_SESSION['username'];?></p>
        <p style="font-size:20px;margin-left:25px;">ชื่อ-นามสกุล: <?php echo $profile['firstname'];?> <?php echo $profile['lastname'];?></p>
        <p style="font-size:20px;margin-left:25px;">อีเมล: <?php echo $profile['email'];?></p>
        <p style="font-size:20px;margin-left:25px;">เบอร์โทรศัพท์: <?php echo $profile['phone'];?></p>
        <p style="font-size:20px;margin-left:25px;">ที่อยู่สำหรับจัดส่ง: <?php echo $profile['address'];?></p>
        
    </div>
    <div class="barframe" style="padding-top:20px;margin-top:50px;">
<center><a style="font-size:30px;border-radius:10px;border-width:0;background-color:#F75C5C;margin-right:50px;box-shadow: #FF9494 0px -50px 36px -28px inset;" href="?page=profile_edit">แก้ไขข้อมูลส่วนตัว</a><a href="" style="font-size:30px;border-radius:10px;background-color:#75D918;height:50px;border-width:0;box-shadow: #B8FF76 0px -50px 36px -28px inset;margin-left: 50px;">เปลี่ยนรหัสผ่าน</a></center>
</div>
</div>
<?php
        }
?>


</div>