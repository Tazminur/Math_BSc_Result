
<?php include 'header.php'; ?>
<?php include 'side_bar.php'; ?>
<form action="pre_details.php" method="post">
 	<fieldset>
 		<legend>Search Your Result</legend>
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
		    <div class="col-sm-6">
			 	<div class="input-group">
				    <span class="input-group-addon" id="sizing-addon2">Input Roll</span>
			   	    <input type="text" name="roll" value="" maxlength="8"  class="form-control" aria-describedby="sizing-addon2" required>
					</div>
			</div>
			<div class="row">
			 	<div class="col-sm-2 col-sm-offset-10 ">
			 		<button type="submit" name="search" class="btn btn-info">Search</button>
			 	</div>
	        </div>
	    </div>
 	</fieldset>
</form>

 <!-- FOOTER -->
<?php include 'footer.php';?>