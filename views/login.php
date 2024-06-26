<link rel="stylesheet" href="../cssfiles/register.css"/>
<style>
    body{
        background-color:#e79982;
    }
    .image{
        margin:0 auto;
        text-align: center;
        margin-bottom: 25px;
    }
.image img{
    height: 100px;
}
.food-deli-bike {
    border-bottom: 5px solid rgb(134, 40, 40);
    position: relative;
    margin-top:70px;
}
.img1{
    height: 60px;
    position: absolute;
    top:-55px;
    right: 0px;
}
.img2{
    height: 60px;
    position: absolute;
    top:-55px;
    left:0px;
}
h2{
    text-align: center;
}
a{
    /* text-align: center; */
    text-decoration: none;
    font-size: 0.9rem;
    color: #963315;
}
/*230*/
</style>
<body>
    <div class="register-main">
        <div class=" form-container">
            <div class="image">
                <img src="../assets/logo.png" />
            </div>
            <h2>LogIn</h2>
            <form class="form" method="POST" action="../controllers/logincontrol.php">
                <label class="form-label" for="ser_name">Username or Email</label>
                <input id="user_name" name="user_name" class="form-input" required type="text" placeholder="Username or Email" />
                <label class="form-label" for="user_password">Password</label>
                <input id="user_password" name="user_password" class="form-input" required type="password" placeholder="********" />
                <input id="reg-sub-btn" name="submit" class="reg-sub-btn form-input" type="submit" value="login"/>
                <a href="./loginas.php">New to Hunger? SignUp</a>
             </form>
             <div class="food-deli-bike">
                <img id="bike" class="img1" src="../assets/food_deli.gif"/>
                <img id="home" class="img2" src="../assets/deliveryhome.png"/>
            </div>
        </div>
    </div>
    <script>
        let bike = document.getElementById("bike");
        let home = document.getElementById("home");
        setInterval(()=>{
            let currentRight = parseInt(bike.style.right) || 0;
            if(currentRight == 180){
                currentRight = 0;
            }
            bike.style.right = (currentRight + 1) + "px";
        },50)
    </script>
</body>