<?php

include_once 'connectionshortlist.php';

if (isset($_POST['submit']) )
{
    $username = $_POST['Username'];
    $Application_status = $_POST['Application_status'];
    $amountallocated = $_POST['amountallocated'];
    $Description = $_POST['Description'];
    
    $sql = "INSERT INTO  shortlist(Username, Application_status, amountallocated, Description) VALUES ('$Username', '$Application_status, amountallocated, Description')";

    if (mysqli_query($conn, $sql)) 
    {
        header('location: topbar.php');
    } 
    else
    {
        echo "Sorry Connection Not Available!";
    }
    mysqli_close($conn);
}
?>