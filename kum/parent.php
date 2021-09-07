<?php
include("connection.php");
error_reporting(0);
$mn=$_GET['rn'];
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

<p style="text-align:center;font-size:40px;"><b><br>Enter The Parent Details </b></p>
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
<td><input type="text" placeholder="Student Id" required name  = "student_id" value=<?php echo "$mn"?> readonly></td>
</tr>

<tr>
<td>Father Name</td>
<td><input type="text" placeholder="Father_Name" required name  = "fname"></td>
</tr>

<tr>
<td>Mother Name</td>
<td><input type="text" placeholder="Mother_Name" required name  = "mname"></td>
</tr>

<tr>
<td>Mother Tongue</td>
<td><input type="text" placeholder="Mother_Tongue" required name  = "mtongue"></td>
</tr>

<tr>
<td>Occupation</td>
<td><input type="text" placeholder="Occupation" required name  = "occupation"></td>
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


<?php
if($_GET['submit'])
	{
$cn = $_GET['student_id'];
$rn =$_GET['fname'];
$tn = $_GET['mname'];
$dn = $_GET['mtongue'];
$on = $_GET['occupation'];

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
echo '<script>alert("Student details are empty")</script>';
}

if($nn==1)
{

$query1= "INSERT INTO parent values ('$cn','$rn','$tn','$dn','$on')";
$data = mysqli_query($con,$query1);

if($data)
{
    echo '<script>alert("data insertion successful")</script>';
    header("Location:fee.php?rn=$cn");
}
else
    {
        echo '<script>alert("data insertion failed")</script>';
    }
}

else
if($nn==0)
	{
   echo '<script>alert("Student ID Does Not Exist")</script>';
}
}
?>
</body>
</html>