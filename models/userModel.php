<?php
  include '../models/database.php';
?>

<?php
  function insert_user($user_name, $user_email, $user_password,$user_bio) {
    global $conn;
    $user_name = mysqli_real_escape_string($conn, $user_name);
    $user_email = mysqli_real_escape_string($conn, $user_email);
    $user_password = mysqli_real_escape_string($conn, $user_password);
    $user_bio = mysqli_real_escape_string($conn, $user_bio);
    $sql = "INSERT INTO users (user_name, user_email, user_password, user_bio) 
            VALUES ('$user_name','$user_email','$user_password','$user_bio')";
    if($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: http://localhost/hungerappphp/home.php");
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>