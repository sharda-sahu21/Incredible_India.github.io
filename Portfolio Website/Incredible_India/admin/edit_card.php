<?php
if (isset($_GET['id'])) {
    $edit_card = $_GET['id'];

    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "SELECT * FROM addcard WHERE c_id='$edit_card' LIMIT 1";

    $result = mysqli_query($connect, $query);
    $img = mysqli_fetch_assoc($result);
        $c_id = $img['c_id'];
        // $imgfile = $img['imgfile'];
    }

?>

<!-- --------------------db connectivity----------------------- -->


<?php
if (isset($_POST['submit'])) {
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    if ($size < 80000000) {
         $location = "cardfile/" . basename($name);
        if (move_uploaded_file($tmp_name, "cardfile/" . $name)){
           
        

        $connect = mysqli_connect("localhost", "root", "", "portfolio");
        $query = "UPDATE addcard SET imgfile = '$location' WHERE c_id = '$c_id'";
        $result = mysqli_query($connect, $query);

        if ($result) {
            echo "<script>alert('Image edited and database updated successfully.')</script>";
            echo"<script>window.open('show_card.php','_self')</script>";
        } else {
            echo "Error updating database.";
        }
    }else {
            echo "Failed to move uploaded file.";
        } 
  }else {
        echo "File size exceeds limit.";
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
            <h1 class="h3 d-inline align-middle">Edit the Images</h1>
        </div>

        <div class="row">
            <div class="col-12 ">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file"><h4>Select an image file to edit:</h4></label><br><br>
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
