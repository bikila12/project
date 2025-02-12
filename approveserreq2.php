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
    <title>Registrar page</title>
</head>
<body id="contianer">
<div id="bod">
<?php
    include "registerarheader.php";
?>
    <div id="left">
<?php
    include "registerarLeft.php";
?>
    </div>

<div id="spacee">
<div id="aform">
<?php
// Corrected database connection using mysqli
$con = mysqli_connect("localhost", "root", "", "gcvs_db_success") or die(mysqli_error($con));

// Query to fetch data from the company table
$q = "SELECT * FROM company";
$r = mysqli_query($con, $q);

// Fetch all request_approval data once
$yu_query = "SELECT * FROM request_approval";
$ss = mysqli_query($con, $yu_query);
$approved_employees = [];
while ($roww = mysqli_fetch_array($ss)) {
    $approved_employees[] = $roww['Employe_ID'];
}
?>

<h3>Approve Service Request Form:</h3>
<form action="AproveServiceRequest.php" method="post">
<table cellspacing="20" cellpadding="10">
<tr>
    <td><b><h2>Company Email:</b></h2></td>
    <td>
        <select name="cem" id="span9001">
            <?php
            if (mysqli_num_rows($r) == 0) {
                echo "No companies found.";
            } else {
                while ($ro = mysqli_fetch_array($r)) {
                    // Check if the company is not in the approved list
                    if (!in_array($ro['ID'], $approved_employees)) {
                        echo "<option>".$ro['Company_Email']."</option>";
                    }
                }
            }
            ?>
        </select>
    </td>
</tr>
</table>
<button class="btn btn-primary" name="search">Search</button>
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
