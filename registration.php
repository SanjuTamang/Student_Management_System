<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./client/css/register.css">
   <title>Registration | Admission Form</title>
</head>
<body>
   <form method="post" method="POST" name="registerform" action="registration_action.php"  onsubmit="return validateemail();">
            <div class="registerMainContainer">
               <h1>Chandigarh University</h1>
               <h4>Admission process and condition <a href="./client//Components//knowMoreadmission.php">know more</a></h4>
               <div class="registerLeftBox registerBox" method="post">
                        <div class="formGroup">
                           <label for="studentname"></label>
                           <input type="text" placeholder="Your name" name="studentname" id="studentname" required><br>
                        </div>
                        <!-- <div class="formGroup">
                           <label for="Gender"></label>
                           <input type="text" placeholder="Your Gender" name="Gender" id="Gender" required><br>
                        </div> -->
                     <div class="formGroup">
                        <label for="fathername"></label><br>
                        <input type="text" placeholder="father name" name="fathername" id="fathername" required><br>
                     </div>
                     <div class="formGroup">
                        <label for="studentmobile"></label><br>
                        <input type="text" placeholder="Your mobile no." name="studentmobile" minlength="10"  id="studentmobile" required><br>
                     </div>
                     <div class="formGroup">
                        <label for="youremail"></label><br>
                        <input type="email" placeholder="Your email id" name="youremail" id="youremail" required><br><br>
                     </div>
                     <div class="formGroup">
                     <label for="aadharno"></label>
                        <input type="text" placeholder="your aadhar no"  name="aadharno" id="aadharno" minlength="12" required><br><br>
                     </div>
                     <div class="formGroup">
                     <label for="temaddress"></label>
                        <input type="text" placeholder="Enter Temporary address(not required)"  name="temaddress" id="temaddress"><br><br>
                     </div>
                     <div class="formGroup">
                        <label for="tenthboardname"></label>
                        <input type="text" placeholder="10th board name" name="tenthboardname" id="tenthboardname" required><br>
                     </div>
                     <div class="formGroup">
                        <label for="tenthmarks"></label><br>
                        <input type="text" placeholder="10th percentage/cgpa" name="tenthmarks" id="tenthmarks" required><br><br>
                     </div>
                     <div class="formGroup">
                     <label for="qulification"></label>
                     <select id="qulification" name="qulification" required>
                        <option value="12nonMedical">Choose qulification</option>
                        <optgroup label="12th qulification" class="optionGroup">
                           <option value="12th non Medical">12th non Medical</option>
                           <option value="12th Medical">12th Medical</option>
                           <option value="12th Comerce">12th Comerce</option>

                        </optgroup>
                        <optgroup label="Bachelor" class="optionGroup">
                        <option value="Bachelor Complete">Bachelor In any Streem</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
               <div class="registerRightBox registerBox">
                  <div class="formGroup">
                     <label for="nickname"></label>
                     <input type="text" placeholder="Your nick name(optional)" name="nickname" id="nickname"><br>
                  </div>
                  <div class="formGroup">
                     <label for="mothername"></label><br>
                     <input type="text" placeholder="mother name" name="mothername" id="mothername" required><br>
                  </div>
                  <div class="formGroup">
                     <label for="parentsmobile"></label><br>
                     <input type="text" placeholder="parents mobile no."  name="parentsmobile" minlength="10" id="parentsmobile" required><br>
                  </div>
                  <div class="formGroup">
                     <label for="parentsemail" ></label><br>
                     <input type="email" placeholder="parents Email id" name="parentsemail" id="parentsemail" required><br><br>
                  </div>
                  <div class="formGroup">
                     <label for="parentsaadharno"></label>
                     <input type="text" placeholder="parents aadhar no"name="parentsaadharno" minlength="12" id="parentsaadharno" required><br><br>
                  </div>
                  <div class="formGroup">
                     <label for="paraddress"></label>
                     <input type="text" placeholder="Enter permanent Address"name="paraddress" id="paraddress" required><br><br>
                  </div>

                  <div class="formGroup">
                     <label for="twelvethboardname"></label>
                     <input type="text" placeholder="12th board name" name="twelvethboardname" id="twelvethboardname" required><br>
                  </div>
                  <div class="formGroup">
                     <label for="twelvemarks"></label><br>
                     <input type="text" placeholder="12th percentage/cgpa" name="twelvemarks" id="twelvemarks" required><br><br>
                  </div>
                  <!-- <div class="formGroup">
                     <label for="twelvecertificate">upload 12th marksheet/certificate</label><br>
                     <input type="file" aria-placeholder="upload" class="twelveMarksheet" name="twelvecertificate" id="twelvecertificate"  ><br><br>
                  </div> -->
                   <div class="formGroup">
                     <label for="admissioncourse"></label>
                     <select id="admissioncourse" name="admissioncourse">
                     <option value="Bachelor of Arts"> Choose Admission Course  </option>
                     <optgroup label="Bachelor" class="optionGroup">
                        <option value="Bachelor of Arts (B.A)"> Bachelor of Arts (B.A)                                   </option>
                        <option value="Bachelor of Arts Bachelor of Education (B.A. B.Ed)"> Bachelor of Arts Bachelor of Education (B.A. B.Ed)             </option>
                        <option value="Bachelor of Arts Bachelor of Law (B.A.B.L"> Bachelor of Arts Bachelor of Law (B.A.B.L)                 </option>
                        <option value="Bachelor of Arts Bachelor of Law (B.A.LLB)"> Bachelor of Arts Bachelor of Law (B.A.LLB)                    </option>
                        <option value="Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)"> Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)          </option>
                        <option value="Bachelor of Applied Sciences (B.A.S)"> Bachelor of Applied Sciences (B.A.S)                           </option>
                        <option value="Bachelor of Arts (B.A.S.L.P)"> Bachelor of Arts (B.A.S.L.P)                                   </option>
                        <option value="Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)"> Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)  </option>
                        <option value="Bachelor of Architecture (B.Arch)"> Bachelor of Architecture (B.Arch)                                   </option>
                        <option value="Bachelor of Business Administration (B.B.A)"> Bachelor of Business Administration (B.B.A)                           </option>
                        <option value="Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)">  Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)        </option>
                        <option value="Bachelor of Business Management (B.B.M)"> Bachelor of Business Management (B.B.M)                                </option>
                        <option value="Bachelor of Business Studies (B.B.S)"> Bachelor of Business Studies (B.B.S)                                   </option>
                        <option value="Bachelor of Computer Applications (B.C.A)"> Bachelor of Computer Applications (B.C.A)                                   </option>
                        <option value="Bachelor of Communication Journalism (B.C.J)"> Bachelor of Communication Journalism (B.C.J)                             </option>
                        <option value="Bachelor of Computer Science (B.C.S)"> Bachelor of Computer Science (B.C.S)                              </option>
                        <option value="Bachelor of Commerce (B.Com)"> Bachelor of Commerce (B.Com)                                   </option>
                        <option value="Bachelor of Divinity (B.D)"> Bachelor of Divinity (B.D)                                   </option>
                        <option value="Bachelor of Dental Surgery (B.D.S)"> Bachelor of Dental Surgery (B.D.S)                             </option>
                        <option value="Basic Development Therapy (B.D.T)"> Basic Development Therapy (B.D.T)                               </option>
                        <option value="Bachelor of Design (B.Des)"> Bachelor of Design (B.Des)                                   </option>
                        <option value="Bachelor of Engineering (B.E)"> Bachelor of Engineering (B.E)                                   </option>
                        <option value="Bachelor of Electronic Science (B.E.S)"> Bachelor of Electronic Science (B.E.S)                               </option>
                        </optgroup>

                        <optgroup label="Masterr" class="optionGroup">
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
                     </select>
                  </div>
               </div>
               <button type="submit"id="submit" name="submit" class="registerSubmit">submit</button><br><br>

            </div>
   </form>
