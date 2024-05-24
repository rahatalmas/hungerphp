
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
            
            <a class="nav-item" href="/views/home.php">Home</a>
            
            <a class="nav-item"
                <?php if(isset($_SESSION["user"]["user_name"])) { ?>
                    href="/views/foodpage.php"
                <?php } else { ?>
                    href="/views/login.php"
                <?php } ?>
                >Foods
            </a>
            <a class="nav-item"
                <?php if(isset($_SESSION["user"]["user_name"])) { ?>
                    href="/views/basketpage.php"
                <?php } else { ?>
                    href="/views/login.php"
                <?php } ?>
                >Basket
            </a>
                
            <a class="nav-item" 
                    <?php if(isset($_SESSION["user"]["user_name"])) { ?>
                        href="../controllers/logout.php"
                    <?php } else { ?>
                        href="/views/login.php"
                    <?php } ?>>
                    <?php
                    if(isset($_SESSION["user"]["user_name"])) {
                        echo "Logout";
                    } else {
                        echo "Login";
                    }
                    ?>
            </a>



            </nav>
            <div class="profile-photo">
                <img src="../assets/anya.jpg"/>
                <a class="" style="font-size: large;margin-left: 3px;cursor: pointer;"><?php  ?></a>
            </div>
             <?php 
             if(isset($_SESSION["user"]["user_name"])){ 
             ?>
               <div>
                  <h3><?php echo $_SESSION["user"]["user_name"]?></h3>
               </div>
              <?php 
               }
              ?>
       </div>
    </header>
</body>
</html>