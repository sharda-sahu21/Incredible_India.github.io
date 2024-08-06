


<?php
if (isset($_GET['id'])) {
    
    $delete_form = $_GET['id'];
    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "DELETE FROM addform WHERE F_id = '$delete_form'";

    $result = mysqli_query($connect, $query);

    if ($result) {
        // echo "Data successfully deleted.";
    		echo "<script>alert('Data successfully deleted')</script>";
            echo "<script>window.open('showform.php','_self')</script>";



    } else {
        echo "Error  " . mysqli_error($connect);
    }
}
?>

