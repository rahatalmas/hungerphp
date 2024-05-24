<?php
    include '../models/database.php';
    include '../models/foodModel.php';
    $jsonData = get_foods();
    $foods = json_decode($jsonData);
    //$featuredfoods = array_slice($foods,0,4);
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssfiles/banner.css">
    <link rel="stylesheet" href="../cssfiles/itemcard.css">
    <link rel="stylesheet" href="../cssfiles/apppromote.css">
    <link rel="stylesheet" href="../cssfiles/headerpart.css">

</head>
<body>
     <?php
     include '../admin/adminbar.php';
     ?>
     <div id="food-section-items" class="section-items">
        <?php
          foreach ($foods as $food) {
              echo  
              "<div class=\"food-card\">
              <img class=\"food-card-img\" style=\"width: 100%;\" src=\"$food->food_picture\"/>
              <div class=\"food-card-description\">
                  <h3>$food->food_name</h3>
                  <p>$food->food_description</p>
                  <h4>$food->hotel_name</h4>
                  <h4 class=\"price-tag\">Price: $food->food_price Tk</h4>
                  <div class=\"admin-btns\">
                    <a href=\"edit.php?id=$food->food_id\"><button class=\"admin-button\">Edit</button></a>
                    <a href=\"delete.php?id=$food->food_id\"><button class=\"admin-button\">Delete</button></a>
                  </div>
              </div>
              </div>
              ";
          }
        ?>
   </div>
   <div>
</body>
</html>