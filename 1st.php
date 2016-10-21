<?php 
	require'functions-1st.php';
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
		$math_101=$_POST["math_101"];
		$math_102=$_POST["math_102"];
		$math_103=$_POST["math_103"];
		$math_104=$_POST["math_104"];
		$math_105=$_POST["math_105"];
		$math_106=$_POST["math_106"];
		$math_107=$_POST["math_107"];
		$math_108=$_POST["math_108"];
		$math_109=$_POST["math_109"];
		$math_110=$_POST["math_110"];
		$math_111=$_POST["math_111"];
		$math_112=$_POST["math_112"];
		$cgpa_round=form();

		$sql="INSERT INTO first_year (roll,year_name,group_name,math_101 ,math_102 ,math_103 ,math_104 ,math_105 ,math_106, math_107 ,math_108 ,math_109 ,math_110 ,math_111,math_112,cgpa) VALUES ('$roll','$year','$group','$math_101','$math_102','$math_103','$math_104','$math_105','$math_106','$math_107','$math_108','$math_109','$math_110','$math_111', '$math_112','$cgpa_round')";

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
						  <h3>First Year <small>Result-2015</small></h3>
						</div>
				
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="hidden" style="display:none">						
<p>
	<select name="year_name">
		<option value="first_year">1st year</option>
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
								  <span class="input-group-addon" id="sizing-addon2">101</span>
								  <input type="number" name="math_101" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">102</span>
								  <input type="number" name="math_102" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">103</span>
								  <input type="number" name="math_103" min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
							 	<div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">104</span>
									  <input type="number" name="math_104" min="0" max="100" class="form-control" placeholder="" required>
									</div>
							 	</div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">105</span>
									  <input type="number" name="math_105" min="0" max="75" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">106</span>
									  <input type="number" name="math_106" min="0" max="75" class="form-control" placeholder="" required>
								 	</div>
							 	</div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">107</span>
									  <input type="number" name="math_107" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">108</span>
									  <input type="number" name="math_108" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">109</span>
									  <input type="number" name="math_109" min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
							 </div> <!-- End Row -->
							 <hr>

							 <div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">110</span>
									  <input type="number" name="math_110" min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">111</span>
									  <input type="number" name="math_111" min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">112</span>
									  <input type="number" name="math_112" min="0" max="50" class="form-control" placeholder="" required>
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