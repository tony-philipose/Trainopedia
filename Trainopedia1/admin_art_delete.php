<?php
include_once 'connect.php'; 
session_start();
//$i = $_SESSION['id'];

$art_id=$_REQUEST['art_id'];
//echo $art_id;
$sql1="UPDATE `art` SET `remove_status`='removed' WHERE `art_id`='$art_id' ";
$result=mysqli_query($con,$sql1);


header('Location:ad_view_all.php');
?>