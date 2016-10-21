<?php 
	require'functions-3rd.php';
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
		$math_301=$_POST["math_301"];
		$math_302=$_POST["math_302"];
		$math_303=$_POST["math_303"];
		$math_304=$_POST["math_304"];
		$math_305=$_POST["math_305"];
		$math_306=$_POST["math_306"];
		$math_307=$_POST["math_307"];
		$math_308=$_POST["math_308"];
		$math_309=$_POST["math_309"];
		$math_310=$_POST["math_310"];
		$math_311=$_POST["math_311"];
		$math_312=$_POST["math_312"];
		$cgpa_round=form();

		$sql="INSERT INTO third_year (roll,year_name,group_name,math_301 ,math_302 ,math_303 ,math_304 ,math_305 ,math_306, math_307 ,math_308 ,math_309 ,math_310 ,math_311,math_312 ,cgpa) VALUES ('$roll','$year','$group','$math_301','$math_302','$math_303','$math_304','$math_305','$math_306','$math_307','$math_308','$math_309','$math_310','$math_311','$math_312', '$cgpa_round')";

		if (mysqli_query($conn, $sql)) {
		     // echo "New record created successfully";
		} else {
		     // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
?>


 <?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>
<!-- CONTENT -->
			<div class="col-sm-9 content ">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 " id="form_area"\>
						<div class="page-header">
						  <h3>Third Year <small>Result-2015</small></h3>
						</div>
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="hidden" style="display:none">						
<p>
	<select name="year_name">
		<option value="third_year">3rd year</option>
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
								  <span class="input-group-addon" id="sizing-addon2">301</span>
								  <input type="number" name="math_301" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">302</span>
								  <input type="number" name="math_302" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">303</span>
								  <input type="number" name="math_303" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
							 	<div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">304</span>
									  <input type="number" name="math_304" min="0" max="100" class="form-control" placeholder="" required>
									</div>
							 	</div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">305</span>
									  <input type="number" name="math_305" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">306</span>
									  <input type="number" name="math_306" min="0" max="100" class="form-control" placeholder="" required>
								 	</div>
							 	</div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">307</span>
									  <input type="number" name="math_307" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">308</span>
									  <input type="number" name="math_308" min="0" max="75" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">309</span>
									  <input type="number" name="math_309" min="0" max="75" class="form-control" placeholder="" required>
									</div>
								 </div>
							 </div> <!-- End Row -->
							 <hr>

							 <div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">310</span>
									  <input type="number" name="math_310" min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">311</span>
									  <input type="number" name="math_311" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">312</span>
									  <input type="number" name="math_312" min="0" max="50" class="form-control" placeholder="" required>
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