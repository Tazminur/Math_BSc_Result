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
					 			<?php switch ($year_name) {
					 				case 'first_year':
					 					$roll=$row['roll'];
										$math_101=$row["math_101"];
										$math_102=$row["math_102"];
										$math_103=$row["math_103"];
										$math_104=$row["math_104"];
										$math_105=$row["math_105"];
										$math_106=$row["math_106"];
										$math_107=$row["math_107"];
										$math_108=$row["math_108"];
										$math_109=$row["math_109"];
										$math_110=$row["math_110"];
										$math_111=$row["math_111"];
										$math_112=$row["math_112"];
										$cgpa=$row['cgpa'];?>
										<td><a href="details.php?id=<?php echo base64_encode($row['id']);?>&year_name=<?php echo ($row['year_name']); ?>&roll=$roll&math_101=$math_101&math_102=$math_102&math_103=$math_103&math_104=$math_104&math_105=$math_105&math_106=$math_106&math_107=$math_107&math_108=$math_108&math_109=$math_109&math_110=$math_110&math_111=$math_111&math_112=$math_112&cgpa=$cgpa">Details</a></td>
					 				<?php break;
					 				 case 'second_year':
					 					$roll=$row['roll'];
										$math_201=$row["math_201"];
										$math_202=$row["math_202"];
										$math_203=$row["math_203"];
										$math_204=$row["math_204"];
										$math_205=$row["math_205"];
										$math_206=$row["math_206"];
										$math_207=$row["math_207"];
										$math_208=$row["math_208"];
										$math_209=$row["math_209"];
										$math_210=$row["math_210"];
										$math_211=$row["math_211"];
										$cgpa=$row['cgpa'];?>
										<td><a href="details.php?id=<?php echo base64_encode($row['id']);?>&year_name=<?php echo ($row['year_name']); ?>&roll=$roll&math_201=$math_201&math_202=$math_202&math_203=$math_203&math_204=$math_204&math_205=$math_205&math_206=$math_206&math_207=$math_207&math_208=$math_208&math_209=$math_209&math_210=$math_210&math_211=$math_211&cgpa=$cgpa">Details</a></td>
					 				<?php break;
					 				 case 'third_year':
					 					$roll=$row['roll'];
										$math_301=$row["math_301"];
										$math_302=$row["math_302"];
										$math_303=$row["math_303"];
										$math_304=$row["math_304"];
										$math_305=$row["math_305"];
										$math_306=$row["math_306"];
										$math_307=$row["math_307"];
										$math_308=$row["math_308"];
										$math_309=$row["math_309"];
										$math_310=$row["math_310"];
										$math_311=$row["math_311"];
										$math_312=$row["math_312"];
										$cgpa=$row['cgpa'];?>
										<td><a href="details.php?id=<?php echo base64_encode($row['id']);?>&year_name=<?php echo ($row['year_name']); ?>&roll=$roll&math_301=$math_301&math_302=$math_302&math_303=$math_303&math_304=$math_304&math_305=$math_305&math_306=$math_306&math_307=$math_307&math_308=$math_308&math_309=$math_309&math_310=$math_310&math_311=$math_311&math_312=$math_312&cgpa=$cgpa">Details</a></td>
					 				<?php break;

					 				 case 'fourth_year':
					 				 if($row['group_name']=='a'){
					 					$roll=$row['roll'];
										$group_name=$row['group_name'];
										$math_401=$row["math_401"];
										$math_402=$row["math_402"];
										$math_403=$row["math_403"];
										$math_404=$row["math_404"];
										$math_405=$row["math_405"];
										$math_406=$row["math_406"];
										$math_407=$row["math_407"];
										$math_408=$row["math_408"];
										$math_409=$row["math_409"];
										$math_416=$row["math_416"];
										$math_417=$row["math_417"];
										$math_418=$row["math_418"];
										$cgpa=$row['cgpa'];?>
										<td><a href="details.php?id=<?php echo base64_encode($row['id']);?>&year_name=<?php echo ($row['year_name']); ?>&roll=$roll&math_401=$math_401&math_402=$math_402&math_403=$math_403&math_404=$math_404&math_405=$math_405&math_406=$math_406&math_407=$math_407&math_408=$math_408&math_409=$math_409&math_416=$math_416&math_417=$math_417&math_418=$math_418&cgpa=$cgpa&group_name=$group_name">Details</a></td>
									<?php 
									 }else{
										$roll=$row['roll'];
										$group_name=$row['group_name'];
										$math_401=$row["math_401"];
										$math_402=$row["math_402"];
										$math_403=$row["math_403"];
										$math_404=$row["math_404"];
										$math_411=$row["math_411"];
										$math_412=$row["math_412"];
										$math_413=$row["math_413"];
										$math_414=$row["math_414"];
										$math_415=$row["math_415"];
										$math_416=$row["math_416"];
										$math_417=$row["math_417"];
										$math_418=$row["math_418"];
										$cgpa=$row['cgpa'];?>
										<td><a href="details.php?id=<?php echo base64_encode($row['id']);?>&year_name=<?php echo ($row['year_name']); ?>&roll=$roll&math_401=$math_401&math_402=$math_402&math_403=$math_403&math_404=$math_404&math_411=$math_411&math_412=$math_412&math_413=$math_413&math_414=$math_414&math_415=$math_415&math_416=$math_416&math_417=$math_417&math_418=$math_418&cgpa=$cgpa&group_name=$group_name">Details</a></td>
					 				<?php 
					 				 }
					 				break;

					 				default:
					 					# code...
					 					break;
					 			} ?>
					 		</tr>
					 		<?php } ?>
					 	</table>
					</div>
				</div>
			</div>

<!-- FOOTER -->
<?php include 'footer.php'; ?>