<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("Location: login.php");
}
?>
<html>
   <head>
      <title>Form Submitted</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
	marquee h5 {
  display: inline;
  position: absolute;
  bottom: 0;
}
      </style>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   
   <body bgcolor = "#FFFFFF">
<br>
	<marquee><h1>Feed the Needy</h1></marquee>	
<br>
<hr>
	<br>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Let's Feed India :</b></div>
				
            <div style = "margin:30px">
                <br>
                <br>
                <button class="btn btn-success">Your Form has been submitted<br>successfully. You will get a call<br>from us within 15-30 mins</button>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php
               if(isset($error))
               echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<br>
<br>
<br>
<br>
<hr>
<marquee style="bottom: 0;",bgcolor="#87CEEB",>TOLLFREE-1800-12345-123</marquee>
</html>