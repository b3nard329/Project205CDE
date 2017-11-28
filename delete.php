<?php 

 include('connect.php'); 
	$id = $_GET['id'];

	$del="DELETE FROM myorder WHERE id=$id";
	
	
	
	
		if(mysqli_query($conn,$del)){
		header( "refresh:0; url= custOrder.php" );	
				echo '<script language="javascript">';
				echo 'alert("Delete Successful")';
				echo '</script>';
		}else{
			header( "refresh:0; url= custOrder.php" );	
				echo '<script language="javascript">';
				echo 'alert("Delete Failed")';
				echo '</script>';
			
		}

?>