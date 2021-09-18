<?php
if(!isset($_SESSION['id'])){  ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="script/bootstrap.min.js"></script>  
    <style type="text/css">
a{
text-decoration: none;
background-color: transparent;
color:#ededed;
}
ul{
list-style: none;
}
    </style>

</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: #404040; color:white;">
	<div class="container">
		<div class="row" >
			<div class=" col-md-4 col-xs-12" >
				<h3>Information</h3>
				<ul>
					<li><a href="About_us.php">About Us</a></li>
					<li><a href="Contact_us.php">Contact Us</a></li>
				</ul>
			</div>

			<div class=" col-md-4  col-xs-12">
				<h3>My Account</h3>
				<ul>
					<li ><a data-toggle="modal" data-target="#pz">Login</a></li>
					<li><a href="signin.php">Sign Up</a></li>
				</ul>
			</div>

			<div class=" col-md-4  col-xs-12">
				<h3>Contact Us</h3>
				<ul>
					<li>+91-123-0000000</li>
				</ul>
			</div>
		</div>
	</div>
</div>


</body>
</html>

<?php require 'login_modal.php'; ?>

<?php } ?>