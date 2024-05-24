<link rel="stylesheet" href="../cssfiles/profile.css">
<?php
@require '../models/database.php';
@include './adminbar.php';
session_start();
$hotel_name = $_SESSION["hotel_name"];
$hotel_id = isset($_SESSION["hotel_id"]) ? $_SESSION["hotel_id"] : null;
$query = "SELECT * FROM hotels WHERE hotel_name = '$hotel_name'";
$data = mysqli_query($conn, $query);
$row = mysqli_fetch_array($data);
?>
<body>
    <header>
            
    </header>
    <main class="profile-page-container">
        <div style="height: 100%;">
            <div class="profile-info-section">
                <div class="p-img-primarydata-container">
                   <div class="p-img-con">
                       <img src="../assets/anya.jpg" class="p-img"/>
                   </div>
                   <div class="p-primarydata-con">
                       <p><?php echo $row['hotel_name'] ?></p>
                       <p class="username">Hotel ID: <?php  echo $row['hotel_id']; ?></p>
                       <br/>
                       <P>Ghiblifood@gmail.com</P>
                   </div>
                </div>
                <p class="p-bio"><?php  echo $row['hotel_description']; ?></p>
                <button class="p-edit-btn">Edit Profile</button>
                <p>|-> Ashulia Khagan</p>
                <div class="border"></div>
                <p>Total order received: 100</p>
                <p>Order pending: 10</p>
                <p>Revenue(This month): 30000tk</p>
                <br/>
            </div>
        </div>
    </main>
</body>
