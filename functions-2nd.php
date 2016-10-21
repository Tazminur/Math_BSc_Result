<?php require'point-convrt-fn.php';?>
<?php 
	function form(){
		if (isset($_POST["submit"])) {
			$math_201=$_POST["math_201"];
			$math_202=$_POST["math_202"];
			$math_203=$_POST["math_203"];
			$math_204=$_POST["math_204"];
			$math_205=$_POST["math_205"];
			$math_206=$_POST["math_206"];
			$math_207=$_POST["math_207"];
			$math_208=$_POST["math_208"];
			$math_209=$_POST["math_209"];
			$math_210=$_POST["math_210"];
			$math_211=$_POST["math_211"];
			$cgpa=((mark_for_100($math_201)+mark_for_100($math_202)+mark_for_100($math_203)+mark_for_100($math_204)+mark_for_100($math_205)+mark_for_100($math_211)+mark_for_100($math_208))*4+(mark_for_75($math_206)+mark_for_75($math_207))*3+mark_for_50($math_210)*2.0+mark_for_50($math_209)*2.0)/38;
			$cgpa_round=round($cgpa,2);
			  // echo "You have got CGPA: ". $cgpa_round;
			 return $cgpa_round;
			 return true;
		}	
	}

?>

