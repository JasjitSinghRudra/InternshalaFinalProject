<?php 
$con=mysqli_connect("localhost","root","","estore") or die(mysqli_error($con));
 session_start();
 ?>

	<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>

<?php
require "header_login.php";
?>

<div class="container" style="margin-top: 80px;">
    <div class="jumbotron">
    <div style="margin: 50px;">
	<center><p>Thank You for ordering from E-store. Your order shall be delivered<br>to you shortly. <br><br><br>Order some more Electronic items <a href="index.php"> here</a>.</p></center>
    </div>
    </div>
</div>
</body>
</html>