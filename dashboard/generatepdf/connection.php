<?php
Class dbObj{
    var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "fund";
	var $conn;
// Check connection
	function getConnstring() {
$conn = mysqli_connect($servername="127.0.0.1",$username="root",$password="",$database="fund");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());

}else{
//SQL QUERY
$query = "SELECT * FROM applicationform";
$result = mysqli_query($link, $query);
}
}
}
?>		
