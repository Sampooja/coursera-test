
<?php
include("connection.php");
error_reporting(0);
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];
$e = $_GET['e'];
$f = $_GET['f'];
$g = $_GET['g'];
$h = $_GET['h'];
$i = $_GET['i'];
$j = $_GET['j'];
//echo "$cn";
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
background-size:contain;
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
<td><input type="text" value="<?php echo "$a"?>"required name  = "Student_Id" readonly></td>
</tr>
<tr>
<td></td>
<td style='text-align:center;vertical-align:middle'>Java</td>
<br></br>
</tr>
<tr>
<td><input type="tel" value="<?php echo "$b"?>" required name  = "marks1"></td>
<td><input type="tel" value="<?php echo "$c"?>" required name  = "at1"></td>
<td><input type="tel" value="<?php echo "$d"?>" required name  = "cl1"></td>
</tr>
<tr>
<td></td>
<td style='text-align:center;vertical-align:middle'>Python</td>
<br></br>
</tr>
<tr>
<td><input type="tel" value="<?php echo "$e"?>" required name  = "marks2"></td>
<td><input type="tel" value="<?php echo "$f"?>" required name  = "at2"></td>
<td><input type="tel" value="<?php echo "$g"?>" required name  = "cl2"></td>
</tr>
<tr>
<td></td>
<td style='text-align:center;vertical-align:middle'>Sql</td>
<br></br>
</tr>
<tr>
<td><input type="tel" value="<?php echo "$h"?>" required name  = "marks3"></td>
<td><input type="tel" value="<?php echo "$i"?>" required name  = "at3"></td>
<td><input type="tel" value="<?php echo "$j"?>" required name  = "cl3"></td>
</tr>
<tr>
<td></td>
<td colspan="2" ><a href ="aca_dis2.php"><input type="submit" name="submit" id="button"></a></td>
</tr>
<br></br>
<tr>
<td></td>
<td colspan="2" ><a href ="aca_dis2.php"><input type="button" name="Back" id="button" value="Back"></a></td>
</tr>

</table>
</form>
</body>
</html>
<?php
if($_GET['submit'])
{
$aa = $_GET['Student_Id'];
$bb = $_GET['marks1'];
$cc = $_GET['at1'];
$dd = $_GET['cl1'];
$ee = $_GET['marks2'];
$ff = $_GET['at2'];
$gg = $_GET['cl2'];
$hh = $_GET['marks3'];
$ii = $_GET['at3'];
$jj = $_GET['cl3'];
//$aan = $_GET['address'];
//echo "$aa";
//echo "$nnn";
//echo "$ccn";
//echo "$aayn";
//echo "$ppn";
//echo "$ddn";
//echo "$aan";
$query= "UPDATE academics SET Student_Id='$aa',Java_Marks='$bb',Java_A='$cc',Java_C='$dd',Python_Marks='$ee',Python_A='$ff',Python_C='$gg',Sql_Marks='$hh',Sql_A='$ii',Sql_C='$jj' 
WHERE Student_Id='$aa'";
$data = mysqli_query($con,$query);
if($data)
{
    echo "<script>alert('Record updated'</script>";
    header("Location:aca_dis2.php");
}
else
	{
    echo "<script>alert('Record updation faild'</script>";
    }
}
?>