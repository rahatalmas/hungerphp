<?php
include '../models/database.php';

function fetchCartItems(){
    global $conn;
    $user_id = $_SESSION["user"]["user_id"];
    $sql = "SELECT f.*, b.quantity, h.hotel_name
            FROM foods f
            JOIN basketlist b ON f.food_id = b.basketed_food_id
            JOIN users u ON b.basketed_user_id = u.user_id
            JOIN hotels h ON f.food_provider_id = h.hotel_id
            WHERE u.user_id = '$user_id'";
    $result = $conn->query($sql);
    if($result){
        $cartList = [];
        while($row = $result->fetch_assoc()){
            array_push($cartList,$row);
        }
        return $cartList;
    } else {
        echo "Error: " . $conn->error;
        return [];
    }
}

function add_to_cart($userId, $foodId) {
    global $conn;
    $checkQuery = "SELECT quantity FROM basketlist WHERE basketed_user_id = '$userId' AND basketed_food_id = '$foodId'";
    $checkResult = $conn->query($checkQuery);
    if ($checkResult->num_rows > 0) {
       updateQuantity($userId,$foodId);
       return;
    }

    $userCheckQuery = "SELECT user_id FROM users WHERE user_id = '$userId'";
    $userCheckResult = $conn->query($userCheckQuery);
    if ($userCheckResult->num_rows == 1) {
        $insertQuery = "INSERT INTO basketlist (basketed_user_id, basketed_food_id, quantity) 
                        VALUES ('$userId', '$foodId', 1)";
        if ($conn->query($insertQuery) === TRUE) {
            echo "Item added to basket successfully.";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    } else {
        echo "User does not exist.";
    }
}

function updateQuantity($user_id,$food_id){
    global $conn;

    $checkQuery = "SELECT quantity FROM basketlist WHERE basketed_user_id = '$user_id' AND basketed_food_id = '$food_id'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        $row = $checkResult->fetch_assoc();
        $currentQuantity = $row['quantity'];
        $newQuantity = $currentQuantity+1;

        $updateQuery = "UPDATE basketlist SET quantity = '$newQuantity' WHERE basketed_user_id = '$user_id' AND basketed_food_id = '$food_id'";
        if ($conn->query($updateQuery) === TRUE) {
            echo $newQuantity;
        } else {
            echo "Error updating quantity: " . $conn->error;
        }
    }
}

function decreaseQuantity($user_id,$food_id){
    global $conn;

    $checkQuery = "SELECT quantity FROM basketlist WHERE basketed_user_id = '$user_id' AND basketed_food_id = '$food_id'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        $row = $checkResult->fetch_assoc();
        $currentQuantity = $row['quantity'];
        if($currentQuantity>1){
            $newQuantity = $currentQuantity-1;
            $updateQuery = "UPDATE basketlist SET quantity = '$newQuantity' WHERE basketed_user_id = '$user_id' AND basketed_food_id = '$food_id'";
            if ($conn->query($updateQuery) === TRUE) {
                echo $newQuantity;
            } else {
                echo "Error updating quantity: " . $conn->error;
            }
        }else{
            echo $currentQuantity;
        }
    }
}

function delete_from_cart($userId, $foodId) {
    global $conn;

    $deleteQuery = "DELETE FROM basketlist WHERE basketed_user_id = '$userId' AND basketed_food_id = '$foodId'";
    
    if ($conn->query($deleteQuery) === TRUE) {
        echo "Item deleted from cart successfully.";
    } else {
        echo "Error deleting item from cart: " . $conn->error;
    }
}

?>