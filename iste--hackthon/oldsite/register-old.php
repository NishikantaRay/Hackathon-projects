<html>
   <head>
      <title>Registration Form</title>
      
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
	<marquee><h2>Feed the Needy</h2></marquee>	
<hr>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Registration</b></div>
				<?php
               if(isset($_GET["i"]))
                  echo '<button class="btn btn-success">Registration Done! Now you can Login.</button>';
            ?>
            <div style = "margin:30px">
               
               <form action = "include/reg.php" method = "POST">
                  <label>Userid  :</label><input type = "text" name="uname" id="uname" class = "box"/><br /><br />
		<label>Fullname  :</label><input type = "text" id="fname" name="fname" class = "box"/><br /><br />
                  <label>mobileno  :</label><input type = "tel" name="mob" id = "mob" class = "box" /><br/><br />
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<hr>
<marquee style="bottom: 0;",bgcolor="#87CEEB",>TOLLFREE-1800-12345-123</marquee>
</html>