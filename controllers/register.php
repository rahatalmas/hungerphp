<?php
echo "register control";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_name = $_POST["user_name"];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_bio = $_POST['user_bio'];
    echo $user_name.''.$user_email.''.$user_bio;
}

//header("Location: http://localhost/hungerappphp/home.php");
?>