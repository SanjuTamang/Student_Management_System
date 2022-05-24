<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'allhead.php';
?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/navbar.css">
<body>
<div class="mainHeader">
      <div class="mainSubHeader leftSub">
        <!-- <a href="http://"><img src="./images/logo/android-chrome-192x192.png" alt=""></a> -->
      </div>
      <div class="mainSubHeader rightSub">
       <span class="link_name">usename</span>
         <div class="headerIcon">
         <i class='far fa-bell' style='color:white'></i>
       <i class='fas fa-universal-access' style='color:white'></i>
         </div>

      </div>
   </div>
   <div class="heading">
     <h2></h2>
     <div class="subHeading">

     </div>
   </div>
   <!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <a href="./home.php"><img src="./images/logo/favicon-32x32.png" alt="logo"></a>
      <span class="logo_name">NUBH</span>
    </div>
    <ul class="nav-links">
    <li>
        <div class="iocn-link">
          <a href="#">
          <i class='fas fa-stream'></i> <span class="link_name">Dashboard</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Dashboard</a></li>
          <li><a href="./admin.php">Admin</a></li>
          <li><a href="./studentIndex.php">Students</a></li>
          <li><a href="./teacherIndex.php">Teachers</a></li>
          <li><a href="#">Parents</a></li>

        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='fas fa-user-tie'></i>            <span class="link_name">student</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">student</a></li>
          <li><a href="./allStudentDetails.php">All student</a></li>
          <li><a href="../admin/studentDetails.php">Student Details</a></li>
          <li><a href="#">Student Promotion</a></li>
          <li><a href="admission.php">Admission Form</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='fas fa-chalkboard-teacher'></i>
            <span class="link_name">teacher</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">teacher</a></li>
          <li><a href="#">All Teachers</a></li>
          <li><a href="./teacherDetails.php">Teacher Details</a></li>
          <li><a href="#">Tacher Payment</a></li>
          <li><a href="./addTeacher.php">Add Teacher</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='fas fa-user-check'></i>
            <span class="link_name">Parents</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Parents</a></li>
          <li><a href="#">All Teachers</a></li>
          <li><a href="#">Teacher Details</a></li>
          <li><a href="#">Tacher Payment</a></li>
          <li><a href="#">add Teacher</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i  class='fas'>&#xf555;</i>
            <span class="link_name">Account</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Account</a></li>
          <li><a href="#">Total fee collection</a></li>
          <li><a href="#">Expenses</a></li>
          <li><a href="#">add Expenses</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='fas fa-chalkboard'></i>
            <span class="link_name">Class</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Class</a></li>
          <li><a href="#">all class</a></li>
          <li><a href="#">add new class</a></li>
          <li><a href="#">add section</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='fas fa-school'></i>
            <span class="link_name">exam</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">exam</a></li>
          <li><a href="./exam.php">Exam schedule</a></li>
          <li><a href="#">Exam grades</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='fas fa-poll'></i>
          <span class="link_name">attendance</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">attendance</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='fas fa-bed'></i>
          <span class="link_name">Hostel</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Hostel</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='fas fa-bus-alt'></i>
          <span class="link_name">Tranport</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Tranport</a></li>
        </ul>
      </li>
      <li>
        <a href="./notice.php">
          <i class='fas fa-mail-bulk'></i>
          <span class="link_name">Notice</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./notice.php">Notice</a></li>
        </ul>
      </li>
      <li>
        <a href="./message.php">
          <i class='far fa-comment-dots'></i>
          <span class="link_name">Messeage</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="./message.php">Messeage</a></li>
        </ul>
      </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
