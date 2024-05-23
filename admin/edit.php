<?php
@require '../models/database.php';
$id = $_GET['id'];
$query = "SELECT * FROM foods WHERE food_id = '$id'";
$data = mysqli_query($conn, $query);
$row = mysqli_fetch_array($data);
?>

<body>
    <div>
        <form action="edit.php?id=<?php echo $row['food_id'];?>" method="POST">  
            <label for="">Food Type: </label>
           <!-- <input type="text" value="<?php echo $row['Type'] ?>" name="type" id = "type"><br> -->
            <label style="margin-right: 16px;" for="">Food Name: </label>
            <input type="text" value="<?php echo $row['food_name'] ?>" name="food_name" id = "name"><br>
            <label style="margin-right: 14px;" for="Description">Description: </label>
            <input type="text" value="<?php echo $row['food_description'] ?>" name="food_description" id = "des"><br>
            <label style="margin-right: 66px;" for="Price">Price</label>
            <input type="text" value="<?php echo $row['food_price'] ?>" name="food_price" id = "price"><br>
            <label style="margin-right: 60px;" for="img">Image</label>
            <input type="text" value="<?php echo $row['food_picture'] ?>" name="food_picture" id = "img"><br>
            <input type="hidden" value="<?php echo $row['food_id'] ?>" name="food_id" >
            <input class="login-btn" type="submit" value="Update" name= "update">
            <img src="../assets/banana.gif" alt="" style="padding-left: 10px; height: 80px;">
        </form>
    </div>
</body>


<?php
if(isset($_POST['update']))
{
    $foodName = $_POST['food_name'];
    $foodDescription = mysqli_real_escape_string($conn, $_POST['food_description']);
    $foodPrice = $_POST['food_price'];
    $foodPicture = $_POST['food_picture'];
    $id = $_POST['food_id'];
    $edited_query = "UPDATE foods SET food_name = '$foodName', food_description = '$foodDescription', food_price = '$foodPrice', food_picture = '$foodPicture' WHERE food_id = '$id'";
    $edited_data = mysqli_query($conn, $edited_query);
    
    
    if($edited_data)
    {
        echo "Updated Successfully";
        header("Location: ../admin/admin.php");
    }
    else
    {
        echo "Something is wrong!" .mysqli_error($conn);
    }
}
?>