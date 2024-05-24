
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssfiles/header.css">
</head>
<body>
<header >
       <div class="header-component">
            <div class="logo">
                <!--<img src="./assets/anya.jpg"/>-->
                <h1>Hunger</h1>
            </div>
            <nav class="nav-container">
            <a class="nav-item" href="/hungerphp/views/home.php">Home</a>
            <a class="nav-item" href="/hungerphp/views/foodpage.php">Foods</a>
            <a class="nav-item" href="/">Hotels</a>
            <a class="nav-item" href="/hungerphp/views/basketpage.php">Basket</a>
            <a class="nav-item" href="/hungerphp/views/loginas.php">Login</a>
            </nav>
            <div class="profile-photo">
                <img src="../assets/anya.jpg"/>
                <a class="" style="font-size: large;margin-left: 3px;cursor: pointer;"><?php  ?></a>
            </div>
            <h3><?php echo$_SESSION["user"]["user_name"] ?></h3>
            <h4 onclick="openCart()"></h4>

       </div>
    </header>
</body>
</html>