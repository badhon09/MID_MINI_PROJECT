<?php
include('dbconn.php');

	if(isset($_POST['submit'])){

		$id		= $_POST['id'];
        $password 	= $_POST['password'];
      //  $type   = 'user';

		if(empty($id) || empty($password) ){
			echo "null submission found!";
		}else{


			


			 
			$sql=mysqli_query($dbconn,"select * from users where id='$id' and password='$password'");
			if(mysqli_num_rows($sql))
			{
				while($row=mysqli_fetch_array($sql))
				{   
					$type=$row["type"];
					$id=$row["id"];
					$name=$row["name"];
					$email=$row["email"];
					session_start();
					$_SESSION["name"]=$name;
					$_SESSION["id"]=$id;
					$_SESSION["email"]=$email;
					$_SESSION["type"]=$type;

						if($type =='admin'){
							header("location:./adminhome.php");
						}
						else if($type=='user'){
							header("location:./userhome.php");
						}
					
				}
			 
			}
			else{
			   //$error="";
			   echo 'not valid';
	  
	  
			}








				
			}
		}	

	else{
		//echo "invalid request";
		header('location: login.php');
	}




?> 