<?php

$host="localhost";
$user="root";
$pass="";
$dbname="mobile_service";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if($conn)
{
	echo"";
}
else
{
	echo"Connection is not Established<br>";
}

?>