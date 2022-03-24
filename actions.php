<?php
session_start();
include 'inc/db.php';
if(isset($_POST['submit'])){
    var_dump($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
    if($name != "" && $email != "" && $password != ""){
        $sql = "INSERT into users (name, email, password, date) VALUES('{$name}','{$email}','{$password}', NOW())";
        $query = mysqli_query($con, $sql);
        if($query){
            $_SESSION['success'] = "Created successfully";
            header("Location: index.php");
        }else{
            header("Location: index.php?error=Error occured");
        }
    }
    else{
        header('Location:create.php?error=To`ldirilmagan maydon mavjud.');
    }
}else{
    header('Location:index.php');
}