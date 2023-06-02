<?php include 'login.php' ?>
<?php include 'register.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Website for Login and Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='style.css'>
    
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <button class="btnLogin-popup">Login</button>

        </nav>
    </header>

    <div class="wrapper">
        <div class="form-box login">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
            <h2> Login </h2>
            <form action="account.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="name" required >
                    <label for="name">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name='password' required>
                    <label for="password">Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type='checkbox'>Remember Me</label>
                    <a href="#" >Forgot Password</a>
                </div>
                <button type="submit" class="submit_btn">Login</button>
                <div class="register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
                <div class='unvalid'>
                    <?php  include('error.php') ?>
                </div>
                
            </form>
        </div>

        <div class="form-box register">
            
            <h2> Registration </h2>
            <form action="account.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="user" required >
                    <label for="user">User</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="name" required >
                    <label for="name">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name='password' required>
                    <label for="password">Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type='checkbox'> I agree to the terms and conditions</label>
                    
                </div>
                <button type="submit" class="submit_btn">Register</button>
                <div class="register">
                    <p>Already register an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>

    </div>

    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>