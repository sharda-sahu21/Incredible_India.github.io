

<?php
if (isset($_GET['id'])) {
    $delete_about = $_GET['id'];
    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "DELETE FROM about WHERE a_id = '$delete_about'";

    $result = mysqli_query($connect, $query);

    if ($result) {
        // echo "Data successfully deleted.";
    		echo "<script>alert('Data deleted successfully')</script>";
        echo "<script>window.open('show_about.php','_self')</script>";



    } else {
        echo "Error deleting data: " . mysqli_error($connect);
    }
}
?>

