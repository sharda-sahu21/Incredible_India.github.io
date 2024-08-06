<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['place']) && isset($_POST['link'])) {
        
        $connect = mysqli_connect("localhost", "root", "", "portfolio");
        $place = mysqli_real_escape_string($connect, $_POST['place']);
        $link = mysqli_real_escape_string($connect, $_POST['link']);
       

       
        $query = "INSERT INTO addmap2 (place, link) VALUES ('$place', '$link')";
        $result = mysqli_query($connect, $query);

        if ($result) {

            // echo "success";
            echo "<script>alert('Data inserted successfully');</script>";
            echo"<script>window.open('show_map2.php','_self')</script>";

        } else {
            echo "<script>alert('Error: " . mysqli_error($connect) ."');</script>";
        }

      
        mysqli_close($connect);
    } else {
        die("Place,link is missing.");
    }
} else {
    echo "<script>alert('Error: Invalid request method');</script>";
}

?>
