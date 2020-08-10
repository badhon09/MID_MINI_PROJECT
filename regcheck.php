<?php

include('dbconn.php');


	if(isset($_POST['submit'])){

        $id 		= $_POST['id'];
        $password 	= $_POST['password'];
        $name      = $_POST['name'];
        $email 		= $_POST['email'];
        $type       = $_POST['type'];
		

		if(empty($name) || empty($password) || empty($email) ){
			echo "null submission found!";
		}else{
			$query = "INSERT INTO users (id, password, name, email, type) 
			VALUES ('$id','$password','$name','$email','$type')";

	$result = mysqli_query($dbconn,$query);
	
	if($result){
		echo "succseesss";
		header('Location:login.php');
	}
	else{
	
		header('location: registration.php');
	}

	
			

	}

	}

?>