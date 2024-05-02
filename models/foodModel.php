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
function get_foods($table){
    $arr = [];
    $sql = "SELECT * FROM $table";
    global $conn;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
      array_push($arr,$row);
     }
   } else {
     echo "0 results";
   }
   $myJSON = json_encode($arr,JSON_UNESCAPED_SLASHES);
   //echo $myJSON;
   $conn->close();
   return $myJSON;
}
?>