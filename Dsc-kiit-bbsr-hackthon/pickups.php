<?php
session_start();
if(!isset($_SESSION['type']))
{
    if($_SESSION['type'] < 2)
    header("Location: login.php");
}
?>

