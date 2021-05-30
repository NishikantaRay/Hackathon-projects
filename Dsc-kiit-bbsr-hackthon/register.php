<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Register | SAHAYAK</title>
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
<style>
    label {
        color: white;
    }
</style>
</head>
<body>
<!-- Header starts here-->
<div class="header">
	<div class="container">
		<div class="header-top">
	 		<div class="logo">
			 <a style="color: white;" href="index.html"><h1>SAHAYAK</h1></a>
	 		</div>
	 		<span class="menu"></span>
	 		<div class="clear"></div>
			<div class="navigation">
				<ul class="navig">
				<li><a href="index.html"><b>GO BACK TO HOME</b></a></li>
				</ul>
			</div>
			<script>
					$( "span.menu" ).click(function() {
					  $( "ul.navig" ).slideToggle( "slow", function() {
					    // Animation complete.
					  });
					});
				</script>
                <br><br><br>
			<div class="clearfix"> </div>
        </div>
        <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Registration</b></div>
				<?php
               if(isset($_GET["i"]))
                  echo '<button class="btn btn-success"><a href="login.php">Registration Done! Now you can Login.</a></button>';
            ?>
            <div style = "margin:30px">
               
               <form action = "include/reg.php" method = "POST">
                  <label>Username  :</label><input type = "text" name="uname" id="uname" class = "box"/><br /><br />
		<label>Full Name  :</label><input type = "text" id="fname" name="fname" class = "box"/><br /><br />
                  <label>Mobile no.  :</label><input type = "text" name="mob" id = "mob" class = "box" /><br/><br />
		 <label>Address  :</label><textarea name="addr" id="addr" rows="3" cols="30"></textarea><br><br>
                <input type = "submit" value = " Submit "/>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
               <?php
               if(isset($error))
               echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
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