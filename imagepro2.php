<?php
// imagepro2.php
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    $con = mysqli_connect("localhost", "root", "", "gcvs_db_success");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT Photo, Photo_type FROM employe WHERE ID = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $photo, $photo_type);

    if (mysqli_stmt_fetch($stmt)) {
        header("Content-Type: $photo_type");
        echo $photo;
    } else {
        header("Content-Type: image/png");
        // Fallback image if no photo is found
        echo file_get_contents("path_to_default_image.png");
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    header("Content-Type: image/png");
    // Fallback image if ID is not provided
    echo file_get_contents("path_to_default_image.png");
}
?>
