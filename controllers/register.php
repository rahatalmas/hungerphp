<?php
  include '../models/userModel.php';
?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_name = $_POST["user_name"];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_bio = $_POST['user_bio'];
    $user_info = array("user_name"=>$user_name,"user_email"=>$user_email,
                       "user_password"=>$user_password,"user_bio"=>$user_bio);
    $retundata = register_user($user_info);
}

//header("Location: http://localhost/hungerappphp/home.php");
?>