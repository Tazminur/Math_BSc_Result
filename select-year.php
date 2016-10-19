<?php 

	if (isset($_POST["submit"]))
	{
	switch ($_POST["year_select"]) {
		case '4th':
			if ($_POST["year_group"]=="b") {
				header('Location: 4th-b.php');
			}
			else{
				header('Location: 4th-a.php');
			}
			break;
		case '3rd':
			header('Location: 3rd.php');
			break;
		
		default:
			# code...
			break;
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

		<fieldset>
			<label for="name">Select year</label><br>
			<select name="year_select">
				<option value="4th" selected>4th year</option>
				<option value="3rd" >3rd year</option>
			</select>
		</fieldset>
		<fieldset>
			<label for="name">Select group</label><br>
			<select name="year_group">
				<option value="a" >A</option>
				<option value="b" selected>B</option>
			</select>
		</fieldset>

		<fieldset>
			<input type="submit" value="Submit" name="submit">
		</fieldset>
	</form>
</div>

<div style="clear:both"></div>
</div> <!-- End Containe -->
</body>
</html>