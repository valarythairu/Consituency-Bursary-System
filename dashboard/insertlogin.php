 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once 'connectionlogin.php';
 session_start();
// Escape user inputs for security
if ($_SERVER['REQUEST_METHOD']=="POST" )

{
$Username= $_POST['username'];
$Password=$_POST['psw'];
}

 $query = "SELECT Username,Password FROM apply WHERE Username= '$Username' AND password='$Password'";
       $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result) > 0){

       echo '<script> alert("Member logged in Successfully")</script>';
        echo "<script type = \"text/javascript\">
        window.location = (\"topbar.php\")
        </script>";
  }else
  {
    echo '<script> alert("Username does not exist ")</script>';
  }
// Attempt insert query execution            
   {           
// Close connection
mysqli_close($conn);
}
?>