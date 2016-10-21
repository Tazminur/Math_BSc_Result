<?php 
	require'functions-2nd.php';
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
		$math_201=$_POST["math_201"];
		$math_202=$_POST["math_202"];
		$math_203=$_POST["math_203"];
		$math_204=$_POST["math_204"];
		$math_205=$_POST["math_205"];
		$math_206=$_POST["math_206"];
		$math_207=$_POST["math_207"];
		$math_208=$_POST["math_208"];
		$math_209=$_POST["math_209"];
		$math_210=$_POST["math_210"];
		$math_211=$_POST["math_211"];
		$cgpa_round=form();

		$sql="INSERT INTO second_year (roll,year_name,group_name,math_201 ,math_202 ,math_203 ,math_204 ,math_205 ,math_206, math_207 ,math_208 ,math_209 ,math_210 ,math_211,cgpa) VALUES ('$roll','$year','$group','$math_201','$math_202','$math_203','$math_204','$math_205','$math_206','$math_207','$math_208','$math_209','$math_210','$math_211', '$cgpa_round')";

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
						  <h3>Second Year <small>Result-2015</small></h3>
						</div>
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="hidden" style="display:none">						
<p>
	<select name="year_name">
		<option value="second_year">2nd year</option>
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
								  <span class="input-group-addon" id="sizing-addon2">201</span>
								  <input type="number" name="math_201" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">202</span>
								  <input type="number" name="math_202" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">203</span>
								  <input type="number" name="math_203" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
							 	<div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">204</span>
									  <input type="number" name="math_204" min="0" max="100" class="form-control" placeholder="" required>
									</div>
							 	</div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">205</span>
									  <input type="number" name="math_205" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">206</span>
									  <input type="number" name="math_206" min="0" max="75" class="form-control" placeholder="" required>
								 	</div>
							 	</div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">207</span>
									  <input type="number" name="math_207" min="0" max="75" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">208</span>
									  <input type="number" name="math_208" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">209</span>
									  <input type="number" name="math_209" min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
							 </div> <!-- End Row -->
							 <hr>

							 <div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">210</span>
									  <input type="number" name="math_210" min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">211</span>
									  <input type="number" name="math_211" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
<!-- 								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">212</span>
									  <input type="number" name="math_212" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div> -->
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