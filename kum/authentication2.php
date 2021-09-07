<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from loginte where Te_Id = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login Successful </center></h1>"; 
           // echo '<script>alert("Login Successful")</script>';
           // sleep(2);
             header("Location: adm2.php");
        }  
        else{ 
            //echo '<script>alert("Login failed.Invalid User name or Password.")</script>'; 

            echo '<script>confirm("Login failed.Invalid Teacher ID or Password.");
            window.location.href="login2.php";
            </script>';


           // echo "<h1> Login failed.Invalid User name or Password.</h1>";  
        }     
?> 