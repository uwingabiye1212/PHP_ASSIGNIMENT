<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
include("connect.php");
if(isset($_POST['insert'])){
$username=$_POST['username'];
$password=$_POST['password'];
$insert="insert into users(username,password) values('$username','$password')";
if(mysqli_query($conn,$insert)){
	echo "Signed up successfully";
}
else{
	echo"not signed in";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="" method="post">
	 Username:<input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="insert" value="insert">
</form>
</body>
</html>