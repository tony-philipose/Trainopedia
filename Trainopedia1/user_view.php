<?php
include_once 'connect.php'; 
session_start();
$i = $_SESSION['id'];
$reg=$_SESSION['r'];
//echo $i;
if(!(isset($_SESSION['user_name'])))
{
	header('location:login.php');
}


$sql11="SELECT `regid` FROM `login` WHERE `login_id`='$i' ";
$re=mysqli_query($con,$sql11);
$d=mysqli_fetch_array($re);
$idd=$d['regid'];
//echo $idd;

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
  <a class="active" href="user_home.php"></a> 
  <a href="user_home.php">Add article </a>
<a href="logout.php">logout</a>   
 <a href="#contact"> </a> 
  <a href="#about"></a>
</div>

<br><br>

<br><br>
<?php
		$results=mysqli_query($con,"SELECT `art_id`, `heading`, `content`, `image`, `aproval`, `date`, `regid` FROM `art` WHERE `aproval`='aprove' and `regid`='$idd' and `remove_status`='on' ");
while($row=mysqli_fetch_array($results))
	
{

?>
<div class="container" id="article-page-container">
<div class="row">
<div class="col-md-6">

<img src="package/<?php echo $row['image'];?>" alt="img" class="img-responsive" height="840" width="420">
<br>
<div class="row">
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
<h4 class="text-right"> <i class="flaticon-sharethis-logo"></i> </h4>
</div>
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <ul class="social-nav-share">
		<li><a href="#" target="" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>	
		<li><a href="#" target="" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>	
        <li><a href="#" target="" title="Linkedin" rel="nofollow" class="linkedin"><i class="fa fa-linkedin"></i></a></li> 
        <li><a href="#" target="" title="Google plus" rel="nofollow" class="google"><i class="fa fa-google-plus"></i></a></li>		
    </ul>
</div>
	</div>
</div>
<?php
$t= $row['content'];
$h=(int)ceil(count($words = str_word_count($t,1))/4);
$st1=implode('',array_slice($words,0,$h));
$str2=implode('',array_slice($words,1,$h));
$str3=implode('',array_slice($words,2,$h));
$str4=implode('',array_slice($words,$h));

 ?>
<div class="col-md-6">
<h3><?php echo $row['heading'];?></h3>
<ul class="list-inline">
<li><i class="flaticon-calendar-with-spring-binder-and-date-blocks"></i> <span><?php echo $row['date'];?></span></li>
<li><i class="flaticon-like"></i>  <span>1500 k</span></li>
<li><i class="flaticon-eye"></i>  <span>400</span></li>
<li><i ></i>  <span><a href="user_art_edit.php?art_id=<?php echo $row['art_id'];?>" >EDIT</a></span></li>
<li><i ></i>  <span><a href="user_art_delete.php?art_id=<?php echo $row['art_id'];?>" >DELETE</a></span></li>
</ul>
<hr>
<p><?php echo $t?></p>

</div>

</div>
</div>
</div>
</br>
<?php }?>
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
