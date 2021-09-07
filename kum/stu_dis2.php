<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Display record</title>
</head>

<body> 
<p style="text-align:center;font-size:40px;"><b>Students Information</b></p>
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

<table border="5" align="center" cellspacing="5" style ="width:70%; float:center;">
   <tr>
   <th>Student_id</th>
   <th>Name</th>
   <th>Class</th>
   <th>Academic year</th>
   <th>Phone number</th>
   <th>D_O_B</th>
   <th>Gender</th>
   <th>Address</th>
   
</tr> 

<?php
include("connection.php");
error_reporting(0);
$query ="SELECT * from student order by Student_Id";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);
echo $result ['Student_Id']." ".$result['Name']." ".$result['Class']." ".$result['Academic_Year']." ".$result['Phone_Number']." ".$result['Date_Of_Birth']." ".$result['Gender']." ".$result['Address'];
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['Student_Id']."</td>
        <td>".$result['Name']."</td>
        <td>".$result['Class']."</td>
        <td>".$result['Academic_Year']."</td>
        <td>".$result['Phone_Number']."</td>
        <td>".$result['Date_Of_Birth']."</td>
        <td>".$result['Gender']."</td>
        <td>".$result['Address']."</td>

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
<br><br>
<tr>
<div id=but>
<button1 colspan="2" align="center" ><a href ="adm2.php"><input type="button"  name="Back" id="button" value="Back"></a>
</button1>
</div>
</tr>
</body>
</html>