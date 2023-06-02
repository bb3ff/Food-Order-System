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
    function create_connection(){
        $link=mysqli_connect('localhost', 'root', 'Tbk14072003')
            or die('Can not connect to database' .mysqli_connect_error());
        mysqli_query($link, 'SET NAMES utf8');
        return $link;
    }
        
    $link=create_connection();
    $database='project';
    function execute_sql($link, $database, $sql){
        mysqli_select_db($link, $database)
            or die('Can not open database:' .mysqli_error($link));
        $result=mysqli_query($link, $sql);
        return $result;
    }
    
    $result=execute_sql($link, $database, $sql);

    echo'<header>';
    echo'<h2 class="logo">Logo</h2>';
    echo'<nav class="navigation">';
    echo'<a class="btnLogin-popup" href="index.php">HOME</a>';

    echo'</nav>';
    echo'</header>';

    echo '<form method="post" action="up2.php">';
    echo "<div class='dashboard-content'>";
    while($row= $result->fetch_assoc()){
        
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
        echo '<label for="update_customer_name">Customer Name: </label>';
        echo '<input name="update_customer_name" type="text" value="'.$row['cust_name'].'">';
        echo '<label for="update_customer_phonenumber">Customer PhoneNumber: </label>';
        echo '<input name="update_customer_phonenumber" type="text" value="' .$row['cust_phonenumber'].'">';
        echo '<label for="food_name">Food Name: </label>';
        echo '<input name="food_name" type="text" value="'.$row['food_name'].'">';
        echo '<label for="food_unit">Food unit: </label>';
        echo '<input name="food_unit" type="number" value="'.$row['food_unit'].'">';
        echo '<label for="food_price">Food Price: </label>';

        echo '<input name="food_price" type="text" value="'.$row['food_category'].'">';

        echo "</div>";
        echo '<button type="submit" class="submit_btn" name="update_id" value="'.$row['order_id'].'"> 修改 </button>'  ;
        echo "</div>";
       
    };
    echo "</div>";
    echo '</form>';
    

?> 

</body>
</html>