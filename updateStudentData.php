<?php include 'connection.php' ;
$page_id= $_GET['s_n'];

$query ="SELECT * FROM registration WHERE s_id=$page_id";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

$result=mysqli_fetch_assoc($data);
if ($_POST['update']) {

$studentname =          $_POST['studentname'];
$nickname =             $_POST['nickname'];
$fathername =           $_POST['fathername'];
$mothername =           $_POST['mothername'];
$studentmobile =        $_POST['studentmobile'];
$parentsmobile =        $_POST['parentsmobile'];
$youremail =            $_POST['youremail'];
$parentsemail =         $_POST['parentsemail'];
$aadharno =             $_POST['aadharno'];
$parentsaadharno =      $_POST['parentsaadharno'];
$temaddress =          $_POST['temaddress'];
$paraddress =          $_POST['paraddress'];
$tenthboardname =      $_POST['tenthboardname'];
$twelvethboardname =   $_POST['twelvethboardname'];
$tenthmarks =          $_POST['tenthmarks'];
$twelvemarks =         $_POST['twelvemarks'];
$qulification=          $_POST['qulification'];
$admissioncourse=       $_POST['admissioncourse'];

   if($studentname !="" && $nickname!="" && $fathername!="" && $mothername!="" && $studentmobile!="" && $parentsmobile!="" && $youremail!="" && $parentsemail!="" && $aadharno!="" && $parentsaadharno!="" && $temaddress!="" && $paraddress!="" && $tenthboardname!="" && $twelvethboardname!="" && $tenthmarks!="" && $twelvemarks!="" && $qulification!="" && $admissioncourse!=""){


               $query = "UPDATE registration SET studentname='$studentname',nickname='$nickname',fathername='$fathername',mothername='$mothername',studentmobile='$studentmobile', parentsmobile='$parentsmobile',youremail='$youremail',parentsemail='$parentsemail',aadharno='$aadharno',parentsaadharno='$parentsaadharno',temaddress='$temaddress',paraddress='$paraddress',tenthboardname='$tenthboardname',twelvethboardname='$twelvethboardname',tenthmarks='$tenthmarks',twelvemarks='$twelvemarks',qulification='$qulification',admissioncourse='$admissioncourse' WHERE s_id='page_id'";

               $data = mysqli_query($conn,$query);

if ($data) {
   
echo "Updation Sucessfully !";
header('Location:allStudentDetails.php');
}
else {
 echo "Updation Failed !";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/updateStudentData.css">
<link rel="icon" type="image/x-icon" href="./images/favicon.ico">
   <title>Update Page</title>
</head>
<body>
   <form method="post" method="POST" name="registerform"    action="#"  onsubmit="return validateemail();">
            <div class="registerMainContainer">
               <h1>Chandigarh University| Update and Edit Data</h1>
               <h4>Update Only Required Student data </h4>
               <div class="registerLeftBox registerBox" method="post">
                        <div class="formGroup">
                           <label for="studentname"></label>
                           <input type="text" placeholder="Your name" name="studentname" value="<?php echo $result['studentname']; ?>" id="studentname" required><br>
                        </div>
                        <!-- <div class="formGroup">
                           <label for="Gender"></label>
                           <input type="text" placeholder="Your Gender" name="Gender" id="Gender" required><br>
                        </div> -->
                     <div class="formGroup">
                        <label for="fathername"></label><br>
                        <input type="text" placeholder="father name"value="<?php echo $result['fathername']; ?>" name="fathername" id="fathername" required><br>
                     </div>
                     <div class="formGroup">
                        <label for="studentmobile"></label><br>
                        <input type="text" placeholder="Your mobile no."value="<?php echo $result['studentmobile']; ?>" name="studentmobile" id="studentmobile" required><br>
                     </div>
                     <div class="formGroup">
                        <label for="youremail"></label><br>
                        <input type="email" placeholder="Your email id"value="<?php echo $result['youremail']; ?>" name="youremail" id="youremail" required><br><br>
                     </div>
                     <div class="formGroup">
                     <label for="aadharno"></label>
                        <input type="text" placeholder="your aadhar no"value="<?php echo $result['aadharno']; ?>"  name="aadharno" id="aadharno" required><br><br>
                     </div>
                     <div class="formGroup">
                     <label for="temaddress"></label>
                        <input type="text" placeholder="Enter Temporary address"value="<?php echo $result['temaddress']; ?>" name="temaddress" id="temaddress"><br><br>
                     </div>
                     <div class="formGroup">
                        <label for="tenthboardname"></label>
                        <input type="text" placeholder="10th board name"value="<?php echo $result['tenthboardname']; ?>" name="tenthboardname" id="tenthboardname" required><br>
                     </div>
                     <div class="formGroup">
                        <label for="tenthmarks"></label><br>
                        <input type="text" placeholder="10th percentage/cgpa" value="<?php echo $result['tenthmarks']; ?>" name="tenthmarks" id="tenthmarks" required><br><br>
                     </div>
                     <div class="formGroup">
                     <label for="qulification"></label>
                     <select id="qulification" name="qulification" required>
                        <option value="12nonMedical">Choose qulification</option>
                        <optgroup label="12th qulification" class="optionGroup">
                           <option value="12th non Medical"
                           <?php if ($result['qulification']=='12th non Medical') {
                                 echo "selected";
                              } 

                           ?>
                           >
                              
                           12th non Medical</option>
                           <option value="12th Medical" <?php if ($result['qulification']=='12th Medical') {echo "selected";} ?>
                           >12th Medical</option>
                           <option value="12th Commerce" <?php if ($result['qulification']=='12th Commerce') {echo "selected";} ?>
                           >12th Comerce</option>

                        </optgroup>
                        <optgroup label="Bachelor" class="optionGroup">
                        <option value="Bachelor Complete" <?php if ($result['qulification']=='Bachelor') {echo "selected";} ?>
                        >Bachelor In any Streem</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
               <div class="registerRightBox registerBox">
                  <div class="formGroup">
                     <label for="nickname"></label>
                     <input type="text" placeholder="Your nick name(optional)" value="<?php echo $result['nickname']; ?>" name="nickname" id="nickname " ><br>
                  </div>
                  <div class="formGroup">
                     <label for="mothername"></label><br>
                     <input type="text" placeholder="mother name" value="<?php echo $result['mothername']; ?>" name="mothername" id="mothername" ><br>
                  </div>
                  <div class="formGroup">
                     <label for="parentsmobile"></label><br>
                     <input type="text" placeholder="parents mobile no." value="<?php echo $result['parentsmobile']; ?>"  name="parentsmobile" id="parentsmobile" requiredrequired><br>
                  </div>
                  <div class="formGroup">
                     <label for="parentsemail" ></label><br>
                     <input type="email" placeholder="parents Email id" value="<?php echo $result['parentsemail']; ?>" name="parentsemail" id="parentsemail" requiredrequired><br><br>
                  </div>
                  <div class="formGroup">
                     <label for="parentsaadharno"></label>
                     <input type="text" placeholder="parents aadhar no" value="<?php echo $result['parentsaadharno']; ?>" name="parentsaadharno" id="parentsaadharno" required><br><br>
                  </div>
                  <div class="formGroup">
                     <label for="paraddress"></label>
                     <input type="text" placeholder="Enter permanent Address" value="<?php echo $result['paraddress']; ?>" name="paraddress" id="paraddress" required><br><br>
                  </div>

                  <div class="formGroup">
                     <label for="twelvethboardname"></label>
                     <input type="text" placeholder="12th board name" value="<?php echo $result['twelvethboardname']; ?>" name="twelvethboardname" id="twelvethboardname" required><br>
                  </div>
                  <div class="formGroup">
                     <label for="twelvemarks"></label><br>
                     <input type="text" placeholder="12th percentage/cgpa" value="<?php echo $result['twelvemarks']; ?>" name="twelvemarks" id="twelvemarks" required><br><br>
                  </div>
                  <!-- <div class="formGroup">
                     <label for="twelvecertificate">upload 12th marksheet/certificate</label><br>
                     <input type="file" aria-placeholder="upload" class="twelveMarksheet" name="twelvecertificate" id="twelvecertificate"  ><br><br>
                  </div> -->
                   <div class="formGroup">
                     <label for="admissioncourse"></label>
                     <select id="admissioncourse" name="admissioncourse" required>
                     <option value="Bachelor of Arts"> Choose Admission Course  </option>
                     <optgroup label="Bachelor" class="optionGroup">
                        <option value="Bachelor of Arts (B.A)" <?php if ($result['qulification']=='Bachelor of Arts (B.A') {echo "selected";} ?>
                        > Bachelor of Arts (B.A)                                   </option>
                        <option value="Bachelor of Arts Bachelor of Education (B.A. B.Ed)"<?php if ($result['qulification']=='Bachelor of Arts Bachelor of Education (B.A. B.Ed)') {echo "selected";} ?>
                        > Bachelor of Arts Bachelor of Education (B.A. B.Ed)             </option>
                        <option value="Bachelor of Arts Bachelor of Law (B.A.B.L"<?php if ($result['qulification']=='Bachelor of Arts Bachelor of Law (B.A.B.L') {echo "selected";} ?>
                        > Bachelor of Arts Bachelor of Law (B.A.B.L)                 </option>
                        <option value="Bachelor of Arts Bachelor of Law (B.A.LLB)"<?php if ($result['qulification']=='Bachelor of Arts Bachelor of Law (B.A.LLB)') {echo "selected";} ?>
                        > Bachelor of Arts Bachelor of Law (B.A.LLB)                    </option>
                        <option value="Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)"<?php if ($result['qulification']=='Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)') {echo "selected";} ?>
                        > Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)          </option>
                        <option value="Bachelor of Applied Sciences (B.A.S)"<?php if ($result['qulification']=='Bachelor of Applied Sciences (B.A.S)') {echo "selected";} ?>
                        > Bachelor of Applied Sciences (B.A.S)                           </option>
                        <option value="Bachelor of Arts (B.A.S.L.P)"<?php if ($result['qulification']=='Bachelor of Arts (B.A.S.L.P)') {echo "selected";} ?>
                        > Bachelor of Arts (B.A.S.L.P)                                   </option>
                        <option value="Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)"<?php if ($result['qulification']=='Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)') {echo "selected";} ?>
                        > Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)  </option>
                        <option value="Bachelor of Architecture (B.Arch)"<?php if ($result['qulification']=='Bachelor of Architecture (B.Arch)') {echo "selected";} ?>
                        > Bachelor of Architecture (B.Arch)                                   </option>
                        <option value="Bachelor of Business Administration (B.B.A)"<?php if ($result['qulification']=='Bachelor of Business Administration (B.B.A)') {echo "selected";} ?>
                        > Bachelor of Business Administration (B.B.A)                           </option>
                        <option value="Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)"<?php if ($result['qulification']=='Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)') {echo "selected";} ?>
                        >  Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)        </option>
                        <option value="Bachelor of Business Management (B.B.M)"<?php if ($result['qulification']=='Bachelor of Business Management (B.B.M') {echo "selected";} ?>
                        > Bachelor of Business Management (B.B.M)                                </option>
                        <option value="Bachelor of Business Studies (B.B.S)"<?php if ($result['qulification']=='Bachelor of Business Studies (B.B.S)') {echo "selected";} ?>
                        > Bachelor of Business Studies (B.B.S)                                   </option>
                        <option value="Bachelor of Computer Applications (B.C.A)"<?php if ($result['qulification']=='Bachelor of Computer Applications (B.C.A)') {echo "selected";} ?>
                        > Bachelor of Computer Applications (B.C.A)                                   </option>
                        <option value="Bachelor of Communication Journalism (B.C.J)"<?php if ($result['qulification']=='Bachelor of Communication Journalism (B.C.J)') {echo "selected";} ?>
                        > Bachelor of Communication Journalism (B.C.J)                             </option>
                        <option value="Bachelor of Computer Science (B.C.S)"<?php if ($result['qulification']=='Bachelor of Computer Science (B.C.S)') {echo "selected";} ?>
                        > Bachelor of Computer Science (B.C.S)                              </option>
                        <option value="Bachelor of Commerce (B.Com)<?php if ($result['qulification']=='Bachelor of Commerce (B.Com)') {echo "selected";} ?>
                        "> Bachelor of Commerce (B.Com)                                   </option>
                        <option value="Bachelor of Divinity (B.D)"<?php if ($result['qulification']=='Bachelor of Divinity (B.D)') {echo "selected";} ?>
                        > Bachelor of Divinity (B.D)                                   </option>
                        <option value="Bachelor of Dental Surgery (B.D.S)"<?php if ($result['qulification']=='Bachelor of Dental Surgery (B.D.S)') {echo "selected";} ?>
                        > Bachelor of Dental Surgery (B.D.S)                             </option>
                        <option value="Basic Development Therapy (B.D.T)"<?php if ($result['qulification']=='Basic Development Therapy (B.D.T)') {echo "selected";} ?>
                        > Basic Development Therapy (B.D.T)                               </option>
                        <option value="Bachelor of Design (B.Des)"<?php if ($result['qulification']=='Bachelor of Design (B.Des)') {echo "selected";} ?>
                        > Bachelor of Design (B.Des)                                   </option>
                        <option value="Bachelor of Engineering (B.E)"<?php if ($result['qulification']=='Bachelor of Engineering (B.E)') {echo "selected";} ?>
                        > Bachelor of Engineering (B.E)                                   </option>
                        <option value="Bachelor of Electronic Science (B.E.S)"<?php if ($result['qulification']=='Bachelor of Electronic Science (B.E.S)') {echo "selected";} ?>
                        > Bachelor of Electronic Science (B.E.S)                               </option>
                        </optgroup>

                        <optgroup label="Masterr" class="optionGroup">
                           <option value="Master of Law (LL.M) "<?php if ($result['admissioncourse']=='Master of Law (LL.M) ') {echo "selected";}?>
                           >  Master of Law (LL.M)     </option>
                           <option value="Master of Arts (M.A)"<?php if ($result['admissioncourse']=='Master of Arts (M.A)') {echo "selected";}?>
                           >  Master of Arts (M.A)                    </option>
                           <option value="Master of Arts in Management (M.A.M)"<?php if ($result['admissioncourse']=='Master of Arts in Management (M.A.M)') {echo "selected";}?>
                           >  Master of Arts in Management (M.A.M)                    </option>
                           <option value="Master of Arts in Personal Management (M.A.P.M)"<?php if ($result['admissioncourse']=='Master of Arts in Personal Management (M.A.P.M)') {echo "selected";}?>
                           >  Master of Arts in Personal Management (M.A.P.M)                    </option>
                           <option value="Master of Architecture (M.Arch)"<?php if ($result['admissioncourse']=='Master of Architecture (M.Arch)') {echo "selected";}?>
                           >  Master of Architecture (M.Arch)                    </option>
                           <option value="Master of Business Administration (M.B.A)"<?php if ($result['admissioncourse']=='Master of Business Administration (M.B.A)') {echo "selected";}?>
                           >  Master of Business Administration (M.B.A)                    </option>
                           <option value="Master of Business Economics (M.B.E)"<?php if ($result['admissioncourse']=='Master of Business Economics (M.B.E)') {echo "selected";}?>
                           >  Master of Business Economics (M.B.E)                    </option>
                           <option value="Master of Business Laws (M.B.L)"<?php if ($result['admissioncourse']=='Master of Business Laws (M.B.L)') {echo "selected";}?>
                           >  Master of Business Laws (M.B.L)                    </option>
                           <option value="Master of Business Management (M.B.M)"<?php if ($result['admissioncourse']=='Master of Business Management (M.B.M)') {echo "selected";}?>
                           >  Master of Business Management (M.B.M)                    </option>
                           <option value="Master of Business Studies (M.B.S)"<?php if ($result['admissioncourse']=='Master of Business Studies (M.B.S)') {echo "selected";}?>
                           >  Master of Business Studies (M.B.S)                    </option>
                           <option value="Master of Computer Applications (M.C.A)"<?php if ($result['admissioncourse']=='Master of Computer Applications (M.C.A)') {echo "selected";}?>
                           >  Master of Computer Applications (M.C.A)                    </option>
                           <option value="Master Of Communication And Journalism (M.C.J)"<?php if ($result['admissioncourse']=='Master Of Communication And Journalism (M.C.J)') {echo "selected";}?>
                           >  Master Of Communication And Journalism (M.C.J)                    </option>
                           <option value="Master of Comparative Laws (M.C.L) "<?php if ($result['admissioncourse']=='Master of Comparative Laws (M.C.L) ') {echo "selected";}?>
                           >  Master of Comparative Laws (M.C.L)                    </option>
                           <option value="Master of Computer Management (M.C.M)"<?php if ($result['admissioncourse']=='Master of Computer Management (M.C.M)') {echo "selected";}?>
                           >  Master of Computer Management (M.C.M)                    </option>
                           <option value="Master of Corporate Secretaryship (M.C.S)"<?php if ($result['admissioncourse']=='Master of Corporate Secretaryship (M.C.S)') {echo "selected";}?>
                           >  Master of Corporate Secretaryship (M.C.S)                    </option>
                           <option value="Master of Chirurgical (M.Ch)"<?php if ($result['admissioncourse']=='Master of Chirurgical (M.Ch)') {echo "selected";}?>
                           >  Master of Chirurgical (M.Ch)                    </option>
                           <option value="Master of Commerce (M.Com)"<?php if ($result['admissioncourse']=='Master of Commerce (M.Com)') {echo "selected";}?>
                           >  Master of Commerce (M.Com)                    </option>
                           <option value="Doctor of Medicine (M.D)"<?php if ($result['admissioncourse']=='Doctor of Medicine (M.D)') {echo "selected";}?>
                           >  Doctor of Medicine (M.D)                    </option>
                           <option value="Management Development Programme (M.D.P)"<?php if ($result['admissioncourse']=='Management Development Programme (M.D.P)') {echo "selected";}?>
                           >  Management Development Programme (M.D.P)                    </option>
                           <option value="Master of Dental Surgery (M.D.S) "<?php if ($result['admissioncourse']=='Master of Dental Surgery (M.D.S) ') {echo "selected";}?>
                           >  Master of Dental Surgery (M.D.S)                    </option>
                           <option value="Masters in Design (M.Des)"<?php if ($result['admissioncourse']=='Masters in Design (M.Des)') {echo "selected";}?>
                           >  Masters in Design (M.Des)                    </option>
                           <option value="Master of Engineering (M.E)"<?php if ($result['admissioncourse']=='Master of Engineering (M.E)') {echo "selected";}?>
                           >  Master of Engineering (M.E)                    </option>
                           <option value="Master of Education (M.Ed"<?php if ($result['admissioncourse']=='Master of Education (M.Ed') {echo "selected";}?>
                           >  Master of Education (M.Ed)                    </option>
                           <option value="Master of education in Artificial Intelligence (M.Ed AI)"<?php if ($result['admissioncourse']=='Master of education in Artificial Intelligence (M.Ed AI)') {echo "selected";}?>
                           >  Master of education in Artificial Intelligence (M.Ed AI)                    </option>
                           <option value="Master of Fine Arts (M.F.A) "<?php if ($result['admissioncourse']=='Master of Fine Arts (M.F.A) ') {echo "selected";}?>
                           >  Master of Fine Arts (M.F.A)                    </option>
                           <option value="Master of Finance And Control (M.F.C)"<?php if ($result['admissioncourse']=='Master of Finance And Control (M.F.C)') {echo "selected";}?>
                           >  Master of Finance And Control (M.F.C)                    </option>
                           <option value="Master of Film Management (M.F.M) "<?php if ($result['admissioncourse']=='Master of Film Management (M.F.M) ') {echo "selected";}?>
                           >  Master of Film Management (M.F.M)                    </option>
                           <option value="Master of Financial Services (M.F.S) "<?php if ($result['admissioncourse']=='Master of Financial Services (M.F.S) ') {echo "selected";}?>
                           >  Master of Financial Services (M.F.S)                    </option>
                           <option value="Master of Fishery Sciences (M.F.Sc)"<?php if ($result['admissioncourse']=='Master of Fishery Sciences (M.F.Sc)') {echo "selected";}?>
                           >  Master of Fishery Sciences (M.F.Sc)                    </option>
                           <option value="Master of Foreign Trade (M.F.T) "<?php if ($result['admissioncourse']=='Master of Foreign Trade (M.F.T) ') {echo "selected";}?>
                           >  Master of Foreign Trade (M.F.T)                    </option>
                           <option value="Master of Hospital Administration (M.H.A)"<?php if ($result['admissioncourse']=='Master of Hospital Administration (M.H.A)') {echo "selected";}?>
                           >  Master of Hospital Administration (M.H.A)                    </option>
                           <option value="Master of Hospitality And Hotel Management (M.H.H.M)"<?php if ($result['admissioncourse']=='Master of Hospitality And Hotel Management (M.H.H.M)') {echo "selected";}?>
                           >  Master of Hospitality And Hotel Management (M.H.H.M)                    </option>
                           <option value="Master of Hospitality Management (M.H.M)"<?php if ($result['admissioncourse']=='Master of Hospitality Management (M.H.M)') {echo "selected";}?>
                           >  Master of Hospitality Management (M.H.M)                    </option>
                           <option value="Master of Human Resource Management (M.H.R.M)"<?php if ($result['admissioncourse']=='Master of Human Resource Management (M.H.R.M)') {echo "selected";}?>
                           >  Master of Human Resource Management (M.H.R.M)                    </option>
                           <option value="Master of Tourism Administrations (M.T.A) "<?php if ($result['admissioncourse']=='Master of Tourism Administrations (M.T.A) ') {echo "selected";}?>
                           >  Master of Tourism Administrations (M.T.A)                    </option>
                           <option value="Master of Tourism Management (M.T.M)"<?php if ($result['admissioncourse']=='Master of Tourism Management (M.T.M)') {echo "selected";}?>
                           >  Master of Tourism Management (M.T.M)                    </option>
                           <option value="Master of Technology (M.Tech)"<?php if ($result['admissioncourse']=='Master of Technology (M.Tech)') {echo "selected";}?>
                           >  Master of Technology (M.Tech)                    </option>
                           <option value="Master of Theology (M.Th)"<?php if ($result['admissioncourse']=='Master of Theology (M.Th)') {echo "selected";}?>
                           >  Master of Theology (M.Th)                    </option>
                           <option value="Master of Visual Arts (M.V.A)"<?php if ($result['admissioncourse']=='Master of Visual Arts (M.V.A)') {echo "selected";}?>
                           >  Master of Visual Arts (M.V.A)                    </option>
                           <option value="Master of Veterinary Science (M.V.Sc)"<?php if ($result['admissioncourse']=='Master of Veterinary Science (M.V.Sc)') {echo "selected";}?>
                           >  Master of Veterinary Science (M.V.Sc)                    </option>
                           <option value="Master of Business Administration (MBA)"<?php if ($result['admissioncourse']=='Master of Business Administration (MBA)') {echo "selected";}?>
                           >  Master of Business Administration (MBA)                    </option> 
                           <option value="Master of Personnel Management (MPM)"<?php if ($result['admissioncourse']=='Master of Personnel Management (MPM)') {echo "selected";}?>
                           > Master of Personnel Management (MPM)         </option>     
                           </optgroup>
                     </select>
                  </div>
               </div>
               <button type="submit" value="update" name="update" class="registerSubmit">update</button><br><br>

            </div>
   </form>

</body>
</html>