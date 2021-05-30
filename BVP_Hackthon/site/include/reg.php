<?php
include('db.php');
$type = 1;
if(isset($_POST['mob']))
{
$mob = $_POST['mob'];
$q = "SELECT * FROM users WHERE mob='$mob'";
    if(mysqli_num_rows($con->query($q)) == false)
    {
        $error = '<button class="btn btn-danger"><a href="login.php">Account Aleady Exists. Click Here to Login</a></button>';
    }
}

$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$mob = isset($_POST['mob']) ? $_POST['mob'] : '';
$addr = isset($_POST['addr']) ? $_POST['addr'] : '';

    $sql = "INSERT INTO users(id,type,name,mobile,address) VALUES('$uname',$type,'$fname','$mob','$addr')";
    if (mysqli_query($con, $sql)){
        echo "New User Created successfully";
        $_POST = array();
        header("Location: ../register.php?i");
    }