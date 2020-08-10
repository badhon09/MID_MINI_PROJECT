 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view users</title>
</head>
<body>

<table style="width:80%">
  <tr>
    <td>ID</td>
    <td>NAME</td>
    <td>EMAIL</td>
    <td>TYPE</td>
  </tr>
  <?php
include('dbconn.php');

$query = "SELECT * FROM users";
$result = mysqli_query($dbconn,$query);
while($res = mysqli_fetch_array($result)) {  
    $id=$res['id'];
    $name=$res['name'];
    $email = $res['email'];
    $type = $res['type'];
   
 
  
?>  
  <tr>
    <td><?php echo $id ; ?></td>
    <td><?php echo $name ; ?></td>
    <td><?php echo $email ; ?></td>
    <td><?php echo $type ; ?></td>
  </tr>
<?php } ?>
 
</table>

    
</body>
</html>