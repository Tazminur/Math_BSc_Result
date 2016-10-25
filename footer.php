
	</div>
	<!-- FOOTER -->
		<div class="row">
			<div class="col-md-12 footer">
				<small><p class="text-right">Copyright&copy; By: <a target="_blank" href="http://tazminur.me">Tazminur</a> & <a href="#">Saqib</a> </p></small>
			</div>
		</div>
	</div>
<script src="js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$(document).on('click','.signup-tab',function(e){
		e.preventDefault();
	    $('#signup-taba').tab('show');
	});	
	
	$(document).on('click','.signin-tab',function(e){
	   	e.preventDefault();
	    $('#signin-taba').tab('show');
	});
});	
</script>

</body>
</html>