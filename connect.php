<?php
$server="localhost";
$user="root";
$passwor="";
$db="employees";
$conn=mysqli_connect($server,$user,$passwor,$db);
if(!$conn){
	echo "connect it is failed".mysqli_error();
}
?>