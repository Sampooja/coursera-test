<?php
include("connection.php");
error_reporting(0);
$rn = $_GET['rn'];
$nn = $_GET['fn'];
$cn = $_GET['cn'];
$an = $_GET['an'];
$pn = $_GET['pn'];
$dn = $_GET['dn'];
$gn = $_GET['gn'];
$ad = $_GET['ad'];
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
<br><br><br><br><br><br><br>

<form> 
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td>Student Id</td>
<td><input type="text" value="<?php echo "$rn"?>" required name  = "student_id" readonly></td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" value="<?php echo "$nn"?>" required name  = "name"></td>
</tr>

<tr>
<td>Class</td>
<td><input type="text" value="<?php echo "$cn"?>" required name  = "class"></td>
</tr>

<tr>
<td>Academic Year</td>
<td><input type="text" value="<?php echo "$an"?>" required name  = "academic_year"></td>
</tr>

<tr>
<td>Phone Number</td>
<td><input type="tel" value="<?php echo "$pn"?>" required name  = "phone_number" ></td>
</tr>

<tr>
<td>Date Of Birth</td>
<td><input type="date" value="<?php echo "$dn"?>" required name  = "date_of_birth"></td>
</tr>

<tr>
<td>Gender</td>  
<td>
<input type="radio" name="r1"
value="female"
<?php
 if ($gn=="female") 
{
  echo "checked";
}
?>
>Female
<input type="radio" name="r1" value="male"
<?php

 if ($gn=="male") 
{
  echo "checked";
}
?>
>Male

</td>
</tr>

<tr>
<td>Address</td>
<td> <textarea required name  = "addres" rows="5" cols="20"><?php echo "$ad"?></textarea>  </td>
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
$srn = $_GET['student_id'];
$nnn = $_GET['name'];
$ccn = $_GET['class'];
$aayn =$_GET['academic_year'];
$ppn = $_GET['phone_number'];
$ddn = $_GET['date_of_birth'];
$ggn = $_GET['r1'];
$aan = $_GET['addres'];

echo "$srn";
echo "$nnn";
echo "$ccn";
echo "$aayn";
echo "$ppn";
echo "$ddn";
echo "$ggn";
echo "$aan";

$query= "UPDATE student SET Student_Id='$srn',Name='$nnn',Class='$ccn',Academic_Year='$aayn',Phone_Number='$ppn',
Date_Of_Birth='$ddn',Gender='$ggn',Address='$aan' WHERE Student_ID='$srn'";
$data = mysqli_query($con,$query);

if($data)
{
    echo "<script> alert('Record updated' </script>";
    header("Location: stu_dis.php");
}
else
	{
    echo "failed to update record";
  }
}

?>