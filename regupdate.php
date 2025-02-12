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
    <title>
        Registerar page
    </title>
</head>
<body id="contianer">
<div id="bod">
<?php
    include "registerarheader.php";
    ?>
<div id="leftsh">
<?php
    include "registerarLeft.php";
    ?>
<div id="spaceesh">
<div id="aformsh">
<h3>Display Graduate Information Form:</h3>
<form action="regupdatepro.php" method="post">
<table border="1">
<tr bgcolor="#85A157">
    <th>ID:</th>
    <th>F_Name</th>
    <th>M_Name</th>
    <th>L_Name</th>
    <th>Gpa</th>
    <th>Year</th>
    <th>Qualification</th>
    <th>Gender</th>
    <th>Dept</th>
    <th>Photo</th>
    <th>Edit</th>
    <th>Delete</th>
    <th>Print</th>
</tr>
<?php
// Database connection
$con = new mysqli("localhost", "root", "", "gcvs_db_success");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$q = "SELECT * FROM student";
$r = $con->query($q);

if ($r->num_rows > 0) {
    while ($row = $r->fetch_assoc()) {
        $Id = $row['ID'];
        $fn = $row['Frist_Name'];
        $mn = $row['Midle_Name'];
        $ln = $row['Last_Name'];
        $cg = $row['Cumulative_Gpa'];
        $yog = $row['Year_of_Graduation'];
        $q = $row['Qualification'];
        $g = $row['Gender'];
        $d = $row['Department'];
        $p = $row['Photo'];
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
            <td><strong><?php echo $d; ?></strong></td>
            <td><strong><img src="imagepro.php?ID=<?php echo $row['ID']; ?>" width="50" height="50"></strong></td>
            <td><strong><a href="regupdatepro.php?ID=<?php echo $Id; ?>">Edit</a></strong></td>
            <td><strong><a href="redeletestudent.php?ID=<?php echo $Id; ?>">Delete</a></strong></td>
            <td><img src="image/printer.jpg" width="50" height="50" onClick="javascript:window.print();"></td>
        </tr>
        <?php
    }
} else {
    echo "<tr><td colspan='13'>No records found</td></tr>";
}
$con->close();
?>
</table>
<h2 align="right"><a href="export-csv/export.php">DOWNLOAD</a></h2>
<h1 align="center">There are <?php
$con = new mysqli("localhost", "root", "", "gcvs_db_success");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$result = $con->query("SELECT * FROM student");
$numberOfRows = $result->num_rows;
if ($numberOfRows > 0) {
    echo '<font size="6" color="#FF0000" bgcolor="#003366">' . $numberOfRows . '</font>';
} else {
    echo " ";
}
$con->close();
?> Graduated Students!</h1>
</div>
</form>
</div>
</div>
<?php
    include "yfoot.php";
    ?>
</div>
</body>
</html>
<?php
}
?>
