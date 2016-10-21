<?php 
	require_once './db_connection.php';
	if (isset($_GET['year_name'])) {
		$year_name=$_GET['year_name'];
		$sql="select * from ".$year_name;
		$all_result=mysqli_query($conn,$sql);
		}
 ?>



 <?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>
<!-- CONTENT -->
			<div class="col-sm-9 content ">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 " id="table_area" >
						<div class="page-header">
						  <h3>Result: <?php switch ($year_name) {
						  	case 'first_year':
						  		echo "First Year";
						  		break;
						  	case 'second_year':
						  		echo "Second Year";
						  		break;
						  	case 'third_year':
						  		echo "Third Year";
						  		break;
						  	case 'fourth_year':
						  		echo "Fourth Year";
						  		break;
						  	default:
						  		# code...
						  		break;
						  }; ?> </h3>
						</div>
						<table class="table table-bordered">
					 		<tr>
					 			<!-- <th>#</th> -->
					 			<th>Roll</th>
					 			<th>CGPA</th>
					 			<th>Edit</th>
					 			<th>Delete</th>
					 			<th>Details</th>
					 		</tr>
					 		<?php while ($row=mysqli_fetch_assoc($all_result)) { ?>
					 		<tr>	
					 			<!-- <td><?php echo $row['id'] ?></td> -->
					 			<td><?php echo $row['roll'] ?></td>
					 			<td><?php echo $row['cgpa'] ?></td>
					 			<td><a href="update.php?id=<?php echo base64_encode($row['id']);?>&year_name=<?php echo ($row['year_name']); ?>">Edit</a></td>
					 			<td><a href="delete.php?id=<?php echo base64_encode($row['id']);?>&year_name=<?php echo ($row['year_name']); ?>">Delete</a></td>
					 			<td><a href="#">Details</a></td>
					 		</tr>
					 		<?php } ?>
					 	</table>
					</div>
				</div>
			</div>

<!-- FOOTER -->
<?php include 'footer.php'; ?>