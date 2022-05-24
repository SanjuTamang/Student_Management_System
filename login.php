<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/login.css">
<?php
    require 'allhead.php';
    if(isset($_POST['adminLogin'])){
       $uname=$_POST['username'];
       $password=$_POST['password'];
       $sql="SELECT * from admin where username='".$uname."' AND password='".$password."' limit 1";

       $result=mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)==1){
      header('location:home.php');
      exit();
       }
       else{
          header('location:login.php');
       }
    }
?>
   <title>admin Login</title>
</head>
<body>
   <form action="" method="post" action="#">
   <div class="logonMainContainer">
      <h1>Admin Login</h1>
      <div class="loginBox">
         <input type="text" name="username" id="username" placeholder="Enter username"><br>
         <input type="password" name="password" id="password" placeholder="Enter Password"><br>
         <button type="submit" name="adminLogin">login</button>
         <a href="http://">Forgot Password?</a>
      </div>
   </div>
   </form>
</body>
</html>