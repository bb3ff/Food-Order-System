<?php include 'delete_menu.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='delete_update.css'>
</head>
<body>
<?php
    $sql="SELECT * FROM cust_order";

    $link=mysqli_connect('localhost', 'root', 'Tbk14072003', 'project')
        or die('Can not connect to database' .mysqli_connect_error());
        
     mysqli_query($link, 'SET NAMES utf8');
     $result=mysqli_query($link, $sql);


    echo'<header>';
    echo'<h2 class="logo">Logo</h2>';
    echo'<nav class="navigation">';
    echo'<a class="btnLogin-popup" href="index.php">HOME</a>';
 
    echo'</nav>';
    echo'</header>';
 
    echo '<form method="post" action="delete.php">';
    echo "<div class='dashboard-content'>";
    echo '<form method="post" action="delete.php">';
    echo "<div class='dashboard-content'>";
    while($row= mysqli_fetch_assoc($result)){
        
        echo  "<div class='dashboard-card'>";
        if($row['food_name']=='Hamburger'){
             echo '<img src="hamburger.jpg" class="card-img">';
         }
        if($row['food_name']=='BeefSteak'){
            echo '<img src="beefsteak.jpg" class="card-img">';
        }
        if($row['food_name']=='Tiramisu'){
            echo '<img src="tiramisu.jfif" class="card-img">';
        }
        echo "<div class='card-detail'>";
        echo '<label for="customer_name">Customer Name: </label>';
        echo '<input name="customer_name" type="text" value="'.$row['cust_name'].'">';
        echo '<label for="customer_phonenumber">Customer PhoneNumber: </label>';
        echo '<input name="customer_phonenumber" type="text" value="' .$row['cust_phonenumber'].'">';

        echo "</div>";
        echo '<button type="submit" class="submit_btn" name="delete_id" value=" '.$row['order_id'].'"> 刪除 </button>'  ;
        echo "</div>";
       
    };
    echo "</div>";
    echo '</form>';
    

?>
    
</body>
</html>

