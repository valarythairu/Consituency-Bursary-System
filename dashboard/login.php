  
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect($servername="127.0.0.1",$username="root",$password="",$database="fund");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>


<html>

<head>
    <title> ADMIN portal </title>
    <style>
        .label {
            text-align: start;
            margin-left: 30px;
        }
        .box-form {
  margin: 0 auto;
  width: 80%;
  height: 500px;
  background: seagreen;
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
  background-image: "application/cdf.png";

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
.box-form .right .input{
  margin-top:-20px;
}
.box-form .right .input {
  width: 100%;
  padding: 10px;
  margin-top: 25px;
  font-size: 16px;
  border: none;
  outline: none;
  border-bottom: 2px solid darkseagreen;
}
.box-form .right p {
  font-size: 14px;
  color: darkseagreen;
}

.box-form .right .button {
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

.button {

  padding: 10px 60px;
  background: white;
  border: 0;
  outline: darkseagreen;
  cursor: pointer;
  font-size: 22px;
  font-weight: 500;
  border-radius: 30px;

}

    </style>
</head>


    <center>
        <div class= "box-form">
            <div class="left" style="background-image: url'application/cdf.png';">
            <div class="overlay">
        <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-decoration: underline;text-align: center; display: block ; font-weight: bold; font-size: 22px;">ADMIN LOGIN OTHAYA CONSTITUENCY NG-CDF BURSARY</h2>
                      <div class="image">
                      <img src="/fund/application/cdf.png">
                    </div>
        <p class="par" style="font-weight: bolder; text-align: center;"> VISION: EQUITABLE SOCIAL-ECONOMIC DEVELOPMENT<br>COUNTRYWIDE.</p>
                    
                </div>
              </div>
            
                    <div class= "right">
                        <div class = "input">
                              <div class=“container”>

      <form action="validate.php"  method="post">
                  <div class= "label">

                <label for="Username">Username </label><br>
                <input type="Username" name="Username" id="Username" required><br> <br>
        </div>
          
                     <div class= "label">
            <label for="password">password </label> <br><input type="password" name="password" id="password" required placeholder="">


            <br><br>
            <div class="btn"  id="button">
            <button style="border-radius: 150px; background-color:lightseagreen; color: black;">LOGIN</button><br>
            <div class="form-footer text-center mt-5">
           <p class="text-muted"><a href="index.php"><i class="ti-arrow-left"></i> Go Back</a></p>
                        </div>
            


</body>
</form>
</html>
  
