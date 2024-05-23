<link rel="stylesheet" href="../cssfiles/register.css"/>
<?php
@require '../models/database.php';
session_start();
if(isset($_POST['submit']))
{
    $hotel_name= $_POST['hotel_name'];
    $hotel_password = $_POST['hotel_password'];

    $select = "SELECT * FROM hotels WHERE hotel_name = '$hotel_name' and hotel_password ='$hotel_password'";
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result);
          $_SESSION['hotel_name'] = $row['hotel_name']; 
          header('Location: ../admin/admin.php');
    }
    else{
        ?>
        <script>
            alert("Incorrect Email or Password");
        </script>
        <?php
    }
};
?>

<style>
    body{
        background-color:#e79982;
    }
    .image{
        margin:0 auto;
        text-align: center;
        margin-bottom: 25px;
    }
.image img{
    height: 100px;
}
.food-deli-bike {
    border-bottom: 5px solid rgb(134, 40, 40);
    position: relative;
    margin-top:70px;
}
.img1{
    height: 60px;
    position: absolute;
    top:-55px;
    right: 0px;
}
.img2{
    height: 60px;
    position: absolute;
    top:-55px;
    left:0px;
}
h2{
    text-align: center;
}
a{
    /* text-align: center; */
    text-decoration: none;
    font-size: 0.9rem;
    color: #963315;
}
/*230*/
</style>
<body>
    <div class="register-main">
        <div class=" form-container">
            <div class="image">
                <img src="../assets/logo.png" />
            </div>
            <h2>LogIn</h2>
            <form class="form" method="POST" action="../views/hotellogin.php">
                <label class="form-label" for="ser_name">Hotel Name</label>
                <input id="hotel_name" name="hotel_name" class="form-input" required type="text" placeholder="Hotel Name" />
                <label class="form-label" for="hotel_password">Password</label>
                <input id="hotel_password" name="hotel_password" class="form-input" required type="password" placeholder="********" />
                <input id="reg-sub-btn" name="submit" class="reg-sub-btn form-input" type="submit" value="login"/>
                <a href="./loginas.php">New to Hunger? SignUp</a>
             </form>
             <div class="food-deli-bike">
                <img id="bike" class="img1" src="../assets/food_deli.gif"/>
                <img id="home" class="img2" src="../assets/deliveryhome.png"/>
            </div>
        </div>
    </div>
    <script>
        let bike = document.getElementById("bike");
        let home = document.getElementById("home");
        setInterval(()=>{
            let currentRight = parseInt(bike.style.right) || 0;
            if(currentRight == 180){
                currentRight = 0;
            }
            bike.style.right = (currentRight + 1) + "px";
        },50)
    </script>
</body>