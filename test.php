<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	


  
  <style>
  
  .products {
  display: flex;
  flex-wrap: wrap;
}

.product-card {
  flex: 1 16%;
}

img
{
	width:300px;
	height:300px;
}

.product-name {
	font-size: 14px;
	font-weight: bold;
}


#product_name
{
	margin-left:80px;
}
  
#product_price
{
	margin-left:80px;
}

.product-info
{
	 width: 200px;
}
  

  
  </style>
  
  
  </head>
<body>

<div class="container-fluid">
  
	
	<?php 
	include('connect.php');
	include('navbar.php');
	
	$sql = "SELECT id, item_name, price, quantity,image FROM newArrival";
	$result = mysqli_query($conn,$sql);
	?>
	<section class="products">
	
	


		<?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>
		
		
		<div class="product-card">
		 	<div class="product-image">
		      <a><img onerror="this.src = 'picture/No_available_image.jpg'" src="picture/<?php echo $row['image']; ?>"></a>
		    </div>
			
		    <div class="product-info">
			
		     <center><h1 id="product_name"><?php echo $row['item_name'];?></h2></center>
		        <center><h2 id="product_price"><?php echo $row['price'];?></h2> </center>
				  
		    </div>
		 </div>
		
		 
		<?php }?>
	
	</section>
</div>
	
	
	
	
	


</body>
</html>