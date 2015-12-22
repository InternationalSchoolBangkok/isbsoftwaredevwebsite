<!DOCTYPE html>
<html>
<head>
	<title>Software Development</title>
	<?php include 'common1.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<script src="js/contact.js?1"></script>
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body style="display: block;">
	<div class="content">
		<?php include 'common2.php'; ?>
		<div class="text">
			<div class="contactbox">
				<div class="contacttext">
					<div>
						<img src="images/contactimages/email.png" width="12%" height="12%" hspace="2%"/>
						<a href= "mailto:contact@studentdevelopers.isb.ac.th">contact@studentdevelopers.isb.ac.th</a>
					</div>
					<div class="contactsocial">
						<a href="https://www.facebook.com/isbhstech" target="_blank"><img src= "images/contactimages/facebook.png" width= "10%" height="10%" hspace="5%" vspace="2%">Facebook</a>
					</div>
				</div>
			</div>
		</div>
		<div id="formDiv" class="form-style-6">
			<h1>Contact us through email or through this form</h1>
			<form method="post" onsubmit="return onSubmit(this);" action="email.php">
				<input type="text" name="name" placeholder="Name" />
				<input type="text" name="organization" placeholder="Organization" />
				<input type="text" name="email" placeholder="Email *" />
				<textarea cols='20' rows ='3' name='message' placeholder="Message *"></textarea>
				<input type="submit" value="Submit" />
			</form>
		</div>
	</div>
</body>
<footer>
</footer>
</html>
