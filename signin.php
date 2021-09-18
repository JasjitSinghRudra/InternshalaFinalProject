<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
require 'header_logout.php';
if(!isset($SESSION['id'])){ 
	require 'header_logout.php';
  ?>

<div class="container"> 
<div class=" row" style="margin-top: 80px;">
	<div class="col-sm-7 col-xs-12">
		<img class="img-responsive" src="img/siphone.png">
	</div>

	<div class="  col-sm-5 col-xs-12 " style="margin-bottom: 100px;">
		<h2><strong> SIGN UP</strong> </h2>
		<form method="POST" action="sign.php">
			<div><?php //echo $_GET['total_error']; ?></div>
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name" required="true" pattern=".{1,}">
						</div>

						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
						</div>

						<div class="form-group">	
							<input type="Password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{1,}">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="contact" placeholder="Contact" required="true" pattern=".{10}">

						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="city" placeholder="City" required="true" pattern=".{1,}">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Address" required="true" pattern=".{1,}">
						</div>

						<div>
							<button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
						</div>
		</form>
		<br><p>Aleady Registered? <a data-toggle="modal" data-target="#pz">Login</a> </p>
	</div>
</div> 
</div>

<?php } ?>

<div>
<?php require 'footer.php'; ?>
</div>

</body>
</html>