<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/studentPermotion.css">
   <title>Student Permotion</title>
</head>
<body>
    <div class="mainPermotionContainer">
      <div class="subPermotionContainer">
            <div class="firstSubPermotionContainer insideSub">
               <input type="text" name="studentuid" placeholder="uid">
               <label for="">Semester Permotion</label><br>
               <select name="semester_permotion" id="" ><br>
               <!-- <option value="">Choose Semester</option> -->
                  <optgroup name="Semester Permotion" label="Choose semester">hi
                     <option value="">1st to 2nd sem</option>
                     <option value="">2nd to 3rd sem</option>
                  </optgroup>
               </select>
            </div>
            <div class="secondSubPermotionContainer insideSub">
               <input type="text" name="studentname" placeholder="name">
               <label for="">Section Permotion</label><br>
             <select name="section_permotion" id="" >
                <option value="">Choose Section</option>
               <optgroup label="Choose section" >
                  <option value="">Section A to B</option>
                  <option value="">Section B to C</option>
                  <option value="">Section C to D</option>
               </optgroup>
              </select>
            </div>
      </div>
         <button type="submit" name="submit">Approved Permotion</button>
   </div>
</body>
</html>