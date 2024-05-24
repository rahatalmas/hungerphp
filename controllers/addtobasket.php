<?php
 session_start();
 include '../models/database.php';
 include '../models/cartModel.php';

 if(isset($_GET["id"]) && isset($_GET["op"])){
  $user_id = $_SESSION["user"]["user_id"];
  $food_id = $_GET["id"];
  $op = $_GET["op"];
  //$_SESSION["basket"] = Arr
  add_to_cart($user_id,$food_id);
 }
?>
