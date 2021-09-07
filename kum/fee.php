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


<p style="text-align:center;font-size:40px;"><b><br><br>Enter The Fee Details </b></p>

<form  > 
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<?php
//<td>Student Id</td>
//<td><input type="text" placeholder="Student Id" required name  = "student_id" ></td>
//</tr>
?>
<tr>
<td>Student Id</td>
<td><input type="text" placeholder="Student Id" required name  = "student_id" value="<?php echo "$mn"?>"></td>
</tr>
<!--<tr>
<td>Receipt No</td>
<td><input type="tel" placeholder="Receipt No" required name  = "receipt_no"></td>
</tr>-->
<tr>
<td>Tution Fee</td>
<td><input type="tel" placeholder="Tution Fee" required name  = "tution_fee"></td>
</tr>
<tr>
<td>Date of Receipt</td>
<td><input type="date" placeholder="Date of Receipt" required name  = "date_of_receipt"></td>
</tr>
<tr>
<td>Other Fee Paid</td>
<td><input type="tel" placeholder="Other Fee Paid" required name  = "other_fee_paid"></td>
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
//$rn =$_GET['receipt_no'];
$tn = $_GET['tution_fee'];
$dn = $_GET['date_of_receipt'];
$on = $_GET['other_fee_paid'];
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

$query ="SELECT * from payment ORDER BY Student_Id";
$data = mysqli_query($con,$query);
$total1 = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);

if($total1!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
	    $mn=$result['Receipt_No'];
    }
    $mn=$mn+1;
}
else 
{
	$mn=1000;
}


if($nn==1)
{

$query1= "INSERT INTO payment values ('$cn','$mn','$tn','$dn','$on')";
$data = mysqli_query($con,$query1);

if($data)
{
    echo '<script>alert("data insertion successful")</script>';
    header("Location:adm.php");
}
else
    {
        echo '<script>alert("data insertion failed")</script>';
    }
}
if($nn==0)
	{
   echo '<script>alert("Student ID Does Not Exist")</script>';
}
}
?>
</body>
</html>