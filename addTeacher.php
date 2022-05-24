<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/addTeacher.css">
<?php
require 'connection.php';
include 'navbar.php';
// // if ($_POST['submit']) {

//            $fname              =$_POST['first_name'];
//            $lname              =$_POST['last_name'];
//            $father_name        =$_POST['father_name'];
//            $mother_name        =$_POST['mother_name'];
//            $email              =$_POST['email'];
//            $phone              =$_POST['phone'];
//            $prooftype          =$_POST['card_type'];
//            $cardno             =$_POST['canr_no'];
//            $qualification      =$_POST['qualification'];
//            $teaching_exprence  =$_POST['teaching_exprence'];
//            $address            =$_POST['address'];
           
//            // $query="INSERT INTO teachers VALUES $fname,$lname,$father_name,$mother_name,$email,$phone,$prooftype,$cardno,$qualification,$teaching_exprence,$address";
     
//      mysqli_query($conn,"INSERT INTO teachers (first_name,last_name,father_name,mother_name,email,phone,card_type,card_no,Qualification, teaching_exprence,teacher_address) VALUES ('$fname','$lname','$father_name','$mother_name','$email','$phone','$prooftype','$cardno','$qualification','$teaching_exprence','$address')");
     
//      if ($query) {
//         echo "teacher data added";
//         header('location:addTeacher.php');
//      }
//      else{
//         echo "Failed to insert data";
//      }
// //      }
?>
</head>
<body>
<div class="container addTMainBox">
<img src="./images//logo/android-chrome-192x192.png" alt="logo">
  <form  role="form" method="POST" action="addTeacher_action.php">
   <div class="addTSubBox">
 
    <input type="text" name="first_name" id="fname" placeholder="Enter First Name" required><br>
    <input type="text" name="last_name" id="lname" placeholder="Enter Last Name" required><br>
    <input type="text" name="father_name" id="fathername" placeholder="Enter Father Name" required><br>
    <input type="text" name="mother_name" id="fathername" placeholder="Enter Mother Name" required><br>
    <input type="email" name="email" id="temail" placeholder="Enter email" required><br>
    <input type="text" name="phone" id="phone" placeholder="Enter phone no." required><br>
    <select id="prooftype" name="card_type" required>
               <option value="12nonMedical">Choose Proof Type</option>
       <optgroup label="All Varification Card" class="optionGroup">
               <option value="Aadhar Card">Aadhar Card</option>
               <option value="Pan Card">Pan Card</option>
               <option value="Drivary Licence">Drivary Licence</option>
               <option value="Passport">Passport</option>
               <option value="Other Government id">Other Government id</option>
       </optgroup>
    </select>
   <input type="text" name="canr_no" id="canr_no" placeholder="Card No." required><br>
    <input type="text" name="qualification" id="qualification" placeholder="Last Qualification" required><br>
    <input type="text" name="teaching_exprence" id="teaching_exprence" placeholder="teaching exprences in year" required><br>
    <input type="text" name="teacher_address" id="teacher_address" placeholder="House No., Village , District, State, Countery, PIN No." required><br>
    <!-- <textarea type="text" name="teacher_address" id="teacher_address" cols="23" rows="5" placeholder="*House No., Village , District, State, Countery, PIN No." required></textarea> -->
   </div>
   <button type="submit" name="submit">Submit</button>
  </form>

</div>
</body>
</html>        