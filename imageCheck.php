<?php

if($_isset($_FILES['uploadyouraadhar']) && $_isset($_FILES['tenthcerificate']) && $_isset($_FILES['parentsaadharupload']) && $_isset($_FILES['twelvecertificate']) ){

echo "<pre>";
print_r($_FILES['uploadyouraadhar']);
print_r($_FILES['tenthcerificate']);
print_r($_FILES['parentsaadharupload']);
print_r($_FILES['twelvecertificate']);
echo"</pre>";

$img_name= $_FILES['uploadyouraadhar']['name'];$img_size= $_FILES['uploadyouraadhar']['size'];$tmp_name= $_FILES['uploadyouraadhar']['temp_name']; $error= $_FILES['uploadyouraadhar']['error'];
$img_name= $_FILES['tenthcerificate']['name'];$img_size= $_FILES['tenthcerificate']['size'];$tmp_name= $_FILES['tenthcerificate']['temp_name']; $error= $_FILES['tenthcerificate']['error'];
$img_name= $_FILES['parentsaadharupload']['name'];$img_size= $_FILES['parentsaadharupload']['size'];$tmp_name= $_FILES['parentsaadharupload']['temp_name']; $error= $_FILES['parentsaadharupload']['error'];
$img_name= $_FILES['twelvecertificate']['name'];$img_size= $_FILES['twelvecertificate']['size'];$tmp_name= $_FILES['twelvecertificate']['temp_name']; $error= $_FILES['twelvecertificate']['error'];

if($error===0){
   if($img_size>22500){
      $em="file to large.";
   }
   else{
      echo " Less then 2Mb file upload ";
   }
}


}
else{
   header("Location: index.html");
}

?>