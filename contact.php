<?php

	$con=mysqli_connect("localhost","root","","estore") or die(mysqli_error($con));
	session_start();
 
	$name=mysqli_real_escape_string($con, $_POST['name']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$problem=mysqli_real_escape_string($con, $_POST['message']);

	$user_reg="insert into contacts(name,email,problem) values('$name','$email','$problem')";
	$result=mysqli_query($con, $user_reg) or die(mysqli_error($user_reg));

	echo "<center>Your complaint/query has been registered.<br>You will soon be contacted by our team.<br>";
?>
<a href="index.php"> <?php echo "<br>Continue Shopping..!!</center>"; ?> </a>