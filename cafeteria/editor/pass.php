<?php if($_POST["pass"]!="isbeatz"): ?>
<head>
	<title>Password Page</title>
</head>
<body style="text-align:center">
	<form method="POST" action="pass.php">
		Password: <input type="password" name="pass">
		<input type="submit" value="Submit">
	</form>
</body>
<?php else: ?><?php
setcookie("magic_word","softdev1234",time()+315360000,"/","",0);
header("Location: index.php");
?>
<?php endif ?>
