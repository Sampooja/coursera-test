<!DOCTYPE html>
<html lang="en">
<head>
<h1> </h1>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Document</title>
</head> 
<p>
<a style='color:white'  href ="home.php"><input type="button"  name="Logout" id="button" value="Logout"></a>
</p>

<style>

p{
    text-align: right;
}




#button
{
background-color:rgba(0,0,0,0.5);

color:white;
height:32px;
width:150px;
border-radius:25px;
}
body
{
background: url('bg6.jpg');
background-repeat: no-repeat;
background-size:contain;
overflow: hidden;
background-size: cover;
}
table
{
color:white;
background-color: rgba(0,0,0,0.1);
border-radius:10px;
}


.head {
    text-align: center;
    
    padding-top: 75px;
    background-color:rgba(0,0,0,0.4);
}
#ab{
    background-color:rgba(0,0,0,0.1);
}



</style>

<body id = "ab">
<p style="text-align:center;font-size:40px;"><b>Dashboard</b></p>
<div class="container">
<form align=center>
<br><br>
<a style='color:white' href ="student.php"><input type="button"  name="Back" id="button" value="Add Student Details"></a>
<br></br>
<a style='color:white' href ="stu_dis.php"><input type="button" name="Back" id="button" value=" Show Student Details"></a>
<br></br>
<a style='color:white' href ="fee_dis.php"><input type="button" name="Back" id="button" value="Show Fees Details"></a>
<br></br>
<a style='color:white' href ="pa_dis.php"><input type="button" name="Back" id="button" value="Show Parent Details"></a>
<br></br>
<a style='color:white' href ="aca_dis.php"><input type="button" name="Back" id="button" value="Show Academics Details"></a>
<br></br>
<a style='color:white' href ="teacher.php"><input type="button" name="Back" id="button" value="Add Teacher Details"></a>
<br></br>
<a style='color:white' href ="te_dis.php"><input type="button" name="Back" id="button" value="Show Teacher Details"></a>

<br></br>
<br></br>
</form>
</div>
</body>

</html>