<?php
    require_once("_system/_config.php");
    //require_once("_system/_database.php");
    $connect = new mysqli('localhost','root','','kcshop');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert2.min.css">
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
  <script src="js/javascript.js"></script>   
<title> KC Shop</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="header">
        <div class="headtext"><img src="https://imgur.com/IGL1CUX.png" alt="logo" width="300" height="300"></img></div>
    </div>
    <div class="navbarxd">
    <form method="post">
        <a class="navxd" href="?page=home"><img src="image/25694.png" alt="home" width="20" height="20">&nbsp;Home &nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="navxd" href="?page=shop"><img src="image/3721818.png" alt="basket" width="20" height="20">&nbsp;Store &nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="navxd" href="https://www.facebook.com/profile.php?id=100005002366932"><img src="image/phone-icon-clip-art--royalty--7.png" alt="contact" width="25" height="25" ></img>&nbsp;Contact &nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label> </label>
        <a href="?page=cart"><img src="image/basket-cart-icon-27.png" alt="cart" width="20" height="20">&nbsp;&nbsp;</a>

                                  <input type="hidden" name="productname">
                                    <input type="text" id="productname" name="productname">
                                <button></button>

                                <img src="image/3031293.png" alt="search" width="20" height="20">
        <?php
        if($_SESSION['username'] == "" || $_SESSION['username'] == NULL || !isset($_SESSION['username'])){
            echo '<a class="login" href="?page=login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>';
    }
    else{
        
        echo '<div class="dropdown" style="margin-left:50px;">
        <button><img src="image/img_568656.png" width="50" height="50"></button>
        <div class="dropdown-options">
          <a href="?page=profile">Setting</a>
          <a href="?page=home" onclick="return logout()">Logout</a></div>
        </div>';
    }
        ?>
        </form>
    </div>   

    <?php 
        if(!$_GET){$_GET["page"] = 'home';}
        if(!$_GET["page"])
        {
          $_GET["page"] = "home";
        }
         if($_GET["page"] == "home"){
             include_once __DIR__.'/_page/home.php';
        }elseif($_GET['page'] == "shop"){
            include_once __DIR__.'/_page/shop.php';
        }
        elseif($_GET['page'] == "confirm"){
            include_once __DIR__.'/_page/confirm.php';
        }
        elseif($_GET['page'] == "cart"){
            include_once __DIR__.'/_page/cart.php';
        }
        elseif($_GET['page'] == "edit"){
            include_once __DIR__.'/_page/edit.php';
        }
        elseif($_GET['page'] == "login"){
            include_once __DIR__.'/_page/login.php';
        }
        elseif($_GET['page'] == "address"){
            include_once __DIR__.'/_page/address.php';
        }
        elseif($_GET['page'] == "profile"){
            include_once __DIR__.'/_page/profile.php';
        }
        elseif($_GET['page'] == "profile_edit"){
            include_once __DIR__.'/_page/profile_edit.php';
        }
        else
        {
          echo '<meta http-equiv="refresh" content="2;URL=?page=home">';
          $msg = 'ไม่พบหน้าที่ต้องการ';
          $alert = 'error';
          $msg_alert = 'ผิดพลาด!';
        }
        
    ?>
    </div>
    <link rel="stylesheet" href="css/style.css">
