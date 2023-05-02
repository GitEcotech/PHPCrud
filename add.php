<?php 
    $con = mysqli_connect("localhost","phpmyadmin","Password@123","myDb");

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $city=$_POST['city'];

        $cmd = "insert into students (name,city)values('$name','$city')";
        mysqli_query($con,$cmd);

        header('location:index.php');
        die();
    }
    
?>

<form method="post">
    Name:<input type="text" name="name" /><br><br>
    City:<input type="text" name="city" /><br><br>
    <input type="submit" name="submit">
</form>