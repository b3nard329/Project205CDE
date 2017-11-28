<?php
	session_start(); 
	include('connect.php');
	
	

	if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['phone']))
	{
		$res = array();
		$username = $_POST['username'];
		$userid = $_SESSION['user_id'];
		$product_id =  $_POST['product_id'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$quantity = $_POST['product_qty'];
		
		
		
		
		
		$sql = "INSERT INTO myorder(name,user_id,contact,address,item_id,email,quantity)VALUES ('$username', '$userid', '$phone', '$address', '$product_id', '$email', '$quantity' )";		

		mysqli_query($conn, $sql);
			
		$sql2 = "SELECT quantity FROM product where id = $product_id";
		
		$result = mysqli_query($conn, $sql2);
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				
		$current_qty = $row['quantity'];		
		$current_qty = $current_qty-$quantity;	
		
		
		
		$sql3 = "UPDATE product SET quantity = $current_qty WHERE id= $product_id";
					
		mysqli_query($conn, $sql3);		
		
					
		header( "refresh:0; url= homepage.php" );
		echo '<script language="javascript">';
		echo 'alert("Submit successful")';
		echo '</script>';
		

	}
	else
	{
			//header('location:contact.php');
			header( "refresh:0; url= shipping.php" );
			echo '<script language="javascript">';
			echo 'alert("Please fill in all column... ")';
			echo '</script>';
	}	

	//echo json_encode($res);	
	
?>