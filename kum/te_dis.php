<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Display record</title>
</head>

 



 
 <style>
body
{
background: url('bg6.jpg');
background-repeat: no-repeat;
background-size:100%;
overflow: hidden;
background-size: cover;
}


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
<body>
</style>

<p style="text-align:center;font-size:40px;"><b>Teacher Information</b></p>
<br>
<table border="5" align="center" cellspacing="5" style ="width:70%; float:center;">
   <tr>
   <th>Teacher_Id</th>
   <th>Name</th>
   <th>Qualification</th>
   <th>Subject_Name</th>
   <th>Salary</th>
   <th>Address</th>
   <th colspan="2" align="center">   Operation   </th>
</tr> 

<?php
include("connection.php");
error_reporting(0);
$query ="SELECT * from teacher order by Te_Id";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);
echo $result ['Te_Id']." ".$result['Te_Name']." ".$result['Qualification']." ".$result['Sub_Name']." ".$result['Salary']." ".$result['Address'];
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['Te_Id']."</td>
        <td>".$result['Te_Name']."</td>
        <td>".$result['Qualification']."</td>
        <td>".$result['Sub_Name']."</td>
        <td>".$result['Salary']."</td>
        <td>".$result['Address']."</td>

        <td><a style='color:white' href ='te_upd.php?rn=$result[Te_Id] & fn=$result[Te_Name]& cn=$result[Qualification]&an=$result[Sub_Name]& pn=$result[Salary]& ad=$result[Address]'>Edit/Update</td>

        <td><a style='color:white' href ='te_del.php?rn=$result[Te_Id]' onclick='return checkdelete()'>Delete</td>
        ";
    }
    //echo " table has records";
}
else{
    echo "no records found";
}
?>
</table>
<script>
function checkdelete()
{
return confirm('Are you sure you need to delete');
}
</script>
<br>
<tr>
<div id=but>
<button1 colspan="2" align="center" ><a href ="adm.php"><input type="button"  name="Back" id="button" value="Back"></a>
</button1>
</div>
</tr>
</body>
</html>