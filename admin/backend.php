
<?php
    require_once("../_system/_config.php");
    require_once("../_system/_database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/javascript.js"></script>   
<title> KC Shop</title>
</head>
<body>
<link rel="stylesheet" href="../css/backendstyle.css">
<div class="backend">
<div class="navbarxd">
    <ul class="navbarxds">
    <li><a href="?page=account">Account (จัดการสมาชิก)</a></li>
    <li><a href="?page=shop">Shop (จัดการร้านค้า)</a></li>
    <li><a href="">Settings (จัดการเว็บไซต์)</a></li>
    <li><a href="">asdasdasdasdas</a></li>
    <li><a href="">asdasdasdasdas</a></li>
    <li><a href="">asdasdasdasdas</a></li>
    <li><a href="">asdasdasdasdas</a></li>
    <li><a href="">asdasdasdasdas</a></li>
</div><?php
if($_GET['page'] == 'home'){
}
elseif($_GET['page'] == 'account'){
    include_once __DIR__ .'/_page/account.php';
}
elseif($_GET['page'] == 'profile'){
    include_once __DIR__ .'/_page/profile.php';
}
elseif($_GET['page'] == 'shop'){
    include_once __DIR__ .'/_page/shop.php';
}
elseif($_GET['page'] == 'edit'){
    include_once __DIR__ .'/_page/edit.php';
}
else{?>
    <script>
  Swal.fire({
            title: 'เกิดข้อผิดพลาด',
            text: 'ไม่พบหน้านี้ในระบบ',
            icon: 'error',
            confirmButtonText: 'ตกลง'
          }).then(
            window.location.href = "?page=home"
          )
    </script>
<?php }
?>


</div>
<script>
    </script>
</body>
</head>
</html>