<?php 
	require'functions-4th-b.php';
	require_once'./db_connection.php';

	if (isset($_POST['submit'])) {
		$roll=$_POST['roll'];
		$math_401=$_POST["math_401"];
		$math_402=$_POST["math_402"];
		$math_403=$_POST["math_403"];
		$math_404=$_POST["math_404"];
		$math_411=$_POST["math_411"];
		$math_412=$_POST["math_412"];
		$math_413=$_POST["math_413"];
		$math_414=$_POST["math_414"];
		$math_415=$_POST["math_415"];
		$math_416=$_POST["math_416"];
		$math_417=$_POST["math_417"];
		$math_418=$_POST["math_418"];
		$cgpa_round=form();

		$sql="INSERT INTO fourth_year (roll,math_401 ,math_402 ,math_403 ,math_404 ,math_405 ,math_406, math_407 ,math_408 ,math_409 ,math_411 ,math_412 ,math_413 ,math_414 ,math_415 ,math_416 ,math_417,math_418 ,cgpa) VALUES ('$roll','$math_401','$math_402','$math_403','$math_404','0','0','0','0','0','$math_411','$math_412','$math_413','$math_414','$math_415','$math_416','$math_417','$math_418', '$cgpa_round')";

		if (mysqli_query($conn, $sql)) {
		    // echo "New record created successfully";
		} else {
		    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="container">

<div class="collum left">
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<p>
			<strong>Input Roll: </strong>
			<input style="width:220px;" type="text" name="roll" value="" maxlength="8" required >
		</p>
		<fieldset>
			<label for="name">Math-401</label><br>
			<input type="number" name="math_401" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-402</label><br>
			<input type="number" name="math_402" min="0" max="75" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-403</label><br>
			<input type="number" name="math_403" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-404</label><br>
			<input type="number" name="math_404" min="0" max="75" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-411</label><br>
			<input type="number" name="math_411" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-412</label><br>
			<input type="number" name="math_412" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-413</label><br>
			<input type="number" name="math_413" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-414</label><br>
			<input type="number" name="math_414" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-415</label><br>
			<input type="number" name="math_415" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-416</label><br>
			<input type="number" name="math_416" min="0" max="50" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-417</label><br>
			<input type="number" name="math_417" min="0" max="50" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-418</label><br>
			<input type="number" name="math_418" min="0" max="100" required>
		</fieldset>

		<fieldset>
			<input type="submit" value="Submit" name="submit">
		</fieldset>
	</form>
</div>

<div class="collum right">
	<?php if (form()) {
		echo"You have got:  ". $cgpa_round;
	} ?>
</div>
<a style="color: #fff; background: #3366CC; padding:5px 8px; font-size: 18px; text-decoration:none;margin-left:20px;" href="view.php" target="_blank">View All Results</a>
<div style="clear:both"></div>
</div> <!-- End Containe -->
</body>
</html>