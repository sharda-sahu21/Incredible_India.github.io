
	<?php include 'header.php';?>


		<main class="content">
			<div class="container">
				<?php if(isset($_REQUEST['success'])){ ?>
			        <p class="text-success">Successfull </p>
			    <?php } ?>

					<div class="row col-12">
						<h1 style="font-family: serif;"><center>Gallary Section</center></h1>
					</div><br><br>
					<div class="row">	
					    
							<?php

									$connect = mysqli_connect("localhost","root","","portfolio");
									$query = "select * from addcard ORDER BY c_id DESC";
									$result = mysqli_query($connect,$query);
									while ($img=mysqli_fetch_array($result)) {
							?>
							<div class="col-12 col-md-6 ">
							
							<div class="card">
								<div class="card-header">
									<h5>Recently Inserted Images</h5>
								</div>
								<div class="card-body">
							        <img src="<?php echo $img['imgfile']; ?>" class="card-img-top">
							  
							    </div>
							    <div class="card-footer">

							  		<center>
									<a href="edit_card.php?id=<?php echo $img['c_id']; ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>

									<a href="delete_card.php?id=<?php echo $img['c_id']; ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
									</center>
									<!-- <div class="clearfix"></div> -->
						  		</div>

							</div>

						</div>

					 		<?php } ?> 			
				  	  
					</div>	
				</div>	  
			
		
	</main>

		<?php include 'footer.php';?>

	<script src="js/app.js"></script>





					

