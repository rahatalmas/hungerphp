<?php
include '../models/database.php';
function get_foods(){
    $arr = [];
    $sql = "SELECT * FROM foods INNER JOIN hotels ON foods.food_provider_id = hotels.hotel_id";
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