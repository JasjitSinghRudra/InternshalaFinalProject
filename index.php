<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
if(!isset($_SESSION['id'])){ 
	require 'header_logout.php';
	?>
<div class="container" style="margin-top: 80px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 1</div>
				<div class="panel-body">
					<center><img  class="img-responsive img-thumbnail"  src="img/oneplus8.jpg" style="width:250px; height:250px;"><br>
					<strong> OnePlus 8 <br></strong>Price:41,999/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal" data-target="#pz" name="btn">Order Now!</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 2</div>
				<div class="panel-body">
					<center><img  class="img-responsive img-thumbnail" src="img/razr.png" style="width:250px; height:250px;"><br>
					<strong> Motorola Razr <br></strong>Price:124,999/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 3</div>
				<div class="panel-body" >
					<center><img  class="img-responsive img-thumbnail" src="img/samsungS20.jpg" style="width:250px; height:250px;"><br>
					<strong> Samsung S20 <br></strong>Price:70,499/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 4</div>
				<div class="panel-body" >
					<center><img  class="img-responsive img-thumbnail" src="img/iphone11.jpg" style="width:250px; height:250px;"><br>
					<strong> Apple Iphone 11 <br></strong>Price:64,900/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 5</div>
				<div class="panel-body" >
					<center><img  class="img-responsive img-thumbnail" src="img/nokiae71.jpg" style="width:250px; height:250px;"><br>
					<strong> Nokia e71 <br></strong>Price:3,720/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 6</div>
				<div class="panel-body">
					<center><img  class="img-responsive img-thumbnail" src="img/mi10.jpg" style="width:250px; height:250px;"><br>
					<strong> Xiaomi Mi 10 <br></strong>Price:51,190/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>	
	</div>
</div>


<div>
<?php 
require 'footer.php';
require 'login_modal.php';
?>
</div>


<?php } else { 
	require 'header_login.php'; 
?>

<div class="container" style="margin-top: 80px; margin-bottom: 100px">
	<form method="post"  action="test.php">
	<div class="row row-style-login-page-pannel">
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">#1 OnePlus 8</div>
				<div class="panel-body">
					<center><img  class="img-responsive img-thumbnail"  src="img/oneplus8.jpg" style="width:250px; height:250px;"><br><br>Processor: Snapdragon 865, Storage: 128 GB, Camera: 48MP + 16MP + 2MP, Battery: 4300 mAh, RAM: 6 GB -->Price:41,999/-</center><br>
					<button class="btn btn-primary form-control" type="submit" value="41999" data-target="#all" name="btn">Add to Cart</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">#2 Motorola Razr</div>
				<div class="panel-body">
					<center><img  class="img-responsive img-thumbnail" src="img/razr.png" style="width:250px; height:250px;"><br><br>Processor: Snapdragon 710, Storage: 128 GB, Camera: 16MP, Battery: 2510 mAh, RAM: 6 GB -->Price:124,999/-</center><br>
					<button class="btn btn-primary form-control" type="submit" value="124999"  name="btn" data-target="#all">Add to Cart</button>
				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">#3 Samsung S20</div>
				<div class="panel-body" >
					<center><img  class="img-responsive img-thumbnail" src="img/samsungS20.jpg" style="width:250px; height:250px;"><br><br>Processor: Samsung Exynos 9 Octa, Storage: 128 GB, Camera: 2MP + 64MP + 12MP Battery: 4000 mAh, RAM: 8 GB -->Price:70,499/-</center><br>
					<button class="btn btn-primary form-control" type="submit" value="70499"  name="btn" data-target="#all">Add to Cart</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">#4 Apple iPhone 11</div>
				<div class="panel-body" >
					<center><img  class="img-responsive img-thumbnail" src="img/iphone11.jpg" style="width:250px; height:250px;">
					<br><br>Processor: Apple A13 Bionic, Storage: 64 GB, Camera: 12MP, Battery: 3110 mAh, RAM: 4 GB -->Price:64,900/-</center><br>
					<button class="btn btn-primary form-control" type="submit" value="64900"  name="btn" data-target="#all">Add to Cart</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">#5 Nokia e71</div>
				<div class="panel-body" >
					<center><img  class="img-responsive img-thumbnail" src="img/nokiae71.jpg" style="width:250px; height:250px;"><br><br>Processor: 369 MHz ARM 11, Storage: 128 MB, Camera: 3.15MP, Battery: 1500 mAh, RAM: 128 MB -->Price:3,720/-</center><br>
					<button class="btn btn-primary form-control" type="submit" value="3720"  name="btn" data-target="#all">Add to Cart</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">#6 Xiaomi Mi 10</div>
				<div class="panel-body">
					<center><img  class="img-responsive img-thumbnail" src="img/mi10.jpg" style="width:250px; height:250px;"><br><br>Processor: Snapdragon 865, Storage: 128 GB, Camera: 108+13+2+2 MP, Battery: 4780 mAh, RAM: 8 GB -->Price:51,190/-</center><br>
					<button class="btn btn-primary form-control" type="submit" value="51190"  name="btn" data-target="#all">Add to Cart</button>
				</div>
			</div>
		</div>	
	</div>
	</form>
</div>

<div class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: #404040; color:white;">
	<div class="container">
		<div class="row" >
			<div class=" col-md-4 col-xs-12" >
				<h3>My Account</h3>
				<ul>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>

			<div class=" col-md-4  col-xs-12">
				<h3>
				<?php
				echo "\t\tHi ".$_SESSION['name'];
				 ?>
				</h3>
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

<?php } ?>

<?php require 'login_modal.php'; ?>

</body>
</html>