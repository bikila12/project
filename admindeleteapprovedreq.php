<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("location:bayisa.php");
} else {
?>

<html>
<head>
<link href="good.css" rel="stylesheet" type="text/css" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<title>Admin Page</title>
</head>
<body id="contianer">
<div id="bod">
<?php
include "adminheader.php";
?>
<div id="leftsh">
<?php
include "adminleft.php";
?>
<div id="spaceesh">
<div id="aformsh">
<h3>Approved Request:</h3>
<form action="adminrespdelproc.php" method="post">
<table border="1"><tr><td>
<tr bgcolor="#85A157">
<th>Employe_ID</th>
<th>Registerar_Remark</th>
<th>Approval</th>
<th>Delete</th>
</tr>

<?php
// Establish database connection using mysqli
$con = new mysqli("localhost", "root", "", "gcvs_db_success");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// SQL query to fetch data from 'request_approval' table
$q = "SELECT * FROM request_approval";
$r = mysqli_query($con, $q);

// Fetching and displaying the data
while ($row = mysqli_fetch_array($r)) {
    $Id = $row['Employe_ID'];
    $cg = $row['Registerar_Remark'];
    $q = $row['Approval'];
?>
<tr bgcolor="#BADFE8">
    <td><strong><?php echo $Id; ?></strong></td>
    <td><strong><?php echo $cg; ?></strong></td>
    <td><strong><?php echo $q; ?></strong></td>
    <td><strong><a href="admindeleteapprovedreqpro.php?ID=<?php echo $Id; ?>" onclick="return confirm('Are you sure you want to delete this data?')"><img src="iterfaceimage/delete-icon.jpg" width="30" height="30"/></a></strong></td>
</tr>
<?php
}
?>
</table>
</div>
</form>
</div>
</div>

<?php include "yfoot.php"; ?>
</div>

</body>
</html>

<?php
}
?>
