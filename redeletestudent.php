<html>
<head>
    <title>Delete Student</title>
</head>
<body>
<?php
$Id = $_GET['ID'];

// Database connection
$con = new mysqli("localhost", "root", "", "gcvs_db_success");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Prepare and execute the delete query
$sql = "DELETE FROM student WHERE ID = ?";
$stmt = $con->prepare($sql);

if (!$stmt) {
    die("SQL Error: " . $con->error);
}

$stmt->bind_param("s", $Id);

if ($stmt->execute()) {
    echo '<script type="text/javascript">
            alert("Student file deleted successfully");
            window.location = "regupdate.php";
          </script>';
} else {
    echo '<script type="text/javascript">
            alert("Error deleting student file: ' . $stmt->error . '");
          </script>';
}

// Close the statement and connection
$stmt->close();
$con->close();
?>
</body>
</html>
