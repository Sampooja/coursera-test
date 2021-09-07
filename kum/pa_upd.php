<?php
include("connection.php");
error_reporting(0);
$rn = $_GET['rn'];
$fn = $_GET['fn'];
$cn = $_GET['cn'];
$an = $_GET['an'];
$pn = $_GET['pn'];

//echo "$rn";
?>
<html>
<head>
<title>   display   </title>
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

<p style="text-align:center;font-size:40px;"><b><br>Update The Parent Details </b></p>
<br>
<form> 
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td>Student Id</td>
<td><input type="text" value="<?php echo "$rn"?>" required name  = "Student_Id" readonly></td>
</tr>
<tr>
<td>Father Name</td>
<td><input type="text" value="<?php echo "$fn"?>" required name  = "Father_Name"></td>
</tr>
<tr>
<td>Mother Name</td>
<td><input type="text" value="<?php echo "$cn"?>" required name  = "Mother_Name"></td>
</tr>

<tr>
<td>Mother Tongue</td>
<td><input type="text" value="<?php echo "$an"?>" required name  = "Mother_Tongue"></td>
</tr>
<tr>
<td>Occupation</td>
<td><input type="text" value="<?php echo "$pn"?>" required name  = "Occupation"></td>
</tr>
<tr>
<td colspan="2" align="center"><a href ="login.html"><input type="submit" name="submit" id="button" value=" Update "></a></td>
</tr>
<br></br>
<tr>
<td colspan="2" align="center"><a href ="stu_dis.php"><input type="button" align="center" name="Back" id="button" value="Back"></a>
</td>
</tr>
</form>
</table>
</body>
</html>
<?php
if($_GET['submit'])
{
$srn = $_GET['Student_Id'];
$nnn = $_GET['Father_Name'];
$ccn = $_GET['Mother_Name'];
$ppn = $_GET['Mother_Tongue'];
$ddn = $_GET['Occupation'];
//$aan = $_GET['address'];
echo "$srn";
echo "$nnn";
echo "$ccn";
//echo "$aayn";
echo "$ppn";
echo "$ddn";
//echo "$aan";
$query= "UPDATE parent SET Student_Id='$srn',Father_Name='$nnn',Mother_Name='$ccn',Mother_Tongue='$ppn',Occupation='$ddn' 
WHERE Student_Id='$srn'";
$data = mysqli_query($con,$query);
if($data)
{
    echo "<script>alert('Record updated'</script>";
    header("Location: pa_dis.php");
}
else
	{
    echo "failed to update record";
}
}
?>