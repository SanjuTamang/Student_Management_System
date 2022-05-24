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
       <h3><?php 
       if (isset($_POST['searchById'])
        )
         {
            $id= mysqli_real_escape_string($conn,$_POST['searchById']);
              $query="SELECT * FROM teachers WHERE teacher_id='$id'";
              $query_run= mysqli_query($conn,$query);
              if (mysqli_num_rows($query_run)>0) {
                 while($row=mysqli_fetch_array($query_run)){
                    echo "Name: ". $row['first_name'];
                    echo " ". $row['last_name'];
                 }
              }
            }
            // if (isset($_POST['searchByName'])
            //    )
            //    {
            //          $fname= $_POST['searchByName'];
            //          $queryname="SELECT * FROM teachers WHERE first_name='$fname'";
            //          $query_run= mysqli_query($conn,$queryname);
            //          if (mysqli_num_rows($query_run)>0) {
            //             while($row=mysqli_fetch_array($query_run)){
            //                echo "Name:". $row['first_name'];
            //                echo " ". $row['last_name'];
            //             }
            //          }
            //       }

            // if (isset($_POST['searchByPhone'])
            // )
            // {
            //       $phone= $_POST['searchByPhone'];
            //       $queryphone="SELECT * FROM teachers WHERE phone='$phone'";
            //       $query_run= mysqli_query($conn,$queryphone);
            //       if (mysqli_num_rows($query_run)>0) {
            //          while($row=mysqli_fetch_array($query_run)){
            //             echo "Name:". $row['first_name'];
            //             echo " ". $row['last_name'];
            //          }
            //       }
            //    }
?>
</h3>
       </div>


    </div>
    <div class="subSudentContainer second">
    <h3><?php
           if (isset($_POST['searchById'])
           )
            {
               $id= $_POST['searchById'];
                 $query="SELECT * FROM teachers WHERE teacher_id='$id'";
                 $query_run= mysqli_query($conn,$query);
                 if (mysqli_num_rows($query_run)>0) {
                    while($row=mysqli_fetch_array($query_run)){
                     echo "Father  Name : "."&emsp;&emsp;". $row["father_name"]. "<br>";
                     echo "Mother Name"."&emsp;&emsp;". $row["mother_name"]. "<br>";
                     echo "E-mail : "."&emsp;&emsp;". $row["email"]. "<br>";
                     echo "Phone No. : "."&emsp;&emsp;". $row["phone"]. "<br>";
                     echo "Card type : "."&emsp;&emsp;". $row["card_type"]. "<br>";
                     echo "Card No. : "."&emsp;&emsp;". $row["card_no"]. "<br>";
                     echo "Qualification : "."&emsp;&emsp;". $row["qualification"]. "<br>";
                     echo "Exprences year : "."&emsp;&emsp;". $row["teaching_exprence"]. "<br>";
                     echo "Address : "."&emsp;&emsp;". $row["teacher_address"]. "<br>";
                    }
                 }
          }
   ?>
    </div>
   </div>
   </form>
</body>
</html>