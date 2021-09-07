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
<a style='color:white'  href ="logout.php"><input type="button"  name="Logout" id="button" value="Logout"></a>
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
</br>
<a style='color:white' href ="stu_dis2.php"><input type="button" name="Back" id="button" value="Show Student Details"></a>
<br></br>
<a style='color:white' href ="pa_dis2.php"><input type="button" name="Back" id="button" value="Show Parent Details"></a>
<br><br>
<a style='color:white' href ="aca_dis2.php"><input type="button" name="Back" id="button" value="Show Academics Details"></a>
<br><br>
<a style='color:white' href ="aca.php"><input type="button" name="Back" id="button" value="Add Academics Details"></a>
<br><br>
<a style='color:white' href ="feac.php"><input type="button" name="Back" id="button" value="Fetch Academics Details"></a>
<br><br>
<a style='color:white' href ="fest.php"><input type="button" name="Back" id="button" value="Fetch Fees status"></a>
<br></br>

</form>
</div>
</body>

</html>