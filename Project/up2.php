
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='update2.css'>
</head>
<body>
<?php


    echo '<form method="post" action="update.php">';
   

        
    echo  "<div class='dashboard-card'>";

    echo "<div class='card-detail'>";
    echo '<label for="update_customer_name">Customer Name: </label>';
    echo '<input name="update_customer_name" type="text" >';
    echo '<label for="update_customer_phonenumber">Customer PhoneNumber: </label>';
    echo '<input name="update_customer_phonenumber" type="text" >';
    echo '<label for="food_name">Food Name: </label>';
    echo '<input name="food_name" value="'.$_POST['food_name'].'" disabled>';
    // echo '<select name="food_name">';
    // echo '<option> Hamburger </option>';
    // echo '<option> BeefSteak </option>';
    // echo '</select>'

    echo '<label for="food_unit">Food unit: </label>';
    echo '<input name="food_unit" type="number">';

    echo '<label for="food_category">Food Detail: </label>';
    echo '<input name="food_category" type="text">';   

    echo "</div>";
    echo '<button type="submit" class="submit_btn" name="update_id" value=" '.$_POST['update_id'].'"> 修改 </button>'  ;
    echo "</div>";
       
    
    
    echo '</form>';
    

?>
    
</body>
</html>
