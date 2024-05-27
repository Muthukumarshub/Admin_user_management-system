<?php
require "conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

$sql1=mysqli_query($conn,"SELECT *FROM admin WHERE email='$email' and id='$id'");
if(mysqli_num_rows($sql1)==0){
 mysqli_query($conn,"INSERT INTO admin VALUES('$name','$id','$email','$pass')");
 echo "<script>alert('Registered successfully');<script>";
 header("Location: adminlog.php");
}
else{
    echo "<script> alert('Already you are a User kindly Login!');<script>";
    header("Location: adminlog.php");


}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin registeration</title>
</head>
<body>
   <center>Welcome Admin!</center>
   <form method="post" action="">
    <label for="name">Name</label>
    <input type="text" name="name" required><br>
    <label for="id">ID</label>
    <input type="text" name="id" required><br>
            <label for="email">Email</label>
    <input type="email" name="email" required><br>
    <label for="password">Password</label>
    <input type="password" name="password" required><br>
    <button type="submit" name="submit">Register</button>
    Already a user?<a href="adminlog.php">Login</a>

   </form> 
</body>
</html>