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
    <title>Administrator Page</title>
</head>
<body id="container">
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
<h3>Verified Employee Information</h3>
<form action="adminUpdatepro.php" method="post">
<table border="1"><tr><td>
<tr bgcolor="#85A157">
    <th>ID</th>
    <th>Verification</th>
    <th>Delete</th>
</tr>

<?php
// Establish a connection to the database using mysqli
$con = new mysqli("localhost", "root", "", "gcvs_db_success");

// Check if connection was successful
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Query to select all records from the 'info_verification' table
$q = "SELECT * FROM info_verification";
$r = $con->query($q);

// Check if query was successful
if ($r) {
    while ($row = $r->fetch_assoc()) {
        $Id = $row['ID'];
        $fn = $row['Verification'];
?>
<tr bgcolor="#BADFE8">
    <td><strong><?php echo $Id; ?></strong></td>
    <td><strong><?php echo $fn; ?></strong></td>
    <td><strong><a href="admindeleteverifiyreqpro.php?ID=<?php echo $Id; ?>" onclick="return confirm('Are you sure you want to delete this verified data?')">
        <img src="iterfaceimage/delete-icon.jpg" width="30" height="30"/>
    </a></strong></td>
</tr>
<?php
    }
} else {
    echo "Error: " . $con->error;
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
