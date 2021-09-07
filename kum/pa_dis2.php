<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Display record</title>
</head>

<body> 
<p style="text-align:center;font-size:40px;"><b>Parents Information</b></p>
<style>
body
{
background: url('bg6.jpg');
background-repeat: no-repeat;
background-size:100%;
overflow: hidden;
background-size: cover;
}
</style>
<style>

#button
{
background-color:rgba(0,0,0,0.5);
color:white;
height:32px;
width:85px;
border-radius:25px;
}
#but 
{
    
    text-align:center;
}
table
{
color:rgb(255,255,255);
text-align:center;
background-color: rgba(0,0,0,0.4);
border-radius:10px;
}
</style>

<table border="5" align="center" cellspacing="5" style ="width:70%; float:center;">
   <tr>
   <th>Student_id</th>
   <th>Father_Name</th>
   <th>Mother_Name</th>
   <th>Mother_Tongue</th>
   <th>Occupation</th>
   
</tr> 

<?php

include("connection.php");
error_reporting(0);
$query1 = "SELECT * from parent";
//$query = "SELECT st.Name,sr.* from student st,fee sr where st.Student_Id=sr.Student_Id";
//$query1 = "SELECT fee.*, student.Name FROM fee,student WHERE fee.Student_Id=student.Student_Id";
$data2 = mysqli_query($con,$query1);
$total = mysqli_num_rows($data2);
//$result = mysqli_fetch_assoc($data2);
//echo $result ['Student_Id']." ".$result['Father_Name']." ".$result['Mother_Name']." ".$result['Mother_Tongue']." ".$result['Occupation'];
if($total!=0)
{
while($result=mysqli_fetch_assoc($data2))
{
    echo "
    <tr>
    <td>".$result['Student_Id']."</td>
    <td>".$result['Father_Name']."</td>
    <td>".$result['Mother_Name']."</td>
    <td>".$result['Mother_Tongue']."</td>
    <td>".$result['Occupation']."</td>
    </tr>   
    "; 
}
    //echo " table has records";
}
else{
    echo "no records found";
}
?>
</table>
<br>
<tr>
<div id=but>
<button1 colspan="2" align="center" ><a href ="adm2.php"><input type="button"  name="Back" id="button" value="Back"></a>
</button1>
</div>
</tr>
</body>
</html>