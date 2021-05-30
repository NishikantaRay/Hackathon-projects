<?php
session_start();
if(!isset($_SESSION['type']))
{
    if($_SESSION['type'] != 3)
    header("Location: login.php");
}
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title> Feed The Hungry</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<!-- Google Font link ends-->
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
</head>
<body>
<!-- Header starts here-->
<div class="header">
	<div class="container">
		<div class="header-top">
	 		<div class="logo">
	 			<a style="color: white;" href="welcome.php"><h1>Feed The Hungry</h1></a>
	 		</div>
	 		<span class="menu"></span>
	 		<div class="clear"></div>
			<div class="navigation">
				<ul class="navig">
					<li><a href="welcome.php">Go Back</a></li>
					<li class="bold"><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<script>
					$( "span.menu" ).click(function() {
					  $( "ul.navig" ).slideToggle( "slow", function() {
					    // Animation complete.
					  });
					});
				</script>

			<div class="clearfix"> </div>
        </div>
        
        <form style="text-align: left; font-size: larger; margin:10% 0% 0% 30%;" action="vtr.php" method="GET">
    <label for="vtrid">Select Volunteer :</label>
    <select id="vtrid">
        <option>VTR1-Nandan Vihar</option>
        <option>VTR2-Jaydev Vihar</option>
        <option>VTR3-Acharya Vihar</option>
        <option>VTR4-Vani Vihar</option>
    </select>
    <br><br>
    <label for="org">Select Organisation :</label>
    <select id="org">
        <option>Hope</option>
        <option>AkshayaPatra</option>
        <option>AharaKendra</option>
        <option>HungryFREE</option>
        <option>Other : Unspecified</option>
    </select>
    

</form>

	</div>
</div>
<!-- Header ends here-->

<!--FOOTER START-->
<div class="footer">
	<div class="container">
		<div class="footer-top"><p>2020 Template By &nbsp; <a href="http://w3layouts.com/">W3layouts.com</a></p></div>
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

	</div>
</div>
<!--FOOTER END-->
</body>
</html>