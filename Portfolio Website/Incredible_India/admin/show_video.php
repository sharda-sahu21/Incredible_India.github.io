
		<?php include 'header.php';?>


	<main class="content">
				
		<div class="row">
			<h1 style="font-family: serif;"><center>VIDEO LIST</center></h1>

		</div>


			<?php if(isset($_REQUEST['success'])) { ?>
				<p class="text-success">Successful</p>
			<?php } ?>


					<!-- <div class="col-xl-6 col-xxl-7"> -->
										
				<div class="container"  >	

					<div class="col-lg-10 col-md-5" style="margin: 0 auto;" >

						<?php
							$connect = mysqli_connect("localhost", "root", "", "portfolio");
							$query = "select * from addvideo ORDER BY v_id DESC ";
							$result = mysqli_query($connect, $query);
						    while ($vid = mysqli_fetch_assoc($result)) {

						?>
			 			<div class="card" >
			 				<div class="card-header">
								<h3 class="card-title "> Recently Added Video</h3>
							</div>
								
							<div class="card-body ">		 
								<video src="<?php echo $vid['videofile']; ?>" class="card-img-top" controls >
								</video>

							</div>

							<div class="card-footer ">
								<center>
								<a href="edit_vid.php?id=<?php echo $vid['v_id']; ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>

								<a href="delete_vid.php?id=<?php echo $vid['v_id']; ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
								</center>

								<div class="clearfix"></div>
							</div>
						</div>  
					

							<?php }
								mysqli_close($connect);
							?>
					</div>	
				</div>
		<!-- </div> -->
	</main>
						

						<?php include 'footer.php';?>



		

	<script src="js/app.js"></script>



