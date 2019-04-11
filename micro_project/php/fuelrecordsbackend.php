<?php
include '../connection.php';

if ($_POST['add_fuel']){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash_pass = hash('sha256', $password);

    $query = "select *from user_details where username='$username' and password='$password'";
    $result = mysqli_query($connection,$query);


    if (mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['success'] = "you are now logged in";
        header('location: landing.php');
    }else{
        header('location:index.php');
        array_push($errors, "Wrong username/password combination");
        echo"bhaena";
    }
}

