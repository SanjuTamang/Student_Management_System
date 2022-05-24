<!DOCTYPE html>
<html lang="en">
<head>
<?php
   if(!defined('mysite')){
    header('location:home.php');
    die();
}
    require 'connection.php';
    include 'top.php';
?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CUIMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Academics
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Time table</a></li>
            <li><a class="dropdown-item" href="#">Attendance</a></li>
            <li><a class="dropdown-item" href="#">Assignment upload</a></li>
            <li><a class="dropdown-item" href="#">Assignment upload</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Syllabus</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Result
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">current Semester</a></li>
            <li><a class="dropdown-item" href="#">All Semester</a></li>
            <li><a class="dropdown-item" href="#">All Reappear</a></li>
            <li>
               <hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Other Result</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Examination
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Upcoming MST</a></li>
            <li><a class="dropdown-item" href="#">Final Exam</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Exam shedule</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Resources
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Library</a></li>
            <li><a class="dropdown-item" href="#">E-Library</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Course Resouces</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Pendings Fee</a></li>
            <li><a class="dropdown-item" href="#">download recipt</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">History</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Complain & feedback
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Complains</a></li>
            <li><a class="dropdown-item" href="#">Feedback</a></li>
            <li>
               <hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Opinion For teacher</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        
        <div class="rightIcon notification">dkartik
      </div>  
      <div class="rightIcon Pic">
      <img src="./client/images/round_logo.png" alt="" style="width: 40px;height:40px"> 
      </div>
      <div class="rightIcon notification">
      <i style='font-size:24px' class='far'>&#xf0f3;</i>
        <!-- <img src="./client/images/round_logo.png" alt="" style="width:50px;height:50px"> -->
      </div>
      <div class="rightIcon setting">
      <i style="font-size:24px" class="fa">&#xf013;</i>
      </div>
    </div>
  </div>
</nav>
</body>
</html>