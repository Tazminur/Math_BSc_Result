<?php require'functions-4th-a.php';?>

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
			<label for="name">Math-405</label><br>
			<input type="number" name="math_405" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-406</label><br>
			<input type="number" name="math_406" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-407</label><br>
			<input type="number" name="math_407" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-408</label><br>
			<input type="number" name="math_408" min="0" max="100" required>
		</fieldset>
		<fieldset>
			<label for="name">Math-409</label><br>
			<input type="number" name="math_409" min="0" max="100" required>
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
	<?php form();?>
</div>
<div style="clear:both"></div>
</div> <!-- End Containe -->
</body>
</html>