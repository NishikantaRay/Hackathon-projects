<?php
$con = mysqli_connect("localhost","root","","food");
// Check connection
if ($con -> connect_errno) {
    echo "Failed to connect to DB: " . mysqli_connect_error();
    exit();
  }