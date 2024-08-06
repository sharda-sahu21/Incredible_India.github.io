
		<?php include 'header.php';?>


			<main class="content">
				<div class="container-fluid p-0">

					 <?php if(isset($_REQUEST['success'])){ ?>
			          <p class="text-success"> </p>
			         <?php } ?>

						<h1 style="font-family:  sans-serif;">Upload the Video</h1> 

						 <div class="row">

							<div class="col-12">
							

					        <form action="addvideo_db.php" method="post" enctype="multipart/form-data" onsubmit="return ValidateForm()">
								<div class="form-group">
								<label for="file"><h4>Select a video file to upload:</h4></label><br><br>
								<input type="file" class="form-control-file" id="myVideo" name="file"><br><br>
								<input type="submit" value="Upload" class="btn btn-success btn-lg"> 
								<input type="Reset" value="Reset" class="btn btn-danger btn-lg"> 
								</div>
							</form>


					    </div>
				   </div> 
 				</div> 
			</main>

		<?php include 'footer.php';?>

	<script src="js/app.js"></script>

	<!-- Button Validation -->

	<script type="text/javascript">
    function ValidateForm(){
      var myVideo = document.getElementById("myVideo");
      
      if (myVideo.value === "") {
        alert("Please fill the input field ");
        return false;
      }else{
        return confirm("do you want to submit this form");
      }
    }
    
  </script>



