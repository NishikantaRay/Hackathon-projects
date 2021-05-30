<?php
        if($_GET['auth'] == "jcoders")
        {
        include('include/db.php');
        $link = $_GET['link'];
        $descp =$_GET['descp'];
        $sql = "INSERT INTO imgs(link,descp) VALUES ('$link','$descp')";
        $result = $con->query($sql);
        $con->close();
        echo "!!!Success!!! &nbsp;&nbsp; <a href='insertimg.php'>Insert Another Image?</a>";
        
        }
    else
    {
        echo "UNAUTHORISED";
    }
?>