
  
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
  padding: 10px 12px;
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

    <table>  <h1 style="text-decoration:underline;">Othaya Constituency NG-CDF BURSARY MANAGEMENT SYSTEM</h1>
     <br>  <div class="topnav">
                
                <span class="text"> <a href="/fund/dashboard/login1.php">Go Back</span></a>
                 <span class="text"><a href="/fund/dashboard/contactpages.html">Contact Us</span></a>
                 
                
                 
                 </a>
             </div>
                    
                    <br><br>
        <h2 style="text-align:center; text-decoration:underline;">Amounts Disbursed in Respective Wards</h2>

            <tr>
                                <th>Id no.</th>
                                    <th><b>Karima</b></th>
                                    <th><b>Iriani</b></th>
                                    <th><b>Chinga </b></th>
                                    <th><b>Mahiga</b></th>
                                    <th><b>Bursary Status</b></th>
                                
    </tr>
    

        
            <?php
// 
if(mysqli_num_rows ($result) > 0){ 
    while ($row = mysqli_fetch_assoc($result)){
        $disbanded = $row["disbandedamount"]; 
        {
            {
                { 
                    {
                        {
                            
                            ?>
                            
        <form action="<?php echo$_SERVER['PHP_SELF']; ?>" method="post">     

                     
<?php } }?>
  

 <?php
if(mysqli_num_rows ($result) > 0){ 
    while ($row = mysqli_fetch_assoc($result)) {
        {
            {
                {
        
         $disbanded = $row["disbandedamount"];
        $Ward = $row["Ward"];
        $status = $row["status"];

     }
 }

 ?><tr><td><?php echo $row['id']?></td>

<td><?php
 
       
          if($Ward == "A")
         {
            echo "$disbanded";
         } else {
            echo "N";
          }?></td>
         <td> <?php 
         if ($Ward == "B") {
            echo "$disbanded";

         }else {
            echo "N";
          }?></td>
          <td><?php
            if ($Ward == "C") {
            echo " $disbanded";

         }else {
            echo "N";
          }?></td>

         <td><?php
         if ($Ward == "D") {
            echo "$disbanded";

         }  else {
            echo "N";
          }
        }
          ?><?php ?></td>
          <td> <?php echo"$status"?></td>
        
           <?php
        } } } } } } }?>
        </tr>
        </table>
        <div id = "footer" style="font-weight: bold; text-align: center; margin-top: 90%; bottom: 10%;">
<a href="#" class="profile">
                <img src="img/cdf.png">
            </a>
        <p class="par"> VISION: EQUITABLE SOCIAL-ECONOMIC DEVELOPMENT<br>COUNTRYWIDE.
        Copyright 2022 by Hope Thairu.All Rights Reserved. </p>
                    
                </div>
        </div>
</body>
</html>