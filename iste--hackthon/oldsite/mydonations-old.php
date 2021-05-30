<?php
    error_reporting(0);
    include('include/db.php');
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("Location: login.php");
    }
    $sitetype = "mydonation";
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM dons WHERE id = '$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Donations</title>
</head>
<body>
    <h1 style="text-align: center;">My Donations</h1>
    <hr>
<?php
    $i = 1;
    $chk = 1;
    echo "<table border='1' st>
    <tr>
    <th>No.</th>
    <th>Quantity Served</th>
    <th>Food Description</th>
    <th>Requested On</th>
    </tr>";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        if($chk == 1){
        while($row = $result->fetch_assoc()) 
        {
    echo "<tr><td>" . $i. "</td><td>" . $row["qty"] . "</td><td>" . $row["descp"] . "</td><td>"
    . $row["added"]. "</td></tr>";
            }
    echo "</table>";
        } else { $chk = 0; }
    }
   $con->close();

    if($chk == 0)
        echo "<p>0 Requests Found.</p>";
?>

</body>
</html>