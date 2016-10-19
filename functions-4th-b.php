<?php require'point-convrt-fn.php';?>
<?php 
	function form(){
		if (isset($_POST["submit"])) {
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
			$cgpa=((mark_for_100($math_401)+mark_for_100($math_403)+mark_for_100($math_411)+mark_for_100($math_412)+mark_for_100($math_413)+mark_for_100($math_414)+mark_for_100($math_415)+mark_for_100($math_418))*4+(mark_for_75($math_402)+mark_for_75($math_404))*3+mark_for_50($math_416)*2.0+mark_for_50($math_417)*2.0)/42;
			$cgpa_round=round($cgpa,2);
			  // echo "You have got CGPA: ". $cgpa_round;
			 return $cgpa_round;
			 return true;
		}	
	}

?>
