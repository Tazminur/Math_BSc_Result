<?php 
	
	require_once'./db_connection.php';

	if (isset($_POST["submit"]))
	{
		$group = $_POST["year_group"];
		$year = $_POST["year_select"];

		$sql="INSERT INTO year_group (year_name,group_name) VALUES ('$year','$group')";

		if (mysqli_query($conn, $sql)) {
		     // echo "New record created successfully";
		} else {
		     // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		$sql="SELECT * FROM year_group WHERE id = (SELECT MAX(id) FROM year_group)";
		$all_result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($all_result);
		// print_r($row);
		$id=base64_encode($row['id']);
		$year=$row['year_name'];
		$group=$row['group_name'];
			switch ($_POST["year_select"]) {
				case 'fourth_year':
					if ($_POST["year_group"]=="b") {
						header('Location: 4th-b.php?id='.$id.' &group_name= '.$group.' &year_name= '.$year);
					}
					else{
						header('Location: 4th-a.php?id='.$id.' &group_name= '.$group.' &year_name= '.$year);
					}
					break;
				case 'third_year':
					header('Location: 3rd.php?id='.$id.' &group_name= '.$group.' &year_name= '.$year);
					break;
				 case 'second_year':
				 	header('Location: 2nd.php?id='.$id.' &group_name= '.$group.' &year_name= '.$year);
				 	break;
				 case 'first_year':
				 	header('Location: 1st.php?id='.$id.' &group_name= '.$group.' &year_name= '.$year);
				 	break;
				 default:
					# code...
					break;
			}
	}
?>



<?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>

<!-- CONTENT -->
			<div class="col-sm-9 content ">
				<div class="row" >
					<div class="col-md-8 col-md-offset-2 " id="form_area" >
						<div class="page-header">
						  <h3>Dept. of Mathematics <small>Result-2015</small></h3>
						</div>
						<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF']?>" method="post">

							<fieldset >
								<div class="form-group">
							    	<label for="select_year" class="col-sm-4 control-label">Select Year</label>
								    <div class="col-sm-6">
								      <select name="year_select" class="form-control">
										<option value="first_year" selected >1st year</option>
										<option value="second_year" >2nd year</option>
										<option value="third_year" >3rd year</option>
										<option value="fourth_year">4th year</option>	
										</select>
								    </div>
							  </div>
						  	  <div class="form-group">
							    <label for="group" class="col-sm-4 control-label">Select Group</label>
							    <div class="col-sm-6">
							      <select name="year_group" class="form-control">
									  <option value="a" selected>A Group</option>
									  <option value="b">B Group</option>
									</select>
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-sm-offset-4 col-sm-8">
							      <button type="submit" name="submit" class="btn btn-info">Submit</button>
							    </div>
							  </div>
							</fieldset>

						</form>
					</div>
				</div>
			</div>

<!-- FOOTER -->
<?php include 'footer.php';?>