</body>
</html>
<?php 
include 'connection.php';
if(!defined('mysite')){
   header('location:home.php');
   die();
}
// $studentname =          $_POST['studentname'];
// $nickname =             $_POST['nickname'];
// $fathername =           $_POST['fathername'];
// $mothername =           $_POST['mothername'];
// $studentmobile =        $_POST['studentmobile'];
// $parentsmobile =        $_POST['parentsmobile'];
// $youremail =            $_POST['youremail'];
// $parentsemail =         $_POST['parentsemail'];
// $aadharno =             $_POST['aadharno'];
// $parentsaadharno =      $_POST['parentsaadharno'];
// $temaddress =          $_POST['temaddress'];
// $paraddress =          $_POST['paraddress'];
// $tenthboardname =      $_POST['tenthboardname'];
// $twelvethboardname =   $_POST['twelvethboardname'];
// $tenthmarks =          $_POST['tenthmarks'];
// $twelvemarks =         $_POST['twelvemarks'];
// $qulification=          $_POST['qulification'];
// $admissioncourse=       $_POST['admissioncourse'];

// if($studentname !="" && $nickname!="" && $fathername!="" && $mothername!="" && $studentmobile!="" && $parentsmobile!="" && $youremail!="" && $parentsemail!="" && $aadharno!="" && $parentsaadharno!="" && $temaddress!="" && $paraddress!="" && $tenthboardname!="" && $twelvethboardname!="" && $tenthmarks!="" && $twelvemarks!="" && $qulification!="" && $admissioncourse!=""){


// mysqli_query($conn,"INSERT INTO registration (studentname, nickname, fathername, mothername, studentmobile, parentsmobile, youremail, parentsemail, aadharno, parentsaadharno ,temaddress ,paraddress , tenthboardname, twelvethboardname, tenthmarks, twelvemarks,qulification ,admissioncourse) VALUES('$studentname','$nickname','$fathername','$mothername','$studentmobile','$parentsmobile','$youremail','$parentsemail','$aadharno','$parentsaadharno','$temaddress','$paraddress','$tenthboardname','$twelvethboardname','$tenthmarks','$twelvemarks','$qulification','$admissioncourse')");
// echo "thanks fo Admission";
// }
// else {
// //  echo "<sript> alert('Enter input ! You try Register with empty data')</script>";
// }


?>
