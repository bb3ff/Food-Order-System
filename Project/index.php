<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='index_style.css'>
    <title>Homepage</title>
</head>


<body>
    <?php
    session_start();

    if($_SESSION['login_session']!=true){
        header("Location: identity.php");
    }

    ?>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a class="btnLogin-popup" href='identity.php'>LOG OUT</a>

        </nav>
    </header>
    <section class='Menu'>
        <h2 class="menu_title"> MENU </h2>
		<h3 class="menu_subtitle">A selection of Food</h3> 
        <div class='food-imgs'>
            <a href="#" class="food_item">
                <img src="hamburger.jpg" class="food_img" height='400' width='750'>
            </a>

                    
            <a href="#" class="food_item">
                <img src="steak.jpg" class="food_img"  height='400' width='750'>
            </a>

            
            <a href="#" class="food_item">
                <img src="panna_cotta.jpg" class="food_img" height='400' width='750'>
            </a>

            
            <a href="#" class="food_item">
                <img src="tiramisu.jfif" class="food_img" height='400' width='750'>
            </a>


        </div>
    
    </section>


    <section class='function'>
        <h2 class="function_title"> 訂單 </h2>
		
        <div class='services'>
            <div class='service'>
                <a href='./insert.php' class='btn'>新增訂單</a>

            </div>

            <div class='service'>
                <a href='./delete.php' class='btn'>刪除訂單</a>
            </div>

            <div class='service'>
                <a href='./update.php' class='btn'>修改訂單</a>
            </div>
            <div class='service'>
                <a href='./search.php' class='btn'>查詢訂單</a>
            </div>  
  

        </div>
    </section>
    
</body>
</html>