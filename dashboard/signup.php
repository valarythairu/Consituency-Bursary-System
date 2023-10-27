 <?php
  

  $host="127.0.0.1";
  $username="root";
  $password="";
  $database="fund";

  $conn = mysqli_connect($host, $username, $password, $database);
  if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
  }
$selectQuery = "SELECT * FROM member";
$result = mysqli_query($conn, $selectQuery);
if(mysqli_num_rows($result) > 0){
  }else{
    $msg = "No Record found" ;
  }

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SIGN-UP PAGE</title>

<style>
.body {
  background-image: "cdf.PNG";
  background-size: contain;
  background-repeat: no-repeat;
  background-attachment: fixed;
  font-family: "Open Sans", sans-serif;
  color: #333333;
}

.box-form {
  margin: 0 auto;
  width: 80%;
  background: #FFFFFF;
  border-radius: 10px;
  overflow: hidden;
  display: flex;
  flex: 1 1 100%;
  align-items: stretch;
  justify-content: space-between;
  box-shadow: 0 0 20px 6px rgba(0, 0, 0, 1.0);
}
@media (max-width: 980px) {
  .box-form {
    flex-flow: wrap;
    text-align: center;
    align-content: center;
    align-items: center;
  }
}
.box-form div {
  height: auto;
}
.box-form .left {
  color: darkseagreen;
  background-size: cover;
  background-repeat: no-repeat;
  background-image:url('cdf.png');

 overflow: hidden;
  width:70%;
}
@media (max-width: 980px) {
  .box-form .left {
    width:100%;
  }
}
.box-form .left .overlay {
  padding: 30px;
  width: 100%;
  height: 100%;
  background: darkseagreen;
  overflow: hidden;
  box-sizing: border-box;
}
.box-form .left .overlay h1 {
  font-size: 10vmax;
  line-height: 1.5;
  font-weight: 900;
  margin-top: 40px;
  margin-bottom: 20px;
}
.box-form .left .overlay span p {
  margin-top: 30px;
  font-weight: 900;
}
.box-form .left .overlay{
  background: darkseagreen;
  color: black;
  margin-top: 10px;
  padding: 14px 50px;
  border-radius: 100px;
  display: inline-block;
  box-shadow: 0 3px 6px 1px rgba(, 0, 0, 1.0);
}
.box-form .left .overlay {
  background: darkseagreen;
  margin-left: 30px;
}
.box-form .left .image{
  width: 250px;
  margin-bottom: 30px;
  text-align: center;
  background-repeat: no-repeat;

}
.box-form .right {
  padding: 40px;
  width:30%;
  overflow: hidden;
}
@media (max-width: 980px) {
  .box-form .right {
    width: 100%;
  }
}
.box-form .right h5 {
  font-size: 3vmax;
  line-height: 0;
  text-align:center;
}
.box-form .right p {
  font-size: 14px;
  color: darkseagreen;
}
.box-form .right .inputs {
  margin-top:-20px;
}
.box-form .right inputs {
  width: 100%;
  padding: 10px;
  margin-top: 25px;
  font-size: 16px;
  border: none;
  outline: none;
  border-bottom: 2px solid darkseagreen;
}

.box-form .right button {
  float: right;
  color: darkseagreen;
  font-size: 16px;
  padding: 12px 35px;
  border-radius: 50px;
  display: inline-block;
  border: 0;
  outline: 0;
  box-shadow: 0px 4px 20px 0px green;
}

.label {
  display: block;
  position: relative;
  margin-left: 30px;
}

