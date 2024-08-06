


<?php
if (isset($_GET['id'])) {
    
    $delete_logo = $_GET['id'];
    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "DELETE FROM addlogo WHERE l_id = '$delete_logo'";

    $result = mysqli_query($connect, $query);

    if ($result) {
        // echo "Data successfully deleted.";
    		echo "<script>alert('logo deleted successfully')</script>";
            echo "<script>window.open('show_logo.php','_self')</script>";



    } else {
        echo "Error  " . mysqli_error($connect);
    }
}
?>

