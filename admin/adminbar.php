
<link rel="stylesheet" href="../cssfiles/headerpart.css">
<link rel="stylesheet" href="../cssfiles/admin.css">
<body>
<header >
       <div class="header-component">
            <div class="logo">
                <!--<img src="./assets/anya.jpg"/>-->
                <a href="../admin/admin.php"><img src="../assets/logo.png" alt=""></a>
            </div>
            <nav class="nav-container">
            <a class="nav-item" href="/hungerphp/admin/admin.php">Home</a>
            <a class="nav-item" href="/hungerphp/admin/add.php">Add Food</a>
            <a class="nav-item" href="/hungerphp/views/logout.php">Logout</a>
            </nav>
            <div class="profile-photo">
                <img src="../assets/anya.jpg"/>
                <a href="./adminprofile.php" class="" style="font-size: large;margin-left: 3px;cursor: pointer;"><?php  ?></a>
            </div>
            <h3><?php echo$_SESSION["hotel_name"]?></h3>
            <h4 onclick="openCart()"></h4>

       </div>
    </header>
    <div id="mySidenav" class="">
    <a id="dashborad" href="/hungerphp/admin/admin.php">Dashborad</a>
    <a id="pen-order" href="./orderpending.php">Pending Orders</a>
    <a id="order-history" href="/hungerphp/admin/add.php">Add Menu</a>
    <a id="profile" href="./adminprofile.php">Profile</a>
    <a href="/hungerphp/views/logout.php" id="logout">LogOut</a>
    </div>
</body>
