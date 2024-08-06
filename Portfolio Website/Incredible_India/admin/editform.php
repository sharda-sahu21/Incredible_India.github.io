<?php

include 'header.php';

if(isset($_GET['id'])) {
    $edit_form = $_GET['id'];

    
    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "SELECT * FROM addform WHERE F_id = $edit_form";
    $result = mysqli_query($connect, $query);

  
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $f_id = $row['F_id'];
        $fname = $row['F_name'];
        $type = $row['Type'];
        $p_holder = $row['P_holder'];
       
    } else {
        echo "Record not found.";
        exit;
    }
} else {
    echo "F_id parameter is missing.";
    exit;
}
//data submission

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $fname = $_POST['f_name'];
    $p_holder = $_POST['p_holder'];
    $type = $_POST['f_type'];
    
    $update_query = "UPDATE addform SET F_name='$fname', Type='$type', P_holder='$p_holder' WHERE F_id=$f_id";
    $update_result = mysqli_query($connect, $update_query);

    if ($update_result) {
       
        echo "<script>alert('Input field is edited successfully.')</script>";
        echo"<script>window.open('showform.php','_self')</script>";
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
}

?>


    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">FORM SECTION</h1>
            </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Insert More Input Fields</h3>
                            
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-lg-12 col-md-6">
                            
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label ><h5>Name</h5></label>
                                    <input type="text" name="f_name" class="form-control" placeholder="Enter Field's name" value="<?php echo $fname; ?>"><br>
                                <label ><h5>Placeholder</h5></label>
                                    <input type="text" name="p_holder" class="form-control" placeholder="Enter placeholder" value="<?php echo $p_holder; ?>"><br>
                                <label ><h5>Type</h5></label>
                                    <input type="text" name="f_type" class="form-control" placeholder="Enter type of a field" value="<?php echo $type; ?>"><br><br>

                                    <button type="submit" class="btn btn-info">Edit</button>
                                    <button type="Reset" class="btn btn-danger">Reset</button>
                                        
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </main>

        
<script src="js/app.js"></script>


<?php

mysqli_close($connect);
?>
