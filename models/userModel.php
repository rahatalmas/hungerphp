<?php
  include '../models/database.php';
?>

<?php
  function find_user($primarykey) {
   global $conn;
   $sql = "SELECT * FROM users WHERE user_name='$primarykey'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   if($row){
    return $row;
   }else{
    return 0;
   }
  }

  function register_user($user_info) {
    global $conn;
    $columns = implode(", ",array_keys($user_info));
    $escaped_values = array_map(array($conn, 'real_escape_string'), array_values($user_info));
    $values  = implode("', '", $escaped_values);
    $sql = "INSERT INTO `users`($columns) VALUES ('$values')";
    if($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: http://localhost/views/home.php");
        return 1;
    }else {
        echo "Error: " . $conn->error;
        header("Location: http://localhost/views/registerpage.php");
        return 0;
    }
  }
?>

<?php
  class User{
    
  }
?>