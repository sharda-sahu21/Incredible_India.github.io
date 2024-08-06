<?php
if (isset($_GET['id'])) {
    $edit_vid = $_GET['id'];

    $connect = mysqli_connect("localhost", "root", "", "portfolio");
    $query = "SELECT * FROM addvideo WHERE v_id='$edit_vid' LIMIT 1";
    $result = mysqli_query($connect, $query);
    $vid = mysqli_fetch_assoc($result);

    if ($vid) {
        $v_id = $vid['v_id'];
        $vidfile = $vid['videofile'];
    } else {
        die("Video not found.");
    }
}

// --------dbconnectivty----------------


if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    if (isset($_FILES['file'])) 
    {
        $name = $_FILES['file']['name'];
        $type = $_FILES['file']['type'];
        $size = $_FILES['file']['size'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];

        if ($error === UPLOAD_ERR_OK) 
        {
            // Check file size
            if ($size < 80000000) {
                $location = "videofile/" . basename($name);
                if (move_uploaded_file($tmp_name, $location)) {
                    $query = "UPDATE addvideo SET videofile='$location' WHERE v_id='$v_id'";
                    $result = mysqli_query($connect, $query);
                    if ($result) {
                        echo "<script>alert('Video file has been edited successfully.')</script>";
                        echo "<script>window.open('show_video.php', '_self')</script>";
                    } else {
                        echo "Failed to update video file.";
                    }
                } else {
                    echo "Failed to move uploaded file.";
                }
            } else {
                echo "File size exceeds limit.";
            }
        } else {
            echo "Upload error: " . $error;
        }
    } else {
        echo "No file uploaded.";
    }
}
?>

<?php include 'header.php'; ?>

<main class="content">
    <div class="container-fluid p-0">
        <h1 style="font-family: sans-serif;">Editing the Video</h1>
        <div class="row">
            <div class="col-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file"><h4>Select a video file to edit:</h4></label><br><br>
                        <input type="file" class="form-control-file" id="myVideo" name="file"><br><br>
                        <input type="submit" value="Edit File" class="btn btn-info btn-lg">
                        <input type="reset" value="Reset" class="btn btn-danger btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<script src="js/app.js"></script>
