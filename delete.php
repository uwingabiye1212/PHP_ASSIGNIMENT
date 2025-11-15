<?php
session_start();
include("connect.php");
if(!isset($_SESSION['username'])){
    header("Location: login2.php"); 
    exit;
}
echo"Hello ".$_SESSION['username'];
if(isset($_GET['delete'])){
    
    $customer_id=$_GET['customer_id'];
    $delete="DELETE FROM customers WHERE customer_id='$customer_id'";
    if(mysqli_query($conn,$delete)){
     echo"Record deleted well";
    }
    else
    {
        echo"not yet deleted".mysql_error();
    }
    mysqli_close($conn);
}
?>
<html>
    <head></head>
    <title></title>
    <body>
        <div>
            <form action="" method="GET">
                customer_id:<input type="text" name="customer_id"><br>
                <input type="submit" name="delete" value="delete">
            </form>
        </div>
    </body>
</html>