
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

?>



<!DOCTYPE HTML>
<html>
<head>
<title>Decline a Corporate Category Bootstrap Responsive Website Template | Projects :: w3layouts</title>
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
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/lightcase.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel='stylesheet' type='text/css' />	
</head>
<body>
<div class="inner_banner_agileinfo" id="home">
	<div class="top_banner">
		<div class="top_header_agile_info_w3ls">
		  <nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">Phone<span>B</span>ook</a></h1>
				</div>
				
				
				
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
  <!--/w3_short-->
  <div class="tittle-agileinfo">
			<h3 class="title-w3-agileits">User dashboard</h3>
			</div>

<?php
// Echo session variables that were set on previous page

echo "userid:" . $_SESSION["userid`"] . ".";

?>
			
 <div class="services-breadcrumb">
		
		<div class="container">

       
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-body" >
                                <i class="fa fa-file fa-5x"></i>
                                <h3>Add contact</h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                             <a href="addcontact.php" <span data-letters="Home">Add contact</span></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body" >
                                <i class="fa fa-file-text-o fa-5x"></i>
                                <h3>View contact </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
							<a href="contacttable.php" <span data-letters="Home">View contact</span></a>
							  

                            </div>
                        </div>
                    </div>
					
					<div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-file fa-5x"></i>
                                <h3>modify </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
							<a href="modify.php" <span data-letters="Home">modify</span></a>
							  

                            </div>
                        </div>
                    </div>
                    
                </div>
			</div>









		</div>	
			
<!-- //gallery -->	
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

 <!-- JavaScripts -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- gallery-pop-up -->
<!-- light-case -->
	<script src="js/lightcase.js"></script>
	<script src="js/jquery.events.touch.js"></script>
	<script>
		$('.showcase').lightcase();
	</script>
<!-- //light-case -->

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
<!--Custom-Theme-files-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->












</body>
</html>