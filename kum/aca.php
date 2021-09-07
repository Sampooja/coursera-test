<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
<title> 
</title>

<style>
table
{
color:white;
background-color: rgba(0,0,0,0.4);
border-radius:20px;
}

#button
{
background-color:rgba(0,0,0,0.5);
color:white;
height:32px;
width:85px;
border-radius:25px;
}

body
{
background:url(bg6.jpg);
background-repeat: no-repeat;
	overflow: hidden;
	background-size: cover;
}
</style>
</head>
<body id="body_bg">
<br>
<form> 
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<?php
//<td>Student Id</td>
//<td><input type="text" placeholder="Student Id" required name  = "student_id" ></td>
//</tr>
?>

<tr>
<td>Student Id</td>
<td><input type="text" placeholder="Student id" required name  = "Student_Id"></td>
</tr>
<tr>
<td></td>
<td style='text-align:center;vertical-align:middle'>Java</td>
<br></br>
</tr>
<tr>
<td><input type="tel" placeholder="Marks" required name  = "marks1"></td>
<td><input type="tel" placeholder="Attendance of student" required name  = "at1"></td>
<td><input type="tel" placeholder="Total class taken" required name  = "cl1"></td>
</tr>
<tr>
<td></td>
<td style='text-align:center;vertical-align:middle'>Python</td>
<br></br>
</tr>
<tr>
<td><input type="tel" placeholder="Marks" required name  = "marks2"></td>
<td><input type="tel" placeholder="Attendance of student" required name  = "at2"></td>
<td><input type="tel" placeholder="Total class taken" required name  = "cl2"></td>
</tr>
<tr>
<td></td>
<td style='text-align:center;vertical-align:middle'>Sql</td>
<br></br>
</tr>
<tr>
<td><input type="tel" placeholder="Marks" required name  = "marks3"></td>
<td><input type="tel" placeholder="Attendance of student" required name  = "at3"></td>
<td><input type="tel" placeholder="Total class taken" required name  = "cl3"></td>
</tr>
<tr>
<td></td>
<td colspan="2" ><a href ="login.html"><input type="submit" name="submit" id="button"></a></td>
</tr>
<br></br>
<tr>
<td></td>
<td colspan="2" ><a href ="adm2.php"><input type="button" name="Back" id="button" value="Back"></a></td>
</tr>

</table>
</form>
</body>
</html>


<?php

if($_GET['submit'])
	{

//$mn = $_GET['name'];
$cn = $_GET['Student_Id'];
$jm = $_GET['marks1'];
$ja=$_GET['at1'];
$jc=$_GET['cl1'];
$pm = $_GET['marks2'];
$pa=$_GET['at2'];
$pc=$_GET['cl2'];
$sm = $_GET['marks3'];
$sa=$_GET['at3'];
$sc=$_GET['cl3'];


//$p1=number_format(($_GET['at1']/$_GET['cl1'])*100,3);
//$p2=number_format(($_GET['at2']/$_GET['cl2'])*100,3);
//$p3=number_format(($_GET['at3']/$_GET['cl3'])*100,3);

//echo "$p1,$p2,$p3";
//$p4=$p1;

$query ="SELECT Student_Id from student";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$nn=0;
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
       if($cn==$result['Student_Id'])
       {
            $nn=1;
            break;
       }
       
    }
}
else
{
	$nn=2;
echo '<script>alert("No student details present")</script>';
}

if($nn==1)
{

$query1= "INSERT INTO academics values ('$cn','$jm','$ja','$jc','$pm','$pa','$pc','$sm','$sa','$sc')";
$data = mysqli_query($con,$query1);

if($data)
{
    echo'<script>alert("Data Insertion Successful")</script>';
}

else
    {
        echo'<script>alert("Data Insertion Un-Successful")</script>';
    }
}

else
if($nn==0)
	{

   echo '<script>alert("Wrong Student ID")</script>';
}

}


?>