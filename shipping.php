<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Sign Up Form</title>
  
  
  
      <link rel="stylesheet" type="text/css" href="style.css">
	    <script src="https://code.jquery.com/jquery-1.12.4.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
        </script>
  
</head>



<?php if (isset($_SESSION['user_id'])):?>
<form data-toggle="validator" name="login_form" id="textContent" class = "form-horizontal"  method = "post" action="ship_handle.php">

  <h2>Shipping Form</h2>
		<p>
			<label for="Name" class="floatLabel">User Name</label>
			<div class = "form-group">
			<input id="Name" name="username" type="text" data-error="Please Enter Your Name" required>
			<div class="help-block with-errors"></div>
			</div>
		</p>
  
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<div class = "form-group">
			<input id="Email" name="email" type="text" data-error="Please Enter Your Email" required>
			<div class="help-block with-errors"></div>
			</div>
		</p>
		
		<p>
			<label for="address" class="floatLabel">Address</label>
			<div class = "form-group">
			<input id="address" name="address" type="text" data-error="Please Enter Your Address" required>
			<div class="help-block with-errors"></div>
			</div>
		</p>
		
		<p>
			<label for="contact" class="floatLabel">Contact Number</label>
			<div class = "form-group">
			<input id="contact" name="phone" type="text" data-error="Please Enter Your Contact Number" required>
			<div class="help-block with-errors"></div>
			</div>
		</p>
		
		<input type="hidden" id="pro_id" name="product_id" value="" >
		<input type="hidden" id="pro_qty" name="product_qty" value="<?php echo $_POST['select']; ?>" >
		<p>
		
			<button type="submit" class="btn btn-default" style="width:100%">Submit</button>
		</p>
		<p>
			<a href="homepage.php"><button type="button" class="btn btn-default" style="width:100%">Exit</button></a>
		</p>
	</form>
	
	
	
	<?php else:?>
	<?php
		$_SESSION['check_login'] = 1;
		header( "refresh:0; url= loginpop.php" );

	?>
	<?php endif; ?>
	
	
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
	
<script type="text/javascript">


		var temp_id = sessionStorage.getItem('id'); 
	
		document.getElementById('pro_id').value = temp_id;
		

	
</script>
</body>
</html>
