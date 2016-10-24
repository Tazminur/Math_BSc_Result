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
 	if($res['group_name']=='a'){
 		$roll=$res['roll'];
		$math_401=$res["math_401"];
		$math_402=$res["math_402"];
		$math_403=$res["math_403"];
		$math_404=$res["math_404"];
		$math_405=$res["math_405"];
		$math_406=$res["math_406"];
		$math_407=$res["math_407"];
		$math_408=$res["math_408"];
		$math_409=$res["math_409"];
		$math_416=$res["math_416"];
		$math_417=$res["math_417"];
		$math_418=$res["math_418"];
		$cgpa_round=$res['cgpa'];

  ?>

<?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>


<!-- CONTENT -->
			<div class="col-sm-9 content ">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 " id="form_area"\>
				
						<table class="table table-bordered">
							<tr>
								<th>Course No.</th>
								<th>Marks</th>
							</tr>
							<tr>
								<td>401</td>
								<td><?php echo $math_401; ?></td>
							</tr>
							<tr>
								<td>402</td>
								<td><?php echo $math_402; ?></td>
							</tr>
							<tr>
								<td>403</td>
								<td><?php echo $math_403; ?></td>
							</tr>
							<tr>
								<td>404</td>
								<td><?php echo $math_404; ?></td>
							</tr>
							<tr>
								<td>405</td>
								<td><?php echo $math_405; ?></td>
							</tr>
							<tr>
								<td>406</td>
								<td><?php echo $math_406; ?></td>
							</tr>
							<tr>
								<td>407</td>
								<td><?php echo $math_407; ?></td>
							</tr>
							<tr>
								<td>408</td>
								<td><?php echo $math_408; ?></td>
							</tr>
							<tr>
								<td>409</td>
								<td><?php echo $math_409; ?></td>
							</tr>
							<tr>
								<td>416</td>
								<td><?php echo $math_416 ?></td>
							</tr>
							<tr>
								<td>417</td>
								<td><?php echo $math_417 ?></td>
							</tr>
							<tr>
								<td>418</td>
								<td><?php echo $math_418 ?></td>
							</tr>
						</table>

						</div>

						<hr>
					</div>

				</div>
<?php
	}else{
	
		$roll=$res['roll'];
		$math_401=$res["math_401"];
		$math_402=$res["math_402"];
		$math_403=$res["math_403"];
		$math_404=$res["math_404"];
		$math_411=$res["math_411"];
		$math_412=$res["math_412"];
		$math_413=$res["math_413"];
		$math_414=$res["math_414"];
		$math_415=$res["math_415"];
		$math_416=$res["math_416"];
		$math_417=$res["math_417"];
		$math_418=$res["math_418"];
		$cgpa_round=$res['cgpa'];

  ?>

<?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>


<!-- CONTENT -->
			<div class="col-sm-9 content ">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 " id="form_area"\>
				
						<table class="table table-bordered">
							<tr>
								<th>Course No.</th>
								<th>Marks</th>
							</tr>
							<tr>
								<td>401</td>
								<td>$math_401</td>
							</tr>
							<tr>
								<td>402</td>
								<td>$math_402</td>
							</tr>
							<tr>
								<td>403</td>
								<td>$math_403</td>
							</tr>
							<tr>
								<td>404</td>
								<td>$math_404</td>
							</tr>
							<tr>
								<td>411</td>
								<td>$math_411</td>
							</tr>
							<tr>
								<td>412</td>
								<td>$math_412</td>
							</tr>
							<tr>
								<td>413</td>
								<td>$math_413</td>
							</tr>
							<tr>
								<td>414</td>
								<td>$math_414</td>
							</tr>
							<tr>
								<td>415</td>
								<td>$math_415</td>
							</tr>
							<tr>
								<td>416</td>
								<td>$math_416</td>
							</tr>
							<tr>
								<td>417</td>
								<td>$math_417</td>
							</tr>
							<tr>
								<td>418</td>
								<td>$math_418</td>
							</tr>
						</table>

						</div>

						<hr>
					</div>

				</div>
<?php
	}
    break;


    case 'third_year':

 		$roll=$res['roll'];
		$math_301=$res["math_301"];
		$math_302=$res["math_302"];
		$math_303=$res["math_303"];
		$math_304=$res["math_304"];
		$math_305=$res["math_305"];
		$math_306=$res["math_306"];
		$math_307=$res["math_307"];
		$math_308=$res["math_308"];
		$math_309=$res["math_309"];
		$math_310=$res["math_310"];
		$math_311=$res["math_311"];
		$math_312=$res["math_312"];
		$cgpa_round=$res['cgpa'];
  ?>

