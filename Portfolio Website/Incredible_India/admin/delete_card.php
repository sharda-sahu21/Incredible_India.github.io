

<?php
if (isset($_GET['id'])) {
    $delete_card = $_GET['id'];
    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "DELETE FROM addcard WHERE c_id = '$delete_card'";

    $result = mysqli_query($connect, $query);

    if ($result) {
        // echo "Data successfully deleted.";
    		echo "<script>alert('imgfile deleted successfully')</script>";
            echo "<script>window.open('show_card.php','_self')</script>";



    } else {
        echo "Error  " . mysqli_error($connect);
    }
}
?>

