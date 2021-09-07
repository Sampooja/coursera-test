<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9ab0510827.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body id="body_bg"> 
<div class="container">
<div class="header">
<style>

#button
{
background-color:rgba(0,0,0,0.5);
color:white;
height:32px;
width:85px;
border-radius:25px;
}

</style>
    

<div id = "form"> 
        <h1>ADD USER</h1>  
        <form name="f1" on submit = "return validation()" method = "POST" >  
            <p>  
            <i class="fa fa-user"></i>
                <input type = "text" placeholder="User name" id ="user" name  = "user" />  
            </p>  
            
            <p>  
            <i class="fas fa-envelope"></i>
                <input type = "text" placeholder="Email" id ="email" name  = "email" />  
            </p>

            <p>  
            <i class="fa fa-lock"></i>
                <input type = "password" placeholder="Password" id ="pass" name  = "pass" />  
            </p>  

            <p>  
            <i class="fa fa-lock"></i>
                <input type = "password" oncopy="return false" oncut="return false" onpaste="return false" placeholder="Re-Enter-Password" id ="cpass" name  = "cpass" />  
            </p> 

            <br>    
            <h3> 
            <i class="fas fa-sign-in-alt"></i>    
                <input type = "submit" name="submit" id = "button" value = "submit" />  
                <br>
            </h3> 
            <br>
        </form> 
</div> 
</div> 
</div> 
    <script>  
            function validation()  
            {  
                var id=document.f1.pass.value;  
                var ps=document.f1.cpass.value;  
                if(id != ps) {  
                    alert("Password does not match");  
                    return false;  
                }  
                else  
                {  
                 




                }                             
            }  
        </script>

</body>
</html>

<?php

	{

$mn = $_GET['user'];
$cn = $_GET['email'];
$gn = $_GET['pass'];

echo "$mn";
echo "$cn";
echo "$bn";

$query= "INSERT INTO login values ('$mn','$cn','$gn')";
$data = mysqli_query($con,$query);

if($data)
{
    echo '<script>alert("Data insertion successful")</script>';
}

else
{
    echo '<script>alert("Data insertion un-successful")</script>';
}
}
?>