<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Display record</title>
</head>

<body> 
<p style="text-align:center;font-size:40px;"><b>Fees Details</b></p>



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

background-color: rgba(0,0,0,0.5);
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
   <th>Receipt No</th>
   <th>Tution Fee</th>
   <th>Date of Receipt</th>
   <th>Other Fee Paid</th>
   <th colspan="2" align="center">   Operation   </th>
</tr> 

<?php

include("connection.php");
error_reporting(0);
$query1 = "SELECT * from payment";
//$query = "SELECT st.Name,sr.* from student st,fee sr where st.Student_Id=sr.Student_Id";
//$query1 = "SELECT fee.*, student.Name FROM fee,student WHERE fee.Student_Id=student.Student_Id";
$data2 = mysqli_query($con,$query1);
$total = mysqli_num_rows($data2);
//$result = mysqli_fetch_assoc($data);
//echo $result ['Student_Id']." ".$result['Receipt_No']." ".$result['Tution_Fee']." ".$result['Date_Of_Receipt']." ".$result['Other_Fee_Paid'];
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data2))
    {
        echo "
        <tr>
        <td>".$result['Student_Id']."</td>
        <td>".$result['Receipt_No']."</td>
        <td>".$result['Tution_Fee']."</td>
        <td>".$result['Date_Of_Receipt']."</td>
        <td>".$result['Other_Fee_Paid']."</td>
        <td><a style='color:white' href ='fee_upd.php?rn=$result[Student_Id]&fn=$result[Receipt_No]&cn=$result[Tution_Fee]&an=$result[Date_Of_Receipt]&pn=$result[Other_Fee_Paid]'>Edit/Update</td>
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