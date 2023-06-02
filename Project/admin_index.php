<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='identity.css'>
</head>
<body>
<?php
    session_start();

    if($_SESSION['admin_login_session']!=true){
        header("Location: identity.php");
    }

    ?>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a class="btnLogin-popup" href='identity.php'>LOG OUT</a>

        </nav>
    </header>

    <div class='services'>

        <div class='service'>
            <span class="icon"><ion-icon name="person-circle-sharp"></ion-icon></span>
            <a href='http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=project&table=user' class='btn'>User Account Management</a>

        </div>

        <div class='service'>
            <span class="icon"><ion-icon name="hammer"></ion-icon></span>
            <a href='http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=project&table=admin' class='btn'>Admin Account Management</a>
        </div>

        <div class='service'>
            <span class="icon"><ion-icon name="fast-food"></ion-icon></span>
            <a href='http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=project&table=cust_order' class='btn'>Food Order Management</a>
        </div>


    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>