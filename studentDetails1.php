<?php 
include 'allhead.php';
include 'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>student detail</title>
   <link rel="stylesheet" href="../admin/css/studentDetails.css">
</head>
<body>
   <div class="aboutStudentContainer">
    <div class="subSudentContainer first">
       <div class="sudentImage firstBox">
       <img src="./images/dkartik_34kb.jpg" alt="student picture">
       </div>
       <div class="sudentImage secondBox">
       <h3><?php $sql = "SELECT * FROM  registration WHERE s_id='19'";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["studentname"]. "<br>";  
        echo "Nick Name :  " . $row["nickname"]. "<br>";
      //   echo "UID :  " . $row["uid"]. "<br>"; 
      //   echo "Branch: " . $row["branch"]. "<br>";
      }
?></h3>
       </div>


    </div>
    <div class="subSudentContainer second">
    <a href="update.php"></a>
    <h3><?php $sql = "SELECT * FROM  registration WHERE s_id='19'";
$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo "Student Mobile No."."&emsp;&emsp;" ."&emsp;" . $row["studentmobile"]. "<br>";
        echo "Student E mail"."&emsp;&emsp;&emsp;&emsp;"."&emsp;" . $row["youremail"]. "<br>";
        echo "10 Percentage/cgpa"."&emsp;&emsp;" ."&emsp;". $row["tenthmarks"]. "<br>";
        echo "10  Board Name"."&emsp;&emsp;&emsp;&emsp;" ."&emsp;". $row["tenthboardname"]. "<br>";
        echo "12th Percentage/cgpa"."&emsp;&emsp;". $row["twelvemarks"]. "<br>";
        echo "12th  Board Name"."&emsp;&emsp; &emsp;&emsp;". $row["twelvethboardname"]. "<br>";
        echo "Father Name"."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;". $row["fathername"]. "<br>";
        echo "Mother Name"."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" . $row["mothername"]. "<br>";
        echo "Parents Mobile No."."&emsp;&emsp;&emsp;&emsp;". $row["parentsmobile"]. "<br>";
        echo "Parents E mail"."&emsp;&emsp;&emsp;&emsp;". $row["parentsemail"]. "<br>";
      //   echo "Address:    " . $row["tenthmarks"]. "<br>";
    }

?>
    </div>
   </div>
</body>
</html>