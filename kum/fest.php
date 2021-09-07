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
background:url(bg6.jpg);
background-repeat: no-repeat;
	overflow: hidden;
	background-size: cover;
}
.submit{
	position: absolute;
	top: 13vh;
    left: 41vw;
    padding: .4rem 1.3rem;
    border-radius:25px;
    background-color:rgba(0,0,0,0.5);
color:white;
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


<form action="" >
<tr>
<td>Student Id</td>
<td><input type="text" placeholder="Student id" required name  = "Student_Id"></td>
</tr>
<tr>
<button type="submit" class='submit'>submit</button>
</form>

<td></td>
<td colspan="2"  ><a href ="adm2.php"><input type="button" name="Back" id="button" value="Back"></a></td>
</tr>

</table>
</form>

<div class="print">
    <?php 
    $id = $_GET['Student_Id'];
    echo $id;
    
?>


<table border="5" align="center" cellspacing="5" style ="width:70%; float:center;">
    <tr>
  <th>Student Id</th>
  <th>FEE STATUS</th>
  
  </tr>
<?php
  $query ="SELECT * from payment where student_id=$id";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);


$nn=0;
$result=mysqli_fetch_assoc($data);
   $s=($result['Tution_Fee']+$result['Other_Fee_Paid']);
   if($s>0)
   {
    $ss="PAID";

   }
   else{
       $ss="UNPAID";
   }
     echo "
     <tr>
     <td align='center'>".$result['Student_Id']."</td>
     <td align='center'>$ss</td>
     
    
     </tr>
   ";




?>
</div>
</body>
</html>


