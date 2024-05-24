<?php
    include '../models/foodModel.php';
    $jsonData = get_foods();
    $foods = json_decode($jsonData);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssfiles/foodpagebanner.css"/>
    <link rel="stylesheet" href="../cssfiles/foodpagemain.css"/>
    <link rel="stylesheet" href="../cssfiles/itemcard.css">
    <link rel="stylesheet" href="../cssfiles/headerpart.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="crossorigin="anonymous"referrerpolicy="no-referrer"
    />
    <title>Document</title>
</head>
<body>
    <?php
      include '../views/header.php';
    ?>
    <main class="yo">
        <div class="food-page-banner">
            <div class="banner-content">
                <img src="../assets/banner.gif.gif" alt="">
            </div>
        </div>
        <div class="f-p-header-container">
            <div class="f-p-header-section">
                <div class="f-p-filter">
                  <div class="dropdown f-p-filter-container">
                     <p class="f-p-filters dropbtn" onclick="dropFunc()">All Foods <i class="fa-solid fa-caret-down"></i></p>
                     <div id="dropdown" class="dropdown-content">
                         <a href="">Pt</a>
                         <a href="">Tt</a>
                         <a href="">Tt</a>
                     </div>
                  </div>
                </div>
                <div class="f-p-header-search-bar">
                  <input class="f-p-search-bar" type="search"/>
                  <button class="search-food"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>Search</button>
                </div>
             </div>
        </div>
        <div class="food-page-main">
            <div class="food-page-content">
                <div class="f-p-foods-section">
                  <?php
                   foreach ($foods as $food) {
                       echo  
                       
                       "
                        <div class=\"food-card\">
                            <img name=\"foodImage\" class=\"food-card-img\" style=\"width: 100%;\" src=\"$food->food_picture\"/>
                            <div class=\"food-card-description\">
                                <h3>$food->food_name</h3>
                                <p>$food->food_description</p>
                                <h4>$food->hotel_name</h4>
                                <h4 class=\"price-tag\">Price: $food->food_price Tk</h4>
                                <button data-id=\"$food->food_id\" id=\"addCartBtn\" class=\"food-card-add-btn\" >Add To Cart</button>
                            </div>
                        </div> 
                       ";
                    }
                   ?>
                </div>
             </div>
             <div class="food-page-side-panel">
                <div class="custom-order-card">
                    <h3>Make custom order</h3>
                    <form>
                        <label>Select date and time</label>
                        <input id="date-time" class="c-inp" type="datetime-local" name="datetimelocal"/>
                        <label>Select Meal Category</label>
                        <select id="mealtype" class="c-inp" name="mealtype">
                            <option class="c-inp">Breakfast</option>
                            <option class="c-inp">Lunch</option>
                            <option class="c-inp">Dinner</option>
                        </select>
                        <input type="button" value="Add To List" class="custom-order-btn" id="custom-order-btn"/>
                    </form>
                </div>
                <div class="custom-order-list">
                    <h3>Your Order List</h3>
                    <div class="list-card">
                       <h2></h2>
                    </div>
                    <div class="list-card">
                        <h2></h2>
                     </div>
                     <div class="list-card">
                        <h2></h2>
                     </div>
                     <input type="button" value="Make Order" class="custom-order-btn"/>
                </div>
             </div>
        </div>
    </main>
    <script>
      let cartBtnId = document.getElementsByClassName("food-card-add-btn");
      let msg = document.getElementById("addmessage");
      for(let i=0;i<cartBtnId.length;i++){
        cartBtnId[i].addEventListener("click",(event)=>{
           let target = event.target;
           let id = target.getAttribute("data-id");
           //alert(id);
           let xml = new XMLHttpRequest();
           xml.onreadystatechange = ()=>{
               if (xml.readyState == 4 && xml.status == 200) {
                console.log(xml.responseText);
                //msg.innerText = xml.responseText;
              }
           }
           xml.open("GET","../controllers/addtobasket.php?id="+id+"&op=f",true);
           xml.send();
        })
      }
    </script>
</body>
</html>

<!--
-->