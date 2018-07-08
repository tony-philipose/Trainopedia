
	
<?php
include_once 'connect.php';
session_start();
$id=$_SESSION["id"];
//echo($id);
//$sql1="UPDATE `login` SET `log_stat`='0' WHERE `login_id`='$id'";
//$result=mysqli_query($con,$sql1);
//header('location:index.php');
unset($_SESSION["user_name"]);
unset($_SESSION['passsword']);
unset($_SESSION['utype']);
unset($_SESSION['id']);
unset($_SESSION['rid']);
session_destroy();
header('Location:login.php');
 ?>		 
		 