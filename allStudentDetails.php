<?php 
  include 'navbar.php';
  include 'allhead.php';
  //  error_reporting(0); //for remove error

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./css/allStudentDetails.css">
<link rel="icon" type="image/x-icon" href="./images/favicon.ico">
   <title>student Details | All Sudent deatails</title>
</head>
<body>
   <div class="sDetails">
       <div class="serarchBox">
           <input type="search" name="search" id="sSearch" placeholder="search by roll no."> <button type="submit">search</button>
           <!-- <input type="search" name="search" id="sSearch" placeholder="search by Name" >
           <button type="submit">search</button>
           <input type="search" name="search" id="sSearch" placeholder="Search by phone">
           <button type="submit">search</button> -->
       </div>
<?php
       $query ="SELECT * FROM registration";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
//   echo "$total";





  if($total!=0){
      ?>
      <table border="2" cellspacing="5">
          <tr>
          <th>SerialNo.</th>
          <th>Name </th>
          <!-- <th>Branch </th> -->
          <th>Qulification </th> 
          <th>Course </th>
          <th>father name </th>
          <th>mother name </th>
          <th>mobile no </th>
          <th>email </th>
          <th>aadhar No. </th>
          <th>Address </th>
          <th> 10th Board Name </th>
          <th> 12th Board Name </th>
          <th> 10th Marks </th>
          <th> 12th Marks </th>
          <th>Opration</th>
          </tr>

      <?php
      while ($result=mysqli_fetch_assoc($data)) {
        echo "<tr>
                    <td>".$result['s_id']." </td>
                    <td>".$result['studentname']." </td>
                    <!-- <th>Branch </th> -->
                    <td>".$result['qulification']."</td> 
                    <td>".$result['admissioncourse']." </td>
                    <td>".$result['fathername']."</td>
                    <td>".$result['mothername']."</td>
                    <td>".$result['studentmobile']."</td>
                    <td>".$result['youremail']."</td>
                    <td>".$result['aadharno']."</td>
                    <td>".$result['paraddress']."</td>
                    <td>".$result['tenthboardname']."</td>
                    <td>".$result['twelvethboardname']."</td>
                    <td>".$result['tenthmarks']."</td>
                    <td>".$result['twelvemarks']."</td>
                    <td><a href='./updateStudentData.php?s_n=$result[s_id]'><i style='color:#09104f;font-size:24px' class='far'>&#xf044;</i></a>
                    <a href='./deleteStudentData.php?s_n=$result[s_id]'><i style='color: #c00c0b;;font-size:24px' class='fas'>&#xf1f8;</i></a></td>
                </tr>
              ";
      }
  }
  else {
    // echo "No Any Data";
  }
?>
      </table>
      <!-- <a href="./updateStudentData.php"></a> -->
</body>
</html>