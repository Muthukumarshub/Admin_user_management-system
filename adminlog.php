<?php
require "conn.php";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $pass=$_POST['password'];

    $sql1="SELECT * FROM admin WHERE id = '$id' and passsword = '$pass' ";
    $res=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($res)==1){
    $val=mysqli_fetch_assoc($res);
    $passs=$val['passsword'];
    if($pass==$passs){
        header("Location: admin.php");
    }
    else{
        echo "<script>alert('Passwords do not match');</script>";
    }
    
    }
    else{
        echo "<script>alert('You are not already a user');</script>";
        header("Location: adminreg.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <label for="id">ID</label>
    <input type="text" name="id" required><br>
    <label for="password">Password</label>
    <input type="password" name="password" required><br>
    <button type="submit" name="submit">Register</button>
    New user?<a href="adminreg.php">Register</a>
    </form>
</body>
</html>