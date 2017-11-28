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
</head>
<body>
<?php 
	include('navbar.php');
	
	?>

<div class="container" style="width:800px;text-align:center;vertical-align:middle;border:2px solid #DCDCDC;border-radius:15px;">	


				<?php
				if(isset ( $_GET['check_login']))
					{
						$_SESSION ['check_login'] = 2;
					}
					
					if( $_SESSION ['check_login'] == 1) {
					print '<div class="alert alert-danger">Please login before buy!</div>';
					}
				?>																													

  <h2>Login Form</h2>
  <form class="form-horizontal" action="login.php" method="post">
    <div class="form-group" style="margin-right:20px">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
     </div>
    </div>
    <div class="form-group" style="margin-right:20px">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
      </div>
    </div>
    <div class="form-group">        
      <div>
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div>
        <button type="submit" class="btn btn-default">Login</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
