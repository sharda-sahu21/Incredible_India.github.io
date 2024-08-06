
		

<?php

if (isset($_GET['id'])) {
	$edit_about=$_GET['id'];

	$connect=mysqli_connect("localhost","root","","portfolio");
	$query="select * from about where a_id='$edit_about' limit 1";

	$result=mysqli_query($connect,$query);
	$key=mysqli_fetch_assoc($result);
	$a_id = $key['a_id'];
	
	$title = $key['Title'];

	$descr = $key['Descr'];
}

?>


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
							
							<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label ><h4>Title </h4></label><br><br>
										<input type="text" name="title" class="form-control" value="<?= isset($title) ? $title : ''; ?>"><br><br>
										    
									<label ><h4>Description </h4></label>
										      
										<textarea type="text"  name="descr" class="form-control"> <?= isset($descr) ? $descr : ''; ?></textarea><br><br>
										    

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

	<script src="js/app.js"></script>

</body>

</html>

<?php
    if (isset($_POST['title'])) {
            $title=$_POST['title'];
            $descr=$_POST['descr'];
          
            
            $connect=mysqli_connect("localhost","root","","portfolio");
           
             $query="update about set Title = '$title',Descr ='$descr' where a_id ='$a_id'";
           
            $result=mysqli_query($connect,$query);
            // mysqli_query($connect,$query);

                    // if (mysqli_affected_rows($connect)>0)
                          
                          if ($result) 
                          {
                            echo "<script>alert('informatin updated successfully')</script>";
                            echo "<script>window.open('show_about.php','_self')</script>";

                            // echo "success";
                          } 
                          else 
                          {
                            echo "Error: " . mysqli_error($connect);

                          }
                        
         }
?>








