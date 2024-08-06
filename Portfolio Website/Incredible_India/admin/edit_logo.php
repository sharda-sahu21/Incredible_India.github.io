<?php
if (isset($_GET['id'])) {
    $edit_logo = $_GET['id'];

    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "SELECT * FROM addlogo WHERE l_id='$edit_logo' LIMIT 1";

    $result = mysqli_query($connect, $query);
    $log = mysqli_fetch_assoc($result);

    if ($log) {
    	$l_id = $log['l_id'];
    }else {
        die("No record found for l_id = $edit_logo");
    }
}
?>

<?php include 'header.php'; ?>

<main class="content">
    <div class="container-fluid p-0">

        <?php if (isset($_REQUEST['success'])) { ?>
            <p class="text-success">Successful</p>
        <?php } ?>

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit the logo</h1>
        </div>

        <div class="row">
            <div class="col-12 ">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file"><h4>Select logo to edit:</h4></label><br><br>
                        <input type="file" id="myimg" name="file"><br><br>
                        <button type="submit" name="submit" class="btn btn-info btn-lg">Edit</button>
                        <button type="cancel" name="cancel" class="btn btn-danger btn-lg">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>



<?php include 'footer.php'; ?>

</div>
</div>

<script src="js/app.js"></script>

</body>
</html>

<!-- --------------------db connectivity----------------------- -->


<?php
if (isset($_POST['submit'])) {
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    
        $location = "logofile/" . basename($name);
        if (move_uploaded_file($tmp_name, "logofile/" . $name)){
           
        

        $connect = mysqli_connect("localhost", "root", "", "portfolio");
        $query = "UPDATE addlogo SET logo = '$location' WHERE l_id = '$l_id'";
        $result = mysqli_query($connect, $query);

        if ($result) {
            echo "<script>alert('Logo edited and database updated successfully.')</script>";
            echo"<script>window.open('show_logo.php','_self')</script>";
        } else {
            echo "Error updating database.";
        }
    }else {
            echo "Failed to move uploaded file.";
        } 
  
}
?>

