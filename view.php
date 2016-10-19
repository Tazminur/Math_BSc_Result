<?php 
	require_once './db_connection.php';
	$sql="select * from fourth_year";
	$all_result=mysqli_query($conn,$sql);
	// var_dump($row);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>All Results</title>
 </head>
 <body>
 	<table border="1">
 		<tr>
 			<th>Roll</th>
 			<th>CGPA</th>
 			<th>Edit</th>
 			<th>Delete</th>
 		</tr>
 	<?php while ($row=mysqli_fetch_assoc($all_result)) { ?>
 		<tr>
 			<td><?php echo $row['roll'] ?></td>
 			<td><?php echo $row['cgpa'] ?></td>
 			<td><a href="update.php?id=<?php echo base64_encode($row['id']);?>">Edit</a></td>
 			<td><a href="delete.php?id=<?php echo base64_encode($row['id']);?>">Delete</a></td>
 		</tr>
 		<?php } ?>
 	</table>
 </body>
 </html>