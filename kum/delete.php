<?php
include("connection.php");
error_reporting(0);

$Student_Id=$_GET['rn'];
$query ="DELETE FROM student WHERE Student_Id ='$Student_Id'";

$data = mysqli_query($con,$query);
if($data)
{
    echo " <scrpit> ('Record deleted from the database')</scrpit>";
    //sleep(2);
    header("Location: stu_dis.php");
}
else{
    echo " <scrpit> ('Record not deleted from the database')</scrpit>";
    //echo "Record not deleted from the database";
}

?>