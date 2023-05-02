<?php 
    $id=$_GET['id'];
    $con = mysqli_connect("localhost","phpmyadmin","Password@123","myDb");
    $cmd = "delete from students where id='$id'";
    mysqli_query($con,$cmd);
    header('location:index.php');
    die();
?>