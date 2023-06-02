<?php 
session_start();
$name=''; $password='';  $_SESSION['unvalid']=false;
if(isset($_POST['name'])){
    $name=$_POST['name'];
}

if(isset($_POST['password'])){
    $password=$_POST['password'];
}

if($name !='' and $password != ''){

    
    $link = mysqli_connect("localhost", "root", "Tbk14072003", "project") or die('Can not connect to database' .mysqli_connect_error());

    mysqli_query($link, 'SET NAMES utf8');

    $sql= "SELECT * FROM admin WHERE admin_email= '{$name}' AND admin_password= '{$password}' ";
    
    $result=mysqli_query($link, $sql);
    $total_records= mysqli_num_rows($result);

    if($total_records >0) {
        $_SESSION['admin_login_session']=true; 
        header('Location: admin_index.php');
    } else{
        $_SESSION['unvalid']=true;
        $_SESSION['success']="There is unvalid account";
        //  echo "<center><font color='red'>";
        //  echo "There is unvalid account";
        //  echo "</font>";
        
        


    }
    mysqli_close($link);
}
?>
