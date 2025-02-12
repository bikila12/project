<html>
<head>
<title>Delete Employe</title>
</head>
<body>
<?php
$Id = $_GET['ID']; // Get the ID from the URL

// Establish a MySQL connection using mysqli
$con = mysqli_connect("localhost", "root", "", "gcvs_db_success");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and execute the delete query using prepared statements to prevent SQL injection
$sql = "DELETE FROM employe WHERE ID = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "s", $Id);  // 's' indicates that the parameter is a string
mysqli_stmt_execute($stmt);

// Close the connection
mysqli_close($con);

// Show success message and redirect
echo '<script type="text/javascript">alert("Employee Deleted Successfully");window.location=\'admindisplayemploye.php\';</script>';
?>
</body>
</html>
