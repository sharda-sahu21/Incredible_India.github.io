


<?php
if (isset($_GET['id'])) {
    
    $delete_qr = $_GET['id'];
    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "DELETE FROM addqr WHERE q_id = '$delete_qr'";

    $result = mysqli_query($connect, $query);

    if ($result) {
        // echo "Data successfully deleted.";
    		echo "<script>alert('QRfile deleted successfully')</script>";
            echo "<script>window.open('showQR.php','_self')</script>";



    } else {
        echo "Error  " . mysqli_error($connect);
    }
}
?>

