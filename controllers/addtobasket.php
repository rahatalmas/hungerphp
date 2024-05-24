
<?php
  include '../models/database.php';
  session_start();
  //$user_id = $_SESSION["user"]["user_id"];
  $food_id = $_POST['food_id'];
  $user_id = $_SESSION['user']['user_id'];
  global $conn;
  $sql = "INSERT INTO `basketlist`(`basketed_user_id`, `basketed_food_id`) VALUES ('$user_id','$food_id')";
  if($conn->query($sql) === TRUE) {
    $msg = array("message"=>"added to cart");
    $jmsg = json_encode($msg);
    echo $jmsg;
  }else {
      echo "Error: " . $conn->error;
  }
?>