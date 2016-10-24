<?php 
	require_once './db_connection.php';

	if (isset($_POST['search'])) {
		$year_name=$_POST['year_select'];
		$roll=$_POST['roll'];
		$sql="select * from ". $year_name ." where roll='$roll'";
		$data=mysqli_query($conn,$sql);
		$res=mysqli_fetch_assoc($data);
		$year_name=$res['year_name'];
		$id=base64_encode($res['id']);
		header("Location: details.php?year_name=$year_name&id=$id");
	}
 ?>