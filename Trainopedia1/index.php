<?php
include_once 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="img/favicon.png" rel="icon">
  <title>Trainopedia</title>
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

  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
			  <img class="img-responsive" src="img/logo.png" alt="logo">
            </div>
            <div class="intro-para text-center start">
              <p class="big-text">Lorem ipsum dolor sit amet</p>
              <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto<br>Laudantium enim repellat sapiente quos architecto</p>
              <a href="#courses" class="btn get-start btn-lg">GET STARTED</a>
            </div>
            <a href="#courses" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Flip cards-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Article</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
	
    <div class="container"> <div class="row">
      <table><?php
		$results=mysqli_query($con,"SELECT `art_id`, `heading`, `content`, `image`, `aproval`, `date`, `regid` FROM `art` WHERE `aproval`='aprove' and `remove_status`='on' ");
echo "<tr>";
		$ct=0; 
		while($row=mysqli_fetch_array($results))	
{
	$ct=$ct+1;
 echo "<td>";
	?> 
	 <div class="col-md-12 padleft-right">
       
          <figure class="imghvr-fold-up">
           <!-- <img src="http://via.placeholder.com/1080x720" class="img-responsive">-->
			<img src="package/<?php echo $row['image'];?>" alt="img" height="300" width="600" class="img-responsive" >
            <figcaption>
              <h3><?php echo $row['heading'];?></h3>
			  <?php
$t= $row['content'];
$phrase = $row['content'];
$con = implode(' ', array_slice(str_word_count($phrase, 2), 0, 5));

 ?>
              <p><?php echo $con; ?></p>
            </figcaption>
			<a href="article_view.php?art_id=<?php echo $row['art_id'];?>" ></a>
            
          </figure>
		  
		  </div>
       <?php
if($ct%3==0)
{
	
	echo "</tr>";
	echo "<tr>";	
}
 } ?></table>
      </div>
  
</div>	
  </section>
  <!--Flip cards-->
<div class="container" id="latest-section">
<div class="row">
<!-- =================================================
                left column
================================================= -->
<div class="col-lg-8 latest-col">
<h2>LATEST ARTICLE</h2>
<br>
<div class="row">
<div class="col-lg-6">
<img class="img-responsive" src="http://via.placeholder.com/1255x820" alt="">
<br>
<a href="#"><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h5></a>
<ul class="list-inline">
<li><a href=""><span class="label label-important arrowed-in">READ MORE</span></a></li>
<li>March 25, 2018</li>
<br><br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.........</p>
</ul>
</div>
<div class="col-lg-6 fffx">
   <img class="img-responsive" src="http://via.placeholder.com/100x81" alt="">
   <a href="#"><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <span><p>March 25, 2018</p></span></h5></a>
</div>
<br>
<div class="col-lg-6 fffxx">
   <img class="img-responsive" src="http://via.placeholder.com/100x81" alt="">
   <a href="#"><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <span><p>March 25, 2018</p></span></h5></a>
</div>
<br>
<div class="col-lg-6 fffxx">
   <img class="img-responsive" src="http://via.placeholder.com/100x81" alt="">
   <a href="#"><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <span><p>March 25, 2018</p></span></h5></a>
</div>
<div class="col-lg-6 fffxx">
   <img class="img-responsive" src="http://via.placeholder.com/100x81" alt="">
   <a href="#"><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <span><p>March 25, 2018</p></span></h5></a>
</div>
</div>
<div class="container" id="pagination-section">
<div class="row text-center">
<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
  <ul class="pagination">
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
	<li><a href="#">6</a></li>
    <li><a href="#">7</a></li>
    <li><a href="#">8</a></li>
    <li><a href="#">9</a></li>
    <li><a href="#">10</a></li>
  </ul>
