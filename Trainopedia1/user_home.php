<?php
include_once 'connect.php'; 
session_start();

//echo $reg;
if(!(isset($_SESSION['user_name'])))
{
	header('location:login.php');
}
$reg=$_SESSION['rid'];
$_SESSION['r']=$reg;
//echo $reg;
if(isset($_POST['add']))
{
	$rdate = date('d/m/y');
	$hd=$_POST["ad"];
$pk=$_POST["adpk"];
$filename2=$_FILES['picn']['name'];
//$pim=$_POST["picn"];
if($filename2=="")
{
$qry="INSERT INTO `art`(`heading`, `content`, `image`, `aproval`, `date`, `regid`, `remove_status`) 
VALUES('$hd','$pk','noimage.jpg','request','$rdate','$reg','on')";
 
 $a=mysqli_query($con,$qry);
 
 ?> <script>
alert("Added Sucessfully.!!");
  window.location.href = "user_home.php";
</script>
<?php	
}
else
{

$filename=$_FILES['picn']['name'];
$ext=substr($filename,strrpos($filename,'.')+1);
$f=date("Y-m-d-H-i-s")."-";
$f.="p"."-";
$f.=uniqid().".".$ext;
$ext=strtolower($ext);
if(move_uploaded_file($_FILES['picn']['tmp_name'], "package/".$f)) {

$qry="INSERT INTO `art`(`heading`, `content`, `image`, `aproval`, `date`, `regid`, `remove_status`) 
VALUES('$hd','$pk','$f','request','$rdate','$reg','on')";
 
 $a=mysqli_query($con,$qry);
 
 ?> <script>
alert("Added Sucessfully.!!");
  window.location.href = "user_home.php";
</script>
<?php
 
} else {
    $er_imgs="Failed";
}
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="img/favicon.png" rel="icon">
  <title>Trainopedia Article Page</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="font/flaticon.css"> 
      <script src="js/jquery.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<div style="background-color: #333;
    overflow: hidden;padding: 16px 18px;">
  <a class="active" href="#">Home</a> 
  <a href="user_view.php"> View Article </a>  
  <a href="logout.php">logout</a> 
  <a href="#about"></a>
</div>

<br><br>

<br><br>
<div class="container" id="article-page-container-img">
<div class="row">
<form enctype="multipart/form-data" name="adpack" action="#" method="post" id="form">
<center><h3>Add Your Article</h3><br>
<input type="text" name="ad" placeholder="Enter Article name" required=" " title="Enter a valid Package name" style="width: 310px;  border:.5px solid #0000cc;"><br><br>
<input type="text" name="adpk" placeholder="Enter details" required=" " title="Enter a valid Package name" style="width: 910px;   border:.5px solid #0000cc;"><br><br>
	<label>Choose package icon: </label><input type="file" title="Upload a valid image/*"name="picn" id="fileToUpload" accept=".png, .jpg, .jpeg"><br><br>
		<input type='submit' name="add"  value='SAVE'></center></form>

</div>
</div>
      <div class="search-text"> 
           
	</div><br>
	  <!--Footer-->
	    <footer>
        <div class="container" id="social-center">
               <div class="row text-center">
			   <div class="col-md-6 col-md-offset-4 col-lg-5 col-lg-offset-4 col-sm-6 col-sm-offset-2 col-xs-12"><br>
	<ul class="social-nav">
		<li><a href="#" target="" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>	
	    <li><a href="#" target="" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>	
		<li><a href="#" target="" title="Linkedin" rel="nofollow" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#" target="" title="Google plus" rel="nofollow" class="google"><i class="fa fa-google-plus"></i></a></li>				
		<li><a href="#" target="" title="mail" rel="nofollow" class="envelope"><i class="fa fa-envelope"></i></a></li>	

    </ul>
                </div>
        </div> 
		</div>
    </footer>
	    <div class="copyright">
     <div class="container">
         <div class="row text-center">
         	<p>Copyright © 2018 All rights reserved  <a href="https://aiesys.com">Aiesys.com</a></p>
         </div>
 	   </div>
    </div>
  <!--/ Footer-->
 <script type="text/javascript">
				$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
				$().UItoTop({ easingType: 'easeOutQuart' });
				});
		</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script>
</script>

  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body>
</html>
