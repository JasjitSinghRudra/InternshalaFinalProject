<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php 
require 'header_logout.php';
?>

<div class="row" >
	<div class="container" style="margin-top: 80px; padding: 20px;">
	<div class="row-style-login-page-panel">
		<div class="col-sm-9 col-xs-12">
			<h2>LIVE SUPPORT</h2>
			<h3>24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
			<p>For any technical or non technical issues related to usable of this site, our team is present 24/7 to answer any query. Please enter your information and problem faced in the form, and our team will contact you at the soonest.</p>
			</div>
			<div class="col-sm-3 col-xs-12">
			<img src="img/tech.png" width="225" height="200">

			</div>

		</div>
	</div>
</div>
<div class="row">
	<div class="container" style="margin-top: 10px; margin-bottom: 50px;">
	<div class="row-style-login-page-pannel" >
		<div class="col-sm-6 col-xs-12" >
			<h3>CONTACT US</h3>
			<form method="post"  action="contact.php">
				<div class="form-group">
					Name:<input type="text" class="form-control" name="name" >
				</div>

				<div class="form-group">
					Email:<input type="email" class="form-control" name="email" >
				</div>

				<div class="form-group">
					Message:<textarea rows="4"  class="form-control" name="message"></textarea>
				</div>

					<button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
						</button>

			</form>
			
			</div>
			<div class="col-sm-5 col-xs-12">
			<h3>Company Information:</h3>
			<p>500, Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Lorem,<br>USA<br>Phone:(00)222 666 444<br>Fax: (000) 000 00 00 0<br>Email:info@mycompany.com<br>Follow on:Facebook, Twitter<br></p>
			</div>

		</div>
	</div>
</div>
<br><br><br><br><br><br>
<div>
<?php 
require 'footer.php';
?>
</div>
</body>
</html>