<?php 
	require_once './db_connection.php';
	if (isset($_GET['year_name'])) {
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
								<td><?php echo($math_401); ?></td>
							</tr>
							<tr>
								<td>402</td>
								<td><?php echo($math_402); ?></td>
							</tr>
							<tr>
								<td>403</td>
								<td><?php echo($math_403); ?></td>
							</tr>
							<tr>
								<td>404</td>
								<td><?php echo($math_404); ?></td>
							</tr>
							<tr>
								<td>411</td>
								<td><?php echo($math_411); ?></td>
							</tr>
							<tr>
								<td>412</td>
								<td><?php echo($math_412); ?></td>
							</tr>
							<tr>
								<td>413</td>
								<td><?php echo($math_413); ?></td>
							</tr>
							<tr>
								<td>414</td>
								<td><?php echo($math_414); ?></td>
							</tr>
							<tr>
								<td>415</td>
								<td><?php echo($math_415); ?></td>
							</tr>
							<tr>
								<td>416</td>
								<td><?php echo($math_416); ?></td>
							</tr>
							<tr>
								<td>417</td>
								<td><?php echo($math_417); ?></td>
							</tr>
							<tr>
								<td>418</td>
								<td><?php echo($math_418); ?></td>
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
				
						<table class="table table-bordered">
							<tr>
								<th>Course No.</th>
								<th>Marks</th>
							</tr>
							<tr>
								<td>301</td>
								<td><?php echo($math_301); ?></td>
							</tr>
							<tr>
								<td>302</td>
								<td><?php echo($math_302); ?></td>
							</tr>
							<tr>
								<td>303</td>
								<td><?php echo($math_303); ?></td>
							</tr>
							<tr>
								<td>304</td>
								<td><?php echo($math_304); ?></td>
							</tr>
							<tr>
								<td>305</td>
								<td><?php echo($math_305); ?></td>
							</tr>
							<tr>
								<td>306</td>
								<td><?php echo($math_306); ?></td>
							</tr>
							<tr>
								<td>307</td>
								<td><?php echo($math_307); ?></td>
							</tr>
							<tr>
								<td>308</td>
								<td><?php echo($math_308); ?></td>
							</tr>
							<tr>
								<td>309</td>
								<td><?php echo($math_309); ?></td>
							</tr>
							<tr>
								<td>310</td>
								<td><?php echo($math_310); ?></td>
							</tr>
							<tr>
								<td>311</td>
								<td><?php echo($math_311); ?></td>
							</tr>
							<tr>
								<td>312</td>
								<td><?php echo($math_312); ?></td>
							</tr>
						</table>

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
				
						<table class="table table-bordered">
							<tr>
								<th>Course No.</th>
								<th>Marks</th>
							</tr>
							<tr>
								<td>201</td>
								<td><?php echo($math_201); ?></td>
							</tr>
							<tr>
								<td>202</td>
								<td><?php echo($math_202); ?></td>
							</tr>
							<tr>
								<td>203</td>
								<td><?php echo($math_203); ?></td>
							</tr>
							<tr>
								<td>204</td>
								<td><?php echo($math_204); ?></td>
							</tr>
							<tr>
								<td>205</td>
								<td><?php echo($math_205); ?></td>
							</tr>
							<tr>
								<td>206</td>
								<td><?php echo($math_206); ?></td>
							</tr>
							<tr>
								<td>207</td>
								<td><?php echo($math_207); ?></td>
							</tr>
							<tr>
								<td>208</td>
								<td><?php echo($math_208); ?></td>
							</tr>
							<tr>
								<td>209</td>
								<td><?php echo($math_209); ?></td>
							</tr>
							<tr>
								<td>210</td>
								<td><?php echo($math_210); ?></td>
							</tr>
							<tr>
								<td>211</td>
								<td><?php echo($math_211); ?></td>
							</tr>
						</table>

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
				
						<table class="table table-bordered">
							<tr>
								<th>Course No.</th>
								<th>Marks</th>
							</tr>
							<tr>
								<td>101</td>
								<td><?php echo($math_101); ?></td>
							</tr>
							<tr>
								<td>102</td>
								<td><?php echo($math_102); ?></td>
							</tr>
							<tr>
								<td>103</td>
								<td><?php echo($math_103); ?></td>
							</tr>
							<tr>
								<td>104</td>
								<td><?php echo($math_104); ?></td>
							</tr>
							<tr>
								<td>105</td>
								<td><?php echo($math_105); ?></td>
							</tr>
							<tr>
								<td>106</td>
								<td><?php echo($math_106); ?></td>
							</tr>
							<tr>
								<td>107</td>
								<td><?php echo($math_107); ?></td>
							</tr>
							<tr>
								<td>10</td>
								<td><?php echo($math_10); ?></td>
							</tr>
							<tr>
								<td>309</td>
								<td><?php echo($math_309); ?></td>
							</tr>
							<tr>
								<td>110</td>
								<td><?php echo($math_110); ?></td>
							</tr>
							<tr>
								<td>311</td>
								<td><?php echo($math_311); ?></td>
							</tr>
							<tr>
								<td>112</td>
								<td><?php echo($math_112); ?></td>
							</tr>
						</table>

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
