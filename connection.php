<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","dums");

if ($conn==false)
{
    die("Error :Not connect with  database");
}
else{
    // echo 'connected \/';
}
?>

</body>
</html>
