<html>
<head>
<title>Delete Company</title>
</head>
<body>
<?php
// Get the ID from the URL
$Id = $_GET['ID'];

// Establish a MySQL connection using mysqli
$con = new mysqli("localhost", "root", "", "gcvs_db_success");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Prepare the delete query using a prepared statement
$sql = "DELETE FROM company WHERE ID = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $Id);  // 's' indicates the parameter is a string

// Execute the query
if ($stmt->execute()) {
    echo '<script type="text/javascript">alert("Company Deleted Successfully");window.location=\'admindeletecompany.php\';</script>';
} else {
    echo '<script type="text/javascript">alert("Error deleting company.");window.location=\'admindeletecompany.php\';</script>';
}

// Close the statement and connection
$stmt->close();
$con->close();
?>
</body>
</html>
