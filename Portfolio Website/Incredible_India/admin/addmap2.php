
	
		<?php include 'header.php';?>



			<main class="content" >
				<div class="container-fluid p-0">

					<?php if(isset($_REQUEST['success'])){ ?>
			          <p class="text-success">Successfull </p>
			         <?php } ?>

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Change the Location</h1>
					</div>

						<!-- <div class=" form-row"> -->

							<form action="addmap_db2.php" method="post" class="myForm" onsubmit ="return ValidateForm()">
						        <div class="form-row">
						            <div class="col-md-6">
		                    			<label for="place">Place</label>
		                    			<input type="text"  name="place" id="text1" placeholder="Enter the place" class="form-control">
		                			</div>
		                			<div class="col-md-6">
		                    			<label for="link">G-Map Link</label>
		                    			<input type="text"  name="link" id="text2" placeholder="Enter the link" class="form-control">
		                			</div>
 								</div>
						            <br>
						            <!-- <div id="map" style="height: 300px; width: 400px;" class="my-3"></div> -->

						        <div class="col-md-6" >
						             	
							       <input type="submit" value="submit"  class="btn btn-success"  >
							       <input type="reset" value="reset" class="btn btn-danger">
							            
						       	</div>
						    </form>
								
						<!-- </div> -->
					</div>
			</main>

	<?php include 'footer.php';?>



		</div>
	</div>
	<script type="text/javascript">
		function ValidateForm(){
			var text1 = document.getElementById("text1");
			var text2 = document.getElementById("text2");
			if (text1.value === "" || text2.value ==="") {
				alert("Please fill the input field ");
				return false;
			}else{
				return confirm("do you want to submit this form");
			}
		}
		
	</script>

	<!-- <script >
		
		function getLocation(){
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition, showError);

			}
		}

		function showPosition(position){
		   document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
		   document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
		}
		function showError(error){
			switch(error.code){
			case error.PERMISSION_DENIED:
			alert("plz enter the data into the form");
			location.reload();
			break;
			}

		}

	</script> -->


	<script src="js/app.js"></script>




</body>

</html>




<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.745621905485!2d81.64642247526245!3d21.24193348046125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd106713a141%3A0xacfe4c9e888711a6!2sProgrammics%20Technology!5e0!3m2!1sen!2sin!4v1722598653859!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->