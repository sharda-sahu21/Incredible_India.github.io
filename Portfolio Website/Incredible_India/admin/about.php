
		<?php include 'header.php';?>

		
			<main class="content">
				<div class="container-fluid p-0">

					<?php if(isset($_REQUEST['success'])){ ?>
			          <p class="text-success">Successfull </p>
			         <?php } ?>

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Edit About Section	</h1>
						
					</div>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">About Section</h3>
							
						</div>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
							
							<form action="about_db.php" method="post" onsubmit="return ValidateForm()">
								<div class="form-group">
									<label ><h4>Title </h4></label>
										<input type="text" name="title" id="text1" class="form-control"><br>

									<label ><h4>Description </h4></label>
										<textarea type="text" name="descr" id="text2" class="form-control"></textarea><br>
										    
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

			

			<?php include'footer.php'?>
		</div>
	</div>


	<!-- Add validstion to the button -->

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