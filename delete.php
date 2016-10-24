 <!-- To delete -->
<?php 
	require_once './db_connection.php';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$id_decode= base64_decode($id);
		$year_name=($_GET['year_name']);
		$sql = "DELETE FROM ". $year_name ." WHERE ID='$id_decode'";

		if (mysqli_query($conn, $sql)) {
		    header("Location: view.php?year_name=$year_name");
		} else {
		    echo "Error deleting record: " . mysqli_error($conn);
		}
	}
 ?>