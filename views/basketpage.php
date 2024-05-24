<?php
session_start();
include '../models/database.php';
include '../models/cartModel.php';
$cartList = fetchCartItems();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssfiles/headerpart.css">
    <link rel="stylesheet" href="../cssfiles/basketpage.css">
</head>

<style>
    .cart-remove-btn{
        background-color: rgb(212, 145, 69);
        outline: none;
        border: 1px solid gainsboro;
        border-radius: 10px;
        cursor: pointer;
        height: 35px;
        width: 35px;
        margin:5px;
    }
</style>

<body>
     <?php
     include '../views/header.php';
     ?>
     <main>
        <div class="basket-container">
            <div class="basket-item-container">
                <div class="basket-item-container-header">
                    <h2 class="b-i-c-h2">shopping Basket</h2>
                    <p class="b-i-c-p">3 items in your basket</p>
                </div>
                <div class="basket-items">
                    <div class="basket-items-header">
                        <h3 class="b-i-h-1">Product</h3>
                        <div class="b-i-h-2">
                            <h3>price</h3>
                            <h3>Quantity</h3>
                            <h3>Total Price</h3>
                        </div>
                    </div>
                    
                    <?php
                        foreach ($cartList as $foodItem) {
                            ?>
                            <div class="basket-item-card">
                                <div class="item-info-section">
                                    <div class="basket-card-img">
                                        <img src="<?php echo $foodItem['food_picture']; ?>" style="width: 100%;" />
                                    </div>
                                    <div class="basket-card-description">
                                        <h3><?php echo $foodItem['food_name']; ?></h3>
                                        <p><?php echo $foodItem['hotel_name']; ?></p>
                                    </div>
                                </div>
                                <div class="item-taken-info">
                                    <h4><?php echo $foodItem['food_price']; ?> tk</h4>
                                    <div class="basket-quantity-btns">
                                        <button class="qty-btn" data-op="s" data-foodId=<?php echo $foodItem["food_id"] ?>>-</button>
                                        <h4 class="qty"><?php echo $foodItem['quantity']; ?></h4>
                                        <button class="qty-btn" data-op="a" data-foodId=<?php echo $foodItem["food_id"] ?>>+</button>
                                    </div>
                                    <h4><?php echo $foodItem['food_price'] * $foodItem['quantity']; ?> tk</h4>
                                    <button class="qty-btn cart-remove-btn" data-op="d" data-foodId=<?php echo $foodItem["food_id"] ?>>R</button>
                                </div>
                            </div>
                            <?php
                        }
                    ?>

                </div>
            </div>

            <div class="basket-items-calculations">
                <div class="basket-calculation-card">
                    <form method="POST" action="../controllers/confirmorder.php">
                        <div class="order-info">
                        <h4>Name: pretty</h4>
                            <label for="order_contact">Contact</label>
                            <input class="order-inpt" type="text" placeholder="01*********" name="order_contact" />
                            <label for="order_location">location</label>
                            <input class="order-inpt" type="text" placeholder="Daffodil University" name="order_location" />
                            <label>Select Delivery Time</label>
                            <select class="order-inpt" name="delivery_time" >
                                <option>Breakfast</option>
                                <option>Lunch</option>
                                <option>Dinner</option>
                                <option>Instant</option>
                            </select>
                            <p>Cash On Delivery</p>
                        </div>
                        <div class="calculation-details">
                            <h2>Order Details</h2>
                            <?php
                               $total = 0;
                               foreach ($cartList as $foodItem) {
                               $total+= ($foodItem['food_price']*$foodItem['quantity']);
                            ?>
                               <div>
                                <p><?php echo $foodItem['food_name']?></p>
                                <p><?php echo $foodItem['food_price']?> x <?php echo $foodItem['quantity']?></p>
                               </div>
                            <?php
                               }
                            ?>
                            <div>
                                <p>Cart Total</p>
                                <p><?php echo $total ?></p>
                            </div>
                            <div>
                                <p>Delivery Charge</p>
                                <p>Free</p>
                            </div>
                            <button type="submit" name="confirm_order" value="Confirm Order">Confirm Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </main>
     <script>
        let addBtnId = document.getElementsByClassName("qty-btn");
        let qty = document.getElementsByClassName("qty");
        for(let i=0;i<addBtnId.length;i++){
            addBtnId[i].addEventListener("click",(event)=>{
            let target = event.target;
            let id = target.getAttribute("data-foodId");
            let op = target.getAttribute("data-op");
            let xml = new XMLHttpRequest();
            xml.onreadystatechange = ()=>{
                if (xml.readyState == 4 && xml.status == 200) {
                    console.log(xml.responseText);
                    if(op === 'd'){
                        alert(xml.responseText);
                        location.reload();
                    }else{
                        location.reload();
                    }
                }
            }
            xml.open("GET","../controllers/addtobasket.php?id="+id+"&op="+op,true);
            xml.send();
            })
        }
     </script>
</body>
</html>