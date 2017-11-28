<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  	
      </button>
	  
      <a class="navbar-brand" href="#">myFashion</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="homepage.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mens <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="newArrival.php">New Arrival</a></li>
          <li><a href="shirt.php">Shirts</a></li>
          <li><a href="shorts.php">Shorts</a></li>
		  <li><a href="jeans.php">Jeans</a></li>
		  <li><a href="tshirt.php">T-shirt</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Womens <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="w_newArrival.php">New Arrival</a></li>
          <li><a href="dress.php">Dresses</a></li>
          <li><a href="w_top.php">Top</a></li>
		  <li><a href="w_jeans.php">Jeans</a></li>
		  <li><a href="w_short.php">Shorts</a></li>
		  
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<?php if (isset($_SESSION['user_id'])):?>


	



      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user_email']?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
		
		   
          <li><a href="custOrder.php">Your Purchase Order</a></li>
		  
          <li>

          	<a href="log_out.php">Sign Out</a>

          </li>
        </ul>
      </li>
	  
	  
	  <?php else:?>
	  
	  
	  
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="loginpop.php?check_login=1"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  
	  <?php endif; ?>
    </ul>
	

	
<?php if(empty($_GET['search']) ): ?>


	
	
	
	<form action="" method="get" class="navbar-form navbar-right">
      <div class="input-group">
        <input type="text" class="form-control" name= "search" placeholder="Search">
		
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
<?php endif;?>



	
  </div>
</nav>