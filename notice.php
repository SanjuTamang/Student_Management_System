<?php 
include 'navbar.php';
include 'allhead.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/notice.css">
   <title>Notice | Send Notice</title>
</head>
<body>
   <div class="mainNoticeBox">
      <div class="firstSubBox noticeSubCommonBox">
       <label for="">Title</label><br><br>
       <input type="text" name="" id=""><br><br>
       <label for="">Send By &#xf4fc;</label><br><br>
       <input type="text" name="sendby" id=""><br><br>
       <label for="">Effect From </label><br><br>
       <input type="date" name="effectdate" id=""><br><br>
       <label for="">Message</label><br><br>
       <textarea name="message" id="message" cols="30" rows="10"></textarea><br><br>
       <button type="submit">Send Notice</button>
      </div>
      <div class="secondSubBox noticeSubCommonBox">
         <div class="mainSearchBox noticeSubCommonBox">
         <div class="firstSerarchBox serchCommon">
           <input type="date" name="searchByDate" id="sSearch" placeholder="Search by date" required> <button type="submit">search</button>
         </div>
         <div class="seconSearchBox serchCommon">
           <input type="search" name="searchByName" id="sSearch" placeholder="search title" ><button type="submit">search</button>
         </div>
         <div class="seconSearchBox serchCommon">
           <!-- <input type="search" name="searchByPhone" id="sSearch" placeholder="Search by " required>
           <button type="submit">search</button> -->
         </div>
      </div>   
       <p>date</p>
       <p>title</p>
       <p>send by</p>
       <p>details</p>
      </div>
   </div>
</body>
</html>