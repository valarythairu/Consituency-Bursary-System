<?php

//First connect to the database via your connection insertfile
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "fund";

$conn = mysqli_connect($servername, $username, $password, $database);
if (mysqli_connect_errno()) {
  echo mysqli_connect_error();
  exit();
}
$selectQuery = "SELECT * FROM applicationform";
$result = mysqli_query($conn, $selectQuery);
if (mysqli_num_rows($result) > 0) {
} else {
  $msg = "No Record found";
}

?>

<!doctype html>

<head>
  <style>
    .box-form {
      margin: 0 auto;
      width: 80%;
      background: #FFFFFF;
      border-radius: 10px;
      overflow: hidden;
      display: flex;
      flex: 1 1 100%;
      align-items: center;
      justify-content: left;
      box-shadow: 0 0 20px 6px rgba(0, 0, 0, 1.0);
    }

    .box-form {
      width: 250px;
      margin-bottom: 30px;
      text-align: center;
      background-repeat: no-repeat;

    }

    .box-form {
      padding: 40px;
      width: 30%;
      overflow: hidden;
    }

    @media (max-width: 980px) {
      .box-form {
        width: 100%;
      }
    }

    .box-form {
      color: darkseagreen;
      background-size: cover;
      background-repeat: no-repeat;
      background-image: url('cdf.png');

      width: 70%;
    }

    @media (max-width: 980px) {
      .box-form {
        width: 100%;
      }
    }

    .box-form .overlay {
      padding: 30px;
      width: 100%;
      height: 100%;
      background: darkseagreen;
      overflow: hidden;
      box-sizing: border-box;
    }

    .box-form .overlay h1 {
      font-size: 10vmax;
      line-height: 1.5;
      font-weight: 900;
      margin-top: 40px;
      margin-bottom: 20px;
    }

    .box-form .overlay span p {
      margin-top: 30px;
      font-weight: 900;
    }

    .box-form .overlay {
      background: darkseagreen;
      color: black;
      margin-top: 10px;
      padding: 14px 50px;
      border-radius: 100px;
      display: inline-block;
      box-shadow: 0 3px 6px 1px rgba(, 0, 0, 1.0);
    }

    .box-form .overlay {
      background: darkseagreen;
      margin-left: 30px;
    }

    .box-form .image {
      width: 250px;
      margin-bottom: 30px;
      text-align: center;
      background-repeat: no-repeat;

    }

    .box-form .button {
      float: center;
      color: darkseagreen;
      font-size: 16px;
      padding: 12px 35px;
      border-radius: 50px;
      display: inline-block;
      border: 0;
      outline: 0;
      align-items: center;
      box-shadow: 0px 4px 20px 0px green;
    }

    .label {
      display: block;
      position: relative;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <div class="box-form">



    <div class="overlay">

      <div class="inputs">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <h4> <label for="name" required>Full Name of Student <br> (As it appears in ID or birth certificate)</label><br></h4>

          <input type="text" name="name" id="name" required><br><br>
          <h4>
            <div class="validation_message"></div>Student Email
          </h4>
          <input type="Email" name="Emails" id="Email" required placeholder="">


          <h4><label for="School"> Name Of School/Secondary School/College/University</label><br></h4>
          <input type="text" name="School" id="School" required><br> <br>

          <h4> <label for="level" required>Level Of Education</label><br></h4>
          <input type="radio" name="level" value="20" checked>University
          <input type="radio" name="level" value="15">College
          <input type="radio" name="level" value="20">National High School
          <input type="radio" name="level" value="15">Extra County High School<br><br>
          <input type="radio" name="level" value="10">County High School
          <input type="radio" name="level" value="10">Other<br>


          <h4> <label for="study" required>Student's learning conditions</label><br></h4>

          <input type="radio" name="study" value="15" checked>Dayscholar
          <input type="radio" name="study" value="20">Boarding

          <br><br>


          <h4><label for="Ward" required>Ward</label></h4>

          <select name="Ward" value="Ward">
            <option value="A">Karima</option>
            <option value="B">Iriani</option>
            <option value="C">Chinga</option>
            <option value="D">Mahiga</option>
            <option value="E"> Other</option>
          </select>


          <h4> <label for="amount" required> Amount Applying for (Kshs) </label></h4>

          <input type="number" name="amount" id="amount" required><br>
          <br>

          <h4> <label for="Family" required> Family Background</label></h4>

          <input type="radio" name="Family" value="20" checked>Total Orphan(Both Parents deceased)
          <input type="radio" name="Family" value="15">Partial Orphan(One Parent deceased)<br><br>
          <input type="radio" name="Family" value="15">Single Parent(Unmarried mother/father)
          <input type="radio" name="Family" value="10">Both Parents Alive
          <input type="radio" name="Family" value="15">Guardian
          <br><br>

          <h4><label for="siblings" required> Number of Siblings alive </label></h4>
          <input type="number" name="siblings" id="siblings"><br><br>


          <br> <br>
          <h4> a) Parent/Guardian </h4><br>

          <h4> <label for="FatherName" required> Name </label></h4>

          <input type="text" name="FatherName" id="FatherName"><br><br>


          <h4> <label for="Telephonenumber" required> Telephone number </label></h4>
          <input type="number" name="Telephonenumber" id="Telephonenumber">
          <br> <br>

          <h4><label for="Occupation1">Occupation </label></h4>
          <input type="text" name="Occupation1" id="Occupation1">
          <br><br>
          <h4> <label for="Employment">Type of Employment</label></h4>

          <input type="radio" name="Employment" value="Permanent">Permanent
          <input type="radio" name="Employment" value="Retired" checked>Retired
          <input type="radio" name="Employment" value="Casual">Casual
          <input type="radio" name="Employment" value="Contractual">Contractual
          <input type="radio" name="Employment" value="SelfEmployed">Self-Employed
          <input type="radio" name="Employment" value="None"> None

          <br><br>

          <h4> Applicant's academic performance</h4>

          <label for="Academicperformance" required> a) What is your average academic performance? </label>
          <br>
          <br>
          <input type="radio" name="Academicperformance" value="10" checked> Excellent
          <input type="radio" name="Academicperformance" value="10"> Very Good
          <input type="radio" name="Academicperformance" value="10"> Good <br><br>
          <input type="radio" name="Academicperformance" value="5"> Fair
          <input type="radio" name="Academicperformance" value="5"> Poor

          <br>

          <h4> Refeeree's Name </h4>

          <h4> <label for="RefName"> Full Name </label></h4>

          <input type="text" name="RefName" id="RefName"><br><br>


          <h4> <label for="Telenumber"> Telephone number </label></h4>
          <input type="number" name="Telenumber" id="Telenumber" required>
          <br> <br><br>



          <div class="button">
            <input type="submit" value="SUBMIT" name="Result">
          </div><br><br>
          <p class="par"> VISION: EQUITABLE SOCIAL-ECONOMIC DEVELOPMENT COUNTRYWIDE. <br>
            Copyright 2022 by Hope Thairu.All Rights Reserved.
          </p><br><br>

      </div>
    </div>
  </div>



  <?php

  function clean_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    {


    $name = $_POST["name"];
    $Email = $_POST['Emails'];
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
    $School = $_POST["School"];
    $level = $_POST["level"];
    $study = $_POST["study"];
    $Ward = $_POST["Ward"];
    $amount = $_POST["amount"];
    $Family = $_POST["Family"];
    $siblings = $_POST["siblings"];
    $FatherName = $_POST["FatherName"];
    $Telephonenumber = $_POST["Telephonenumber"];
    $Occupation1 = $_POST["Occupation1"];
    $Employment = $_POST["Employment"];
    $Academicperformance = $_POST["Academicperformance"];
    $RefName = $_POST["RefName"];
    $Telenumber = $_POST["Telenumber"];
    $status = "Pending";
    $query = "INSERT INTO  applicationform (name,Email,School,level,study, Ward, amount, Family, siblings, FatherName, Telephonenumber, Occupation1, Employment, Academicperformance,  RefName, Telenumber, status)

        VALUES ('" . $name . "','" . $Email . "','" . $School . "','" . $level . "','" . $study . "','" . $Ward . "','" . $amount . "','" . $Family . "','" . $siblings . "','" . $FatherName . "','" . $Telephonenumber . "','" . $Occupation1 . "','" . $Employment . "','" . $Academicperformance . "','" . $RefName . "','" . $Telenumber . "','" . $status . "')";

    if (mysqli_query($conn, $query)) {

      echo '<script></script>';
      echo "<script type = \"text/javascript\">
        window.location = (\"/fund/application/nextpage.php\")
        </script>";
    } else {
      echo '<script> alert("Invalid details")</script>';
    }
  }

}

  mysqli_close($conn);

  ?>

  </form>
</body>

</html>