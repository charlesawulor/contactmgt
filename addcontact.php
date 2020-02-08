<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
session_start();

if(isset($_POST['sub']))
{
	$userid=$_SESSION['userid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$add=$_POST['add'];
	$phn=$_POST['phn'];
	$mail=$_POST['mail'];
	
	

		include("include/dbconnect.php");
		$ff="insert into contacttbl(userid,firstname,lastname,address,phone,email)values('$userid','$fname','$lname','$add','$phn','$mail')";
        if($result=$conn->query($ff))
			
		{
         echo"<script>alert('contact added successfully')</script>";	
        }	

         else
         {
			 echo"<script>alert('not successfull')</script>";
	 }
	
}
	



?>




<!DOCTYPE HTML>
<html>
<head>
<title>Dear Diary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Decline Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG,sonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
<!--Custom-Theme-files-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /><!--Blog slider-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/style.css" rel='stylesheet' type='text/css' />	
</head>
<div class="inner_banner_agileinfo" id="home">
	<div class="top_banner">
		<div class="top_header_agile_info_w3ls">
		  <nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					
					<h1><a class="navbar-brand" href="index.html">Phone<span>B</span>ook</a></h1>
				</div>
				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
           
		   
				<!-- Collect the nav links, forms, and other content for toggling -->
				
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_3"> <a href="contactmgt.php" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">Logout</span></a></li>
								
							</ul>
						</nav>
					</div>
					</nav>
				</div>
				
				
		</div>
		
		 
    </div>


 </div>
 
 
 <div class="row" style="text-align:center;">
                <p> <h3 class="title-w3-agileits">Add contact</h3>	
                               <form action="addcontact.php" method="POST"><br><br>
       
                                   firstname<br><input  type="text" name="fname"><br>
                                   lastname<br><input  type="text" name="lname"><br>
								   address<br><input  type="text" name="add"><br>
								   phone<br><input  type="text" name="phn"><br>
								   email<br><input  type="text" name="mail"><br>
                                   
                                   <input type="submit" name="sub" value="Save">
         
                               </form>
	
	  
               
</div>
  
  
 
 
 
 
 
 
 
 </div>
 

 
 <!-- footer -->
	<div class="footer">
		<div class="social-agileinfo">
		<a href="#" class="social-icon-w3-agile facebook">
			<i class="fa fa-facebook" aria-hidden="true"></i>
		</a>
		
		<a href="#" class="social-icon-w3-agile twitter">
			<i class="fa fa-twitter" aria-hidden="true"></i>
		</a>
		<a href="#" class="social-icon-w3-agile rss">
			<i class="fa fa-instagram" aria-hidden="true"></i>
		</a>
		<div class="clearfix"></div>
	</div>
		
	</div>
<!-- //footer -->
 
 
 
 
 
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
																	
	});
</script>

<!--/script-->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- pop-up-box -->    
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" property="" media="all" />
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box -->
<div id="small-dialog" class="mfp-hide">
	<iframe src="https://player.vimeo.com/video/67001156"></iframe>
</div>
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
																	
	});
</script>

<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
<!-- //flexSlider -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

<!--Custom-Theme-files-->
<!-- required-js-files-->
		<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :3,
									itemsDesktop : [800,2],
									itemsDesktopSmall : [414,1],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination : true,
									
							      });
								  
							    });
							    </script>
			 <!--//required-js-files-->
			 <!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed:1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->








</body>
</html>