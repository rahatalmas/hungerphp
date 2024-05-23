
<link rel="stylesheet" href="../cssfiles/headerpart.css">
<link rel="stylesheet" href="../cssfiles/admin.css">
<body>
<header >
       <div class="header-component">
            <div class="logo">
                <!--<img src="./assets/anya.jpg"/>-->
                <h1>Hunger</h1>
            </div>
            <nav class="nav-container">
            <a class="nav-item" href="/hungerphp/views/home.php">Home</a>
            <a class="nav-item" href="/hungerphp/admin/add.php">Add Food</a>
            <a class="nav-item" href="/hungerphp/views/logout.php">Logout</a>
            </nav>
            <div class="profile-photo">
                <img src="../assets/anya.jpg"/>
                <a class="" style="font-size: large;margin-left: 3px;cursor: pointer;"><?php  ?></a>
            </div>
            <h3><?php echo$_SESSION["hotel_name"]?></h3>
            <h4 onclick="openCart()"></h4>

       </div>
    </header>
    <div id="mySidenav" class="">
    <a id="dashborad" href="">Dashborad</a>
    <a id="pen-order" href="">Pending Orders</a>
    <a id="order-history" href="">Order History</a>
    <a id="profile">Profile</a>
    <a href="/hungerphp/views/logout.php" id="logout">LogOut</a>
    </div>
</body>
