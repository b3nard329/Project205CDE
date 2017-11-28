<?php
	session_start(); 
	require "connect.php";	
	
	

	if(!empty($_POST['email']) && !empty($_POST['pass']) )
	{
		$res = array();
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$sql = "SELECT `id`,`username`,`password`,`name` FROM `user` WHERE `username`='$email' && `password`='$pass' ";
		
		
		$result = mysqli_query($conn,$sql);
		
		
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			
		
		$id = $row['id'];
		$name1 = $row['name'];
		
		
		if($row['username'] == $email && $row['password'] == $pass)
		{		
			$_SESSION['user_id'] = $id;
			$_SESSION['user_email'] = $name1;
			$_SESSION['user_pass'] = $pass;

			
				header( "refresh:0; url= homepage.php" );	
				echo '<script language="javascript">';
				echo 'alert("Login Successful")';
				echo '</script>';
			
	
		}
		else
		{
			//header('location:index.php');
			header( "refresh:0; url= loginpop.php" );
			echo '<script language="javascript">';
			echo 'alert("Login Failed")';
			echo '</script>';
		}
	}
	else
	{
			//header('location:index.php');
			header( "refresh:0; url= loginpop.php" );
			echo '<script language="javascript">';
			echo 'alert("Please enter your email and password!!")';
			echo '</script>';
	}	

	//echo json_encode($res);	
	
?>