<?php
include '../models/foodModel.php';
$jsonData = get_foods();
$foods = json_decode($jsonData);
$featuredfoods = array_slice($foods,0,8);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device;-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../cssfiles/banner.css">
    <link rel="stylesheet" href="../cssfiles/itemcard.css">
    <link rel="stylesheet" href="../cssfiles/apppromote.css">
    <link rel="stylesheet" href="../cssfiles/headerpart.css">
</head>
<body>
    <header >
       <div class="header-component">
            <div class="logo">
                <!--<img src="./assets/anya.jpg"/>-->
                <h1>Hunger</h1>
            </div>
            <nav class="nav-container">
            <a class="nav-item" href="/">Home</a>
            <a class="nav-item" href="/">Foods</a>
            <a class="nav-item" href="/">Hotels</a>
            <a class="nav-item" href="/">About</a>
            </nav>
            <div class="profile-photo">
                <img src="../assets/anya.jpg"/>
                <a class="" style="font-size: large;margin-left: 3px;cursor: pointer;"><?php  ?></a>
            </div>
            <h4 onclick="openCart()">MyBas</h4>
       </div>
    </header>
    <main>
        <div class="banner-container">
            <div id="wrapper" class="wrapper">
                <div class="banner-1">
                   <div class="banner-content">
                   <!--<div class="banner-text">
                           <h1>Hunger</h1>
                           <p>a place to satisfy your carvings.s</p>
                       </div>-->
                       <div class="banner-img">
                           <img class="b-img" src="https://wallpapercave.com/wp/wp5081130.png"
                             style="width: 100%;"
                           />
                       </div>
                   </div>
                </div>
            </div>
            <div id="wrapper" class="wrapper">
                <div class="banner-2">
                    <div class="banner-content">
                        <!--<div class="banner-text">
                            <h1>Hunger</h1>
                            <p>a place to satisfy your carvings.s</p>
                        </div>-->
                        <!--<div class="banner-img">-->
                            <img class="b-img" src="https://wallpapercave.com/wp/wp3983013.jpg"
                              style="width: 100%;"
                            />
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <div id="wrapper" class="wrapper"> 
                <div class="banner-3">
                    <div class="banner-content">
                        <!--<div class="banner-text">
                            <h1>Hunger</h1>
                            <p>a place to satisfy your carvings.s</p>
                        </div>-->
                        <div class="banner-img">
                            <img class="b-img" src="https://wallpapercave.com/wp/wp6901979.png"
                              style="width: 100%;"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-foods">
            <div class="section-head">
                <h2>Featured</h2>
                <h2>filter</h2>
            </div>
            <div id="food-section-items" class="section-items">
                 <?php
                   foreach ($featuredfoods as $food) {
                       echo  
                       "<div class=\"food-card\">
                       <img class=\"food-card-img\" style=\"width: 100%;\" src=\"$food->food_picture\"/>
                       <div class=\"food-card-description\">
                           <h3>$food->food_name</h3>
                           <p>$food->food_description</p>
                           <h4>$food->hotel_name</h4>
                           <h4 class=\"price-tag\">Price: $food->food_price Tk</h4>
                           <button class=\"food-card-add-btn\">Add To Card</button>
                       </div>
                       </div>
                       ";
                   }
                 ?>
                <!-- <div class="food-card">
                    <img class="food-card-img" style="width: 100%;" src="https://w0.peakpx.com/wallpaper/138/212/HD-wallpaper-naruto-uzumaki-alright-this-is-ichiraku-ramen-my-favorite-spot-in-konoha-i-ordered-us-some-ramen-so-dig-in-twitter.jpg"/>
                    <div class="food-card-description">
                        <h3>ichurika ramen</h3>
                        <p>ramen please. hello i'm naruto uzumaki . i love ramen the most. ramen ramen . dattebayo</p>
                        <h4>leaf village</h4>
                        <h4>price: 250</h4>
                        <button class="food-card-add-btn">Add To Card</button>
                    </div>
                 </div>-->
            </div>
        </div>
        <div class="app-promote">
            <h1>hello</h1>
        </div>
    </main>
    <footer>

    </footer>
</body>
    <script type="module" src="../jsfiles/slider.js"></script>
    <script type="module" src="../jsfiles/getfoods.js"></script>
</html>