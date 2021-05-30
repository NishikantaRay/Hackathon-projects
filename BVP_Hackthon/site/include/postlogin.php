<?php
error_reporting(0);
   include("db.php");
   session_start();
      $uname = $_GET['uname'];
      $mob = $_GET['mob']; 
      $q = "SELECT * FROM users WHERE id = '$uname' and mobile = '$mob'";
      $result = $con->query($q);
      if($result->num_rows == 1){
         $_SESSION['id'] = $uname;
         $_SESSION['mobile'] = $mob;
         $row = $result->fetch_assoc();
         $_SESSION['type'] = $row['type'];
         header("location: ../welcome.php");
      }
      else {
         echo "Your Login Name or Password is invalid";
      }
?>