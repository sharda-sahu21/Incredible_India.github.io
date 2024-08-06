

<?php
if (isset($_GET['id'])) {
    $delete_vid = $_GET['id'];
    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "DELETE FROM addvideo WHERE v_id = '$delete_vid'";

    $result = mysqli_query($connect, $query);

    if ($result) {
        // echo "Data successfully deleted.";
    		echo "<script>alert('videofile deleted successfully')</script>";
            echo "<script>window.open('show_video.php','_self')</script>";



    } else {
        echo "Error  " . mysqli_error($connect);
    }
}
?>

