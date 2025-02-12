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
<title>Registrar Page</title>
</head>
<body id="contianer">
<div id="bod">
<?php include "adminheader.php"; ?>
<div id="leftsh">
<?php include "adminleft.php"; ?>
<div id="spaceesh">
<div id="aformsh">
<h3>Request Company:</h3>
<form action="adminrespdelproc.php" method="post">
<table border="1"><tr><td>
<tr bgcolor="#85A157"><th>ID:</th><th>Comp_Phone</th><th>Comp_Name</th><th>Comp_Email</th><th>Comp_country</th><th>Comp_City</th><th>Date</th><th>Reason</th><th>Delete</th></tr>

<?php
// Database connection using mysqli
$con = new mysqli("localhost", "root", "", "gcvs_db_success");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// SQL query to fetch data from 'company' table
$q = "SELECT * FROM company";
$r = mysqli_query($con, $q);

// Loop through the results and display them
while ($row = mysqli_fetch_array($r)) {
    $Id = $row['ID'];
    $fn = $row['Company_Phone'];
    $mn = $row['Company_Name'];
    $ln = $row['Company_Email'];
    $cg = $row['Company_country'];
    $yog = $row['Company_City'];
    $q = $row['Date'];
    $g = $row['Reason_of_Verification'];
?>
<tr bgcolor="#BADFE8">
    <td><strong><?php echo $Id; ?></strong></td>
    <td><strong><?php echo $fn; ?></strong></td>
    <td><strong><?php echo $mn; ?></strong></td>
    <td><strong><?php echo $ln; ?></strong></td>
    <td><strong><?php echo $cg; ?></strong></td>
    <td><strong><?php echo $yog; ?></strong></td>
    <td><strong><?php echo $q; ?></strong></td>
    <td><strong><?php echo $g; ?></strong></td>
    <td><strong><a href="admindeletecompanypro.php?ID=<?php echo $Id; ?>" onclick="return confirm('Are you want to permanently delete this data?')"><img src="iterfaceimage/delete-icon.jpg" width="30" height="30"/></a></strong></td>
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
