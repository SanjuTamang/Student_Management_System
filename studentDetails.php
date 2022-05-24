<?php include 'allhead.php' ?>
<?php include 'navbar.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Teacher Detail | Specific teacher</title>
   <link rel="stylesheet" href="../admin/css/teacherDetails.css">
</head>
<body>
   <form action="#" method="post">
        <div class="serarchBox">
           <input type="search" name="searchById" id="sSearch" placeholder="search by roll no." required> <button type="submit">search</button>
           <!-- <input type="search" name="searchByName" id="sSearch" placeholder="search by Name" >
           <button type="submit">search</button>
           <input type="search" name="searchByPhone" id="sSearch" placeholder="Search by phone" required>
           <button type="submit">search</button> -->
       </div>
   <div class="aboutStudentContainer">
   <i class='fas fa-edit'></i>
      <div class="subSudentContainer first">
       <div class="sudentImage firstBox">
         <img src="./images/dkartik_34kb.jpg" alt="student picture">
         <h3>
            <?php 
                if (isset($_POST['searchById'])
                )
                    {
                    $id= mysqli_real_escape_string($conn,$_POST['searchById']);
                        $query="SELECT * FROM students WHERE student_id='$id'";
                        $query_run= mysqli_query($conn,$query);
                        if (mysqli_num_rows($query_run)>0) {
                            while($row=mysqli_fetch_array($query_run)){
                            echo "Name : " . $row["studentname"]. "<br>";
                            echo "Nick Name : " . $row["nickname"]. "<br>";
                            echo "UID : " . $row["uid"]. "<br>"; 
                            }
                        }
                    }           
                ?> 
            </h3>
       </div>


    </div>
    <div class="subSudentContainer second">
    <h3>
        <?php
            if (isset($_POST['searchById'])
            )
                {
                $id= mysqli_real_escape_string($conn,$_POST['searchById']);
                    $query="SELECT * FROM students WHERE student_id='$id'";
                    $query_run= mysqli_query($conn,$query);
                    if (mysqli_num_rows($query_run)>0) {
                        while($row=mysqli_fetch_array($query_run)){
                        echo "Father Name"."&emsp;&emsp;&emsp;&emsp;". $row["fathername"]. "<br>";
                        echo "Mother Name"."&emsp;&emsp;&emsp;" . $row["mothername"]. "<br>";
                        echo "Student Mobile No."."&emsp;&emsp;". $row["mobile"]. "<br>";
                        echo "Student Mobile No."."&emsp;&emsp;" . $row["email"]. "<br>";
                        echo "Student E-mail"."&emsp;&emsp;"  . $row["studentmobile"]. "<br>";
                        echo "10 Percentage/cgpa"."&emsp;&emsp;" . $row["tenthmarks"]. "<br>";
                            echo "10  Board Name"."&emsp;&emsp;&emsp;&emsp;" ."&emsp;". $row["tenthboardname"]. "<br>";
                            echo "12th Percentage/cgpa"."&emsp;&emsp;". $row["twelvemarks"]. "<br>";
                        echo "12th  Board Name"."&emsp;&emsp; &emsp;". $row["twelvethboardname"]. "<br>";

                            echo "Parents Mobile No."."&emsp;&emsp;&emsp;". $row["parentsmobile"]. "<br>";
                            echo "Parents E mail"."&emsp;&emsp;&emsp;". $row["parentsemail"]. "<br>";
                        }
                    }
                } 
        ?>
    </h3>
    </div>
   </div>
   </form>
</body>
</html>

