<?php
// display_map.php

// Check if latitude and longitude are submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        // Assuming you also want to store place and email from the form
        $place = $_POST['place'];
        $email = $_POST['email'];

        // Validate and sanitize data as needed before storing in database

        // Database configuration (replace with your actual database credentials)
        $servername = "localhost";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO locations (latitude, longitude, place, email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ddss", $latitude, $longitude, $place, $email);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Location data inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();

    } else {
        // Handle if latitude or longitude is not set
        die("Latitude or Longitude is missing.");
    }
} else {
    // Redirect back to form if accessed directly without POST
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Google Map</title>
    <style>
        /* Basic styling for map container */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Location on Map</h1>
    <!-- Display Google Map -->
    <div id="map"></div>

    <script>
        function initMap() {
            // Create a map centered at the specified latitude and longitude
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?> },
                zoom: 15,  // Adjust the zoom level as needed
            });

            // Add a marker at the specified location
            const marker = new google.maps.Marker({
                position: { lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?> },
                map: map,
                title: 'Your Location'
            });
        }
    </script>
    <!-- Load the Google Maps API with callback to initMap -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</body>
</html>
