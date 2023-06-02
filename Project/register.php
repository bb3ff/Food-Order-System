<?php

$user=''; $mail=''; $password='';

if(isset($_POST['user'])){
    $user=$_POST['user'];
    
}

if(isset($_POST['name'])){
    $mail=$_POST['name'];
    
}

if(isset($_POST['password'])){
    $password=$_POST['password'];
    
}

if($user != '' and $mail !='' and  $password!=''){
    $link= mysqli_connect('localhost', 'root', 'Tbk14072003', 'project')
        or die('Can not connect to database' .mysqli_connect_error());
    
    mysqli_query($link, 'SET NAMES utf8');
    
    $sql= "INSERT INTO user (user_name, user_email, user_password) VALUES ('{$user}','{$mail}','{$password}')";

    
    
    if ($link->query($sql) === TRUE) {
        header('Location: account.php');
      } else {
        echo "Error: " . $sql . "<br>" . $link->error;
      }
    mysqli_close($link);



}

?>