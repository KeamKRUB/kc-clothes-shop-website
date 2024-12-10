<div class="store">
<div class="profileframe" style="height: 53vh;">
    <div class="userframe" style="height: 40vh;">
        <p style="font-size:30px;margin-left:25px;margin-top:50pxx;">ข้อมูลส่วนตัว</p><hr>
        <form method="post" action="">
        <input type="hidden" name="profile_edit">
        <p style="font-size:20px;margin-left:25px;">ชื่อบัญชีผู้ใช้งาน: <?php echo $_SESSION['username'];?></p>
        <p style="font-size:20px;margin-left:25px;">ชื่อ: <input name="first" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter your first name"></p>
        <p style="font-size:20px;margin-left:25px;">นามสกุล: <input name="last" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter your last name"></p>
        <p style="font-size:20px;margin-left:25px;">อีเมล: <input name="email" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter your email"></p>
        <p style="font-size:20px;margin-left:25px;">เบอร์โทรศัพท์: <input name="phone" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter your phone number"></p>
        <p style="font-size:20px;margin-left:25px;">ที่อยู่สำหรับจัดส่ง: <input name="address" style="margin-left: 5px;padding-left:5px;"type="text" placeholder="Enter your address"></p>
    </div>
    <div class="barframe" style="padding-top:20px;margin-top:15px;">
<center><div style="font-size:25px;padding-top:5px;border-radius:10px;background-color:#75D918;height:50px;border-width:0;box-shadow: #B8FF76 0px -50px 36px -28px inset;"><button type="submit" style="background-color:transparent ">บันทึกข้อมูลส่วนตัว</a></center>
</form>
</div>
</div>




</div>