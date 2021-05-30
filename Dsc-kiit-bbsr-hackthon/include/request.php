<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("Location: login.php");
}
    error_reporting(0);
    include('db.php');
    $id = $_SESSION["id"];
    //echo $id;
    $qty = isset($_POST['qty']) ? $_POST['qty'] : '';
    $descp = isset($_POST['descp']) ? $_POST['descp'] : '';
    $added = date("Y-m-d H:i:s");
    $sql = "INSERT INTO reqs(id,qty,descp,added) VALUES ('$id',$qty,'$descp','$added')";
    $result = $con->query($sql);
   $con->close();
   header("location: ../submit.php");
?>