<?php 
	require_once './db_connection.php';
	if (isset($_GET['id'])) {
		$id=base64_decode($_GET['id']);
		$sql="select * from fourth_year where id='$id'";
		$data=mysqli_query($conn,$sql);
		$res=mysqli_fetch_assoc($data);
	}
 ?>

 <!-- To Update -->
 <?php 
 	require'functions-4th-b.php';
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

		$sql="UPDATE fourth_year SET roll='$roll',math_401='$math_401',math_402='$math_402' ,math_403='$math_403' ,math_404='$math_404' ,math_405='0' ,math_406='0', math_407='0' ,math_408='0' ,math_409='0' ,math_411='$math_411' ,math_412='$math_412' ,math_413='$math_413' ,math_414='$math_414' ,math_415='$math_415' ,math_416='$math_416' ,math_417='$math_417',math_418='$math_418' ,cgpa='$cgpa_round' WHERE id='$id'";

		if (mysqli_query($conn, $sql)) {
		    // echo "New record created successfully";
		    header("Location: view.php");
		} else {
		    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
 	}
  ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Here</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="container">

<div class="collum left">
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<p>
			<strong>Input Roll: </strong>
			<input style="width:220px;" type="text" name="roll" maxlength="8" value="<?php echo $res['roll'] ?>" required >
		</p>
		<fieldset>
			<label for="name">Math-401</label><br>
			<input type="number" name="math_401" min="0" max="100" value="<?php echo $res['math_401'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-402</label><br>
			<input type="number" name="math_402" min="0" max="75" value="<?php echo $res['math_402'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-403</label><br>
			<input type="number" name="math_403" min="0" max="100" value="<?php echo $res['math_403'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-404</label><br>
			<input type="number" name="math_404" min="0" max="75" value="<?php echo $res['math_404'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-411</label><br>
			<input type="number" name="math_411" min="0" max="100" value="<?php echo $res['math_411'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-412</label><br>
			<input type="number" name="math_412" min="0" max="100" value="<?php echo $res['math_412'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-413</label><br>
			<input type="number" name="math_413" min="0" max="100" value="<?php echo $res['math_413'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-414</label><br>
			<input type="number" name="math_414" min="0" max="100" value="<?php echo $res['math_414'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-415</label><br>
			<input type="number" name="math_415" min="0" max="100" value="<?php echo $res['math_415'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-416</label><br>
			<input type="number" name="math_416" min="0" max="50" value="<?php echo $res['math_416'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-417</label><br>
			<input type="number" name="math_417" min="0" max="50" value="<?php echo $res['math_417'] ?>" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-418</label><br>
			<input type="number" name="math_418" min="0" max="100" value="<?php echo $res['math_418'] ?>" required>
		</fieldset>

		<fieldset>
			<input type="submit" value="Submit" name="submit">
		</fieldset>
	</form>
</div>


<!-- <a style="color: #fff; background: #3366CC; padding:5px 8px; font-size: 18px; text-decoration:none;margin-left:20px;" href="view.php" target="_blank">View All Results</a> -->
<div style="clear:both"></div>
</div> <!-- End Containe -->
</body>
</html>