
	
	<?php include 'header.php';?>

	<main class="content">
		<div class="container-fluid p-0">

			<div class="mb-3">
				<h1 class="h3 d-inline align-middle">FORM SECTION</h1>
			</div>
			
			<div class="row">
				<div class="col-12 ">

					<?php if(isset($_REQUEST['success'])) { ?>
				        <p class="text-success">Successful</p>
				    <?php } ?>

						<div class="card">
							<div class="card-header">
								<h5 class="card-title mb-0">Input</h5>
							</div>
								
							<div class="card-body">

								<form id="contact" action="" method="post">
	                                <div class="row">
		                                <div class="col-md-4">
		                                  
		                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required=""><br>
		                                  
		                                </div>
		                                <div class="col-md-4">
		                                  
		                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required=""><br>
		                                 
		                                </div>

										<?php

										 	$connect=mysqli_connect("localhost","root","","portfolio");
											$query="select * from addform order by F_id asc";
										    $result=mysqli_query($connect,$query);
											while ($key=mysqli_fetch_assoc($result)) {

														         
										?>

										<div class="col-md-4">
				                            <input name="<?php echo $key['F_name']?>" type="<?php echo $key['Type']?>" placeholder="<?php echo $key['P_holder'] ?>" class="form-control edit-data" data-fid="<?php echo $key['F_id']; ?>" required=""><br>
										</div>

										<?php }
											
										?>

										<div class="col-md-12">
			                                 
			                               <input type="text" name="status" placeholder="Your status....." id="status" class="form-control"><br> 
			                            </div>


										<div class="col-md-12">
			                                 
			                                <textarea name="msg" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
			                                 
			                            </div>
		                                
		                            </div>
		                        </form>

							</div>


							<div class="card-footer ">
								<center>

								<a href="editform.php?id=<?php echo $key['F_id']; ?>" class="btn btn-primary btn-lg active" role="button" id = "editBtn" aria-pressed="true">Edit</a>

								<a href="delete_form.php?id=<?php echo $key['F_id']; ?>" class="btn btn-danger btn-lg active" role="button" id="deleteBtn" aria-pressed="true">Delete</a>
								
								<div class="clearfix"></div>
								</center>
							</div>


						</div>
					</div>
				</div>

			</div>
	</main>

			<?php include 'footer.php'?>
		
	<script src="js/app.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script>
  
  $(document).ready(function() {
    var selectedFid = null;

    // Function to handle edit action
    function editField() {
        if (selectedFid !== null) {
            window.location.href = 'editform.php?id=' + selectedFid;
        } else {
            alert('Please select a field to edit.');
        }
    }

    // Function to handle delete action
    function deleteField() {
        if (selectedFid !== null) {
            if (confirm('Are you sure you want to delete this field?')) {
                window.location.href = 'delete_form.php?id=' + selectedFid;
            }
        } else {
            alert('Please select a field to delete.');
        }
    }

    // Handle click event on edit button
    $('#editBtn').click(editField);

    // Handle click event on delete button
    $('#deleteBtn').click(deleteField);

    // Handle click event on input fields
    $(document).on('click', '.edit-data', function() {
        // Remove previous selection styling
        $('.edit-data').removeClass('selected');

        // Add selected styling to the clicked input field
        $(this).addClass('selected');

        // Get the F_id of the selected input field
        selectedFid = $(this).data('fid');
    });
});

</script>




<!-- </body>

</html> -->