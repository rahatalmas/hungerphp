<?php
include '../models/foodModel.php';
session_start();
$jsonData = get_foods();
$foods = json_decode($jsonData);
$featuredfoods = array_slice($foods,0,4);
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
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="crossorigin="anonymous"referrerpolicy="no-referrer"
    />
</head>
<body>

    <?php
      include '../views/header.php';
    ?>
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
                <div class="download-container">
                    <div class="download">
                      <h2>Put us in your pocket</h2>
                      <button type="button" class="appbutton"><i class="fa-brands fa-apple"></i> Download </button>
                      <button type="button" class="appbutton"><i class="fa-brands fa-google-play"></i> Download</button>
                    </div>
                    <div class="download-section-image">
                        <img src="../assets/mobile2.png" alt="mobile-app" class="rotate">
                    </div>
                </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
    <script type="module" src="../jsfiles/slider.js"></script>
    <script type="module" src="../jsfiles/getfoods.js"></script>
</html>


