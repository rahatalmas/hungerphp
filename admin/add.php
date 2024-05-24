<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="../cssfiles/basketpage.css">
<?php
@include '../models/database.php';
@include './adminbar.php';
if(isset($_POST['insert']))
{
    $food_name = $_POST['food_name'];
        $food_description = $_POST['food_description'];
        $food_price = $_POST['food_price'];
       //$food_provider_id = $_POST['food_provider_id'];
    $target_directory = "../assets/";
    $target_file = $target_directory . basename($_FILES["food_picture"]["name"]);

    if (move_uploaded_file($_FILES["food_picture"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["food_picture"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
       
        $query = "INSERT INTO foods (food_name, food_price, food_picture, food_description, food_provider_id) VALUES ('$food_name','$food_price', '$target_file', '$food_description', 2)";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "added";
            header("Location: ./admin.php");
        } else {
            // echo "Something is wrong!" .mysqli_error($conn);
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
    <h1>Create your own Menu</h1>
    <div class="basket-item-card update_food">
    <div class="update_food_form">
                <form action="add.php" method="POST" enctype="multipart/form-data">
                    <!-- <label style="margin-right: 24px;" for="">Food Type: </label>
                    <select class="se" name="food_type" id="type" style="background: transparent; border: 1px solid #2E4374; border-radius: 10px; padding: 10px;">
                        <option value="no">Select...</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Dinner">Dinner</option>
                        <input type="file" name="food_picture" id="image"><br>
                    </select><br> -->
                    <div class="display">
                        <div class="form_picture">
                        <input class="choose_file" type="image"src="../assets/imgaeload.gif" style="height: 200px; width: 100%;"><br>
                        <input type="file" name="food_picture" id="image">
                        </div>
                        <div style="margin-top: 10px;">
                    <label for="food_name">Food Name: </label>
                    <input type="text" name="food_name" id="name"><br>
                    <label for="Description">Description: </label>
                    <input type="text" name="food_description" id="des"><br>
                    <label for="Price">Price</label>
                    <input type="text" name="food_price" id="price"><br>
                    <input class="update" type="submit" value="Insert" name="insert" style="background-color: rgb(210, 142, 64);
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
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
</body>