<?php 
    if(isset($_POST['delete_id'])){
        $delete_id=$_POST['delete_id'];

        $link=mysqli_connect('localhost', 'root', 'Tbk14072003', 'project')
        or die('Can not connect to database' .mysqli_connect_error());
        
        mysqli_query($link, 'SET NAMES utf8');

        $sql="DELETE FROM cust_order WHERE cust_order.order_id = $delete_id";
        
        mysqli_query($link, $sql);
        

        
    }
    if(isset($_POST['update_id'])){
        $update_id=$_POST['update_id'];
        $update_name=$_POST['update_customer_name'];
        $update_phonenumber=$_POST['update_customer_phonenumber'];



        $sql="UPDATE cust_order SET cust_name='$update_name', cust_phonenumber=$update_phonenumber 
             WHERE cust_order.order_id=$update_id";
        $link=mysqli_connect('localhost', 'root', 'Tbk14072003', 'project')
            or die('Can not connect to database' .mysqli_connect_error());
        
        mysqli_query($link, 'SET NAMES utf8');
        mysqli_query($link, $sql);

 


        
    }


?>
