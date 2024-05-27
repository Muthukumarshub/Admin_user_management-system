<?php
require "conn.php";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $password=$_POST['password'];
    $sql1="SELECT * FROM user WHERE id='$id' ";
    $res=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($res)==1){
$val=mysqli_fetch_assoc($res);
$pass=$val['password'];
if($pass==$password){
    header("Location:user.php");
}
else{
    echo "<script>alert('Enter password correctly');<script>";
    header("Location:userlog.php");
}
    }
    else{
        echo "<script>alert('You are new user!');<script>";
        header("Location:userreg.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
<center>User Login!</center>
<form action="" method="post">
    <input type="text" name="id" placeholder="User ID" required><br>
    <input type="text" name="password" placeholder="Password" required><br>
    <button type="submit" name="submit">Login</button><br>
    New User!<a href="userreg.php">Register</a>

</form>
</body>
</html>