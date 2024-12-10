<?php
include '_system/_database.php';

$user = $_SESSION['username'];
$name = $_POST['name'];
$color = $_POST['color'];
$size = $_POST['size'];
$amount = $_POST['amount'];
$pic = $_POST['pic'];
$price = $_POST['price'];

$insert = "INSERT INTO cart (user, name, color, size, amount, pic, price) VALUES ('$user', '$name', '$color', '$size', '$amount', '$pic', '$price')";
mysqli_query($connect, $insert);

mysqli_close($connect);
?>