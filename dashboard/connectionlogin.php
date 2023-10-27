<?php

$servername="127.0.0.1";
$username="root";
$password="";
$database="fund";

$conn =mysqli_connect($servername,$username,$password, $database);

if(!$conn)
{
    die("Sorry Connection Not Available!" .mysql_connect_error());
}
?>