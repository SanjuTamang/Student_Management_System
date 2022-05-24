<?php
require 'connection.php';
include 'navbar.php';
// if ($_POST['submit']) {

   // if ($_POST['submit']) {
      $fname              =$_POST['first_name'];
      $lname              =$_POST['last_name'];
      $father_name        =$_POST['father_name'];
      $mother_name        =$_POST['mother_name'];
      $email              =$_POST['email'];
      $phone              =$_POST['phone'];
      $prooftype          =$_POST['card_type'];
      $cardno             =$_POST['canr_no'];
      $qualification      =$_POST['qualification'];
      $teaching_exprence  =$_POST['teaching_exprence'];
      $address            =$_POST['teacher_address'];
      
      // $query="INSERT INTO teachers VALUES $fname,$lname,$father_name,$mother_name,$email,$phone,$prooftype,$cardno,$qualification,$teaching_exprence,$address";

mysqli_query($conn,"INSERT INTO teachers (first_name,last_name,father_name,mother_name,email,phone,card_type,card_no,Qualification, teaching_exprence,teacher_address) VALUES ('$fname','$lname','$father_name','$mother_name','$email','$phone','$prooftype','$cardno','$qualification','$teaching_exprence','$address')");

if ($query) {
   echo "teacher data added";
   header('location:addTeacher.php');
}
else{
   echo "Failed to insert data";
}
// }
?>