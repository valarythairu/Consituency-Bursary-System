
  
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect($servername="127.0.0.1",$username="root",$password="",$database="fund");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{

//SQL QUERY
$query = "SELECT * FROM applicationform";
$result = mysqli_query($link, $query);
}
?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Bursary Application Status</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        .main {
          background: lightgray;
          padding: 1%;
            }      
              table {
              content: "";
              position: absolute;
              left: 50%;
              right: 50%;
              top: 50%;
              width: 90%;
              height: 85%;
              background: linear-gradient(to right, rgba(25, 57, 76, 0.6), rgba(25, 57, 76, 0.6)), url("") center repeat;
              z-index: 0;
             transform: translateX(-50%) rotate(0deg);
             margin: 0 auto;
             font-size: large;
             border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
            background-image: url'cdf.png';
        }
 
        th,
        td {
            font-weight: bolder bolder;
            border: 1px solid black;
            padding: 20px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
     }
     /* Add a black background color to the top navigation */
.topnav {
  background-color: black;
  overflow: hidden;
  
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

        }
    </style>
</head>
 
<body>
    <div class="main">
    <section>

                   
                    <h1>Othaya Constituency NG-CDF BURSARY MANAGEMENT SYSTEM</h1>
                    <div class="topnav">
                
                        <span class="text"> <a href="/fund/dashboard/login1.php">Go Back</span></a>
                         <span class="text"><a href="/fund/dashboard/contactpages.html">Contact Us</span></a>
                         
                        
                         
                         </a>
                     </div>

        <h1 style="text-align:center; text-decoration:underline;">Applicants' Qualifications</h1>
    
        <!-- TABLE CONSTRUCTION -->
        <table>
          
            <tr>
                <th>Id no.</th> 

               <th> Level of Education </th>
                <th>Student's learning conditions</th>
                <th>Ward</th>
                <th> Family Background </th>
                <th>Academic performance</th>
                <th> Total Score </th>
                

            </tr>
        

        <?php
// 
if(mysqli_num_rows ($result) > 0){ 
    while ($row = mysqli_fetch_assoc($result)){ 
        {
            {
                { 
                    {
                        {
                            {
                                {
                                    {
                                        {
                                            {
                                                {
                                                    {
                                                        { 
                                                            {
                                                              {
                                                                
                                                    
                                                            
                                                            
                                                        
                                                        
                                                

            
}

    
?>
    <tr>
        <form action="<?php echo$_SERVER['PHP_SELF']; ?>" method="post">     

                               <td><?php echo $row['id'];?></td>
                     
<?php } }?>
  
        
  <td>        
 <?php

          if($row['level'] == 20)
         {
            echo "20%";
         }  
         elseif ($row['level']== 15) {
            echo "15%";
         }
         elseif ($row['level'] == 20) {
            echo "20%";

         }  
         elseif ($row['level'] == 15) {
            echo "15%";
         }  
          elseif ($row['level'] == 10) {
            echo "10%";
          }
          elseif ($row['level'] == 10) {
            echo "10%";
          }
          else {
            echo "0%";
          }
          ?><?php }?></td>
        
           <?php
             ?>    
        
   <td> <?php
            if($row['study'] == 20)
         {
            echo "20%";
         }  
         else if ($row['study'] == 15){
            echo "15%";
         }
         else {
            echo "0%";
         }
         ?><?php } }?></td>

     
        <td>  <?php
       if ($row['Ward']== 'A') {
            echo "20%";
         }
         elseif ($row['Ward'] == 'B') {
            echo "20%";

         }  
         elseif ($row['Ward'] == 'C') {
            echo "20%";
         }  
          elseif ($row['Ward'] == 'D') {
            echo "20%";
          }
          else {
            echo "0%";
        ?><?php } } } ?> </td>

    
         
         

          <td> <?php

          if($row['Family'] == 20)
         {
            echo "20%";
         }  
         elseif($row['Family'] == 15){
            echo "15%";
         }
         elseif ($row['Family'] == 15) {
            echo "15%";

         }  
         elseif ($row['Family'] == 10){
            echo "10%";
         }  
          elseif ($row['Family'] == 15){
            echo "15%";
          }
          else {
            echo "0%";
          }
          ?><?php } }?></td>

          
         <td> <?php

          if($row['Academicperformance'] == 10)
         {
            echo "10%";
         }  
         elseif($row['Academicperformance'] == 10){
            echo "10%";
         }
         elseif ($row['Academicperformance'] == 10) {
            echo "10%";

         }  
         elseif ($row['Academicperformance'] == 5){
            echo "5%";
         }  
          elseif ($row['Academicperformance'] == 5){
            echo "5%";
          }
          else {
            echo "0%";
          }
          ?></td>
        <td> <?php 
          $row["Ward"] = array (
                                    'A' => 20,
                                    'B' =>  20,
                                    'C' =>  20,
                                    'D' =>  20,
                                    );
                                     $row["Ward"] ['A']; 
                                $row["Ward"] ['B']; 
                                $row["Ward"] ['C']; 
                                $row["Ward"] ['D']; 
        
 
    
                                $total = $row['level'] + $row['study'] + $row['Family'] + $row['Academicperformance'];
                                $totol = + $row["Ward"] ['A'] or + $row["Ward"] ['B'] or + $row["Ward"] ['C'] or + $row["Ward"]['D'];
                                $totil = $total + $totol; 
                                $percentage = ($totil);
                               echo  " $percentage% ";
                                ?> <?php } } } } } } }?></td>
          
            </tr>



<?php

if ($_SERVER['REQUEST_METHOD']=="POST" )
{
   

    $level = $_REQUEST['td'];
    $study = $_REQUEST['td'];
    $Ward = $_REQUEST['td'];
    $Family = $_REQUEST['td'];
    $siblings = $_REQUEST['td'];
    $Academicperformance = $_REQUEST['td'];
   

    $query = "INSERT INTO  result (level, study,Ward,Family,siblings,Academicperformance) VALUES ('".$td."','".$td."','".$td."','".$td."','".$td."','".$td."')";

    if (mysqli_query($link,$query)) {
        echo '<script> alert("Member registered Successfully.Click OK to continue")</script>';
        echo "<script type = \"text/javascript\">
        window.location = (\"/fund/application/result.php\")
        </script>";
              }
              else{
                echo '<script> alert("Not registered ")</script>';
              }
        
     }   

    
    
    mysqli_close($link);

?><?php  ?>



</table><br><br><br><br><br><br><br>
<div id = "footer" style="font-weight: bold; text-align: center; margin-top: 90%; bottom: 10%;">
<a href="#" class="profile">
                <img src="cdf.png">
            </a>
        <p class="par"> VISION: EQUITABLE SOCIAL-ECONOMIC DEVELOPMENT<br>COUNTRYWIDE.
        Copyright 2022 by Hope Thairu.All Rights Reserved. </p>
                    
                </div>  
           
    
</div>

</section>
</div>
</body>
</form>
</html>
