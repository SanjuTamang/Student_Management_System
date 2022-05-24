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
   <link rel="stylesheet" href="./css/exam.css">
   <title>Notice | Send Notice</title>
</head>
<body>
   <div class="mainNoticeBox">
      <div class="firstSubBox noticeSubCommonBox">
       <label for="">Exam Name</label><br>
       <input type="text" name="examname" id=""><br>
       <label for="">Batch Year</label><br>
       <input type="text" name="batchyear" id="" placeholder="2019-2022"><br>
      <br><select name="class">
       <option value="">Choose Class/Department</option>
          <optgroup label="All Bachelor Department"> 
            <option value="Bachelor of Arts (B.A)"> Bachelor of Arts (B.A)                                   </option>
            <option value="Bachelor of Arts Bachelor of Education (B.A. B.Ed)"> Bachelor of Arts Bachelor of Education (B.A. B.Ed)  </option>
            <option value="Bachelor of Arts Bachelor of Law (B.A.B.L"> Bachelor of Arts Bachelor of Law (B.A.B.L)         </option>
            <option value="Bachelor of Arts Bachelor of Law (B.A.LLB)"> Bachelor of Arts Bachelor of Law (B.A.LLB)        </option>
            <option value="Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)"> Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)   </option>
            <option value="Bachelor of Applied Sciences (B.A.S)"> Bachelor of Applied Sciences (B.A.S)                   </option>
            <option value="Bachelor of Arts (B.A.S.L.P)"> Bachelor of Arts (B.A.S.L.P)                                   </option>
            <option value="Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)"> Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)  </option>
            <option value="Bachelor of Architecture (B.Arch)"> Bachelor of Architecture (B.Arch)                           </option>
            <option value="Bachelor of Business Administration (B.B.A)"> Bachelor of Business Administration (B.B.A)        </option>
            <option value="Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)">  Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)        </option>
            <option value="Bachelor of Business Management (B.B.M)"> Bachelor of Business Management (B.B.M)                </option>
            <option value="Bachelor of Business Studies (B.B.S)"> Bachelor of Business Studies (B.B.S)                      </option>
            <option value="Bachelor of Computer Applications (B.C.A)"> Bachelor of Computer Applications (B.C.A)            </option>
            <option value="Bachelor of Communication Journalism (B.C.J)"> Bachelor of Communication Journalism (B.C.J)      </option>
            <option value="Bachelor of Computer Science (B.C.S)"> Bachelor of Computer Science (B.C.S)                      </option>
            <option value="Bachelor of Commerce (B.Com)"> Bachelor of Commerce (B.Com)                                      </option>
            <option value="Bachelor of Divinity (B.D)"> Bachelor of Divinity (B.D)                                          </option>
            <option value="Bachelor of Dental Surgery (B.D.S)"> Bachelor of Dental Surgery (B.D.S)                           </option>
            <option value="Basic Development Therapy (B.D.T)"> Basic Development Therapy (B.D.T)                             </option>
            <option value="Bachelor of Design (B.Des)"> Bachelor of Design (B.Des)                                           </option>
            <option value="Bachelor of Engineering (B.E)"> Bachelor of Engineering (B.E)                                     </option>
            <option value="Bachelor of Electronic Science (B.E.S)"> Bachelor of Electronic Science (B.E.S)                    </option>
          </optgroup>
          <optgroup label="All Master Departments" class="optionGroup">
                           <option value="Master of Law (LL.M) ">  Master of Law (LL.M)     </option>
                           <option value="Master of Arts (M.A)" >  Master of Arts (M.A)                    </option>
                           <option value="Master of Arts in Management (M.A.M)">  Master of Arts in Management (M.A.M)                    </option>
                           <option value="Master of Architecture (M.Arch)">  Master of Architecture (M.Arch)                    </option>
                           <option value="Master of Business Administration (M.B.A)">  Master of Business Administration (M.B.A)                    </option>
                           <option value="Master of Business Laws (M.B.L)">  Master of Business Laws (M.B.L)                    </option>
                           <option value="Master of Business Management (M.B.M)">  Master of Business Management (M.B.M)                    </option>
                           <option value="Master of Computer Applications (M.C.A)">  Master of Computer Applications (M.C.A)                    </option>
                           <option value="Master of Comparative Laws (M.C.L) ">  Master of Comparative Laws (M.C.L)                    </option>
                           <option value="Master of Computer Management (M.C.M)">  Master of Computer Management (M.C.M)                    </option>
                           <option value="Master of Chirurgical (M.Ch)">  Master of Chirurgical (M.Ch)                    </option>
                           <option value="Master of Commerce (M.Com)">  Master of Commerce (M.Com)                    </option>
                           <option value="Doctor of Medicine (M.D)">  Doctor of Medicine (M.D)                    </option>
                           <option value="Masters in Design (M.Des)" >  Masters in Design (M.Des)                    </option>
                           <option value="Master of Engineering (M.E)">  Master of Engineering (M.E)                    </option>
                           <option value="Master of Education (M.Ed">  Master of Education (M.Ed)                    </option>
                           <option value="Master of Fine Arts (M.F.A)">  Master of Fine Arts (M.F.A)                    </option>
                           <option value="Master of Finance And Control (M.F.C)">  Master of Finance And Control (M.F.C)                    </option>
                           <option value="Master of Film Management (M.F.M)">  Master of Film Management (M.F.M)                    </option>
                           <option value="Master of Financial Services (M.F.S)">  Master of Financial Services (M.F.S)                    </option>
                           <option value="Master of Fishery Sciences (M.F.Sc)">  Master of Fishery Sciences (M.F.Sc)                    </option>
                           <option value="Master of Foreign Trade (M.F.T)">  Master of Foreign Trade (M.F.T)                    </option>
                           <option value="Master of Hospital Administration (M.H.A)">  Master of Hospital Administration (M.H.A)                    </option>
                           <option value="Master of Hospitality Management (M.H.M)">  Master of Hospitality Management (M.H.M)                    </option>
                           <option value="Master of Technology (M.Tech)">  Master of Technology (M.Tech)                    </option>
                           <option value="Master of Theology (M.Th)">  Master of Theology (M.Th)                    </option>
                           <option value="Master of Business Administration (MBA)">  Master of Business Administration (MBA)                    </option> 
                           <option value="Master of Personnel Management (MPM)"> Master of Personnel Management (MPM)         </option>     
                           </optgroup>
       </select><br><br>
      <select>
           <option value="">Choose Semester</option>
          <optgroup label="All semester list"> 
            <option value="First semester (1)">First semester (1)</option>
            <option value="Secondt semester (2)">Secondt semester (2)</option>
            <option value="Third semester (3)">Third semester (3)</option>
            <option value="Fourth semester (4)">Fourth semester (4)</option>
            <option value="">Fifth semester (5)</option>
            <option value="">Sisth semester (6)</option>
            <option value="">Seventh semester (7)</option>
            <option value="">Eight semester (8)</option>
          </optgroup>
       </select><br><br>
       <select>
       <option value="">choose Section</option>
          <optgroup label="All Section List"> 
          <option value="">Section One (S1)</option>
          <option value="">Section Two (S2)</option>
          <option value="">Section Three (S3)</option>
          <option value="">Section Four (S4)</option>
          <option value="">Section Five (S5)</option>
          <option value="">Section Six (S6)</option>
          <option value="">Section Seven (S7)</option>
          </optgroup>
       </select><br><br>
       <label for="">Subject Name</label><br>
       <input type="text" name="subjectname" id=""><br>
       <label for="">Timing</label><br>
       <input type="time" name="effectdate" id=""><br>
       <label for="">Date</label><br>
       <input type="date" name="effectdate" id=""><br>
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
<table>
   <thead>
      <tr>
         <th>S No. </th>
         <th>Batch(year)</th>
         <th>Depatment</th>
         <th>Subject</th>
         <th>Section</th>
         <th>Time</th>
         <th>Date</th>
      </tr>
   </thead>
</table>
      </div>
   </div>
</body>
</html>