</div>
</div>
</div>
<hr>
<h2>POPULAR ARTICLES</h2>
<br>
<div class="row" id="flip-cards">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="http://via.placeholder.com/1080x720" class="img-responsive">
            <figcaption>
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            </figcaption>
            <a href="#"></a>
          </figure>
		<div class="row">
		  	<a href=""><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</h5></a>
			<ul class="list-inline">
			<li><span class="label label-default">Sports</span></li>
			<li><p>march 25, 2018</p></li>
			</ul>
		</div>	
        </div>
		<div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="http://via.placeholder.com/1080x720" class="img-responsive">
            <figcaption>
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</p>
            </figcaption>
            <a href="#"></a>
          </figure>
		<div class="row">
		  	<a href=""><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</h5></a>
			<ul class="list-inline">
			<li><span class="label label-default">Sports</span></li>
			<li><p>march 25, 2018</p></li>
			</ul>
		</div>	
        </div>
		<div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="http://via.placeholder.com/1080x720" class="img-responsive">
            <figcaption>
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</p>
            </figcaption>
            <a href="#"></a>
          </figure>
		<div class="row">
		  	<a href=""><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</h5></a>
			<ul class="list-inline">
			<li><span class="label label-default">Sports</span></li>
			<li><p>march 25, 2018</p></li>
			</ul>
		</div>
        </div>
</div><br><br>
<div class="row" id="flip-cards">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="http://via.placeholder.com/1080x720" class="img-responsive">
            <figcaption>
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            </figcaption>
            <a href="#"></a>
          </figure>
		<div class="row">
		  	<a href=""><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</h5></a>
			<ul class="list-inline">
			<li><span class="label label-default">Sports</span></li>
			<li><p>march 25, 2018</p></li>
			</ul>
		</div>
        </div>
		<div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="http://via.placeholder.com/1080x720" class="img-responsive">
            <figcaption>
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</p>
            </figcaption>
            <a href="#"></a>
          </figure>
		<div class="row">
		  	<a href=""><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</h5></a>
			<ul class="list-inline">
			<li><span class="label label-default">Entertainment</span></li>
			<li><p>march 25, 2018</p></li>
			</ul>
		</div>
        </div>
		<div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="http://via.placeholder.com/1080x720" class="img-responsive">
            <figcaption>
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</p>
            </figcaption>
            <a href="#"></a>
          </figure>
		  <div class="row">
		  	<a href=""><h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit....</h5></a>
			<ul class="list-inline">
			<li><span class="label label-default">Lifestyle</span></li>
			<li><p>march 25, 2018</p></li>
			</ul>
		  </div>
        </div>
</div>
<br><br>
</div>
<!-- =================================================
                Right column
================================================= -->
<div class="col-lg-4 hhhp" id="social-second-col"><br>
<h2>FOLLOW US</h2>
<div class="row">
<div class="index-content text-center">
            <a href="#">
                <div class="col-lg-4 col-md-4 col-sm-4" id="social-second-col">
                    <div class="card-facebook"><br>
					<i class="flaticon-facebook-logo"></i>
					<h5>10,000</h5>
					<p>Followers</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card-twitter"><br>
					<i class="flaticon-twitter-logo-silhouette"></i>
					<h5>10,000</h5>
					<p>Subscribers</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card-rss"><br>
					<i class="flaticon-rss-symbol"></i>
					<h5>10,000</h5>
					<p>Subscribers</p>
                    </div>
                </div>
            </a>
</div>
</div>
<div class="row">
<div class="index-content text-center">
            <a href="#">
                <div class="col-lg-4 col-md-4 col-sm-4" id="social-second-col">
                    <div class="card-linkedin"><br>
					<i class="flaticon-linkedin"></i>
					<h5>10,000</h5>
					<p>Followers</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card-google-plus"><br>
					<i class="flaticon-google-plus-1"></i>
					<h5>10,000</h5>
					<p>Followers</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card-instagram"><br>
					<i class="flaticon-instagram-logo"></i>
					<h5>10,000</h5>
					<p>Subscribers</p>
                    </div>
                </div>
            </a>
</div>
</div>
<br><br><br>
	<div class="row">
		<div class="col-md-12">
