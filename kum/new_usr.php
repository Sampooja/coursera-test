<?php
include("connection.php");
error_reporting(0);
?>

<html>
<script src="https://kit.fontawesome.com/9ab0510827.js" crossorigin="anonymous"></script>
<head>

<br><br>
<style>
table
{
color:black;
background-color: rgba(0,0,0,0.3);
border-radius:20px;
}

#button
{
background-color:rgba(0,0,0,0.5);
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
<td>Teacher Id</td>

<td><input type="text" placeholder="Teacher Id" required name  = "u"></td>
</tr>


<tr>
<td>Email</td>
<td><input type="email" placeholder="Email" required name  = "e"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" placeholder="Password" required name  = "p"></td>
</tr>

<tr>
<td>Confirm Password</td>
<td><input type="password" placeholder="Confirm Password" required name  = "cp" ></td>
</tr>


<tr>
<td colspan="2" align="center"><input type="submit" name="submit" id="button"></a></td>
</tr>
<br></br>
<tr>
<td colspan="2" align="center"><a href ="login.php"><input type="button" name="Back" id="button" value="Back"></a></td>
</tr>


</form>
</table>
</body>
</html>


<?php
if($_GET['submit'])
	{

$u = $_GET['u'];
$e = $_GET['e'];
$p =$_GET['p'];
$cp = $_GET['cp'];


$query ="SELECT * from teacher";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$nn=0;
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
       if($u==$result['Te_Id'])
       {
            $nn=1;
            break;
       }
       
    }
}
else
{
	$nn=2;
echo '<script>alert("Teacher details are empty")</script>';
}

if($nn==1)
{


if($p==$cp)
	{


$query= "INSERT INTO loginte values ('$u','$e','$cp')";
$data = mysqli_query($con,$query);

if($data)
{
	
	echo "data inserted";
	echo '<script>confirm("Account Created Successfully.LOGIN TO CONTINUE");
	window.location.href="login2.php";
	</script>';
	
	//header("Location:login.php");
}
else
	{
	echo '<script>confirm("Account Already Created \r\n Login To Continue");
	window.location.href="login2.php";
	</script>';
}
}
else
{
 echo '<script>alert("Password not matched")</script>';
}

}

else
if($nn==0)
	{
   echo '<script>alert("Teacher ID Does Not Exist")</script>';
}
}

	
?>