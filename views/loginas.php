<link rel="stylesheet" href="../cssfiles/register.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
<body>
    <div class="root">
        <div class="hotel">
            <div class="hotel-des">
                <img src="../assets/hotels.png" alt="">
            <h1>Sign in for business</h1>
            <button class="sub-btn">Sign Up</button>
            <h4>Already have an account? <a href="./hotellogin.php">login</a></h4>
            </div>
        </div>
        <div class="user">
            <div class="hotel-des">
                <img src="../assets/Ittadakimasu____Cessa_Lafaliqa-removebg-preview.png" alt="">
                <h1>Subscribe as food eater</h1>
            <a href="./registerpage.php"><button class="user-sub-btn">Sign Up</button></a>
            <h4>Already have an account? <a href="./login.php">login</a></h4>
            </div>
        </div>
    </div>
</body>
<style>
    body{
       
        height:100vh;
    }
    .hotel h4 a{
        color: rgb(253, 191, 6);
    }
    .root{
        display: flex;
        flex-direction: row;
        font-family: "Reddit Sans", sans-serif;
    }
    .hotel{
        flex: 1;
        height: 100vh;
        background-color: #153448;
        color: #ED9455;
    }
    .hotel-des{
        padding:50px;
        text-align: center;
    }
    .user{
        flex: 1;
        height: 100vh;
        background-color: #eda6b7;
        color: #203e60;
    }
    .user-sub-btn{
        background-color: #203e60;
        color: #debad5;
        padding: 5px 30px;
        font-size: 1.5rem;
        border: 2px solid #081523;
        border-radius: 7px;
    }
    .user-sub-btn:hover{
        background-color: #5b020b;
    }
    .hotel img{
         height: 270px;
    }
    .user img{
        height: 270px;
    }
    .sub-btn{
        border: 2px solid black;
        border-radius: 5px;
        padding: 5px 25px;
        font-size: 1.5rem;
        background-color: #ED9455;
        color: #1e0843;
    }

    .sub-btn:hover{
        background-color: aliceblue;
    }
</style>