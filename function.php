<?php include "header.php";

function menuItem()
 {
   global $connect;
   $query=mysqli_query($connect,"select * from menu");
   while($row=mysqli_fetch_assoc($query))
   {
      $id= $row ['menu_id'];
      $name= $row ['menu_name'];
      echo '<li><a href="#">{$name}</a></li>';
   }
 }
?>