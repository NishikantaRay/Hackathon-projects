<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <a href="donate.php"><h2>Donate Food</h2></a><br>
    <a href="request.php">Request Us</a><br>
    <a href="mydonations.php">My Donations</a><br>
    <a href="myrequests.php">My Requests</a><br>
    <a href="logout.php">Logout</a><br>
</body>
</html>