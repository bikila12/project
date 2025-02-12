<html>
<head>
<title>JKU GCVS</title>
</head>
<body>
<?php 
session_start();
$eid = $_GET['ID'];
$rea = $_POST['regA'];

if ($rea == "--select one--") {
    echo '<script type="text/javascript">alert("Please select a verification option."); window.location=\'verifygraduateInfo.php\';</script>';
    exit();
} else {
    // Use mysqli for the database connection
    $con = new mysqli("localhost", "root", "", "gcvs_db_success");

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $con->prepare("INSERT INTO info_verification (ID, Verification) VALUES (?, ?)");
    $stmt->bind_param("ss", $eid, $rea);

    // Execute and check
    if ($stmt->execute()) {
        echo '<script type="text/javascript">alert("Verification added successfully."); window.location=\'verifygraduateInfo.php\';</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $con->close();
}
?>
</body>
</html>
