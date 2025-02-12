<html>
<head>
<title>Delete Approved Request</title>
</head>
<body>
<?php
$Id = $_GET['ID']; // Get the ID from the URL

// Establish a MySQL connection
$con = mysqli_connect("localhost", "root", "", "gcvs_db_success");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and execute the delete queries using prepared statements to prevent SQL injection

// Delete from request_approval
$sql = "DELETE FROM request_approval WHERE Employe_ID = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "s", $Id);  // 's' indicates that the parameter is a string
mysqli_stmt_execute($stmt);

// Delete from company
$sql3 = "DELETE FROM company WHERE ID = ?";
$stmt3 = mysqli_prepare($con, $sql3);
mysqli_stmt_bind_param($stmt3, "s", $Id);
mysqli_stmt_execute($stmt3);

// Delete from employe
$sql4 = "DELETE FROM employe WHERE ID = ?";
$stmt4 = mysqli_prepare($con, $sql4);
mysqli_stmt_bind_param($stmt4, "s", $Id);
mysqli_stmt_execute($stmt4);

// Close the connection
mysqli_close($con);

// Show success message and redirect
echo '<script type="text/javascript">alert("Request approval Deleted Successfully");window.location=\'admindeleteapprovedreq.php\';</script>';
?>
</body>
</html>
