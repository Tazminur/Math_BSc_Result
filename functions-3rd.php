<?php require'point-convrt-fn.php';?>
<?php 
	function form(){
		if (isset($_POST["submit"])) {
			$math_301=$_POST["math_301"];
			$math_302=$_POST["math_302"];
			$math_303=$_POST["math_303"];
			$math_304=$_POST["math_304"];
			$math_305=$_POST["math_305"];
			$math_306=$_POST["math_306"];
			$math_307=$_POST["math_307"];
			$math_308=$_POST["math_308"];
			$math_309=$_POST["math_309"];
			$math_310=$_POST["math_310"];
			$math_311=$_POST["math_311"];
			$math_312=$_POST["math_312"];
			$cgpa=((mark_for_100($math_301)+mark_for_100($math_302)+mark_for_100($math_303)+mark_for_100($math_304)+mark_for_100($math_305)+mark_for_100($math_306)+mark_for_100($math_307)+mark_for_100($math_311))*4+(mark_for_75($math_308)+mark_for_75($math_309))*3+mark_for_50($math_310)*2.0+mark_for_50($math_312)*2.0)/42;
			$cgpa_round=round($cgpa,2);
			  // echo "You have got CGPA: ". $cgpa_round;
			 return $cgpa_round;
			 return true;
		}	
	}

?>