.btn{

  padding: 10px 60px;
  background: white;
  border: 0;
  outline: darkseagreen;
  cursor: pointer;
  font-size: 22px;
  font-weight: 500;
  border-radius: 30px;
}
.pop-up {
  width: 400px;
  background-color: white;
  position: absolute;
  top: 0%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0.1);
  text-align: center;
  padding: 0 30px 30px;
  color: white;
  visibility: hidden;
  transition: transform 0.4s, top 0.4s;
}
.open pop-up{
  visibility: visible;
  top: 50%;
  transform: scale(1.0);
}
.pop-up h2{
  font-size: 38px;
  font-weight: 500;
  margin: 30px 0 10px;
}
.pop-up button {
  width: 100%;
  margin-top: 50px;
  padding: 10px 0;
  color: lightseagreen;
  border: 0;
  outline: none;
  font-size: 18px;
  border-size: 4px;
  cursor: pointer;
  box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
}


</style>
</head>
<body>

<div class="box-form">
    <div class="left" style="background-image: url'cdf.png';">
        <div class="overlay">
        <h4 style="text-decoration: underline;">Othaya NG CDF BURSARY MANAGEMENT SYSTEM</h4>
         <p>Othaya Constituency is committed to provide<br/> bursaries to deserving students in the Constituency.<br/>
         The bursaries are available to Secondary school, <br/>College and University students in the Constituency
     .</p>
                 <section class="featured-courses vertical-column courses-wrap">
        <div class="container" style="font-family: 'Raleway', sans-serif; color=white;">
            <h3 style="text-decoration: underline;">How to apply</h3>
            <div class="steps">
                <div class="step">
                   
                    <div class="stepDescription">
                      <a><span>Step 1 (Registration)</span>
                      <span>Register to our online application system.Fill in the registration form and submit it.</span>
                </a></div>
              </div><br/>
            
                               <div class="step">
                  
                  <div class="stepDescription">
                      <span>Step 2 (Fill application form)</span>
                      <span>To apply, click on submit button.Fill in the application form by providing the required details.
                          Ensure that you have provided the correct details then submit the application.
                      </span>
                  </div><br/>
              </div>
              
              <div class="step">
                 
                  <div class="stepDescription">
                      <a><span><span>Step 3 Await to receive confirmation of bursary.
                      </span></a>
                    </div></div>
                    <div>
                    <p class="par" style="font-weight: bolder; text-align: center;"> VISION: EQUITABLE SOCIAL-ECONOMIC DEVELOPMENT<br>COUNTRYWIDE. <br>
                     Copyright 2022 by Hope Thairu.All Rights Reserved. </p>
                    </div>
                    <div class="left">
                      <div class="image">
                      <img src="/fund/application/cdf.png">
                    </div>
                  </div>
                    
            
        </div>
     </section>   
    </div>
        </div>
      

    
<div class="right">
  
    <div class="overlay">
        
        <div class="inputs">
          <h4 style="text-decoration: underline;">SIGN-UP PAGE</h4>
 

        <form method='post' enctype='multipart/form-data' action = "<?php echo$_SERVER['PHP_SELF']; ?>">
        <label for="name" ><i class="fa fa-user"></i>Username</label><br><br>
              <input type="text" name="name" id="name" required placeholder=""><br><br> <br>
                <div class="validation_message"></div>Email<br><br>
            <input type="Email" name="Emails" id="Email" required placeholder=""><br><br><br>
<div class="btn">
       <button type="submit" onclick="open popup()" a class="link" href="memberapplyfw" name="submit">Register</button>  



<?php
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if ($_SERVER['REQUEST_METHOD']=="POST" )
{
   

   $name = ($_POST ['name']);
    $Email = test_input($_POST['Emails']);
if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

    $query = "INSERT INTO  member (name, Email) VALUES ('".$name."','".$Email."')";

    if (mysqli_query($conn,$query)) {
        echo '<script> alert("Your details have been successfully captured! Thank you.  Click OK to Continue")</script>';
        echo "<script type = \"text/javascript\">
        window.location = (\"/fund/application/applicationform.php\")
        </script>";
              }
              else{
                echo '<script> alert("Invalid details")</script>';
              }
        
  }   

    
    
    mysqli_close($conn);

?>
  
    </div>


</form>
</body>
</html>  

