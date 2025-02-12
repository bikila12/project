<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "gcvs_db_success");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the student ID from the query string
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    // Fetch the image data from the database
    $sql = "SELECT Photo, Photo_type FROM student WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($photo, $photoType);
        $stmt->fetch();

        // Set the content type and output the image
        header("Content-Type: $photoType");
        echo $photo;
    } else {
        echo "No image found.";
    }

    $stmt->close();
}

$conn->close();
?>
