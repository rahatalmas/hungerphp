<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "foodapp";

// Create connection
$conn = new mysqli($host, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
function get_user($table){
    
    $sql = "SELECT * FROM $table";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
       echo "user name: " . $row["user_name"]. "<br>";
     }
   } else {
     echo "0 results";
   }
   $conn->close();
}

?>