<?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>


<!-- CONTENT -->
			<div class="col-sm-9 content ">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 " id="form_area"\>
				
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
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
								  <input type="number" name="math_302" value="<?php echo $res['math_302'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_304" value="<?php echo $res['math_304'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_308" value="<?php echo $res['math_308'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">309</span>
									  <input type="number" name="math_309" value="<?php echo $res['math_309'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_311" value="<?php echo $res['math_311'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">312</span>
									  <input type="number" name="math_312" value="<?php echo $res['math_312'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
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

 		$roll=$res['roll'];
		$math_201=$res["math_201"];
		$math_202=$res["math_202"];
		$math_203=$res["math_203"];
		$math_204=$res["math_204"];
		$math_205=$res["math_205"];
		$math_206=$res["math_206"];
		$math_207=$res["math_207"];
		$math_208=$res["math_208"];
		$math_209=$res["math_209"];
		$math_210=$res["math_210"];
		$math_211=$res["math_211"];
		$cgpa_round=$res['cgpa'];
  ?>

<?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>


<!-- CONTENT -->
			<div class="col-sm-9 content ">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 " id="form_area"\>
				
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
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
								  <input type="number" name="math_202" value="<?php echo $res['math_202'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_204" value="<?php echo $res['math_204'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_206" value="<?php echo $res['math_206'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
								 	</div>
							 	</div>
							 </div> <!-- End Row -->
							 <hr>
							
							<div class="row">
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">207</span>
									  <input type="number" name="math_207" value="<?php echo $res['math_207'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_209" value="<?php echo $res['math_209'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_211" value="<?php echo $res['math_211'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
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

 		$roll=$res['roll'];
		$math_101=$res["math_101"];
		$math_102=$res["math_102"];
		$math_103=$res["math_103"];
		$math_104=$res["math_104"];
		$math_105=$res["math_105"];
		$math_106=$res["math_106"];
		$math_107=$res["math_107"];
		$math_108=$res["math_108"];
		$math_109=$res["math_109"];
		$math_110=$res["math_110"];
		$math_111=$res["math_111"];
		$math_112=$res["math_112"];
		$cgpa_round=$res['cgpa'];
  ?>

<?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>


<!-- CONTENT -->
			<div class="col-sm-9 content ">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 " id="form_area"\>
				
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
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
								  <input type="number" name="math_102" value="<?php echo $res['math_102'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_104" value="<?php echo $res['math_104'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
							 	</div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">105</span>
									  <input type="number" name="math_105" value="<?php echo $res['math_105'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">106</span>
									  <input type="number" name="math_106" value="<?php echo $res['math_106'] ?>"  min="0" max="75" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_109" value="<?php echo $res['math_109'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
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
									  <input type="number" name="math_111" value="<?php echo $res['math_111'] ?>"  min="0" max="100" class="form-control" placeholder="" required>
									</div>
								 </div>
								 <div class="col-sm-4">
								 	<div class="input-group">
									  <span class="input-group-addon" id="sizing-addon2">112</span>
									  <input type="number" name="math_112" value="<?php echo $res['math_112'] ?>"  min="0" max="50" class="form-control" placeholder="" required>
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
