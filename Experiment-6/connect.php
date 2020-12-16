<?php

$username ="root";
$server ="localhost";
$password ="";
$db ="property";

$conn = new mysqli($server,$username,$password,$db);

if($conn->connect_error){
	die("Connection error " .$conn->connect_error);
}
else{

	echo "" ;
}
// mysqli_close($conn)
?>