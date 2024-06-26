<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssfiles/headerpart.css">
    <link rel="stylesheet" href="../cssfiles/basketpage.css">
</head>
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
                    <div class="basket-item-card">
                            <div class="item-info-section">
                                 <div class="basket-card-img">
                                    <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2020/01/ramen-ponyo-Cropped.jpg" style="width: 100%;"/>
                                 </div>
                                 <div class="basket-card-description">
                                    <h3>Ramen</h3>
                                    <p>Ghilbi Shop</p>
                                 </div>
                            </div>
                            <div class="item-taken-info">
                                    <h4>900 tk</h4>
                                    <div class="basket-quantity-btns">
                                        <button>-</button>
                                        <h4>2</h4>
                                        <button>+</button>
                                    </div>
                                    <h4>1800 tk</h4>
                            </div>
                    </div>

                    <div class="basket-item-card">
                        <div class="item-info-section">
                             <div class="basket-card-img">
                                <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2020/01/ramen-ponyo-Cropped.jpg" style="width: 100%;"/>
                             </div>
                             <div class="basket-card-description">
                                <h3>Ramen</h3>
                                <p>Ghilbi Shop</p>
                             </div>
                        </div>
                        <div class="item-taken-info">
                                <h4>900 tk</h4>
                                <div class="basket-quantity-btns">
                                    <button>-</button>
                                    <h4>2</h4>
                                    <button>+</button>
                                </div>
                                <h4>1800 tk</h4>
                        </div>
                </div>
                <div class="basket-item-card">
                    <div class="item-info-section">
                         <div class="basket-card-img">
                            <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2020/01/ramen-ponyo-Cropped.jpg" style="width: 100%;"/>
                         </div>
                         <div class="basket-card-description">
                            <h3>Ramen</h3>
                            <p>Ghilbi Shop</p>
                         </div>
                    </div>
                    <div class="item-taken-info">
                            <h4>900 tk</h4>
                            <div class="basket-quantity-btns">
                                <button>-</button>
                                <h4>2</h4>
                                <button>+</button>
                            </div>
                            <h4>1800 tk</h4>
                    </div>
            </div>
                </div>
            </div>
            
            <div class="basket-items-calculations">
                <div class="basket-calculation-card">
                    <div class="order-info">
                       <h4>pretty</h4>
                       <h4>daffodil Internation university</h4>
                       <h4>ashulia khagan</h4>
                       <h4>contact: 017********</h4>
                    </div>
                    <div class="calculation-details">
                        <h2>Cart Total</h2>
                        <div>
                            <p>Cart SubTotal</p>
                            <p>1800 Tk</p>
                        </div>
                        <div>
                            <p>Delivery Charge</p>
                            <p>Free</p>
                        </div>
                        <div>
                            <p>Cart Total</p>
                            <p>1800 Tk</p>
                        </div>
                        <button>Order</button>
                   </div>
                </div>
            </div>
        </div>
     </main>
</body>
</html>