<?php 
    $name='';
    $phonenumber='';
    $address='';
    $unit_number=0;
    $category='';
    $food='';
    $price=0;
    


    if(isset($_POST['username'])){
        $name=$_POST['username'];
    }
    
    if(isset($_POST['phonenumber'])){
        $phonenumber=$_POST['phonenumber'];
    }

    if(isset($_POST['address'])){
        $address=$_POST['address'];
    }

    if(isset($_POST['unit_number'])){
        $unit_number=$_POST['unit_number'];
    }

    if(isset($_POST['category'])){
        $category=$_POST['category'];
    }

    if(isset($_POST['food'])){
        $food=$_POST['food'];
    }

    if($food=='Hamburger'){
        $price=30;
    }

    if($food=='BeefSteak'){
        $price=40;
    }

    if($food=='Tiramisu'){
        $price=40;
    }


    if($name !='' and $phonenumber != '' and $address!='' and $unit_number!='' and $category!='' and $food!=''){
        $link= mysqli_connect('localhost', 'root', 'Tbk14072003', 'project')
            or die('Can not connect to database' .mysqli_connect_error());
        
        $total_price=$price*$unit_number;
        mysqli_query($link, 'SET NAMES utf8');
    
        $sql= "INSERT INTO cust_order (cust_name, cust_phonenumber, cust_address, food_unit, food_category, food_name, food_price) 
                VALUES ('{$name}','{$phonenumber}','{$address}', '{$unit_number}', '{$category}', '{$food}', '{$total_price}')";
        if ($link->query($sql) === TRUE) {
            header('Location: insert.php');
          } else {
            echo "Error: " . $sql . "<br>" . $link->error;
          }
        mysqli_close($link);
    }
    
?>