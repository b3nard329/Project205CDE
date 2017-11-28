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

  <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
<?php 
	include('navbar.php');
	include('connect.php');
	?>
	
	
<?php if(empty($_GET['search'])): ?>
	
	  <link rel="stylesheet" type="text/css" href="slideshow.css">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img-responsive" src="picture/Deals.jpg" alt="Deals" style="height:500px">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="picture/promo.jpg" alt="Promotion" style="height:500px">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
        <img src="picture/winter.jpg" alt="Winter" style="height:500px">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
 
<!--content--> 
<div class="container" style="margin-top:20px">
		<h2 class="intro-text text-center">New Arrival</h2>
<div class="row">
	<div class="col-xs-6">
		<div class="thumbnail">
		<a href="newArrival.php">
			<img src="picture/con1.JPG" alt="Content 1" style="width:100%;height:700px">
			</a>
		</div>
	</div>
	
<div class="col-xs-6">
		<div class="thumbnail">
		<a href="newArrival.php">
			<img src="picture/con2.JPG" alt="Content 2" style="width:100%;height:700px">
			</a>
		</div>
	</div>
	
	
</div>
</div>

<div class="container" style="margin-top:1px">
		<h2 class="intro-text text-center">Deals</h2>
<div class="row">
	<div class="col-xs-12">
		<div class="thumbnail">
		<a href="newArrival.php">
			<img src="picture/con3.jpg" alt="Shorts Black SALES" style="width:100%">
			</a>
		</div>
	</div>
	

	
</div>
</div>



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











<?php 
	include('footer.php');
	
	?>
</body>
</html>