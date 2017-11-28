<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	

<link rel="stylesheet" type="text/css" href="homepage.css"/>
  
  <style>
  
  

  
  </style>
  <script type="text/javascript">
	$(document).on("click", ".identifyingClass", function () {

     var id = $(this).data('id');
     var name = $(this).data('name');
     var price = $(this).data('price');
     var quantity = $(this).data('quantity');
     var image = $(this).data('image');
	 
	 sessionStorage.setItem('name', name);
	 sessionStorage.setItem('price', price);
	 sessionStorage.setItem('quantity', quantity);
	 sessionStorage.setItem('id', id);
	 
	 //alert("id="+id+"name="+name+"price="+price+"quantity="+quantity+"image="+image);

	 document.getElementById("item_name").innerHTML = name;
	 document.getElementById("item_price").innerHTML = "RM "+price;
	 document.getElementById("item_image").src = "picture/women/wshort/" + image;

	 
});

	
	
</script>
  
  </head>
<body>
 <?php include('navbar.php');?>
<div class="container-fluid">
  
	
	<?php 
	include('connect.php');

	
	$sql = "SELECT id, item_name, price, quantity,image FROM product WHERE categories='wshort'";
	$result = mysqli_query($conn,$sql);
	?>
	
	
	<?php if(empty($_GET['search'])): ?>
	<section class="products">
	
	


		<?php while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){   ?>
		
		
		<div class="product-card">
		 	<div class="product-image">
		      <a><img class="identifyingClass" onerror="this.src = 'picture/No_available_image.jpg'" src="picture/women/wshort/<?php echo $row['image']; ?>"
			  data-id="<?php echo $row['id'];?>" 
			  data-name="<?php echo $row['item_name'];?>"
			  data-price="<?php echo $row['price'];?>"
			  data-quantity="<?php echo $row['quantity'];?>"
			  data-image="<?php echo $row['image'];?>"
			  data-toggle="modal" data-target="#product_view"></a>
		    </div>
			
		    <div class="product-info">
			
		     <center><h1 id="product_name"><?php echo $row['item_name'];?></h2></center>
		        <center><h2 id="product_price">RM <?php echo $row['price'];?></h2> </center>
				  
		    </div>
		 </div>
		
		 
		<?php }?>
	
	</section>
	
	
	
	
	
	<?php else:?>

	<div class="container-fluid">
  
	
	<?php 
		$search = mysqli_real_escape_string($conn,$_GET['search']);     
		$search_sql = "SELECT id, item_name, price,categories,quantity,gender,image FROM product WHERE item_name LIKE '%".$search."%'"; 
		$search_query = mysqli_query($conn,$search_sql); 
	?>
	<section class="products">
	
	


		<?php while ($row = mysqli_fetch_array($search_query,MYSQLI_ASSOC)){   ?>
		
		
		<div class="product-card">
		 	<div class="product-image">
		      <a><img onerror="this.src = 'picture/No_available_image.jpg'" src="picture/<?php echo $row['gender'] ?>/<?php echo $row['categories'] ?>/<?php echo $row['image']; ?>"></a>
		    </div>
			
		    <div class="product-info">
			
		     <center><h1 id="product_name"><?php echo $row['item_name'];?></h2></center>
		        <center><h2 id="product_price"><?php echo $row['price'];?></h2> </center>
				
		    </div>
		 </div>
		
		 
		<?php }?>
	
	</section>
</div>
	






<?php endif;?>
</div>
	
	
	<?php  include('product_modal2.php');?>
	
	


</body>
</html>