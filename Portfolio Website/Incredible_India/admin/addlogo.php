
	
		<?php include 'header.php';?>



			<main class="content">
				<div class="container-fluid p-0">

					<?php if(isset($_REQUEST['success'])){ ?>
			          <p class="text-success">Successfull </p>
			         <?php } ?>

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle"> Insert Logo</h1>
						
					</div>

						<div class="row">
							<div class="col-12">
							 	<form action="addlogo_db.php" method="post" onsubmit="return ValidateForm()"  enctype="multipart/form-data">
								    <div class="form-group">
								  	
									    <label for="file"><h4>Select a logo to upload:</h4></label><br><br>
									    <input type="file"  id="mylogo" name="file"><br><br>
									    <input type="submit" value="Upload" class="btn btn-success btn-lg"> 
									    <input type="Reset" value="Reset" class="btn btn-danger btn-lg"> 
								    
               					    </div>
								</form>
							</div>
						</div>
				</div>		
			</main>

		<?php include 'footer.php';?>

		</div>
	</div>


<!-- Add validation to buttons -->
	<script type="text/javascript">
		function ValidateForm(){
			var mylogo = document.getElementById("mylogo");
			
			if (mylogo.value === "" ) {
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