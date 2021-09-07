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
color:black;
background-color: rgba(0,0,0,0.4);
border-radius:20px;
}

#button
{
background-color:rgba(0,0,0,0.5);
color:black;
height:32px;
width:85px;
border-radius:25px;

&:hover {
    curser: pointer;
    background-color:rgba((0,0,0,0.5),10%);
}
}

body
{
background: url('bg9.jpg');
background-repeat: no-repeat;
background-size:100%;
overflow: hidden;
background-size: cover;
}
</style>

</head>

<body id="body_bg">
<br><br><br><br>

<form> 
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<?php
//<td>Student Id</td>
//<td><input type="text" placeholder="Student Id" required name  = "student_id" ></td>
//</tr>
?>
<tr>
<td>Name</td>
<td><input type="text" placeholder="Name" required name  = "name"></td>
</tr>

<tr>
<td>Class</td>
<td><input type="text" placeholder="Class" required name  = "class"></td>
</tr>

<tr>
<td>Academic Year</td>
<td><input type="text" placeholder="Academic Year" required name  = "academic_year"></td>
</tr>

<tr>
<td>Phone Number</td>
<td><input type="tel" placeholder="Phone Number" required name  = "phone_number" ></td>
</tr>

<tr>
<td>Date Of Birth</td>
<td><input type="date" placeholder="DOB" required name  = "date_of_birth"></td>
</tr>

<tr>
<td>Gender</td>  
<td>
<input type="radio" name="r1" value="male" required>Male 
<input type="radio" name="r1" value="female" required>Female

</td>
</tr>

<tr>
<td>Address</td>
<td> <textarea placeholder="Address" required name  = "addres" rows="5" cols="20"></textarea>  </td>
</tr>

<tr>
<td colspan="2" align="center"><a href ="login.html"><input type="submit" name="submit" id="button"></a></td>
</tr>
<br></br>
<tr>
<td colspan="2" align="center"><a href ="adm.php"><input type="button" name="Back" id="button" value="Back"></a></td>
</tr>


</form>
</table>
</body>
</html>

<?php


$query ="SELECT * from student ORDER BY Student_Id";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
	    $nn=$result['Student_Id'];
	}
	$nn=$nn+1;
	
}
	
else 
{
	$nn=1;
}
if($_GET['submit'])
	{
$rn = $nn;
$nn = $_GET['name'];
$cn = $_GET['class'];
$ayn =$_GET['academic_year'];
$pn = $_GET['phone_number'];
$dn = $_GET['date_of_birth'];
$gn = $_GET['r1'];
$an = $_GET['addres'];

echo "$rn";
echo "$nn";
echo "$cn";
echo "$ayn";
echo "$pn";
echo "$dn";
echo "$gn";
echo "$an";

$query= "INSERT INTO student values ('$rn','$nn','$cn','$ayn','$pn','$dn','$gn','$an')";
$data = mysqli_query($con,$query);

if($data)
{
	session_start();
    $_SESSION['user'] = $rn;
	echo '<script>alert("Data Insertion Successful")</script>';
	header("Location:parent.php?rn=$rn");
	exit();
}
else{
    echo '<script>alert("Data Insertion Un-Successful")</script>';
}
}
?>