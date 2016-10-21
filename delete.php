 <!-- To delete -->
<?php 
	require_once './db_connection.php';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$id_decode= base64_decode($id);
		$sql = "DELETE FROM fourth_year WHERE ID='$id_decode'";

		if (mysqli_query($conn, $sql)) {
		    header('Location: view.php');
		} else {
		    echo "Error deleting record: " . mysqli_error($conn);
		}
	}
 ?>