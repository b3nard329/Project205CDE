<?php
	session_start(); 
	include('connect.php');
	
	

	if(!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['postal']) && !empty($_POST['state']) && !empty($_POST['message']))
	{
		$res = array();
		$surname = $_POST['surname'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$postal = $_POST['postal'];
		$state = $_POST['state'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO contact(surname,name,email,pnumber,address,postcode,state,message)VALUES ('$surname', '$name', '$email', '$phone', '$address', '$postal', '$state', '$message')";		
		mysqli_query($conn, $sql);
					
		header( "refresh:0; url= contactus.php" );
		echo '<script language="javascript">';
		echo 'alert("Submit successful")';
		echo '</script>';
		

	}
	else
	{
			//header('location:contact.php');
			header( "refresh:0; url= contactus.php" );
			echo '<script language="javascript">';
			echo 'alert("Please fill in all column... ")';
			echo '</script>';
	}	

	//echo json_encode($res);	
	
?>