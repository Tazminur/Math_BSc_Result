<?php 
	require'functions-4th-b.php';
	require_once'./db_connection.php';

	if (isset($_GET['id'])) {
		$id=base64_decode($_GET['id']);
		$group=$_GET['group_name'];
		$year=($_GET['year_name']);
		$sql="select * from year_group where id='$id'";
		$data=mysqli_query($conn,$sql);
		$res=mysqli_fetch_assoc($data);
	}

	if (isset($_POST['submit'])) {
		$roll=$_POST['roll'];
		$year=$_POST['year_name'];
		$group=$_POST['year_group'];
		$math_401=$_POST["math_401"];
		$math_402=$_POST["math_402"];
		$math_403=$_POST["math_403"];
		$math_404=$_POST["math_404"];
		$math_411=$_POST["math_411"];
		$math_412=$_POST["math_412"];
		$math_413=$_POST["math_413"];
		$math_414=$_POST["math_414"];
		$math_415=$_POST["math_415"];
		$math_416=$_POST["math_416"];
		$math_417=$_POST["math_417"];
		$math_418=$_POST["math_418"];
		$cgpa_round=form();

		$sql="INSERT INTO fourth_year (roll,year_name,group_name,math_401 ,math_402 ,math_403 ,math_404 ,math_405 ,math_406, math_407 ,math_408 ,math_409 ,math_411 ,math_412 ,math_413 ,math_414 ,math_415 ,math_416 ,math_417,math_418 ,cgpa) VALUES ('$roll','$year','$group','$math_401','$math_402','$math_403','$math_404','0','0','0','0','0','$math_411','$math_412','$math_413','$math_414','$math_415','$math_416','$math_417','$math_418', '$cgpa_round')";

		if (mysqli_query($conn, $sql)) {
		    // echo "New record created successfully";
		} else {
		     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
?>


 <?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>
<!-- CONTENT -->
			<div class="col-sm-9 content ">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 " id="form_area"\>
				
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="hidden" style="display:none">						
<p>
	<select name="year_name">
		<option value="fourth_year">4th year</option>
	</select>
</p>
<p>
	<select name="year_group">
	<?php if ($res['group_name']=='a') { ?>
		<option value="<?php echo $res['group_name'] ?>" >A</option>
	<?php }else{ ?>
		<option value="<?php echo $res['group_name'] ?>" selected>B</option>
	<?php } ?>
	</select>
</p>
</div>						
						<div class="row form_head" >
							 <div class="col-sm-6">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">Input Roll</span>
								  <input type="text" name="roll" value="" maxlength="8"  class="form-control" aria-describedby="sizing-addon2" required>
								</div>
							 </div>
							 <div class="col-sm-4 col-sm-offset-1">
								<?php if (form()) {

									echo "<div class=\"result_area\">"."Result:  ". $cgpa_round."</div>";
								} ?>
							 </div>
						</div>
						<hr>
						<div class="row">
						 	<div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">401</span>
								  <input type="number" name="math_401" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">402</span>
								  <input type="number" name="math_402" min="0" max="75" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">403</span>
								  <input type="number" name="math_403" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
							 	<div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">404</span>
									  <input type="number" name="math_404" min="0" max="75" class="form-control" placeholder="" required>
									</div>
							 	</div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">411</span>
									  <input type="number" name="math_411" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">412</span>
									  <input type="number" name="math_412" min="0" max="100" class="form-control" placeholder="" required>
								 	</div>
							 	</div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">413</span>
									  <input type="number" name="math_413" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">414</span>
									  <input type="number" name="math_414" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">415</span>
									  <input type="number" name="math_415" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
							 </div> <!-- End Row -->
							 <hr>

							 <div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">416</span>
									  <input type="number" name="math_416" min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">417</span>
									  <input type="number" name="math_417" min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">418</span>
									  <input type="number" name="math_418" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
							 </div> <!-- End Row -->
							 <hr>
							 <div class="row">
							 	<div class="col-sm-2 col-sm-offset-10 ">
							 		<button type="submit" name="submit" class="btn btn-info">Submit</button>
							 	</div>
							 </div>
						 </form>

						</div>

						<hr>
					</div>

				</div>
<!-- FOOTER -->
<?php include 'footer.php';?>