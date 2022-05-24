<?php include 'connection.php' ;
$page_id= $_GET['s_n'];

$query ="SELECT * FROM registration WHERE s_id=$page_id";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

$result=mysqli_fetch_assoc($data);
if ($_POST['submit']) {

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


$query = "UPDATE registration SET studentname='$studentname',nickname='$nickname',fathername='$fathername', mothername='$mothername', studentmobile='$studentmobile', parentsmobile='$parentsmobile', youremail='$youremail,',parentsemail='$parentsemail',aadharno='$aadharno', parentsaadharno='$parentsaadharno',temaddress='$temaddress',paraddress='$paraddress', tenthboardname='$tenthboardname',twelvethboardname='$twelvethboardname',tenthmarks='$tenthmarks',twelvemarks='$twelvemarks',qulification='$qulification',admissioncourse='$admissioncourse'";



// $studentname =          $_POST['studentname'];
// $nickname =             $_POST['nickname'];
// $fathername =           $_POST['fathername'];
// $mothername =           $_POST['mothername'];
// $studentmobile =        $_POST['studentmobile'];
// $parentsmobile =        $_POST['parentsmobile'];
// $youremail =            $_POST['youremail'];
// $parentsemail =         $_POST['parentsemail'];
// $aadharno =             $_POST['aadharno'];
// $parentsaadharno =      $_POST['parentsaadharno'];
// $temaddress =          $_POST['temaddress'];
// $paraddress =          $_POST['paraddress'];
// $tenthboardname =      $_POST['tenthboardname'];
// $twelvethboardname =   $_POST['twelvethboardname'];
// $tenthmarks =          $_POST['tenthmarks'];
// $twelvemarks =         $_POST['twelvemarks'];
// $qulification=          $_POST['qulification'];
// $admissioncourse=       $_POST['admissioncourse'];
// 
// if($studentname !="" && $nickname!="" && $fathername!="" && $mothername!="" && $studentmobile!="" && $parentsmobile!="" && $youremail!="" && $parentsemail!="" && $aadharno!="" && $parentsaadharno!="" && $temaddress!="" && $paraddress!="" && $tenthboardname!="" && $twelvethboardname!="" && $tenthmarks!="" && $twelvemarks!="" && $qulification!="" && $admissioncourse!=""){


// $query = "UPDATE registration SET studentname='$studentname',nickname='$nickname',fathername='$fathername', mothername='$mothername', studentmobile='$studentmobile', parentsmobile='$parentsmobile', youremail='$youremail,',parentsemail='$parentsemail',aadharno='$aadharno', parentsaadharno='$parentsaadharno',temaddress='$temaddress',paraddress='$paraddress', tenthboardname='$tenthboardname',twelvethboardname='$twelvethboardname',tenthmarks='$tenthmarks',twelvemarks='$twelvemarks',qulification='$qulification',admissioncourse='$admissioncourse'";


// --  VALUES('$studentname','$nickname','$fathername','$mothername','$studentmobile','$parentsmobile','$youremail','$parentsemail','$aadharno','$parentsaadharno','$temaddress','$paraddress','$tenthboardname','$twelvethboardname','$tenthmarks','$twelvemarks','$qulification','$admissioncourse')");
echo "Updation Sucessfully !";
header('Location:allStudentDetails.php.php');
}
else {
 echo "<sript> alert('Enter input ! You try Register with empty data')</script>";
}
}
?>