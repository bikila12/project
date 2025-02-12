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
<h3>User of The System:</h3>
<form action="adminrespdelproc.php" method="post">
<table border="1">
    <tr bgcolor="#85A157">
        <th>User_Type</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Edit</th>
    </tr>

<?php
// Establish connection to the database using mysqli
$con = new mysqli("localhost", "root", "", "gcvs_db_success");

// Check for connection errors
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Query to fetch all users
$q = "SELECT * FROM user";
$r = $con->query($q);

// Check if the query was successful
if ($r) {
    while ($row = $r->fetch_assoc()) {
        $Id = $row['User_type'];
        $ln = $row['Name'];
        $cg = $row['username'];
        $q = $row['password'];
        $qe = $row['email'];
?>
<tr bgcolor="#BADFE8">
    <td><strong><?php echo $Id; ?></strong></td>
    <td><strong><?php echo $ln; ?></strong></td>
    <td><strong><?php echo $cg; ?></strong></td>
    <td><strong><?php echo $q; ?></strong></td>
    <td><strong><?php echo $qe; ?></strong></td>
    <td><strong>
        <a href="adminupdateuser.php?ID=<?php echo $Id; ?>">
            <img src="iterfaceimage/update-icon.png" width="100" height="35"/>
        </a>
    </strong></td>
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
