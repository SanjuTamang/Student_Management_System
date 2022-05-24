<?php
include "connection.php";
$page_id = $GET['s_n'];
// echo "delete page";
$query = "DELETE FROM registration WHERE $page_id='s_id'";
$data= mysqli_query($conn,$query);
 if($data) {
  echo "Student data deleted";
}
else{
 echo "failed delete Opration";
} 
?>