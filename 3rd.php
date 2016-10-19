<?php require'functions.php';?>

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
	<div class="sub_collum">
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
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
	<div class="sub_collum">
		
	</div>
		
</div>

<div class="collum right">
	<?php form();?>
</div>
<div style="clear:both"></div>
</div> <!-- End Containe -->
</body>
</html>