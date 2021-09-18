<?php 
echo "Logging~out";
session_start();
session_unset();
session_destroy();

header("location:/phpmyadmin/Project/index.php");
?>
<!--
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="script/bootstrap.min.js"></script>  
</head>

<body>

	<div align="center" style="font-size: 18px;">
<p>
<a href="index.php"><button class="btn btn-primary">Shop Again</button> <br></a> or<br> <button data-toggle="modal" data-target="#pz" class="btn btn-primary">Login</button>
</p>
</div>
</body>
</html>
-->
<?php require 'login_modal.php'; ?>