
		<?php include 'header.php';?>


			<main class="content">
				<div class="container-fluid p-0">
					

						 <?php if(isset($_REQUEST['success'])){ ?>
			         		 <p class="text-success">Successfull </p>
			        	 <?php } ?>
							<div class="col-lg-12 col-md-6 col-sm-4">
								<h1 style="font-family: serif;"><strong>QR-Code List</strong></h1><br>
							</div>
						
					<div class="row">
						<!-- <div class="col-lg-12 col-md-6"> -->
							
							<?php
								$connect = mysqli_connect("localhost", "root", "", "portfolio");
								$query = "select * from addqr ORDER BY q_id DESC ";
								$result = mysqli_query($connect, $query);
								while( $qr=mysqli_fetch_assoc($result)){
								          

							 ?>
							<div class =" col-lg-4 col-md-4">
								<div class="card" style="height: 100%;">
									<div class="card-header"><h5>Recently added QR-file</h5></div>
									    <div class="card-body" style="display: flex; justify-content: center; align-items: center; height: 100%;">
									        <div class="myQR" style="height: 100%;">
									            <img src="<?php echo $qr['QRfile']; ?>" class="img-fluid">
									        </div>
									    </div>
									    <div class="card-footer ">
									    	<center>
											<a href="edit_qr.php?id=<?php echo $qr['q_id']; ?>" class="btn btn-info btn-sm active" role="button" aria-pressed="true">Edit</a>

											<a href="delete_qr.php?id=<?php echo $qr['q_id']; ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
											</center>

											<div class="clearfix"></div>
										</div>
								</div>   
							</div>


									<?php }
									 mysqli_close($connect);
									?>
	
								
						<!-- </div> -->

					</div>

			
				</div>

			    
			</main>

		<?php include 'footer.php';?>

	<script src="js/app.js"></script>



