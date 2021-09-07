<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>  
<head>  
    <title>PHP login system</title>  
    <script src="https://kit.fontawesome.com/9ab0510827.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
        <h1>Login</h1>  
        <form name="f1" action="authentication.php"  onsubmit = "return validation()" method = "POST">  
            <p>  
            <i class="fa fa-user"></i>
                <input type = "text" placeholder="Username" id ="user" name  = "user" />  
            </p>  
            
            <p>  
            <i class="fa fa-lock"></i>
                <input type = "password" placeholder="Password" id ="pass" name  = "pass" />  
            </p>  
            <br>    
            <h3> 
            <i class="fas fa-sign-in-alt"></i>    
                <input type =  "submit" name="submit" id = "button" value = "Login" />  
                <br></br>
            </h3> 
           
<br>
        </form> 
       
    </div> 
    </div> 
    </div> 
    
      
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  

