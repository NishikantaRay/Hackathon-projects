<?php
    error_reporting(0);
    include('db.php');
    $id = isset($_POST['fname']) ? $_POST['fname'] : '';
    $addrs = isset($_POST['addrs']) ? $_POST['addrs'] : '';
    $mob = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $qty = isset($_POST['qty']) ? $_POST['qty'] : '';
    $descp = isset($_POST['descp']) ? $_POST['descp'] : '';
    $added = date("Y-m-d H:i:s");
    $sql = "INSERT INTO guest(fname,addrs,mobile,qty,descp,added) VALUES ('$id','$addrs','$mob',$qty,'$descp','$added')";
    $result = $con->query($sql);
   $con->close();
   header("location: ../gsubmit.php");
?>