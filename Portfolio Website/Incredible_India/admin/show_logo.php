
	<?php include 'header.php';?>


		<main class="content">
			<div class="container">
				<?php if(isset($_REQUEST['success'])){ ?>
			        <p class="text-success">Successfull </p>
			    <?php } ?>

					<div class="row col-12">
						<h1 style="font-family: serif;"><center>LOGO Section</center></h1>
					</div><br><br>
					<div class="row">	
					    
							<?php

									$connect = mysqli_connect("localhost","root","","portfolio");
									$query = "select * from addlogo ORDER BY l_id DESC";
									$result = mysqli_query($connect,$query);
									while ($log=mysqli_fetch_array($result)) {
							?>
							<div class="col-12 col-md-4">
							
							<div class="card">
								<div class="card-header">
									<h5>Recently Inserted Logo</h5>
								</div>
								<div class="card-body">
							        <img src="<?php echo $log['logo']; ?>" class="card-img-top">
							  
							    </div>
							    <div class="card-footer">

							  		<center>
									<a href="edit_logo.php?id=<?php echo $log['l_id']; ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>

									<a href="delete_logo.php?id=<?php echo $log['l_id']; ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
									</center>
									
						  		</div>

							</div>

						</div>

					 		<?php } ?> 			
				  	  
					</div>	
				</div>	  
			
		
	</main>

		<?php include 'footer.php';?>

	<script src="js/app.js"></script>





					

