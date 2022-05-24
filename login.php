<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./client/css/login.css">
   <?php
    require 'top.php';
   //  if(isset($_POST['login'])){
       $uname=$_POST['uid'];
       $password=$_POST['password'];
       $sql="SELECT uid AND accountno FROM students WHERE uid='".$uname."' OR accountno='".$uname."' AND password='".$password."' limit 1";

       $result=mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)==1){
         // header('location:home.php');
      }
      else{
         echo "id or may be pass incorrect";
            //  header('location:login.php');
          }
      // }
?>
   <title>Student Login</title>
</head>
<body>
   <form  method="POST" action="#">
   <div class="loginMainContainer">
      <div class="loginBox">

         <div class="uidInput">
         <input type="text" name="uid" id="uid" placeholder="Enter uid/account No." require>
         </div>
         <!-- <div id="uidError" class="uidError">
            Please Enter uid or Account number
         </div> -->
         <div class="passwordInput">
         <input type="password" name="password" id="password" placeholder="Password" require>
         </div>
         <!-- <div id="passwordError" class="passwordError">
            Please Enter Password
         </div> -->
         <button type="submit" name="login" >login</button>
         <div class="forgot">
         <a href="http://">Forgot Password?</a>
         </div>
      </div>
   </div>

   <!-- <script>
      var uid=document.forms['form']['uid'];
      var password=document.forms['form']['uid'];

      var eidError=document.getElementById('uidError');
      var passwordError=document.getElementById('passwordError');

      function validation(){
        if(uid.value.length<9){
         uidInput.style.border="1px solid red";
         uidError.style.disply="block"
           uid.focus();
           return false;
        }
      }
   </script> -->
   </form>
</body>
</html>