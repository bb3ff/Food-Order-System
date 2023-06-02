<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Menu</title>
    <link rel='stylesheet' href='insert.css'>
</head>
<body>
    <?php
    session_start();

    $_SESSION['login_session']=true

    ?>



    <h3 class='logo'> 訂單 </h3>

    
    <div class='insert-menu-dashboard'>

            <div class='banner-dashboard'>
                <img src='panna_cotta.jpg' >
                <div class='banner-info'>
                    <h1><span> 50% OFF </span><br>
                    Tasty Food <br> On Your Hand </h1>
                </div>
            </div>  
            <h2 class='dashboard-title'>Today's Food</h2>   
            

            <div class='dashboard-content'>
                <div class='dashboard-card'>
                    <img src='hamburger.jpg' class='card-img'>
                    <div class='card-detail'>
                        <h4>Absolute Hamburger <br><span>Price: 30$</span></h4>
                    </div>
                    <a href='./insert_hamburger.php'> 點餐 </a> 
                </div>

                <div class='dashboard-card'>
                    <img src='steak.jpg' class='card-img'>
                    <div class='card-detail'>
                        <h4>Amazing BeefSteak<br><span>Price: 40$</span></h4>
                    </div>
                    <a href='./insert_beef.php'> 點餐 </a> 
                </div>

                <div class='dashboard-card'>
                    <img src='tiramisu.jfif' class='card-img'>
                    <div class='card-detail'>
                        <h4>Wonderful Tiramisu <br><span>Price: 40$</span></h4>
                    </div>
                    <a href='insert_tiramisu.php'> 點餐 </a> 
                </div>
            </div>

    </div>
    
</body>
</html>