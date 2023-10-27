  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once 'connectapplicationform.php';
 session_start();
// Escape user inputs for security
if ($_SERVER['REQUEST_METHOD']=="POST" )
{
    $name = $_POST['FullNameofStudent'];
    $gender = $_POST['Gender'];
    $DateofBirth = $_POST['DateofBirth'];
    $IDnumberbirthcertificateno = $_POST['number'];
    $School = $_POST['Name Of School/Secondary School/College/university'];
    $study = $_POST['YearofStudy'];
    $CourseDuration = $_POST[' CourseDuration(Years)'];
    $ExpectedCompletion = $_POST['ExpectedCompletionYear'];
    $Mobileno = $_POST['TelephoneNumber'];
    $Physicaladdress = $_POST['PhysicalAddress'];
    $Ward = $_POST['Ward'];
    $amount = $_POST['AmountAppliedfor(Kshs)'];
    $Family = $_POST['Family'];
    $siblings = $_POST['NumberofSiblingsalive'];
    $EstimatedFamilyIncome = $_POST['EstimatedFamilyIncome(Annually)'];
    $FatherName = $_POST['Name'];
    $Telephonenumber = $_POST['Telephonenumber'];
    $Occupation1 = $_POST['Occupation'];
    $Employment = $_POST['TypeofEmployment'];
    $Income = $_POST['MainSourceofIncome'];
    $MotherName = $_POST['Name'];
    $Telephoneno= $_POST['Telephonenumber'];
    $Occupation2 = $_POST['Occupation'];
    $Employment = $_POST['TypeofEmployment'];
    $MainSourceofIncome = $_POST['MainSourceofIncome'];
    $Guardian_Name = $_POST['Name'];
    $Telephone = $_POST['Telephonenumber'];
    $Occupation_3 = $_POST['Occupation'];
    $employment = $_POST['TypeofEmployment'];
    $Source_of_Income = $_POST['MainSourceofIncome'];
    $userdata = $_POST['a) Whyareyouapplyingforbursary?'];
    $funding = $_POST['b) Haveyoureceivedfinancialsupport/bursaryfromNG-CDFinthepast?'];
    $support = $_POST['Ifyes,specifyhowmuchandwhenyoulastreceivedsupport'];
    $Additional_funding = $_POST['c)Haveyoureceivedfinancialsupportorscholarshipfromotherorganizationsinthepast?'];
    $details = $_POST['Ifyes,Providedetails'];
    $education_funding = $_POST['Statethemainsourceoffundingforyoureducationinthepast(Fill where applicable) '];
    $Secondary_funding = $_POST['a)InSecondarySchool'];
    $College_funding = $_POST['b)InCollege'];
    $university_funding = $_POST['c)InUniversity'];
    $Academic_perfomance = $_POST['a)Whatisyouraverageacademicperformance?'];
    $perfomance = $_POST['AcademicPerformance'];
    $school = $_POST[' b)Haveyoubeensentawayfromschool?'];
    $reasons = $_POST['Ifyesprovidereasonsforyourabsenceandspecifynumberofweeksyoustayedawayfromschool'];
    $annual_fees = $_POST['c)Annualfees(asperfeesstructure)Ksh.'];
    $last_balance = $_POST['d)LastSemestersTermbalance'];
    $Currentbalance= $_POST['e)Current SemestersTermbalance'];
    $Next_balance = $_POST['f)NextSemestersTermbalance'];
    $REFEREES = $_POST['Thestudentparentguardianshouldprovidethenamesandtelephonecontactsofatleasttworefereeswhoknowthefamilywell'];
    $Name = $_POST['1.FullName'];
      $Telephonenumber = $_POST['telephonenumber'];
      $Fullname = $_POST['2.FullName'];
      $telephonenumber = $_POST['telephonenumber'];

if(mysqli_num_rows($result) > 0){
       $sql = "INSERT INTO  applicationform id ($name,$gender,$DateofBirth,$IDnumber,$School,$study,$CourseDuration, $ExpectedCompletion,$Mobileno.,$Physicaladdress,$Ward,$amount,$Family,$siblings,$EstimatedFamilyIncome,$FatherName, $Telephonenumber,$Occupation1,$Employment,$Income, $MotherName, $Telephoneno, $Occupation2, $Employment,$MainSourceofIncome, $GuardianName, $Telephone, $Occupation3, $employment, $SourceofIncome, $userdata, $funding, $support, $Additionalfunding, $details, $educationfunding, $Secondaryfunding, $Collegefunding, $universityfunding, $Academicperfomance, $perfomance, $school, $reasons, $annualfees, $lastbalance, $Currentbalance,$Nextbalance, $REFEREES, $Name, $Telephonenumber, $Fullname, $telephonenumber)"

      VALUES ('FullNameofStudent','Gender','DateofBirth','number','NameOfSchool/SecondarySchool/College/university','YearofStudy','CourseDuration(Years)','ExpectedCompletionYear','TelephoneNumber','PhysicalAddress','Ward','AmountAppliedfor(Kshs)','Family','NumberofSiblingsalive','EstimatedFamilyIncome (Annually)','Name','Telephonenumber','Occupation','TypeofEmployment','MainSourceofIncome','Name','Telephonenumber','Occupation','TypeofEmployment','MainSourceofIncome','Name','Telephonenumber','Occupation','TypeofEmployment','MainSourceofIncome','a)Whyareyouapplyingforbursary?','b)Haveyoureceivedfinancialsupport/bursaryfromNG-CDFinthepast?','Ifyes,specifyhowmuchandwhenyoulastreceivedsupport','c)Haveyoureceivedfinancialsupportorscholarshipfromotherorganizationsinthepast?','Ifyes,Providedetails.','Statethemainsourceoffundingforyoureducationinthepast(Fillwhereapplicable) ','a)InSecondarySchool','b)InCollege.','c)InUniversity.','a)Whatisyouraverageacademicperformance?','AcademicPerformance',' b)Haveyoubeensentawayfromschool?','Ifyes,providereasonsforyourabsenceandspecifynumberofweeksyoustayedawayfromschool','c)Annualfees(asperfeesstructure)Ksh.','d)LastSemester's/Termbalance','e)CurrentSemester's/Termbalance','f)NextSemester's/Termbalance','Thestudent/parent/guardianshouldprovidethenamesandtelephonecontactsofatleasttworefereeswhoknowthefamilywell.','1.FullName','TELEPHONENUMBER','FullName','TELEPHONENUMBER');

 if (mysqli_query($conn, $sql)) 
    {
        echo '<script type="\text/javascript">
                check();
            </script>';     
    } 
    else
    {
        echo "Sorry Connection Not Available!";
    }
    mysqli_close($conn);
  }

?>
