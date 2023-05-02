<?php
echo "Welcome to PHP";
$con = mysqli_connect("localhost","phpmyadmin","Password@123","myDb");

if(isset($_POST['submit'])){
    $search = $_POST['search'];
    $cmd = "select * from students where name like '$search%'";
    $res = mysqli_query($con,$cmd);
}
else{
    $cmd = "select * from students";
    $res = mysqli_query($con,$cmd);
}

?>

<style>
    table,tr,th,td{padding: 8px;}
    table{border-collapse: collapse;}
</style>
<br><br>
<a href="add.php">Add New</a>

<form method="post">
    <input type="text" name="search" placeholder="Search..">
    <input type="submit" name="submit">
</form>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>City</th>
        <th>Action</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($res)){?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['city']?></td>
        <td><a href="edit.php?id=<?php echo $row['id']?>">Edit</a>&nbsp;
            <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>