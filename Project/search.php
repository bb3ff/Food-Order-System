<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='search.css' >
</head>
<body>
    <?php
        echo'<header>';
        
        echo'<nav class="navigation">';
        echo'<a class="btnLogin-popup" href="index.php">HOME</a>';

        echo'</nav>';
        echo'</header>';



    ?>
    <div class="h-wrapper">
        <div class="form-box login">
            <span class="icon-close"><ion-icon name="close"></ion-icon></span>
            <h2> 查詢</h2>
            <form action="search_menu.php" method="post">

                <div class="input-box">
                    <input type='number' name='order_id' required>
                    <label for="order_id">Order ID</label>
                                
                </div>

                <div class="input-box">
                                
                    <input type="text" name="username" required >
                    <label for="username">Name</label>
                </div>
                <div class="input-box">
                                
                    <input type="text" name='phonenumber' required>
                    <label for="phonenumber">Phone Number</label>
                </div>

                
                <button type="submit" class="submit_btn">查詢</button>   
    </div>
</body>
</html>