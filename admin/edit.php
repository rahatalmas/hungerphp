<link rel="stylesheet" href="../cssfiles/basketpage.css">
<?php
@require '../models/database.php';
@include './adminbar.php';

$id = $_GET['id'];
$query = "SELECT * FROM foods WHERE food_id = '$id'";
$data = mysqli_query($conn, $query);
$row = mysqli_fetch_array($data);
?>

<body>
    <div class="menu-add">
    <h2>Menu is under construction...</h2>
    <img id="bike" src="../assets/food_deli.gif" alt="" style="height: 40px; padding-top: 5px;">
    </div>
<div class="basket-item-card update_food">
    <div class="item-info-section">
         <div class="basket-card-img">
            <img style="width: 250px;" src="<?php echo $row['food_picture'] ?>"/>
         </div>
    <div class="update_food_form">
        <form action="edit.php?id=<?php echo $row['food_id'];?>" method="POST">  
        <label for="">Food Name: </label>
        <input type="text" value="<?php echo $row['food_name'] ?>" name="food_name" id = "name"><br>
        <label for="Description">Description: </label>
        <input type="text" value="<?php echo $row['food_description'] ?>" name="food_description" id = "des"><br>
        <label for="Price">Price</label>
        <input type="text" value="<?php echo $row['food_price'] ?>" name="food_price" id = "price"><br>
        <label for="img">Image</label>
        <input type="text" value="<?php echo $row['food_picture'] ?>" name="food_picture" id = "img"><br>
        <input type="hidden" value="<?php echo $row['food_id'] ?>" name="food_id" >
        <input class="update-btn" type="submit" value="Update" name= "update" style="background-color: rgb(210, 142, 64);
  outline: none;
  border: 2px solid #542808;
  border-radius: 10px;
  cursor: pointer;
  height: 35px;
  width: 300px;
  color: white;
  font-size: 1rem;
  margin-left: 165px;
  ">
    </form>
    </div>
</div>
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
<script>
        let bike = document.getElementById("bike");
        setInterval(()=>{
            let currentRight = parseInt(bike.style.right) || 0;
            if(currentRight == 180){
                currentRight = 0;
            }
            bike.style.right = (currentRight + 1) + "px";
        },50)
    </script>