<script>
function logout() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "logout.php", true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      window.location.href = "?page=login";
    }
  };
  xhr.send();
  return false;
}
</script>
    <?php
	if(isset($_POST['login_submit']))
	{
		$msg = '';
		$alert = 'error';
		$msg_alert = 'เกิดข้อผิดพลาด!';
		$username = mysqli_real_escape_string($connect, $_POST['username']);
		$password = mysqli_real_escape_string($connect, $_POST['password']);
		$stmt = $connect->prepare('SELECT * FROM users WHERE user = ?');
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$result = $stmt->get_result();
		$password_hash = password_hash($password, PASSWORD_ARGON2I, ['memory_cost' => 2048, 'time_cost' => 4, 'threads' => 3]);
		if($result->num_rows == 1)
		{
			$password_info = $result->fetch_assoc();
			if(password_verify($password, $password_info['password'])) {
				$query_user = $connect->query("SELECT * FROM users WHERE user = '$username'");
				$fetch_user = $query_user->fetch_assoc();
				$_SESSION['uid'] = $fetch_user['id'];
				$_SESSION['username'] = $fetch_user['user'];
				
				$msg = 'ยินดีต้อนรับคุณ: '.$_SESSION['username'];
				$alert = 'success';
				$msg_alert = 'สำเร็จ!';
				}
			else
			{
				$msg = 'รหัสผ่านไม่ถูกต้อง';
				$alert = 'error';
				$msg_alert = 'เกิดข้อผิดพลาด!';
			}
		}
		else
		{
			$msg = 'ไม่พบชื่อผู้ใช้งาน';
			$alert = 'error';
			$msg_alert = 'เกิดข้อผิดพลาด!';
		}

		?>
			<script>
				swal("<?php echo $msg_alert; ?>", "<?php echo $msg; ?>", "<?php echo $alert; ?>", {
					button: "Reload",
				})
				.then((value) => {
					window.location.href = window.location.href;
				});
			</script>
		<?php
	}
if(isset($_POST['profile_edit'])){
            $msg = 'บันทึกการตั้งค่าเรียบร้อยแล้ว';
            $alert = 'success';
            $msg_alert = 'สำเร็จ!';
            $first = $_POST['first'];
            $last = $_POST['last'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $user = $_SESSION['username'];
            $save = "UPDATE users SET firstname = '$first', lastname = '$last', email = '$email', phone = '$phone', address = '$address' WHERE user = '$user';";
            mysqli_query($connect,$save);
?>
			<script>
				swal("<?php echo $msg_alert; ?>", "<?php echo $msg; ?>", "<?php echo $alert; ?>", {
					button: "Reload",
				})
				.then((value) => {
					window.location.href = "?page=profile"
				});
			</script>
            <?php
            }?>
<?php
if(isset($_POST['register_submit'])){
    $username = mysqli_real_escape_string($connect, $_POST['username']);
	$reg_password = mysqli_real_escape_string($connect, $_POST['password']);
    $conpassword = $_POST['conpassword'];
	$stmt = $connect->prepare('SELECT * FROM users WHERE user = ?');
	$stmt->bind_param('s', $username);
	$stmt->execute();
	$result = $stmt->get_result();
    $password_hash = password_hash($reg_password, PASSWORD_ARGON2I);
    if(isset($username) && $username != NULL && $username != '' && isset($reg_password) && $reg_password != NULL && $reg_password != '' ){
	if($result->num_rows <= 0){
            if(password_verify($conpassword, $password_hash)){
?>
    <script>

        </script><?php
            $regis = "INSERT into users(user, password) VALUES ('$username', '$password_hash')";
            mysqli_query($connect,$regis);
            $query_user = $connect->query("SELECT * FROM users WHERE user = '$username'");
            $fetch_user = $query_user->fetch_assoc();
            $_SESSION['uid'] = $fetch_user['id'];
            $_SESSION['username'] = $fetch_user['user'];
            $msg = 'ยินดีต้อนรับคุณ: '.$_SESSION['username'];
            $alert = 'success';
            $msg_alert = 'สำเร็จ!';
            }
            else{
                $msg = 'รหัสผ่านไม่ตรงกัน';
                $alert = 'error';
                $msg_alert = 'เกิดข้อผิดพลาด!';
            }
}
else{
    $msg = 'มีชื่อผู้ใช้งานนี้อยู่แล้ว';
    $alert = 'error';
    $msg_alert = 'เกิดข้อผิดพลาด!';
}
}
else{                
    $msg = 'โปรดกรอกรายละเอียดให้ครบถ้วน';
    $alert = 'error';
    $msg_alert = 'เกิดข้อผิดพลาด!';
}?>
			<script>
				swal("<?php echo $msg_alert; ?>", "<?php echo $msg; ?>", "<?php echo $alert; ?>", {
					button: "Reload",
				})
				.then((value) => {
					window.location.href = "?page=profile_edit"
				});
			</script>
<?php }
?>

</body>
</html>