<?php 
    session_start();
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello <?php echo $_SESSION["name"]  ?> ! </h1>
<a href="">Profile</a><br>
    <a href="">Change Password</a><br>
    
    <a href="">logout</a>
</body>
</html>