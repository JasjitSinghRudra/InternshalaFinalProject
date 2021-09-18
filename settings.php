<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if(isset($_SESSION['id'])){ 
	require 'header_login.php'; 
?>

<div  class="container" style="margin-top: 60px;">
<b>
<?php
echo "Hi ".$_SESSION['name'];
 ?>
</b>
</div>

<div class=" row " >
	<div class=" col-lg-offset-2 col-lg-5 col-md-offset-3 col-md-6 col-xs-offset-2 col-xs-8">
	<br><br>
		<h2><strong> Change Password</strong> </h2>
		<form method="post" action="setter.php">
						<div class="form-group">
							<input type="Password" class="form-control" name="oldpass" placeholder="Old Password">
						</div>

						<div class="form-group">
							<input type="Password" class="form-control" name="newpass" placeholder="New Password">
						</div>

						<div class="form-group">	
							<input type="Password" class="form-control" name="repass" placeholder="Re-enter new Password">
						</div>

						<div>
							<button class="btn btn-primary" type="submit" value="submit"  name="button">Change</button>					
						</div>
		</form>
	</div>
</div>
<?php 
require 'footer.php';
} ?>
</body>
</html>