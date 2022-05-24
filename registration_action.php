<?php
   if(!defined('mysite')){
    header('location:home.php');
    die();
}
include 'connection.php' ;
       $studentname =          $_POST['studentname'];
       $nickname =             $_POST['nickname'];
       $fathername =           $_POST['fathername'];
       $mothername =           $_POST['mothername'];
       $studentmobile =        $_POST['studentmobile'];
       $parentsmobile =        $_POST['parentsmobile'];
       $youremail =            $_POST['youremail'];
       $parentsemail =         $_POST['parentsemail'];
       $aadharno =             $_POST['aadharno'];
       $parentsaadharno =      $_POST['parentsaadharno'];
       $temaddress =          $_POST['temaddress'];
       $paraddress =          $_POST['paraddress'];
       $tenthboardname =      $_POST['tenthboardname'];
       $twelvethboardname =   $_POST['twelvethboardname'];
       $tenthmarks =          $_POST['tenthmarks'];
       $twelvemarks =         $_POST['twelvemarks'];
      $qulification=          $_POST['qulification'];
      $admissioncourse=       $_POST['admissioncourse'];

      if($studentname !="" && $nickname!="" && $fathername!="" && $mothername!="" && $studentmobile!="" && $parentsmobile!="" && $youremail!="" && $parentsemail!="" && $aadharno!="" && $parentsaadharno!="" && $temaddress!="" && $paraddress!="" && $tenthboardname!="" && $twelvethboardname!="" && $tenthmarks!="" && $twelvemarks!="" && $qulification!="" && $admissioncourse!=""){

  
    mysqli_query($conn,"INSERT INTO registration (studentname, nickname, fathername, mothername, studentmobile, parentsmobile, youremail, parentsemail, aadharno, parentsaadharno ,temaddress ,paraddress , tenthboardname, twelvethboardname, tenthmarks, twelvemarks,qulification ,admissioncourse) VALUES('$studentname','$nickname','$fathername','$mothername','$studentmobile','$parentsmobile','$youremail','$parentsemail','$aadharno','$parentsaadharno','$temaddress','$paraddress','$tenthboardname','$twelvethboardname','$tenthmarks','$twelvemarks','$qulification','$admissioncourse')");
       echo "Admission Sucessfully";
       header('Location:login.php');
      }
      else {
        echo "<script> alert('Enter input ! You try Register with empty data')</script>";
        header('registration.php');
      }
   ?>
