
	
			<?php include 'header.php';?>



			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">FORM SECTION</h1>
						
					</div>


					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Insert More Input Fields</h3>
							
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12 col-md-6">
									<form action="addform_db.php" method="post" onsubmit="return ValidateForm()">
									  	<div class="form-group">
											<label ><h5>Name</h5></label>
												<input type="text" name="f_name" id="text1" class="form-control" placeholder="Enter Field's name"><br>
											<label ><h5>Placeholder</h5></label>
												<input type="text" name="p_holder" id="text2" class="form-control" placeholder="Enter placeholder"><br>
											<label ><h5>Type</h5></label>
												<input type="text" name="f_type" class="form-control" placeholder="autofilled" disabled><br><br>

											<input type="submit" value="Upload"class="btn btn-success "> 
											<input type="Reset" value="Reset" class="btn btn-danger "> 
									    
	               						</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<?php include 'footer.php'?>
		</div>
	</div>

	<!-- Add validation to the button -->

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



	<script src="js/app.js"></script>

</body>

</html>