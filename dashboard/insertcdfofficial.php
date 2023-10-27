<?php

include_once 'connectioncdfofficial.php';

if (isset($_POST['submit']) )
{
    $username = $_POST['Username'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO  login(username, password) VALUES ('$Username', '$password')";

    if (mysqli_query($conn, $sql)) 
    {
        header('location: cdfofficial.php');
    } 
    else
    {
        echo "Sorry Connection Not Available!";
    }
    mysqli_close($conn);
}
?>