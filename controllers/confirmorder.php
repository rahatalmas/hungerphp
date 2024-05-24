<?php
session_start();
include '../models/cartModel.php';

if (isset($_POST['confirm_order'])) {
    $items = fetchCartItems();
    $user_id = $_SESSION["user"]["user_id"];
    $contact = $_POST["order_contact"];
    $location = $_POST["order_location"];
    $deliveryTime = $_POST["delivery_time"];
    foreach ($items as $item) {
        $foodId = $item['food_id']; 
        $quantity = $item['quantity'];

        $sql = "INSERT INTO orderlist (ordered_user_id, ordered_food_id,quantity, contact, location, delivery_time)
                VALUES ('$user_id', '$foodId','$quantity','$contact', '$location', '$deliveryTime')";
        
        $result = $conn->query($sql);

        if (!$result) {
            echo "Error: " . $conn->error;
        }
    }
    echo "order placed successfully";
} else {
    echo "Button not clicked";
}
?>