<?php
 session_start();
 include '../models/database.php';
 if(isset($_GET["id"])){
  $food_id = $_GET["id"];
  $_SESSION["basket"] = Arr
  echo $_SESSION["user"]["user_id"];
  echo " request for adding food to basket $food_id";
 }
?>
