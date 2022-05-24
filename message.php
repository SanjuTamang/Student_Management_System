<?php
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/message.css">
   <title>Message</title>
</head>
<body>
   <div class="mainMessage">
      <h2>Message Details</h2>
      <div class="firstMessageSubBox commonSubBox">
         <h2>Write Message Here</h2>
      <label for="">Title</label><br><br>
      <input type="text" name="" id="" required><br><br><br>
      <label for="">Recipient</label><br><br>
      <input type="text" name="" id="" required><br><br><br>
      <label for="">Message</label><br><br>
      <textarea type="text" name="" rows="3" cols="20">
      </textarea><br>
      <button type="submit">SEND</button>
      </div>
      <div class="secondMessageSubBox commonSubBox">
        <div class="firstInsudeSub commonInsudeSub">
        <h3>Sucessfully Message</h3>

        </div>
        <div class="secondInsudeSub commonInsudeSub">
        <h3>Failed Message</h3>

        </div>
      </div>
   </div>
</body>
</html>