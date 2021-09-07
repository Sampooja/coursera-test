<?php
include("connection.php");
error_reporting(0);
$rn = $_GET['rn'];
$fn = $_GET['fn'];
$cn = $_GET['cn'];
$an = $_GET['an'];
$pn = $_GET['pn'];

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
background-size:100%;
overflow: hidden;
background-size: cover;
}
</style>
</head>
<body id="body_bg">

<p style="text-align:center;font-size:40px;"><b><br>Update The Fees Details </b></p>
<br>
<form> 
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td>Student Id</td>
<td><input type="text" value="<?php echo "$rn"?>" required name  = "Student_Id" readonly></td>
</tr>
<tr>
<td>Receipt No</td>
<td><input type="text" value="<?php echo "$fn"?>" required name  = "Receipt_No" readonly></td>
</tr>
<tr>
<td>Tution Fee</td>
<td><input type="text" value="<?php echo "$cn"?>" required name  = "Tution_Fee"></td>
</tr>

<tr>
<td>Date Of Receipt</td>
<td><input type="date" value="<?php echo "$an"?>" required name  = "Date_Of_Receipt"></td>
</tr>
<tr>
<td>Other Fee Paid</td>
<td><input type="text" value="<?php echo "$pn"?>" required name  = "Other_Fee_Paid"></td>
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
$nnn = $_GET['Receipt_No'];
$ccn = $_GET['Tution_Fee'];
$ppn = $_GET['Date_Of_Receipt'];
$ddn = $_GET['Other_Fee_Paid'];
//$aan = $_GET['address'];
echo "$srn";
echo "$nnn";
echo "$ccn";
//echo "$aayn";
echo "$ppn";
echo "$ddn";
//echo "$aan";
$query= "UPDATE payment SET Student_Id='$srn',Receipt_No='$nnn',Tution_Fee='$ccn',Date_Of_Receipt='$ppn',Other_Fee_Paid='$ddn' 
WHERE Student_Id='$srn'";
$data = mysqli_query($con,$query);
if($data)
{
    echo "<script>alert('Record updated'</script>";
    header("Location: fee_dis.php");
}
else
	{
    echo "failed to update record";
}
}
?>