<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Processed</title>
</head>
<body>
	<?php 

		if (isset($_POST["submit"])) {
			$name=$_POST["name"];
			$email=$_POST["email"];
			if (!empty($name)) {
				echo "Welcome ".$name."!"."<br>";
			}
			else{
				echo "You need to enter your name.";
			}
			if (!empty($email)) {
				echo "Your inserted email is:  ".$email."<br>";
			}
			else{
				echo "You need to enter your email."."<br>";
			}
		}

	 ?>
	<a href="form.php">Go back to the form.</a>
</body>
</html>