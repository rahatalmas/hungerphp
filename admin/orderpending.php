<?php
@require '../models/database.php';
@require './adminbar.php';
session_start();
?>
<link rel="stylesheet" href="../cssfiles/foodpagemain.css"/>
<body class="orderlist">
    <div class="custom-order-list">
        <div style="display: flex; justify-content: space-between;">
            <h3>Your Order List</h3>
        <div class="change_status">
            <select class="custom-order-btn" name="" id="">
                <option class="option-btn"  value="Pending">Change staus</option>
                <option class="option-btn" value="Pending">Pending</option>
                <option class="option-btn" value="Delivery on the way">Delivery on the way</option>
               </select>
        </div>
        </div>
        <div class="list-card" style="margin: 20px;">
            <h2>anda</h2>
           
           </div>
    </div>
</body>
<style>
    .orderlist{
  background-color: rgb(242, 216, 182);
  margin: 0;
}
    h3{
        padding-left: 20px;
    }
    .custom-order-list{
        max-width: 1200px;
        margin: 20px auto;
    }
</style>
