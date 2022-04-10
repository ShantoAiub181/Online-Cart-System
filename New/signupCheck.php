<?php
include_once './model/db.php';

$unm = $_POST['uname'];
$pwd = $_POST['password'];
$eml = $_POST['email'];

$sql = "INSERT INTO users (username, password, email, type) VALUES ('$unm ','$pwd','$eml','Admin');";
mysqli_query($conn,$sql);


    if(empty($unm))
    {$name_error = 'Please insert your username'; }

    elseif(strlen($unm)<4)
    {$name_error = 'username needs to atleast 4 character';}

    if(empty($pwd))
    { $password_error = 'Please insert your password'; }

    elseif(strlen($pwd)<6)
    {$password_error = 'password needs to have a minimum length of 6';}

    if(empty($eml))
    { $email_error = 'Email is required'; }

    if(empty($name_error) && empty($password_error) && empty($email_error) )
    {header("Location: login.php"); }

    else{include('index.php');}


?>
