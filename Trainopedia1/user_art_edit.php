<?php
include_once 'connect.php'; 
session_start();
if(!(isset($_SESSION['user_name'])))
{
	header('location:login.php');
}


	@$art_id1=$_REQUEST['art_id'];
	$_SESSION['ar1']=$art_id1;

$art_id=$_SESSION['ar1'];

$reg=$_SESSION['rid'];
$_SESSION['r']=$reg;
//echo $art_id;


if(isset($_POST['add']))
{
	$rdate = date('d/m/y');
	$hd=$_POST["ad"];
	$pc=$_POST["pc"];
$pk=$_POST["cont"];
$filename2=$_FILES['picn']['name'];

if($filename2=="")
{
	//echo "empty";
	$qry="UPDATE `art` SET `heading`='$hd',`content`='$pk',`image`='$pc' WHERE `art_id`='$art_id' ";
 
 $a=mysqli_query($con,$qry);
 ?> <script>
alert("Added Sucessfully.!!");
  window.location.href = "user_view.php";
</script>
<?php
}
else{
//echo "not empty";
$filename=$_FILES['picn']['name'];
$ext=substr($filename,strrpos($filename,'.')+1);
$f=date("Y-m-d-H-i-s")."-";
$f.="p"."-";
$f.=uniqid().".".$ext;
$ext=strtolower($ext);
if(move_uploaded_file($_FILES['picn']['tmp_name'], "package/".$f)) {

$qry="UPDATE `art` SET `heading`='$hd',`content`='$pk',`image`='$f' WHERE `art_id`='$art_id' ";
 
 $a=mysqli_query($con,$qry);
}else {
    $er_imgs="Failed";
}
 ?> <script>
alert("Added Sucessfully.!!");
  window.location.href = "user_view.php";
</script>
<?php
 
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
  <a class="active" href="user_home.php">Home</a> 
  <a href="user_view.php"> View Article </a>  
  <a href="logout.php">logout</a> 
  <a href="#about"></a>
</div>

<br><br>
<?php
		$results=mysqli_query($con,"SELECT `art_id`, `heading`, `content`, `image`, `aproval`, `date`, `regid` FROM `art` WHERE `art_id`='$art_id' ");
while($row=mysqli_fetch_array($results))
	
{
$pc= $row['image'];
//echo $pc;
?>


<br><br>
<div class="container" id="article-page-container-img">
<div class="row">
<div class="col-md-6 col-md-offset-3"><br>
<form action="#" method="post" enctype="multipart/form-data">
<center><img class="img-responsive" src="package/<?php echo $row['image'];?>"  alt="article image"></center>
<br><label>Choose image </label>
<input type="file"  title="Upload a valid image/*" name="picn"  id="fileToUpload" accept=".png, .jpg, .jpeg"><br>
<div class="row">

	</div>
</div>
<div class="col-md-12">
<a href="indexa.php" >
<img src="img/back.png" width="50" height="43" title="back" alt="back"></a>
<h3><input name="ad" type="text" value="<?php echo $row['heading'];?>"/> </h3>
<ul class="list-inline">
<li><i class="flaticon-calendar-with-spring-binder-and-date-blocks"></i> <span><?php echo $row['date'];?></span></li>
<li><i class="flaticon-like"></i>  <span>1500 k</span></li>
<li><i class="flaticon-eye"></i>  <span>400</span></li>
<li><i class="flaticon-comment-black-oval-bubble-shape"></i>  <span>500</span></li>
</ul>
<hr>
<input type="hidden" name="pc"  value="<?php echo $pc;?>">
<textarea rows="4" cols="130" name="cont"><?php echo $row['content'];?></textarea><br><br>
<center><input type='submit' name="add"  value='SAVE'></center></form>


</div>
</div>
</div><?php } ?>
      <div class="search-text"> 
       <div class="container">
         <div class="row text-center">
         <h2 class="sr-only">Subscribe</h2><br>
           <div class="form">
                <form id="search-form" class="form-search form-horizontal">
                    <input type="email" class="input-email" placeholder="Enter E-mail">
                    <button type="submit" class="btn-search">Subscribe</button>
                </form>
            </div>
        
          </div>         
       </div>     
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