<div class="card">
            <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#Viewed" aria-controls="Viewed" role="tab" data-toggle="tab">Most Viewed</a></li>
            <li role="presentation"><a href="#Comments" aria-controls="Comments" role="tab" data-toggle="tab">Comments</a></li>
            <li role="presentation"><a href="#Catagories" aria-controls="Catagories" role="tab" data-toggle="tab">Catagories</a></li>
            </ul>
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="Viewed">
			<div class="row">
			<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<img src="http://via.placeholder.com/100x81" alt="">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<a href="#"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6></a>
			<ul class="list-inline">
			<li><i class="flaticon-eye"></i> <span>00</span></li>
			<li><i class="flaticon-like"></i> <span>00,000</span></li>
			</ul>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<img src="http://via.placeholder.com/100x81" alt="">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<a href="#"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6></a>
			<ul class="list-inline">
			<li><i class="flaticon-eye"></i> <span>00</span></li>
			<li><i class="flaticon-like"></i> <span>00,000</span></li>
			</ul>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<img src="http://via.placeholder.com/100x81" alt="">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<a href="#"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6></a>
			<ul class="list-inline">
			<li><i class="flaticon-eye"></i> <span>00</span></li>
			<li><i class="flaticon-like"></i> <span>00,000</span></li>
			</ul>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<img src="http://via.placeholder.com/100x81" alt="">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<a href="#"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6><a>
			<ul class="list-inline">
			<li><i class="flaticon-eye"></i> <span>00</span></li>
			<li><i class="flaticon-like"></i> <span>00,000</span></li>
			</ul>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<img src="http://via.placeholder.com/100x81" alt="">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<a href="#"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6><a>
			<ul class="list-inline">
			<li><i class="flaticon-eye"></i> <span>00</span></li>
			<li><i class="flaticon-like"></i> <span>00,000</span></li>
			</ul>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<img src="http://via.placeholder.com/100x81" alt="">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<a href="#"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6><a>
			<ul class="list-inline">
			<li><i class="flaticon-eye"></i> <span>00</span></li>
			<li><i class="flaticon-like"></i> <span>00,000</span></li>
			</ul>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<img src="http://via.placeholder.com/100x81" alt="">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<a href="#"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6><a>
			<ul class="list-inline">
			<li><i class="flaticon-eye"></i> <span>00</span></li>
			<li><i class="flaticon-like"></i> <span>00,000</span></li>
			</ul>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<img src="http://via.placeholder.com/100x81" alt="">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<a href="#"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6><a>
			<ul class="list-inline">
			<li><i class="flaticon-eye"></i> <span>00</span></li>
			<li><i class="flaticon-like"></i> <span>00,000</span></li>
			</ul>
			</div>
			</div>
			</div>
			
            <div role="tabpanel" class="tab-pane" id="Comments">
			<div class="row">
			<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<a href="#"><img src="http://via.placeholder.com/100x81" alt=""></a>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6>
			 <span><p>March 25, 2018</p></span>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<a href="#"><img src="http://via.placeholder.com/100x81" alt=""></a>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6>
			 <span><p>March 25, 2018</p></span>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<a href="#"><img src="http://via.placeholder.com/100x81" alt=""></a>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6>
			 <span><p>March 25, 2018</p></span>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<a href="#"><img src="http://via.placeholder.com/100x81" alt=""></a>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6>
			 <span><p>March 25, 2018</p></span>
			</div>
			<br><br><br><br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<a href="#"><img src="http://via.placeholder.com/100x81" alt=""></a>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</h6>
			 <span><p>March 25, 2018</p></span>
			</div>
			</div>
			</div>
            <div role="tabpanel" class="tab-pane" id="Catagories">
			<div class="row">
			<div class="col-lg-12 col-md-12 list-category text-primary">
				<div class="list-group">
				<a href="#" class="list-group-item"><div class="truncate pull-left">Business</div><span class="badge">50</span></a>
				<a href="#" class="list-group-item"><div class="truncate pull-left">World</div><span class="badge">50</span></a>
				<a href="#" class="list-group-item"><div class="truncate pull-left">Politics</div><span class="badge">50</span></a>
				<a href="#" class="list-group-item"><div class="truncate pull-left">Sports</div><span class="badge">50</span></a>
				<a href="#" class="list-group-item"><div class="truncate pull-left">Tech</div><span class="badge">50</span></a>
				<a href="#" class="list-group-item"><div class="truncate pull-left">Entertainment</div><span class="badge">50</span></a>
				<a href="#" class="list-group-item"><div class="truncate pull-left">Lifestyle</div><span class="badge">50</span></a>
				<a href="#" class="list-group-item"><div class="truncate pull-left">Health</div><span class="badge">50</span></a>
				</div>
			</div>
			</div>
			</div>
            </div>
</div>
        </div>
	</div>
	<br><br>
</div>
</div>
</div>
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
			   <div class="col-md-6 col-md-offset-4 col-lg-5 col-lg-offset-4 col-sm-12 col-xs-12"><br>
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
         	<p>Copyright © 2018 All rights reserved <a href="https://aiesys.com">Aiesys.com</a></p>
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
