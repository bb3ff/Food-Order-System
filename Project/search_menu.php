<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='search2.css'>
</head>
<body>
    <?php
    $id=0;
    $name='';
    $phonenumber='';

    session_start();

    if(isset($_POST['username'])){
        $name=$_POST['username'];
    }
    
    if(isset($_POST['phonenumber'])){
        $phonenumber=$_POST['phonenumber'];
    }

    if(isset($_POST['order_id'])){
        $id=$_POST['order_id'];
    }


    if($name !='' and $phonenumber != '' and $id!=0){
        $link= mysqli_connect('localhost', 'root', 'Tbk14072003', 'project')
            or die('Can not connect to database' .mysqli_connect_error());
        
        
        mysqli_query($link, 'SET NAMES utf8');
    
        $sql= "SELECT * FROM cust_order
                WHERE order_id =$id";
        $result= mysqli_query($link, $sql);  
        $total_row=mysqli_num_rows($result);     
        if ($total_row>0) {
            $row= $result->fetch_assoc();
            echo '<form method="post" action="search.php">';
            
            echo  "<div class='dashboard-card'>";
            if($row['food_name']=='Hamburger'){
                 echo '<img src="hamburger.jpg" class="card-img">';
             }
            if($row['food_name']=='BeefSteak'){
                echo '<img src="beefsteak.jpg" class="card-img">';
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
            echo '<input name="food_price" type="number" value="'.$row['food_price'].'">';
            echo '<label for="food_price">Food Detail: </label>';
            echo '<input name="food_price" type="text" value="'.$row['food_category'].'">';
    
            echo "</div>";
            echo '<button type="submit" class="submit_btn" name="update_id" value="'.$row['order_id'].'"> 確定 </button>'  ;
            echo "</div>";
           
            echo '</form>';
            
            
        
            
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        mysqli_close($link);
    }


    ?>
</body>
</html>





