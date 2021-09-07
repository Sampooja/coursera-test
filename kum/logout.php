<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//echo '<script> confirm ("Data Not Submited Will Not Be Saved")</script>';
session_start();
session_destroy();
header('Location:home.php');
exit;
?>

</body>
</html>