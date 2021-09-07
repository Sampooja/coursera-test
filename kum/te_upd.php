<?php
include("connection.php");
error_reporting(0);
$rn = $_GET['rn'];
$fn = $_GET['fn'];
$cn = $_GET['cn'];
$an = $_GET['an'];
$pn = $_GET['pn'];
$ad = $_GET['ad'];
//echo "$fn";
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

<p style="text-align:center;font-size:40px;"><b><br>Update The Teacher Details </b></p>
<br>
<form> 
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td>Teacher Id</td>
<td><input type="text" value="<?php echo "$rn"?>" required name  = "Te_Id" readonly></td>
</tr>
<tr>
<td>Teacher Name</td>
<td><input type="text" value="<?php echo "$fn"?>" required name  = "Name"></td>
</tr>
<tr>
<td>Qualification</td>
<td><input type="text" value="<?php echo "$cn"?>" required name  = "Qualification"></td>
</tr>
<tr>
<td>Sub_name</td>  
<td>
<input type="radio" name="r1" value="Java"
<?php
 if ($an=="Java") 
{
  echo "checked";
}
?>
>Java
<input type="radio" name="r1" value="Python"
<?php
 if ($an=="Python") 
{
  echo "checked";
}
?>
>Python
<br/>
<input type="radio" name="r1" value="C"
<?php
 if ($an=="C") 
{
  echo "checked";
}
?>
>C
<input type="radio" name="r1" value="Sql"
<?php
 if ($an=="Sql") 
{
  echo "checked";
}
//echo "$an";
?>
>Sql
</td>
</tr>
<tr>
<td>Salary</td>
<td><input type="text" value="<?php echo "$pn"?>" required name  = "Salary"></td>
</tr>
<tr>
<td>Address</td>
<td> <textarea required name  = "address" rows="5" cols="20"><?php echo "$ad"?></textarea>  </td>
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
$srn = $_GET['Te_Id'];
$nnn = $_GET['Name'];
$ccn = $_GET['Qualification'];
$ppn = $_GET['r1'];
$ddn = $_GET['Salary'];
$aan = $_GET['address'];
echo "$srn";
echo "$nnn";
echo "$ccn";
echo "$aayn";
echo "$ppn";
echo "$ddn";
echo "$aan";
$query= "UPDATE teacher SET Te_Id='$srn',Te_Name='$nnn',Qualification='$ccn',Sub_Name='$ppn',Salary='$ddn',Address='$aan' 
WHERE Te_Id='$srn'";
$data = mysqli_query($con,$query);
if($data)
{
    echo "<script>alert('Record updated'</script>";
    header("Location: te_dis.php");
}
else
	{
    echo "failed to update record";
}
}
?>