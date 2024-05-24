<?php
@include '../models/database.php';

if(isset($_POST['insert']))
{
    $food_name = $_POST['food_name'];
        $food_description = $_POST['food_description'];
        $food_price = $_POST['food_price'];
       //$food_provider_id = $_POST['food_provider_id'];
       
        $query = "INSERT INTO foods (food_name, food_price, food_description, food_provider_id) VALUES ('$food_name','$food_price', '$food_description', 2)";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "added";
        } else {
            echo "Something is wrong!" .mysqli_error($conn);
            ?>
            <script type="text/javascript">
                alert("Error occurred!");
                
            </script>
            <?php
        }
}

$add_query = "SELECT * FROM foods";
$add_data = mysqli_query($conn, $add_query);
$row = mysqli_fetch_array($add_data);
?>

<link rel="stylesheet" href="../assets/admin.css">

<body>
<div  class="food-form">
       <h1>Add Menu</h1>
            <div class="form">
                <form action="demo.php" method="POST" enctype="multipart/form-data">
                    <!-- <label style="margin-right: 24px;" for="">Food Type: </label>
                    <select class="se" name="food_type" id="type" style="background: transparent; border: 1px solid #2E4374; border-radius: 10px; padding: 10px;">
                        <option value="no">Select...</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Dinner">Dinner</option>
                        <input type="file" name="food_picture" id="image"><br>
                    </select><br> -->
                    <label style="margin-right: 16px;" for="food_name">Food Name: </label>
                    <input type="text" name="food_name" id="name"><br>
                    <label style="margin-right: 14px;" for="Description">Description: </label>
                    <input type="text" name="food_description" id="des"><br>
                    <label style="margin-right: 70px;" for="Price">Price</label>
                    <input type="text" name="food_price" id="price"><br>
                    <label style="margin-right: 60px;" for="img">Image</label>
                    
                    <input class="login-btn_add" type="submit" value="Insert" name="insert">
                    <img src="../assets/avo.gif" alt="" class="gif" style="height: 150px;">
                </form>
            </div>
</div>
</div>
</body>

<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Hunger</span></strong>. All Rights Reserved
    </div>
  </footer>