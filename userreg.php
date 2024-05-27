<?php
require "conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $place=$POST['place'];
    $branch=$_POST['branch'];

    $sql1="SELECT *FROM user WHERE email='$email' and id='$id' ";
    $res=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($res)==0){
        mysqli_query($conn,"INSERT INTO USER VALUE('$name','$id','$email','$password','$place','$branch')");
        header("Location:userlog.php");
    }
    else{
        echo "<sscript>alert('Yor are alreday in login');</script>";
        header("Location:userlog.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registeration page</title>
</head>
<body>
    <Center>Welcome user!</Center>
    <form action="" method="post">
   <input type="text" name="name" placeholder="Username" required><br>
   <input type="text" name="id" placeholder="Employee ID" required><br>
   <input type="email" name="email" placeholder="Email" required><br>
   <input type="password" name="password" placeholder="password" required><br>
   <input type="text" name="place" placeholder="place" required><br>
   <input type="text" name="branch" placeholder="Branch" required><br>
   <button type="submit" name="submit">Register</button><br>
   Already a user?<a href="userlog.php">Login</a>


    </form>
</body>
</html>