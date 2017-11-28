<?php
	session_start(); 
	require "connect.php";

	
	if(!empty($_POST['Email']) && !empty($_POST['password']) && !empty($_POST['Name']))
	{					
			
			$email = $_POST['Email'];	
			$pass = $_POST['password'];	
			$name = $_POST['Name'];
			
			
			
			$query_email = "SELECT username FROM user WHERE username='$email'";
			$query_run_email = mysqli_query($conn,$query_email);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
			{
				if (mysqli_num_rows($query_run_email))
				{
					header( "refresh:0; url= signup.php" );
					echo '<script language="javascript">';
					echo 'alert("try again,email already exists")';
					echo '</script>';
				}
				else
				{
					$sql = "INSERT INTO user(username,password,name)VALUES ('$email', '$pass', '$name')";		
					mysqli_query($conn, $sql);
					
					header( "refresh:0; url= homepage.php" );
					echo '<script language="javascript">';
					echo 'alert("Account created successful")';
					echo '</script>';
				}
			}else
			{			
				header( "refresh:0; url= signup.php" );
				echo '<script language="javascript">';
				echo 'alert("email format wrong,example : test@example.c")';
				echo '</script>';
			}
			
			
	}else
	{
				header( "refresh:0; url= signup.php" );
				echo '<script language="javascript">';
				echo 'alert("account created failed,please fill in the require information")';
				echo '</script>';
	}		
			
					
?>