<?php
include_once 'connect.php';
session_start();

if(isset($_POST['submit']))
{
	
$a=$_POST["uname"];

$b=$_POST["pswd"];

//$sql="SELECT * FROM `login`";
//$sql="SELECT `login_id`, `username`, `pswd`, `regid`, `type`, `log_status` FROM `login` where `username`='$a' and  `pswd`='$pwd' ";
$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['login_id'];
	$reg=$row['regid'];
	?>
	
	<?php
	if($a==$row['username']&&$b==$row['pswd']&&$row['type']=='admin')
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='admin';
		 $_SESSION['rid']=$reg;
		 $_SESSION['id']=$i;
		 
		 $sql1="UPDATE `login` SET `log_status`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:admin_home.php');
		 }
	elseif($a==$row['username']&&$b==$row['pswd']&&$row['type']=='user')
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='user';
		 $_SESSION['rid']=$reg;
		 $_SESSION['id']=$i;
		 
		 $sql1="UPDATE `login` SET `log_status`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:user_home.php');
		 }
		 
	  
		 
	/* else{
		echo "<script>if(confirm('Username and Password are incorect!!!!')){document.location.href='login.php'}else{document.location.href='login.php'};</script>";
	     } */
		 
	?>	
	
	<?php

}
}
?> 
