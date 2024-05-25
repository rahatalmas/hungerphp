<?php
include '../models/database.php';
function getCustomListItems() {
    if (!isset($_SESSION["user"]["user_id"])) {
        return "User ID not set in session";
    }
    global $conn;
    $user_id = $_SESSION["user"]["user_id"];
    $sql = "
    SELECT 
        foods.food_name,
        foods.food_picture,
        foods.food_provider_id,
        hotels.hotel_name,
        customlist.date,
        customlist.deliverytime
    FROM 
        customlist
    JOIN 
        foods ON customlist.food_id = foods.food_id
    JOIN 
        users ON customlist.user_id = users.user_id
    JOIN 
        hotels ON foods.food_provider_id = hotels.hotel_id
    WHERE 
        users.user_id = $user_id
    ";

    $result = $conn->query($sql);

    if ($result === false) {
        return "Error: " . $conn->error;
    }

    $customListItems = [];
    
    while ($row = $result->fetch_assoc()) {
        array_push($customListItems,$row);
    }
    return $customListItems;
}
?>