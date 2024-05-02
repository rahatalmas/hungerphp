<?php
include '../models/database.php';
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