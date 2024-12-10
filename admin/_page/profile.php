<div class="store">
<?php 
        $sql_profile = 'SELECT * from users WHERE id = "'.$_GET['id'].'"';
        $query_profile = $connect->query($sql_profile);      
        while($profile = $query_profile->fetch_assoc()){
        ?>
<div class="accframe" style="height:50vh;">
    <div class="userframe">
        <p style="font-size:30px;margin-left:25px;margin-top:50pxx;">ข้อมูลส่วนตัว</p><hr>
        <p style="font-size:20px;margin-left:25px;">ชื่อบัญชีผู้ใช้งาน: <?php echo $profile['user'];?></p>
        <p style="font-size:20px;margin-left:25px;">ชื่อ-นามสกุล: <?php echo $profile['firstname'];?> <?php echo $profile['lastname'];?></p>
        <p style="font-size:20px;margin-left:25px;">อีเมล: <?php echo $profile['email'];?></p>
        <p style="font-size:20px;margin-left:25px;">เบอร์โทรศัพท์: <?php echo $profile['phone'];?></p>
        <p style="font-size:20px;margin-left:25px;">ที่อยู่สำหรับจัดส่ง: <?php echo $profile['address'];?></p>
        
    </div>
<center><a style="color:black;font-size:30px;border-radius:10px;border-width:0;background-color:#F75C5C;margin-right:50px;box-shadow: #FF9494 0px -50px 36px -28px inset;" href="?page=profile_edit">แก้ไขข้อมูลส่วนตัว</a>
<a style="color:black;font-size:30px;border-radius:10px;border-width:0;background-color:#F75C5C;margin-right:50px;box-shadow: #FF9494 0px -50px 36px -28px inset;" href="?page=profile_edit">ลบบัญชีผู้ใช้งาน</a></center>
</div>
</div>
<?php
        }
?>


</div>