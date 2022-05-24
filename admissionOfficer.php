<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="admissionOfficer.css">
<?php
     require 'connection.php';
    if(isset($_POST['login'])){
       $uname=$_POST['officerid'];
       $password=$_POST['password'];
       $sql="SELECT * FROM admissionofficers where officerid='".$uname."' AND password='".$password."' limit 1";

       $result=mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)==1){
      header('../admin/admission.php');
      exit();
       }
       else{
         echo "<script> alert('incorrect id password !')</script>";
         //  header('location:admissionofficer.php');
       }
    }
?>
   <title>admin Login</title>
</head>
<body>
   <form action="" method="post" action="#">
   <div class="logonMainContainer">
      <div class="loginBox">
      <!-- <p>Officers Login</p> -->
         <input type="text" name="officerid" id="username" placeholder="Enter username" required><br>
         <input type="password" name="password" id="password" placeholder="Enter Password" required><br>
         <button type="submit" name="login">login</button>
         <a href="http://">Forgot Password?</a>
      </div>
   </div>
   </form>
</body>
</html>