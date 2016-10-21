<?php require'point-convrt-fn.php';?>
<?php 
	function form(){
		if (isset($_POST["submit"])) {
			$math_101=$_POST["math_101"];
			$math_102=$_POST["math_102"];
			$math_103=$_POST["math_103"];
			$math_104=$_POST["math_104"];
			$math_105=$_POST["math_105"];
			$math_106=$_POST["math_106"];
			$math_107=$_POST["math_107"];
			$math_108=$_POST["math_108"];
			$math_109=$_POST["math_109"];
			$math_110=$_POST["math_110"];
			$math_111=$_POST["math_111"];
			$cgpa=((mark_for_100($math_101)+mark_for_100($math_102)+mark_for_100($math_103)+mark_for_100($math_104)+mark_for_100($math_107)+mark_for_100($math_108)+mark_for_100($math_111))*4+(mark_for_75($math_105)+mark_for_75($math_106))*3+mark_for_50($math_110)*2.0+mark_for_50($math_109)*2.0)/38;
			$cgpa_round=round($cgpa,2);
			  // echo "You have got CGPA: ". $cgpa_round;
			 return $cgpa_round;
			 return true;
		}	
	}

?>

