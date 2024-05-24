<?php
 session_start();
 include '../models/database.php';
 include '../models/cartModel.php';

 if(isset($_GET["id"]) && isset($_GET["op"])){
  $user_id = $_SESSION["user"]["user_id"];
  $food_id = $_GET["id"];
  $op = $_GET["op"];
  if($op == 'f'){
    add_to_cart($user_id,$food_id);
  }else if($op == 'a'){
    updateQuantity($user_id,$food_id);
  }else if($op == 's'){
    decreaseQuantity($user_id,$food_id);
  }else if($op == 'd'){
    delete_from_cart($user_id, $food_id);
  }else{
    echo "invalid operation...";
  }
 }
?>
