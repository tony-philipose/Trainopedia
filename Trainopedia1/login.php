<?php
include_once 'connect.php'; 



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


<br><br>

<br><br>
<div class="container" id="article-page-container-img">
<form name="login" action="lcnt.php" method="post" id="form">
  
    
<header class="major">
	<center style="color: #DC6180;  font-weight: 900; font-size: 25px;">Login to your account</center></header>
    <center> <div> <input placeholder='Enter your Username'  name="uname" type="text" required title="Username must include Alphabats & digits (min 5 character)" style="width:320px; border:2px solid #DC6180;">

      </input>
    <br><br>
 

      <input placeholder='Enter your Password' name="pswd" type='password' required title="Enter a valid Password" style="width:320px; border:2px solid #DC6180;"><br>
		</input><br>
    
	
	
   
      <input type='submit' value='Log In' name="submit"></div></center><br>

   
	
	
	
	
  </form>
</div>
      <br>
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
