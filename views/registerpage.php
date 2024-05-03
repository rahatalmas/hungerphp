<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssfiles/register.css"/>
</head>
<body>
    <main class="register-main">
        <div class="form-container">
            <div class="reg-img-container">
                <img class="reg-img" src="../assets/anya.jpg"/>
                 <h1 class="reg-h1">Hunger Signup</h1>
            </div>
            <form class="form" method="POST" action="../controllers/register.php">
              <label class="form-label" for="user_name">user name</label>
              <input id="user_name" name="user_name" class="form-input" required type="text" placeholder="prettyalmu" />
              <label class="form-label" for="user_email">email</label>
              <input id="user_email" name="user_email" class="form-input" required type="email" placeholder="someone@gmail.com" />
              <label class="form-label" for="user_password">password</label>
              <input id="user_password" name="user_password" class="form-input" required type="password" placeholder="********" />
              <label class="form-label" for="user_bio">short description</label>
              <textarea id="user_bio" name="user_bio" class="form-input" placeholder="about yourself..." ></textarea>
              <input id="reg-sub-btn" name="submit" class="reg-sub-btn form-input" type="submit" value="SignUp"/>
           </form>
        </div>
    </main>
</body>
</html>