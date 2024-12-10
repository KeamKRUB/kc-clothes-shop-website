<?php
include '_system/_database.php';

$id = $_POST['id'];
$user = 'test';
$name = $_POST['name'];
$color = $_POST['color'];
$size = $_POST['size'];
$amount = $_POST['amount'];
$pic = $_POST['pic'];
$price = $_POST['price'];

$update = "UPDATE cart SET price = '$price',size = '$size',color = '$color',amount='$amount' WHERE id = '$id';";
mysqli_query($connect, $update);

mysqli_close($connect);
?>