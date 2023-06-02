<?php include 'admin_login.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='admin_style.css'>
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
            <form action="admin.php" method="post">
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
 
                <button type="submit" class="submit_btn">Login</button>

                <div class='unvalid'>
                    <?php  include('error.php') ?>
                </div>
                
            </form>
        </div>
    </div>

    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>