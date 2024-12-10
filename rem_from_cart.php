<?php
include '_system/_database.php';

  $id = $_POST['id'];
  $remove = "DELETE FROM cart WHERE id='$id';";
  $result = mysqli_query($connect, $remove);
  if ($result) {
    echo json_encode(array('status' => 'success'));
  } else {
    echo json_encode(array('status' => 'error', 'message' => 'Could not delete item from cart'));
  }
  
  $user = $_POST['user'];
  $removes = "DELETE FROM cart WHERE user='$user';";
  $results = mysqli_query($connect, $removes);
  if ($results) {
    echo json_encode(array('status' => 'success'));
  } else {
    echo json_encode(array('status' => 'error', 'message' => 'Could not delete item from cart'));
  }
?>