
 <?php
  

  $host="127.0.0.1";
  $username="root";
  $password="";
  $database="fund";

  $mysqli = new mysqli($host,$username,$password,$database);

  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

  ?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Webpage</title>
        <style>
    .body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url() no-repeat;
    background-size: cover;
}
 
.login-box {
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #191970;
}
 
.login-box h1 {
    float: left;
    font-size: 40px;
    border-bottom: 4px solid #191970;
    margin-bottom: 50px;
    padding: 13px;
}
 
.textbox {
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #191970;
}
 
.fa {
    width: px;
    float: left;
    text-align: center;
}
 
.textbox input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    float: left;
    margin: 0 10px;
}

.btn{

  padding: 5px 10px;
  background: orange;
  border: 0;
  outline: orange;
  cursor: pointer;
  font-size: 22px;
  font-weight: 500;
  shape-outside: border-box;

}
 
</style>
    </head>
    <body style="background: aliceblue;padding:1%;">
<body>
<form action="/fund/dashboard/index.php" method="post">

    
            <h3 style="text-align:center; margin-top:10%;">Congratulations!</h3>
            <h4 style="text-align:center; margin-top: 5%;text-decoration:inherit;">Your details have been captured successfully.<br><br>You will receive email notification on approval or dissapproval of bursary.<br><br>Click <input type="submit" value="Yes" name="Yes"> to save your form details and go back to homepage.</h4></style></style>
 
            



    <!--Footer section-->
    <footer translate="no" class="footer-section">
        <div class="container">
          <div class="row">
  <p class="copyright" style="text-align: center;margin-top: 80%;">VISION: EQUITABLE SOCIAL-ECONOMIC DEVELOPMENT COUNTRYWIDE. <br> 
                         Copyright 2022 by Hope Thairu.All Rights Reserved.&copy;</span></p>
      </footer>
      <!--end footer-->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </form>
    </body>
    </html>