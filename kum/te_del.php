<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
body
{
background: url('bg6.jpg');
background-repeat: no-repeat;
background-size:100%;
overflow: hidden;
background-size: cover;
}
</style>
<body>
<?php
include("connection.php");
error_reporting(0);

$Te_Id = $_GET['rn'];
$query = "DELETE FROM teacher WHERE Te_Id = '$Te_Id'";
$data = mysqli_query($con,$query);
if($data)
{
    echo " <scrpit> confirm('Record deleted from the database')</scrpit>";
    //sleep(2);
    header("Location: te_dis.php");
   
}
else{
    echo "Record not deleted from the database";
}
?>
</body>
</html>