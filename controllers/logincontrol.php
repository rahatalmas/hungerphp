<?php
 session_start();
 include '../models/userModel.php';
?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_name = $_POST["user_name"];
    $user_password = $_POST['user_password'];
    $user = find_user($user_name);
    if($user != 0){
        print_r($user);
        $_SESSION["user"] = $user;
        header("Location: http://localhost/hungerphp/views/home.php");
    }else{
        echo "not valid";
    }
}


?>

