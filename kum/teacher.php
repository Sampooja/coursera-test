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
background: url('bg6.jpg');
background-repeat: no-repeat;
background-size:100%;
overflow: hidden;
background-size: cover;
}

</style>
</head>
<body id="body_bg">

<p style="text-align:center;font-size:40px;"><b><br>Enter The Teacher Details </b></p>
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
<td>Name</td>
<td><input type="text" placeholder="Teacher Name" required name  = "name"></td>
</tr>
<tr>
<td>Qualification</td>
<td><input type="text" placeholder="Qualification" required name  = "qualification"></td>
</tr>
<td>Subject</td>  
<td>
<input type="radio" name="r1" value="Java" required>Java
<input type="radio" name="r1" value="Python" required>Python
<br/>
<input type="radio" name="r1" value="C" required>C    
<input type="radio" name="r1" value="Sql" required>Sql
</td>
</tr>
<tr>
<td>Salary</td>
<td><input type="int" placeholder="Salary" required name ="sal" ></td>
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
</table>
</form>
</body>
</html>
<?php
$query ="SELECT * from teacher ORDER BY Te_Id";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);

if($total!=0)
{
	
    while($result=mysqli_fetch_assoc($data))
    {
	    $nn=$result['Te_Id'];
	}
	$nn=$nn+1;
	
}
	
else 
{
	$nn=100;
}


?>
<?php
if($_GET['submit'])
	{
$rn = $nn;
$mn = $_GET['name'];
$cn = $_GET['qualification'];
$gn = $_GET['r1'];
$sn = $_GET['sal'];
$an = $_GET['addres'];

echo "$rn";
echo "$nn";
echo "$cn";
echo "$gn";
echo "$sn";
echo "$an";

$query= "INSERT INTO teacher values ('$rn','$mn','$cn','$gn','$sn','$an')";
$data = mysqli_query($con,$query);

if($data)
{
	echo '<script>alert("Data insertion successful")</script>';
	header("Location: adm.php");
}

else
{
    echo '<script>alert("Data insertion un-successful")</script>';
}
}
?>