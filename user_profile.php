<?php 
    session_start();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin profile</title>
</head>
<body>

profile

<p>ID: <?php echo $_SESSION["id"]  ?> </p><br>
<p>Name: <?php echo $_SESSION["name"]  ?> </p><br>
<p>Email: <?php echo $_SESSION["email"]  ?> </p><br>
<p>UserType: <?php echo $_SESSION["type"]  ?> </p><br>
    
</body>
</html>