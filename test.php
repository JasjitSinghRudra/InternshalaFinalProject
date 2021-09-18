<?php
	$con=mysqli_connect("localhost","root","","estore") or die(mysqli_error($con));
session_start();
	if(isset($_SESSION['id']))
	{ 
	require 'header_login.php';
	$name=0;
	$name=mysqli_real_escape_string($con, $_POST['btn']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 80px; ">
		<div class="row">
			<div class=" col-xs-offset-4 col-xs-2 " style="border-bottom: 1px solid #ddd;">
				<h3>Item Number</h3>
			</div>

			<div class=" col-xs-2" style="border-bottom: 1px solid #ddd;">
				<h3>Price</h3>
			</div>
		</div>
		<div style=""></div>
			</div>

<?php  
	$total=0;
	$total=$total+$name;
?>
		</div>

<div class="row" >
			<div class=" col-xs-offset-4 col-xs-2 " style="padding-top:20px; ">
				<b>&nbsp;&nbsp;Total Amount:</b>
			</div>

			<div class=" col-xs-2" style="padding-top:20px;">
				
				<?php 
					if($total==0){
						echo"<b>Please order a phone to proceed</b>";
					}
					else{
				echo $total."/-";
			?>
			</div>
		</div><br><br><br><br>
<center>
<a href="success.php" type="button" class="btn btn-primary btn-lg"> Place Order </a>
</a>
</center>	

<?php }} ?>			

</div>

</body>
</html>