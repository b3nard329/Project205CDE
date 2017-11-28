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



<form data-toggle="validator" name="login_form" id="textContent" class = "form-horizontal"  method = "post" action="register.php">
  <h2>Sign Up</h2>
		<p>  	
			<label for="Name" class="floatLabel">User Name</label>
			<div class = "form-group">
				<input id="Name" name="Name" type="text" data-error="Please Enter Your Name" required>
				<div class="help-block with-errors"></div>
			</div>
		</p>
  
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<div class = "form-group">
				<input id="Email" name="Email" type="text" data-error="Please Enter Your Email" required>
				<div class="help-block with-errors"></div>
			</div>
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<div class = "form-group">
				<input id="password" name="password" type="password" data-error="Minimum of 6 characters" data-minlength="6" required>
				<div class="help-block with-errors"></div>
			</div>
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<div class = "form-group">
				<input id="confirm_password" name="confirm_password" type="password" data-error="Confirm Your Password Again!" data-match="#password" data-match-error="Password does not match" required>
				 <div class="help-block with-errors"></div>
			</div>
		</p>
		<p>
			<button type="submit" class="btn btn-default" style="width:100%">Create Account</button>
		</p>
		<p>
			<a href="homepage.php"><button type="button" class="btn btn-default" style="width:100%">Exit</button></a>
		</p>
	</form>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
