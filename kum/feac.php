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
  <th rowspan="2" >Student Id</th>
  <th colspan="4" >Marks</th>
  <th colspan="3" >Attendance</th>

  </tr>
  <br>
  <tr>
  <th>Java</th>
  <th>Python</th>
  <th>SQL</th>
  <th>Total</th>
  <th>Java</th>
  <th>Python</th>
  <th>SQL</th>
  </tr>
<?php
  $query ="SELECT * from academics where student_id=$id";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);


$nn=0;
$result=mysqli_fetch_assoc($data);
   $result['Total']=($result['Java_Marks']+$result['Python_Marks']+$result['Sql_Marks']);
   $result['Java_ac']=number_format(($result['Java_A']/$result['Java_C'])*100,2);
   $result['Python_ac']=number_format(($result['Python_A']/$result['Python_C'])*100,2);
   $result['Sql_ac']=number_format(($result['Sql_A']/$result['Sql_C'])*100,2);
     echo "
     <tr>
     <td align='center'>".$result['Student_Id']."</td>
     <td align='center'>".$result['Java_Marks']."</td>
     <td align='center'>".$result['Python_Marks']."</td>
     <td align='center'>".$result['Sql_Marks']."</td>
     <td align='center'>".$result['Total']."</td>
     <td align='center'>".$result['Java_ac']."%</td>
     <td align='center'>".$result['Python_ac']."%</td>
     <td align='center'>".$result['Sql_ac']."%</td>

    
     </tr>
   ";
  



?>
</div>
</body>
</html>


