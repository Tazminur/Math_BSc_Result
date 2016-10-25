<?php
require_once './db_connection.php';

if(isset($_POST['log_in'])){
	$user_name = $_POST['user_name'];
	$password = md5($_POST['pass_word']);

	$sql = "select * from user_info where user_name='$user_name' and pass_word='$password'";

	$res = mysqli_query($conn,$sql);

	if(mysqli_num_rows($res)==1){
		$result = mysqli_fetch_assoc($res);
		session_start();
		$_SESSION['id'] = $result['id'];
		$_SESSION['user_name'] = $result['user_name'];
		header('location: index.php');
	}

}

?>