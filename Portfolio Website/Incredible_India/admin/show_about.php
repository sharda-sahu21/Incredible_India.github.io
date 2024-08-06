
	
		<?php include 'header.php';?>


			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle"><center>ABOUT SECTION</center></h1>
						
					</div>
					<div class="center">

						<!-- <div class="col-lg-12 " style="position: fixed;"> -->

						<?php if(isset($_REQUEST['success'])) { ?>
				            <p class="text-success">Successful</p>
				        <?php } ?>


								
						<?php

							 $connect=mysqli_connect("localhost","root","","portfolio");
							 $query="select * from about order by a_id desc";
							 $result=mysqli_query($connect,$query);
							 while ($key=mysqli_fetch_assoc($result)) {

										         
						?>			


								<div class="card text-center" style="margin: 0 auto;" onclick="validate">

									<div class="card-header">
										<h4 class="card-title"><?php echo $key['Title']; ?></h4>
											
									</div>		
									<div class="card-body">
										<p class="text-primary"><?php echo $key['Descr']; ?></p>
									</div>
									<div class="card-footer ">

										<a href="edit_about.php?id=<?php echo $key['a_id']; ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>

										<a href="delete_about.php?id=<?php echo $key['a_id']; ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>

									    <div class="clearfix"></div>
									</div>

								</div><br>
										 
							<?php}
									mysqli_close($connect)
							?> 	  
					</div>

				</div>

			</main>

			<?php include 'footer.php';?>

				<script src="js/app.js"></script>

				<script type="text/javascript">
					function ValidateForm(){
						var text1 = document.getElementById("text1");
						
						if (text1.value === "" ) {
							alert("Please fill the input field ");
							return false;
						}else{
							return confirm("do you want to submit this form");
						}
					}
			
				</script>









