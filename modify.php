




<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--
<?php
session_start();
if(!isset($_SESSION['userid']))
{
	header("location:userlogin.php");
}
require_once('include/dbconnect.php');
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
<body>
<div class="inner_banner_agileinfo" id="home">
	<div class="top_banner">
		<div class="top_header_agile_info_w3ls">
		  <nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					
					<h1><a class="navbar-brand" >Phone<span>B</span>ook</a></h1>
				</div>
				
				
				
				<!-- Collect the nav links, forms, and other content for toggling -->
			
				
		</div>
 </div>
 </div>
 
                   <div class='row' style='text-align:center;'>
 
		                    <form action='' method='POST' ><br><br>
								
                                  CONTACT ID TO UPDATE<br><input  type='text' name='conid'><br>
                           
                                   <input type='submit' name='sear' value='Search'><hr>
								  
								   
								   
								   </form>
						
								   
								   
					 </div>
								   
								   
								   
 <table border="1" cellpadding="5" bgcolor="#f1eaee" width="100%" style="margin-bottom:50px; margin-top:50px;text-align:center;" >		 
				 
	

                    <?php
//search records in the database
include("include/dbconnect.php");
if(isset($_POST['sear']))
{
	$conid=$_POST['conid'];
	
	$sear="select * from contacttbl where contactid='$conid'";
	$run=$conn->query($sear);
	while($row =mysqli_fetch_array($run))
                     {
						$conid=$row['contactid'];	 
                    $fname= $row['firstname'];
                    $lname= $row['lastname'];
                    $add= $row['address'];
                    $phn= $row['phone'];
                    $mail= $row['email'];

                    echo "
					
					  <div class='row' style='text-align:center;'>
 
		                    <form action='' method='POST' ><br><br>
								
                                  <br><input  type='hidden' name='conid' value='$conid'><br>
                                  NEW FIRST NAME<br><input  type='text' name='fname' value='$fname'> <br>     
								   NEW LAST NAME<br><input  type='text' name='lname' value='$lname'> <br>
								      
								   NEW ADDRESS<br><input  type='text' name='add' value='$add'> <br>
								   NEW PHONE<br><input  type='text' name='phn' value='$phn'> <br>
								   NEW E-MAIL<br><input  type='text' name='mail'  value='$mail'> <br>
								   
                                   
                                 
								   <input type='submit' name='upd' value='Update'>
								   <input type='submit' name='sub' value='Delete'>
								   
								   
								   </form>
						
								   
								   
					 </div>
					 
					 
					 
					 "; 
                      }
	echo "<script>alert('record found')</script>";
}
?>
					 
    </table> 
								   
								   
	


								   
								   
								   
								   
								   
								   
								   
  <?php
//updating records in the database

if(isset($_POST['upd'])){
$conid=$_POST['conid'];


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$add=$_POST['add'];
$phn=$_POST['phn'];
$mail=$_POST['mail'];


$upd="update contacttbl set firstname='$fname', lastname='$lname', address='$add', phone='$phn', email='$mail' where contactid='$conid'";

$run=$conn->query ($upd);
echo"<script>alert('update successful')</script>";
}
?>
	
         
						   

							   

		
		
          

  

  
  
      

	
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