<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$Username = test_input($_POST["Username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM cdfofficial");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['Username'] == $Username) &&
			($user['password'] == $password)) {
				header("location: login1.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('Invalid Details')";
			echo "</script>";
			die();
		}
	}
}
?>

