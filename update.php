<?php 
	require_once './db_connection.php';
	if (isset($_GET['id'])) {
		$id=base64_decode($_GET['id']);
		$year_name=($_GET['year_name']);
		$sql="select * from ". $year_name ." where id='$id'";
		$data=mysqli_query($conn,$sql);
		$res=mysqli_fetch_assoc($data);
	}
 ?>

 <!-- To Update -->
 <?php 
 switch ($year_name) {
 	case 'fourth_year':
 	require'functions-4th-b.php';
 	if (isset($_POST['submit'])) {
 		$roll=$_POST['roll'];
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

		$sql="UPDATE fourth_year SET roll='$roll',math_401='$math_401',math_402='$math_402' ,math_403='$math_403' ,math_404='$math_404' ,math_405='0' ,math_406='0', math_407='0' ,math_408='0' ,math_409='0' ,math_411='$math_411' ,math_412='$math_412' ,math_413='$math_413' ,math_414='$math_414' ,math_415='$math_415' ,math_416='$math_416' ,math_417='$math_417',math_418='$math_418' ,cgpa='$cgpa_round' WHERE id='$id'";

		if (mysqli_query($conn, $sql)) {
		    // echo "New record created successfully";
		    header("Location: view.php?year_name=$year_name");
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
				
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
						<div class="row form_head" >
							 <div class="col-sm-6">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">Input Roll</span>
								  <input type="text" name="roll" value="<?php echo $res['roll'] ?>" maxlength="8"  class="form-control" aria-describedby="sizing-addon2" required>
								</div>
							 </div>
							 <div class="col-sm-4 col-sm-offset-1">
								<?php 
									echo "<div class=\"result_area\">"."Result:  ". $res['cgpa']."</div>";
								 ?>
							 </div>
						</div>
						<hr>
						<div class="row">
						 	<div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">401</span>
								  <input type="number" name="math_401" value="<?php echo $res['math_401'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">402</span>
								  <input type="number" name="math_402" value="<?php echo $res['math_402'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">403</span>
								  <input type="number" name="math_403" value="<?php echo $res['math_403'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
							 	<div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">404</span>
									  <input type="number" name="math_404" value="<?php echo $res['math_404'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
									</div>
							 	</div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">411</span>
									  <input type="number" name="math_411" value="<?php echo $res['math_411'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">412</span>
									  <input type="number" name="math_412" value="<?php echo $res['math_412'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								 	</div>
							 	</div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">413</span>
									  <input type="number" name="math_413" value="<?php echo $res['math_413'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">414</span>
									  <input type="number" name="math_414" value="<?php echo $res['math_414'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">415</span>
									  <input type="number" name="math_415" value="<?php echo $res['math_415'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
							 </div> <!-- End Row -->
							 <hr>

							 <div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">416</span>
									  <input type="number" name="math_416" value="<?php echo $res['math_416'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">417</span>
									  <input type="number" name="math_417" value="<?php echo $res['math_417'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">418</span>
									  <input type="number" name="math_418" value="<?php echo $res['math_418'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
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
<?php
    break;


    case 'third_year':
 	require'functions-3rd.php';
 	if (isset($_POST['submit'])) {
 		$roll=$_POST['roll'];
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

		$sql="UPDATE third_year SET roll='$roll',math_301='$math_301',math_302='$math_302' ,math_303='$math_303' ,math_304='$math_304' ,math_305='$math_305' ,math_306='$math_306' ,math_307='$math_307' ,math_308='$math_308' ,math_309='$math_309' ,math_310='$math_310' ,math_311='$math_311',math_312='$math_312' ,cgpa='$cgpa_round' WHERE id='$id'";

		if (mysqli_query($conn, $sql)) {
		    // echo "New record created successfully";
		    header("Location: view.php?year_name=$year_name");
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
				
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
						<div class="row form_head" >
							 <div class="col-sm-6">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">Input Roll</span>
								  <input type="text" name="roll" value="<?php echo $res['roll'] ?>" maxlength="8"  class="form-control" aria-describedby="sizing-addon2" required>
								</div>
							 </div>
							 <div class="col-sm-4 col-sm-offset-1">
								<?php 
									echo "<div class=\"result_area\">"."Result:  ". $res['cgpa']."</div>";
								 ?>
							 </div>
						</div>
						<hr>
						<div class="row">
						 	<div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">301</span>
								  <input type="number" name="math_301" value="<?php echo $res['math_301'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">302</span>
								  <input type="number" name="math_302" value="<?php echo $res['math_302'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">303</span>
								  <input type="number" name="math_303" value="<?php echo $res['math_303'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
							 	<div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">304</span>
									  <input type="number" name="math_304" value="<?php echo $res['math_304'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
									</div>
							 	</div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">305</span>
									  <input type="number" name="math_305" value="<?php echo $res['math_305'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">306</span>
									  <input type="number" name="math_306" value="<?php echo $res['math_306'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								 	</div>
							 	</div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">307</span>
									  <input type="number" name="math_307" value="<?php echo $res['math_307'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">308</span>
									  <input type="number" name="math_308" value="<?php echo $res['math_308'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">309</span>
									  <input type="number" name="math_309" value="<?php echo $res['math_309'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
							 </div> <!-- End Row -->
							 <hr>

							 <div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">310</span>
									  <input type="number" name="math_310" value="<?php echo $res['math_310'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">311</span>
									  <input type="number" name="math_311" value="<?php echo $res['math_311'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">312</span>
									  <input type="number" name="math_312" value="<?php echo $res['math_312'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
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
<?php
    break;
    case 'second_year':
 	require'functions-2nd.php';
 	if (isset($_POST['submit'])) {
 		$roll=$_POST['roll'];
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

		$sql="UPDATE second_year SET roll='$roll',math_201='$math_201',math_202='$math_202' ,math_203='$math_203' ,math_204='$math_204' ,math_205='$math_205' ,math_206='$math_206' ,math_207='$math_207' ,math_208='$math_208' ,math_209='$math_209' ,math_210='$math_210' ,math_211='$math_211' ,cgpa='$cgpa_round' WHERE id='$id'";

		if (mysqli_query($conn, $sql)) {
		    // echo "New record created successfully";
		    header("Location: view.php?year_name=$year_name");
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
				
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
						<div class="row form_head" >
							 <div class="col-sm-6">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">Input Roll</span>
								  <input type="text" name="roll" value="<?php echo $res['roll'] ?>" maxlength="8"  class="form-control" aria-describedby="sizing-addon2" required>
								</div>
							 </div>
							 <div class="col-sm-4 col-sm-offset-1">
								<?php 
									echo "<div class=\"result_area\">"."Result:  ". $res['cgpa']."</div>";
								 ?>
							 </div>
						</div>
						<hr>
						<div class="row">
						 	<div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">201</span>
								  <input type="number" name="math_201" value="<?php echo $res['math_201'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">202</span>
								  <input type="number" name="math_202" value="<?php echo $res['math_202'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">203</span>
								  <input type="number" name="math_203" value="<?php echo $res['math_203'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
							 	<div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">204</span>
									  <input type="number" name="math_204" value="<?php echo $res['math_204'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
									</div>
							 	</div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">205</span>
									  <input type="number" name="math_205" value="<?php echo $res['math_205'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">206</span>
									  <input type="number" name="math_206" value="<?php echo $res['math_206'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								 	</div>
							 	</div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">207</span>
									  <input type="number" name="math_207" value="<?php echo $res['math_207'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">208</span>
									  <input type="number" name="math_208" value="<?php echo $res['math_208'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">209</span>
									  <input type="number" name="math_209" value="<?php echo $res['math_209'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
							 </div> <!-- End Row -->
							 <hr>

							 <div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">210</span>
									  <input type="number" name="math_210" value="<?php echo $res['math_210'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">211</span>
									  <input type="number" name="math_211" value="<?php echo $res['math_211'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">

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
<?php
    break;

    case 'first_year':
 	require'functions-1st.php';
 	if (isset($_POST['submit'])) {
 		$roll=$_POST['roll'];
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

		$sql="UPDATE third_year SET roll='$roll',math_101='$math_101',math_102='$math_102' ,math_103='$math_103' ,math_104='$math_104' ,math_105='$math_105' ,math_106='$math_106' ,math_107='$math_107' ,math_108='$math_108' ,math_109='$math_109' ,math_110='$math_110' ,math_111='$math_111',math_112='$math_112' ,cgpa='$cgpa_round' WHERE id='$id'";

		if (mysqli_query($conn, $sql)) {
		    // echo "New record created successfully";
		    header("Location: view.php?year_name=$year_name");
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
				
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
						<div class="row form_head" >
							 <div class="col-sm-6">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">Input Roll</span>
								  <input type="text" name="roll" value="<?php echo $res['roll'] ?>" maxlength="8"  class="form-control" aria-describedby="sizing-addon2" required>
								</div>
							 </div>
							 <div class="col-sm-4 col-sm-offset-1">
								<?php 
									echo "<div class=\"result_area\">"."Result:  ". $res['cgpa']."</div>";
								 ?>
							 </div>
						</div>
						<hr>
						<div class="row">
						 	<div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">101</span>
								  <input type="number" name="math_101" value="<?php echo $res['math_101'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">102</span>
								  <input type="number" name="math_102" value="<?php echo $res['math_102'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
								</div>
							 </div>
							 <div class="col-sm-4">
							 	<div class="input-group">
								  <span class="input-group-addon" id="sizing-addon2">103</span>
								  <input type="number" name="math_103" value="<?php echo $res['math_103'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								</div>
							 </div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
							 	<div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">104</span>
									  <input type="number" name="math_104" value="<?php echo $res['math_104'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
									</div>
							 	</div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">105</span>
									  <input type="number" name="math_105" value="<?php echo $res['math_105'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">106</span>
									  <input type="number" name="math_106" value="<?php echo $res['math_106'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
								 	</div>
							 	</div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">107</span>
									  <input type="number" name="math_107" value="<?php echo $res['math_107'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">108</span>
									  <input type="number" name="math_108" value="<?php echo $res['math_108'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">109</span>
									  <input type="number" name="math_109" value="<?php echo $res['math_109'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
							 </div> <!-- End Row -->
							 <hr>

							 <div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">110</span>
									  <input type="number" name="math_110" value="<?php echo $res['math_110'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">111</span>
									  <input type="number" name="math_111" value="<?php echo $res['math_111'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">112</span>
									  <input type="number" name="math_112" value="<?php echo $res['math_112'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
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
<?php
    break;
	
	default:
		# code...
		break;
}
?>

<!-- FOOTER -->
<?php include 'footer.php';?>

