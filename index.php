<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="wraper">
        <div class="form-box-login">
            <div class="img-login">
                <img src="img/login.png" alt="">
            </div><br>
            <h2>Somsri Log in</h2>
            <form action="check_login.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" name="username" id="username" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" id="password" required>
                    <label>password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an acccount?<a href="#" class="register-link"> Register</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>