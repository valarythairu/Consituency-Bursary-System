    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once 'connectapply.php';
 session_start();
// Escape user inputs for security
if ($_SERVER['REQUEST_METHOD']=="POST" )

{
$Username= $_POST['Username'];
$password=$_POST['password'];


 $query = "SELECT * FROM member WHERE FirstName= '$Username' ";
       $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result) > 0){
      $sql = "INSERT INTO apply SET(Username,password) VALUES('$Username','$password')";
       echo '<script> alert("Member applied Successfully")</script>';
        echo "<script type = \"text/javascript\">
        window.location = (\"applicationform.php\")
        </script>";
  }else
  {
    echo '<script> alert("Username does not exist ")</script>';
  }
// Attempt insert query execution            
              
// Close connection
mysqli_close($conn);
}
?>