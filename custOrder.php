<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php 
	include('navbar.php');
	include('connect.php');
	
	if(isset ($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
		
		
		
	}
	
	
	$sql_order = "SELECT myorder.id,product.item_name,myorder.contact,myorder.item_id,myorder.quantity,product.price FROM myorder JOIN product ON myorder.item_id = product.id WHERE myorder.user_id = $user_id";
	$result_order = mysqli_query($conn,$sql_order);
	?>
    
   <h3><i>My Order</i></h3>
  <table class="table">
    <thead>
      <tr style="font-size:20px">
		<th>Order ID</th>
        <th>Item Name</th>
		<th>Contact</th>
        <th>Item ID</th>
		<th>Quantity</th>
		<th>Total Price</th>
      </tr>
    </thead>
    <tbody>
	
	
	
	<?php while ($row = mysqli_fetch_assoc($result_order)){   ?>
	
      <tr style="font-size:18px">
		
	   <td><?php echo $row['id']?></td>
	   <td><?php echo $row['item_name']?></td>
		<td><?php echo $row['contact']?></td>
        <td><?php echo $row['item_id']?></td>
        <td><?php echo $row['quantity']?></td>
		<td><?php echo "RM",$row['price']*$row['quantity']?></td>
		<td><a type="button" class="btn btn-warning" href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
		
		
		 
		</tr>
	   <?php }?>
	</table>
</body>
</html>