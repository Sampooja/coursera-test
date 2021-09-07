<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.0">
    
    <title>Display record</title>
</head>

<body> 

<style>



table
{
color:white;
background-color: rgba(0,0,0,0.4);
border-radius:10px;
}

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

background-color: rgba(0,0,0,0.5);
color:white;
height:32px;
width:85px;
border-radius:25px;
text-align:center;
}
#but 
{
    text-align:center
}
#link { color: #00FF00; 
 
}
</style>
<body>
    
      <p style="text-align:center;font-size:40px;"><b>Academic Details Of The Students</b></p>

   </body>
<table border="5" align="center" cellspacing="5" style ="width:70%; float:center;">
  <tr>
<th rowspan="2" >Student Id</th>
<th colspan="4" >Marks</th>
<th colspan="3" >Attendance</th>
<th rowspan="2" >Operation</th>
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
include("connection.php");
error_reporting(0);
$query ="SELECT * from academics order by Student_Id";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);
//echo $result ['Student_Id']." ".$result['Name']." ".$result['Class']." ".$result['Academic_Year']." ".$result['Phone_Number']." ".$result['Date_Of_Birth']." ".$result['Gender']." ".$result['Address'];
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
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

        <td id=link align='center'><a style='color:white' href ='aca_upd.php?a=$result[Student_Id]&b=$result[Java_Marks]&c=$result[Java_A]&d=$result[Java_C]&e=$result[Python_Marks]
        &f=$result[Python_A]&g=$result[Python_C]&h=$result[Sql_Marks]&i=$result[Sql_A]&j=$result[Sql_C]'>Edit/Update</td>
        </tr>
      ";
    }
    //echo " table has records";
   
}
//echo " table has records";
//<td><a href ='fee_upd.php?rn=$result[Student_Id]&fn=$result[Father_Name]&cn=$result[Mother_Name]&an=$result[Mother_Tongue]&pn=$result[Occupation]'>Edit/Update </td>

else{
    echo "no records found";
}

?>
</table>
<br>
<tr>
<div id=but>
<button1 colspan="2" align="center" ><a href ="adm.php"><input type="button"  name="Back" id="button" value="Back"></a>
</button1>
</div>
</tr>
</body>
</html>