<?php
    session_start();
    include '../models/database.php';

    if (isset($_POST['food_id']) && isset($_POST['date']) && isset($_POST['deliveryTime'])) {
        $user_id = $_SESSION["user"]["user_id"];
        $foodId = $_POST['food_id'];
        $date = $_POST['date'];
        $deliveryTime = $_POST['deliveryTime'];
     
        $sql = "INSERT INTO customlist (user_id, food_id, date, deliverytime) 
                VALUES ('$user_id', '$foodId', '$date', '$deliveryTime')";
        if ($conn->query($sql) === TRUE) {
            echo "Item added to list successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: Missing required data";
    }
?>
